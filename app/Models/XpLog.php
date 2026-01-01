<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XpLog extends Model
{
    protected $table = "xp_logs";

    protected $fillable = [
        "user_id",
        "amount",
        "description"
    ];
}
