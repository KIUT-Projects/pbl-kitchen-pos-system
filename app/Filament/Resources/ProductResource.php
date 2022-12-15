<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Filament\Resources\ProductResource\Widgets\StatsOverview;
use App\Models\Product;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'heroicon-o-view-grid';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->reactive()->afterStateUpdated(function (Closure $set, $state){
                        $set('slug', Str::slug($state));
                    })->required(),
                    TextInput::make('slug')->required()->disabled(),
                    BelongsToSelect::make('category_id')->relationship('category', 'name')->required()->default(1),
                    FileUpload::make('photo')->image(),
                    //SpatieMediaLibraryFileUpload::make('photo'),
                    //\Filament\Forms\Components\SpatieMediaLibraryFileUpload::make('photo')->collection('products'),
                    //\Filament\Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')->collection('products'),
                    TextInput::make('price')->helperText('Narxini int korinishida kiritilsin'),
                    RichEditor::make('description'),
                    Toggle::make('is_published')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //SpatieMediaLibraryImageColumn::make('photo')->collection('products'),
                \Filament\Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')->collection('products'),
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->limit(50)->sortable()->searchable(),
                TextColumn::make('slug')->limit(50),
                BooleanColumn::make('is_published')
            ])
            ->filters([
                Tables\Filters\Filter::make('Published')->query(fn(Forms\Components\Builder $query): Forms\Components\Builder => $query->where('is_published', true)),
                Tables\Filters\SelectFilter::make('category')->relationship('category', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array{
        return [
            StatsOverview::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
