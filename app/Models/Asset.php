<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        });
    }
}