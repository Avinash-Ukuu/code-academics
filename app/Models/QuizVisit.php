<?php

namespace App\Models;

use App\Models\QuizUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizVisit extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    protected $table    = 'quiz_visits';

    public function quizUser():BelongsTo
    {
        return $this->belongsTo(QuizUser::class);
    }
}
