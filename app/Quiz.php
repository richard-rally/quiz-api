<?php

namespace App;

use App\Traits\Uuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Quiz
 * @package App
 *
 * @property string $title
 * @property string $uuid
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Quiz extends Model
{
    use Uuid;

    /**
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Get the rounds from the quiz
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rounds()
    {
        return $this->belongsToMany(Round::class)
            ->using(QuizRound::class);
    }

    /**
     * Get the questions for the quiz
     *
     * @return HasManyThrough
     */
    public function questions()
    {
        return $this->hasManyThrough(
            Question::class,
            QuestionRound::class,
            'round_id',
            'id',
            'id',
            'question_id'
        );
    }
}

