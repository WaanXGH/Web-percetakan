<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Section;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Forms\Components\TextColumn;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\SectionResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SectionResource\RelationManagers;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Card::make()->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
                Forms\Components\FileUpload::make('thumbnail')
                ->required()->image()->disk('public'),
                Forms\Components\RichEditor::make('content')
                ->required(),
                Forms\Components\Select::make('post_as')->options(['POSTER'=>'POSTER',
                                                                'BANNER'=>'BANNER',
                                                                'SPANDUK'=>'SPANDUK'])
                ]),
            ]);
            
    }

    public static function table(Table $table): Table   
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('title')
                ->searchable(),
            Tables\Columns\ImageColumn::make('thumbnail')
                ->searchable(),
            Tables\Columns\TextColumn::make('post_as')
                ->searchable(),
            Tables\Columns\TextColumn::make('content')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault:true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                        function(Collection $records){
                            foreach($records as $key =>$value){
                            if($value -> thumbnail){
                                Storage::disk('public')->delete($value->thumbnail);
                            }
                        }
                        }
                ),
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }    
}
