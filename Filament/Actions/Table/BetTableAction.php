<?php
/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);


namespace Modules\Rating\Filament\Actions\Table;

use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextInput;

class BetTableAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'bet_action';
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel();

        $this->label('')
            ->tooltip(trans('rating:txt.bet'))
            ->modalWidth('xl')
            ->form(
                fn (Action $action): array => [
                    TextInput::make('aa'),
                ]
            );
    }
}
