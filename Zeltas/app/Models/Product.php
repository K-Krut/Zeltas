<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'weight',
        'quantity',
        'price',
        'description',
        'featured',
        'category_id',
        'collection_id',
        'metal_id',
        'discount',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'quantity' => 'integer',
        'metal_id' => 'integer'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function collections(): BelongsTo
    {
        return $this->belongsTo(Collection::class, 'collection_id', 'id');
    }

    public function metals(): BelongsTo
    {
        return $this->belongsTo(Metal::class);
    }

    public function getMetal(): BelongsTo
    {
        return $this->belongsTo(Metal::class, 'metal_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

//    public function getMainImage(): Model|HasMany|null
//    {
//        return $this->images()->where('main', '=', 1)->first();
//    }

}
