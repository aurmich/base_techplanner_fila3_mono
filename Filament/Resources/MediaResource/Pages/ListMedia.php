<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Exception;
use Filament\Actions\CreateAction;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Modules\Media\Filament\Actions\Table\ConvertAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Models\Media;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListMedia extends XotBaseListRecords
{
    protected static string $resource = MediaResource::class;

    public function getGridTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'));

        return [
            Stack::make([
<<<<<<< HEAD
<<<<<<< HEAD
                TextColumn::make('collection_name'),

                TextColumn::make('name')

=======
                TextColumn::make('collection_name')
                    ,

                TextColumn::make('name')
                    
>>>>>>> origin/dev
=======
                TextColumn::make('collection_name'),

                TextColumn::make('name')

>>>>>>> origin/v0.2.10
                    ->searchable()
                    ->sortable(),

                TextColumn::make('mime_type')
<<<<<<< HEAD
<<<<<<< HEAD

                    ->sortable(),

                ImageColumn::make('preview')

=======
                    
                    ->sortable(),

                ImageColumn::make('preview')
                    
>>>>>>> origin/dev
=======

                    ->sortable(),

                ImageColumn::make('preview')

>>>>>>> origin/v0.2.10
                    ->size(60)
                    ->defaultImageUrl(fn ($record) =>
                        /*
                    $url = $record->getUrl();
                    $info = pathinfo($url);
                    if(!isset($info['dirname'])) {

                        throw new Exception('['.__LINE__.']['.class_basename($this).']');
                    }
                    $thumb = $info['dirname'].'/conversions/'.$info['filename'].'-thumb.jpg';

                    return url($thumb);
                    */
                        $record->getUrlConv('thumb')),

                TextColumn::make('human_readable_size')
<<<<<<< HEAD
<<<<<<< HEAD

=======
                    
>>>>>>> origin/dev
=======

>>>>>>> origin/v0.2.10
                // ->sortable()
                ,

                TextColumn::make('creator.name')
<<<<<<< HEAD
<<<<<<< HEAD

                    ->toggleable(),

                TextColumn::make('created_at')

=======
                    
                    ->toggleable(),

                TextColumn::make('created_at')
                    
>>>>>>> origin/dev
=======

                    ->toggleable(),

                TextColumn::make('created_at')

>>>>>>> origin/v0.2.10
                    ->dateTime($date_format)
                    ->toggleable(),
            ]),
        ];
    }

    public function getListTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'));

        return [
<<<<<<< HEAD
<<<<<<< HEAD
            TextColumn::make('collection_name'),

            TextColumn::make('name')

=======
            TextColumn::make('collection_name')
                ,

            TextColumn::make('name')
                
>>>>>>> origin/dev
=======
            TextColumn::make('collection_name'),

            TextColumn::make('name')

>>>>>>> origin/v0.2.10
                ->searchable()
                ->sortable(),

            TextColumn::make('mime_type')
<<<<<<< HEAD
<<<<<<< HEAD

                ->sortable(),

            ImageColumn::make('preview')

=======
                
                ->sortable(),

            ImageColumn::make('preview')
                
>>>>>>> origin/dev
=======

                ->sortable(),

            ImageColumn::make('preview')

>>>>>>> origin/v0.2.10
                ->size(60)
                ->defaultImageUrl(fn ($record) =>
                    /*
                    $url = $record->getUrl();
                    $info = pathinfo($url);
                    if(!isset($info['dirname'])) {

                        throw new Exception('['.__LINE__.']['.class_basename($this).']');
                    }
                    $thumb = $info['dirname'].'/conversions/'.$info['filename'].'-thumb.jpg';

                    return url($thumb);
                    */
                    $record->getUrlConv('thumb')),

            TextColumn::make('human_readable_size')
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> origin/dev
=======

>>>>>>> origin/v0.2.10
            // ->sortable()
            ,

            TextColumn::make('creator.name')
<<<<<<< HEAD
<<<<<<< HEAD

                ->toggleable(),

            TextColumn::make('created_at')

=======
                
                ->toggleable(),

            TextColumn::make('created_at')
                
>>>>>>> origin/dev
=======

                ->toggleable(),

            TextColumn::make('created_at')

>>>>>>> origin/v0.2.10
                ->dateTime($date_format)
                ->toggleable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            // ActionGroup::make([
            ViewAction::make()
                ->label(''),
            Action::make('view_attachment')
                ->label('')
                ->icon('heroicon-s-eye')
                ->color('gray')
                ->url(
                    static fn (Media $record): string => $record->getUrl()
                )->openUrlInNewTab(true),
            DeleteAction::make()
                ->label('')
                ->requiresConfirmation(),
            Action::make('download_attachment')
                ->label('')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(
                    static fn ($record) => response()->download($record->getPath(), $record->file_name)
                ),
            // ]),
            // ConvertAction::make('convert'),
            Action::make('convert')
                ->label('')
                ->icon('convert01')
                ->color('gray')
                ->url(
                    function ($record): string {
                        Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));

                        return $res;
                    }
                )->openUrlInNewTab(true),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
            // AttachmentDownloadBulkAction::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            // ->columns($this->getTableColumns())
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())

            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort(
                column: 'created_at',
                direction: 'DESC',
            );
    }

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    /**
     * @return CreateAction[]
     *
     * @psalm-return list{CreateAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
