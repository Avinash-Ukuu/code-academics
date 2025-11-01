<?php

namespace App\Models;

use App\Models\QuizAttempt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizAnswer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'quiz_answers';

    protected $casts = [
        'answered_at' => 'datetime',
        'is_correct' => 'boolean'
    ];

    public function attempt():BelongsTo
    {
        return $this->belongsTo(QuizAttempt::class, 'quiz_attempt_id');
    }
}
