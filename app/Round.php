<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Round
 * @package App
 *
 * @string $uuid
 * @string $title
 */
class Round extends Model
{
    use Uuid;

    /**
     * @var array
     */
    public $fillable = [
        'title',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * @return BelongsToMany
     */
    public function quiz()
    {
        return $this->belongsToMany(Quiz::class)
            ->using(QuizRound::class);
    }

    /**
     * @return BelongsToMany
     */
    public function questions()
    {
        return $this->belongsToMany(Question::class)
            ->using(QuestionRound::class);
    }
}
