<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListNotifyThemes extends XotBaseListRecords
{
    protected static string $resource = NotifyThemeResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->headerActions($this->getTableHeaderActions());
        // ->defaultSort('pos', 'asc')
        // ->reorderable('pos')
    }

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id')->sortable(),
            TextColumn::make('lang')->sortable(),
            TextColumn::make('type')->sortable(),
            // TextColumn::make('post_id')->sortable(),
            // TextColumn::make('post_type')->sortable(),
            TextColumn::make('logo_src')->sortable(),
        ];
    }

    public function getListTableColumns(): array
    {
        return $this->getTableColumns();
    }
}
