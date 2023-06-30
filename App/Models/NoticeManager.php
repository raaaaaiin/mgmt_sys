<?php

namespace App\Models;

use App\Common\Model;

class NoticeManager extends Model
{
    protected $table = "notice_managers";
    protected $guarded = ["id"];
    protected $casts = [
        'role_id' => 'array',
        'user_id' => 'array',
    ];
}
