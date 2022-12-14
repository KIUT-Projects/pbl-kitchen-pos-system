<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Product;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Products', Product::all()->count()),
            Card::make('Active Products', Product::where('is_published', 'true')->count()),
            Card::make('Todays Created', Product::where('created_at', Carbon::today())->count()),
        ];
    }
}
