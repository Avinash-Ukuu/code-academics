<?php

namespace App\Models;

use App\Models\CourseDuration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    protected   $guarded    =   ['id'];
    protected   $table      =   'courses';

    public function durations(): HasMany
    {
        return $this->hasMany(CourseDuration::class);
    }

    public function children():HasMany
    {
        return $this->hasMany(Course::class, 'parent_id');
    }

    public function parent():BelongsTo
    {
        return $this->belongsTo(Course::class, 'parent_id');
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value),
        );
    }

}
