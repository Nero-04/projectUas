<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarifResource\Pages;
use App\Filament\Resources\TarifResource\RelationManagers;
use App\Models\Tarif;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TarifResource extends Resource
{
    protected static ?string $model = Tarif::class;
    protected static ?string $navigationLabel = 'Tarif';
    protected static ?string $pluralModelLabel = 'Tarif';
    protected static ?string $modelLabel = 'Tarif';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kendaraan_id')
                    ->label('Kendaraan ID')
                    ->options(\App\Models\Kendaraan::all()->pluck('kendaraan_id', 'id'))
                    ->searchable()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $kendaraan = \App\Models\Kendaraan::find($state);
                        if ($kendaraan) {
                            $set('golongan', $kendaraan->golongan);
                            $set('no_polisi', $kendaraan->no_polisi);
                            $set('jenis_kendaraan', $kendaraan->jenis_kendaraan);
                        }
                    }),
                Forms\Components\TextInput::make('golongan')
                    ->label('Golongan')
                    ->disabled(),
                Forms\Components\TextInput::make('jenis_kendaraan')
                    ->label('Jenis Kendaraan')
                    ->disabled(),
                Forms\Components\TextInput::make('no_polisi')
                    ->label('No Polisi')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kendaraan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_polisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('golongan'),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTarifs::route('/'),
            'create' => Pages\CreateTarif::route('/create'),
            'edit' => Pages\EditTarif::route('/{record}/edit'),
        ];
    }
}
