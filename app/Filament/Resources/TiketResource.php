<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TiketResource\Pages;
use App\Filament\Resources\TiketResource\RelationManagers;
use App\Models\Tiket;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class TiketResource extends Resource
{
    protected static ?string $model = Tiket::class;

    protected static ?string $navigationGroup = 'Tiket';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('kendaraan')
                    ->required(),
                Forms\Components\TextInput::make('jumlah')
                    ->required(),
                Forms\Components\TextInput::make('tujuan')
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('kendaraan'),
                Tables\Columns\TextColumn::make('jumlah'),
                Tables\Columns\TextColumn::make('tujuan'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTikets::route('/'),
            'create' => Pages\CreateTiket::route('/create'),
            'edit' => Pages\EditTiket::route('/{record}/edit'),
        ];
    }
}