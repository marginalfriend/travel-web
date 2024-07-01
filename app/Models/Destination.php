<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Destination extends Model implements HasMedia
{
    use HasFactory; 
		use InteractsWithMedia;

		protected $fillable = [
			'name',
			'category_id',
			'description',
			'adult_price',
			'child_price',
			// 'image_path',
		];

		public function getImageUrlAttribute()
		{
				return $this->getFirstMediaUrl('destinations');
		}

		public function registerMediaCollections(): void
    {
        $this->addMediaCollection('destinations')
            ->singleFile(); // if you only want one image per destination
    }

		public function category(): BelongsTo
		{
			return $this->belongsTo(Category::class);
		}

		public function orders(): HasMany
		{
			return $this->hasMany(Order::class);
		}
		
    protected static function booted()
    {
        static::created(function ($destination) {
            \Log::info('Destination created', [
                'id' => $destination->id,
                'media' => $destination->getMedia('destinations')->count(),
                'media_details' => $destination->getMedia('destinations')->toArray()
            ]);
        });

        static::updated(function ($destination) {
            \Log::info('Destination updated', [
                'id' => $destination->id,
                'media' => $destination->getMedia('destinations')->count(),
                'media_details' => $destination->getMedia('destinations')->toArray()
            ]);
        });
    }
}
