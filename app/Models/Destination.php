<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    use HasFactory;

		protected $fillable = [
			'name',
			'category_id',
			'description',
			'adult_price',
			'child_price',
			'image',
		];

		public function category(): BelongsTo
		{
			return $this->belongsTo(Category::class);
		}

		public function orders(): HasMany
		{
			return $this->hasMany(Order::class);
		}
}
