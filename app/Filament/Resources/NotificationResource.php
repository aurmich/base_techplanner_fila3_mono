<?php

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\KeyValue;
use Modules\Notify\Filament\Resources\NotificationResource\Pages\CreateNotification;
use Modules\Notify\Filament\Resources\NotificationResource\Pages\EditNotification;
use Modules\Notify\Filament\Resources\NotificationResource\Pages\ListNotifications;
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
>>>>>>> origin/dev
use Modules\Notify\Models\Notification;
use Modules\Notify\Filament\Resources\NotificationResource\Pages;
use Modules\Xot\Filament\Resources\XotBaseResource;

<<<<<<< HEAD
=======
/**
 * NotificationResource
 */
>>>>>>> origin/dev
class NotificationResource extends XotBaseResource
{
    protected static ?string $model = Notification::class;

<<<<<<< HEAD
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            'type' => TextInput::make('type')
                ->required()
                ->label('Notification Type'),
            
            'notifiable_type' => TextInput::make('notifiable_type')
                ->required()
                ->label('Notifiable Type'),
            
            'notifiable_id' => TextInput::make('notifiable_id')
                ->required()
                ->numeric()
                ->label('Notifiable ID'),
            
            'data' => KeyValue::make('data')
                ->label('Notification Data')
                ->keyLabel('Key')
                ->valueLabel('Value')
                ->columnSpanFull(),
            
            'read_at' => DateTimePicker::make('read_at')
                ->label('Read At')
                ->nullable(),
            
            'created_by' => TextInput::make('created_by')
                ->label('Created By')
                ->disabled(),
            
            'updated_by' => TextInput::make('updated_by')
                ->label('Updated By')
                ->disabled()
        ];
    }

    public static function getRelations(): array
    {
        return [
=======
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('type')
                ->required()
                ->maxLength(255),
            TextInput::make('notifiable_type')
                ->required()
                ->maxLength(255),
            TextInput::make('notifiable_id')
                ->required()
                ->numeric(),
            Textarea::make('data')
                ->required()
                ->columnSpanFull(),
            TextInput::make('read_at')
                ->maxLength(255),
>>>>>>> origin/dev
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotifications::route('/'),
            'view' => Pages\ViewNotification::route('/{record}'),
        ];
    }
}
