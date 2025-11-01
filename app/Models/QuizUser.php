<?php

namespace App\Models;

use App\Models\QuizStat;
use App\Models\QuizVisit;
use App\Models\QuizAttempt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizUser extends Model
{
    use HasFactory;

    protected $table    = 'quiz_users';
    protected $guarded  = ['id'];

    public function visits():HasMany
    {
        return $this->hasMany(QuizVisit::class);
    }

    public function attempts():HasMany
    {
        return $this->hasMany(QuizAttempt::class);
    }

    public function stats():HasOne
    {
        return $this->hasOne(QuizStat::class);
    }
}
