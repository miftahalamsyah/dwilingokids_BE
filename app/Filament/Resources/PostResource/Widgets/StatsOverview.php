<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Learning Materials', Post::all()->count()),
            Card::make('Published Learning Materials', Post::where('is_published', true)->count()),
            Card::make('Unpublished Learning Materials', Post::where('is_published', false)->count())
        ];
    }
}
