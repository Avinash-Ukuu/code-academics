<?php

namespace App\Models;

use App\Models\QuizSubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $table    =   'quiz_questions';
    protected $guarded  =   ['id'];

    public function subCategory():BelongsTo
    {
        return $this->belongsTo(QuizSubCategory::class, 'quiz_subcategory_id');
    }
}
