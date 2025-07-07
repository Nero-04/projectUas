<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;
    protected static ?string $navigationLabel = 'Kendaraan';
    protected static ?string $pluralModelLabel = 'Kendaraan';
    protected static ?string $modelLabel = 'Kendaraan';
    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_polisi')
                    ->label('No Polisi')
                    ->maxLength(20)
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->rules(['required', 'string', 'max:20', 'unique:kendaraans,no_polisi']),
                Forms\Components\Select::make('golongan')
                    ->label('Golongan')
                    ->options([
                        'I' => 'I',
                        'II' => 'II',
                        'III' => 'III',
                        'IV' => 'IV',
                        'V' => 'V',
                    ])
                    ->required()
                    ->rules(['required', 'in:I,II,III,IV,V']),
                Forms\Components\TextInput::make('tinggi_kendaraan')
                    ->label('Tinggi Kendaraan (meter)')
                    ->numeric()
                    ->maxValue(2.1)
                    ->minValue(0)
                    ->step(0.01)
                    ->required()
                    ->rules(['required', 'numeric', 'min:0', 'max:2.1']),
                Forms\Components\Select::make('jenis_kendaraan')
                    ->label('Jenis Kendaraan')
                    ->options([
                        'mobil pribadi' => 'Mobil Pribadi',
                        'truck' => 'Truck',
                    ])
                    ->required()
                    ->rules(['required', 'in:mobil pribadi,truck']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kendaraan_id')
                    ->label('Kendaraan ID')
                    ->alignCenter()
                    ->searchable()
                    ->formatStateUsing(fn($state) => str_pad($state, 4, '0', STR_PAD_LEFT)),
                Tables\Columns\TextColumn::make('no_polisi')->label('No Polisi')->alignCenter()->searchable(),
                Tables\Columns\TextColumn::make('golongan')->label('Golongan')->alignCenter()->searchable(),
                Tables\Columns\TextColumn::make('tinggi_kendaraan')->label('Tinggi (m)')->alignCenter(),
                Tables\Columns\TextColumn::make('jenis_kendaraan')->label('Jenis Kendaraan')->alignCenter()->searchable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}
