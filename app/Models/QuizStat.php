<?php

namespace App\Models;

use App\Models\QuizUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizStat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'quiz_stats';

    protected $casts = [
        'last_played_at' => 'datetime'
    ];

    public function quizUser():BelongsTo
    {
        return $this->belongsTo(QuizUser::class, 'quiz_user_id');
    }
}
