<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

		protected $fillable = [
			'child_visitor',
			'adult_visitor',
			'visit_date',
		];

		protected $attributes = [
			'is_paid' => false,
		];

		public function user(): BelongsTo
		{
			return $this->belongsTo(User::class);
		}

		public function destination(): BelongsTo
		{
			return $this->belongsTo(Destination::class);
		}
}
