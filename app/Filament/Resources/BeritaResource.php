<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Str;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden; 

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

     protected static ?string $navigationLabel = 'Berita';
    protected static ?string $pluralModelLabel = 'Berita';
    protected static ?string $modelLabel = 'Data';
    // protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')->default(auth()->id()),
                TextInput::make('title')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $operation, $state, \Filament\Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->unique(Berita::class, 'slug', ignoreRecord: true),

                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'sosial' => 'Sosial',
                        'bencana' => 'Bencana',
                        'pemberdayaan' => 'Pemberdayaan',
                        'kegiatan' => 'Kegiatan Dinas',
                    ])
                    ->required(),

                SpatieMediaLibraryFileUpload::make('gambar')
                    ->collection('berita')
                    ->multiple()
                     ->disk('uploads')
                    ->reorderable()
                    ->responsiveImages()
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Isi Berita')
                    ->required()
                    ->columnSpanFull(),

                DateTimePicker::make('published_at')
                    ->label('Waktu Publikasi')
                    ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('gambar')
                    ->collection('berita')
                    ->label('Gambar Utama'),

                TextColumn::make('title')->label('Judul')->searchable()->sortable(),

                TextColumn::make('author.name')
                    ->label('Penulis')
                    ->sortable(),

                TextColumn::make('category')->label('Kategori')->badge()->searchable()->sortable(),

                TextColumn::make('published_at')->label('Diterbitkan')->dateTime()->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'sosial' => 'Sosial',
                        'bencana' => 'Bencana',
                        'pemberdayaan' => 'Pemberdayaan',
                        'kegiatan' => 'Kegiatan Dinas',
                    ])
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
            'index' => Pages\ListBeritas::route('/'),
            // 'create' => Pages\CreateBerita::route('/create'),
            // 'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
