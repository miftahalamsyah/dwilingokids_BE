<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Users Total', User::all()->count()),
            Card::make('Administrators', User::where('is_admin', true)->count()),
            Card::make('Regular Users', User::where('is_admin', false)->count())
        ];
    }
}
