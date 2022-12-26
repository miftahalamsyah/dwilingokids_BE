<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Learning Categories', Category::all()->count()),
            Card::make('All Learning Materials', Post::all()->count()),
            Card::make('All Users', User::all()->count()),
        ];
    }
}

