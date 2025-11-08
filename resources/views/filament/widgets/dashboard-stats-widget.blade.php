<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div class="fi-card p-4 text-center">
        <div class="text-sm text-gray-500">Total Assets</div>
        <div class="text-2xl font-semibold">{{ number_format($totalAssets) }}</div>
    </div>

    <div class="fi-card p-4 text-center">
        <div class="text-sm text-gray-500">Total Users</div>
        <div class="text-2xl font-semibold">{{ number_format($totalUsers) }}</div>
    </div>

    <div class="fi-card p-4 text-center">
        <div class="text-sm text-gray-500">Total Downloads</div>
        <div class="text-2xl font-semibold">{{ number_format($totalDownloads) }}</div>
    </div>

    <div class="fi-card p-4 text-center">
        <div class="text-sm text-gray-500">Estimated Revenue</div>
        <div class="text-2xl font-semibold">${{ number_format($totalRevenue, 2) }}</div>
    </div>
</div>
