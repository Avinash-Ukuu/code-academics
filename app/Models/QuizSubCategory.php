<?php

namespace App\Models;

use App\Models\QuizQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuizSubCategory extends Model
{
    use HasFactory;

    protected $table    =   'quiz_subcategories';
    protected $guarded  =   ['id'];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value),
        );
    }

    public function quizCategory():BelongsTo
    {
        return $this->belongsTo(QuizCategory::class,'quiz_category_id');
    }

    public function questions():HasMany
    {
        return $this->hasMany(QuizQuestion::class, 'quiz_subcategory_id');
    }
}
