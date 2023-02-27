<?php

namespace V2room\Models\Rooms;

use V2room\Models\BaseModel;

class Topic extends BaseModel
{
    protected $table = 'topics';

    public function opinions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TopicOpinionComment::class);
    }
}
