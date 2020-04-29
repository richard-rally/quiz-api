<?php

namespace App;

use App\Traits\Uuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Question
 * @package App
 *
 * @property string $title
 * @property string $uuid
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Question extends Model
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
    public function rounds()
    {
        return $this->belongsToMany(Round::class)
            ->using(QuestionRound::class);
    }
}
