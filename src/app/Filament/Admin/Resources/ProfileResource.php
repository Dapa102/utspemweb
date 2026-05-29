<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class ProfileResource extends Resource
{
    // Arahkan ke model yang sudah kita buat
    protected static ?string $model = Profile::class;

    // Ikon untuk ditampilkan di sidebar admin
    protected static ?string $navigationIcon = 'heroicon-o-identification';

    // Label nama di menu
    protected static ?string $navigationLabel = 'My Profile';

    // Form ketika kita klik "Create" / "Edit"
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('photo')
                    ->label('Profile Photo')
                    ->image()
                    ->directory('profiles') // Gambar akan masuk ke storage/app/public/profiles
                    ->maxSize(2048) // Maksimal 2MB
                    ->columnSpanFull(),

                Textarea::make('about_me')
                    ->label('About Me')
                    ->rows(6)
                    ->placeholder('Ceritakan sedikit tentang diri Anda di sini...')
                    ->columnSpanFull(),

                TagsInput::make('tech_stack')
                    ->label('Tech Stack (Kemampuan)')
                    ->placeholder('Ketik nama tekologi lalu tekan Enter (Contoh: Laravel, React, Vue)')
                    ->columnSpanFull(),
            ]);
    }

    // Tabel untuk melihat daftar data profil
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->label('Photo')
                    ->circular(),

                TextColumn::make('about_me')
                    ->label('About Me')
                    ->limit(50), // Batasi tulisan agar tidak terlalu panjang di tabel

                TextColumn::make('tech_stack')
                    ->label('Tech Stacks')
                    ->badge() // Muncul sebagai pill/badge agar lebih rapi
                    ->separator(','),
            ])
            ->filters([
                // (Kosongkan saja karena profil biasanya hanya 1)
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                //
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
