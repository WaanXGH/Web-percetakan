<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\testimoni;
use App\Models\Testimonial;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Storage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class TestimonialResource extends Resource
{
    protected static ?string $model = testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    
    {
        
            return $form
                ->schema([
                    Forms\Components\Card::make() // Membungkus seluruh form ke dalam Card
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->label('Name')
                                ->maxLength(255),
                            
                            Forms\Components\Select::make('position')
                                ->options([
                                    'ARTIS' => 'ARTIS',
                                    'PENGGUNA' => 'PENGGUNA',
                                    'INFLUENCER_TIKTOK' => 'Influencer TikTok',
                                    'INFLUENCER_YOUTUBE' => 'Influencer YouTube',
                                    'INFLUENCER_INSTAGRAM' => 'Influencer Instagram',
                                    'CEO_PT_RANDOM' => 'CEO (PT RANDOM)'])
                                ->required()
                                ->label('Position'),
                            
                            Forms\Components\FileUpload::make('thumbnail')
                                ->image()
                                ->label('Image')
                                ->directory('testimonials'),
                            
                            Forms\Components\Textarea::make('quote')
                                ->required()
                                ->label('Testimonial Quote')
                                ->rows(5),  // Mengatur tinggi textarea
                        ])
                ]);
            }
    public static function table(Table $table): Table
    
    {
        return $table
            ->columns([
                tables\Columns\TextColumn::make('name')
                -> sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Position'),
                Tables\Columns\TextColumn::make('quote')
                    ->limit(255)
                    ->label('Testimonial Quote'),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                    //collection Olequented
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }    
}
