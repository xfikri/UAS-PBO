<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NamaResource\Pages;
use App\Models\Nama;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NamaResource extends Resource
{
    protected static ?string $model = Nama::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nim')
                    ->required()
                    ->maxLength(20),

                Forms\Components\Select::make('jurusan_id')
                    ->relationship('jurusan', 'nama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->searchable(),
                Tables\Columns\TextColumn::make('nim')->searchable(),
                Tables\Columns\TextColumn::make('jurusan.nama')->label('Jurusan'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNamas::route('/'),
            'create' => Pages\CreateNama::route('/create'),
            'edit' => Pages\EditNama::route('/{record}/edit'),
        ];
    }
}
