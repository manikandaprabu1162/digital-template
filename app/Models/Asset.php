<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Asset extends BaseModel
{
    protected $fillable = [
        'title', 
        'slug', 
        'description', 
        'short_description',
        'price',
        'sale_price',
        'file_url',
        'preview_url',
        'thumbnail_url',
        'version',
        'category_id',
        'user_id',
        'is_active',
        'is_featured',
        'download_count',
        'file_size'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'download_count' => 'integer',
        'file_size' => 'integer'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'asset_tag');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($asset) {
            if (empty($asset->slug)) {
                $asset->slug = Str::slug($asset->title);
            }
            // If user_id isn't provided, set it to the currently authenticated user (if any)
            try {
                if (empty($asset->user_id) && auth()->check()) {
                    $asset->user_id = auth()->id();
                }
            } catch (\Throwable $e) {
                // If auth helper isn't available in this context, skip setting user_id
            }
        });
        
        // Populate file_size automatically when a file is uploaded
        // NOTE: Livewire/FileUpload may set temporary paths like "livewire-tmp/..." which are
        // not present on the 'public' disk. Wrap existence/size checks in try/catch and skip
        // when the path looks like a temporary Livewire path.
        static::saving(function ($asset) {
            if (empty($asset->file_url)) {
                return;
            }

            // If the uploaded path is a Livewire temporary path, skip size calculation here.
            if (is_string($asset->file_url) && str_contains($asset->file_url, 'livewire-tmp')) {
                return;
            }

            try {
                if (Storage::disk('public')->exists($asset->file_url)) {
                    $asset->file_size = Storage::disk('public')->size($asset->file_url);
                }
            } catch (\Throwable $e) {
                // If Flysystem can't retrieve metadata (temporary files or other issues), skip.
            }
        });
    }
}