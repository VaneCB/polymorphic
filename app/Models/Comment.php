<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{

    protected $fillable = [
        'body',
        'commentable_type',
        'commentable_id',
    ];

    //RELATIONSHIP
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
