<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Profile;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Enums\MaxWidth;
use Livewire\Component;
use Modules\Blog\Models\Profile;
use Modules\Xot\Actions\GetViewAction;
use Webmozart\Assert\Assert;

class Setting extends Component implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;

    public string $tpl = 'setting';
    public string $version = 'v1';
    public Profile $model;
    public array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public function mount(Profile $model, string $tpl = 'v1'): void
    {
        $this->model = $model;

        $this->tpl = $tpl;
        // dddx($this->model->toArray());

        $this->data['name'] = $this->model->user_name;

        $this->form->fill($this->data);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->version);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function editProfile()
    {
        $this->mountAction('edit');
    }

    public function editPassword()
    {
        $this->mountAction('editPassword');
    }

    public function editEmail()
    {
        $this->mountAction('editEmail');
    }

    public function editEmailAction()
    {
        return Action::make('editEmail')
            ->record($this->model)
            ->fillForm(fn ($record, $arguments): array => [
                'email' => $this->model->user->email,
            ])
            ->form([
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(ignoreRecord: true),
            ])
            ->modalHeading('Change email')
            ->modalCloseButton(false)
            ->modalWidth(MaxWidth::Small)
            ->modalSubmitActionLabel('Update email')
            ->modalCancelActionLabel('Cancel')
            ->action(function (array $data) {
                $verified = $this->model->email == $data['email'] ? $this->model->email_verified_at : null;

                $this->model->update([
                    'email' => $data['email'],
                ]);

                Assert::notNull($this->model->user);
                $this->model->user->update([
                    'email' => $data['email'],
                    'email_verified_at' => $verified,
                ]);

                // NOT IMPLEMENTED: Send verification email
            });
    }

    public function editPasswordAction()
    {
        return Action::make('editPassword')
            ->record($this->model)
            ->form([
                TextInput::make('old_password')
                    ->required()
                    ->password()
                    ->currentPassword(),
                TextInput::make('password')
                    ->required()
                    ->password()
                    ->rules(['confirmed']),
                TextInput::make('password_confirmation')
                    ->required()
                    ->password(),
            ])
            ->modalHeading('Change password')
            ->modalCloseButton(false)
            ->modalWidth(MaxWidth::Small)
            ->modalSubmitActionLabel('Update password')
            ->modalCancelActionLabel('Cancel')
            ->action(function (array $data) {
                Assert::notNull($this->model->user);
                $this->model->user->update([
                    'password' => bcrypt($data['password']),
                ]);
            });
    }

    public function editAction(): Action
    {
        return Action::make('edit')
            ->record($this->model)
            ->fillForm(fn ($record, $arguments): array => [
                'user_name' => $this->model->user_name,
                'first_name' => $this->model->first_name,
                'last_name' => $this->model->last_name,
            ])
            ->form([
                SpatieMediaLibraryFileUpload::make('photo_profile')
                    ->hiddenLabel()
                    ->alignCenter()
                    ->avatar()
                    ->collection('photo_profile')
                    ->disk('uploads')
                    ->directory('photo_profile')
                    ->statePath('data'),
                TextInput::make('user_name')
                    ->label('User Name'),
                TextInput::make('first_name')
                    ->label('First Name'),
                TextInput::make('last_name')
                    ->label('Last Name'),
            ])
            ->modalHeading('Edit Profile')
            ->modalCloseButton(false)
            ->modalWidth(MaxWidth::Small)
            ->modalSubmitActionLabel('Save changes')
            ->modalCancelActionLabel('Cancel')
            ->action(function (array $data, $arguments, Component $livewire) {
                $this->model->update([
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                ]);

                Assert::notNull($this->model->user);
                $this->model->user->update(['name' => $data['user_name']]);
            })
        ;
    }
}
