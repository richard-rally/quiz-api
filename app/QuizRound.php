<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class QuizRound extends Pivot
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function round()
    {
        return $this->belongsTo(Round::class);
    }
}
