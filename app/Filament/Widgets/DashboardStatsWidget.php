<?php

namespace App\Filament\Widgets;

use App\Models\Asset;
use App\Models\User;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;

class DashboardStatsWidget extends Widget
{
    // Filament's Widget base defines $view as a non-static string; match that to avoid fatal error
    protected string $view = 'filament.widgets.dashboard-stats-widget';

    public int $totalAssets = 0;
    public int $totalUsers = 0;
    public int $totalDownloads = 0;
    public float $totalRevenue = 0.0;

    public function mount(): void
    {
        $this->totalAssets = Asset::count();
        $this->totalUsers = User::count();
        $this->totalDownloads = (int) Asset::sum('download_count');

        // totalRevenue: sum of sale_price * download_count (fallback to price if sale_price is null)
        $this->totalRevenue = (float) Asset::query()
            ->select(DB::raw('SUM(COALESCE(sale_price, price) * download_count) as revenue'))
            ->value('revenue') ?? 0.0;
    }
}
