<?php

namespace App\Models;

use App\Models\QuizUser;
use App\Models\QuizAnswer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizAttempt extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'quiz_attempts';

    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
        'last_activity_at' => 'datetime',
        'completed' => 'boolean',
    ];

    public function quizUser():BelongsTo
    {
        return $this->belongsTo(QuizUser::class, 'quiz_user_id');
    }

    public function answers():HasMany
    {
        return $this->hasMany(QuizAnswer::class, 'quiz_attempt_id');
    }
}
