<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Lesson extends User
{
    protected $guarded = [];
    protected $rememberTokenName = '';

    /**
     * 与视频模型的一对多关联
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}
