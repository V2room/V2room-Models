<?php

namespace V2room\Models\Feeds;

use V2room\Models\BaseModel;

class Feed extends BaseModel
{
    protected $table = 'feeds';
    protected $guarded = [];

    public function type(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(FeedType::class);
    }
}
