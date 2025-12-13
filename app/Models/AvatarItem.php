<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvatarItem extends Model
{
    use HasFactory;

    protected $table = "avatar_items";

    protected $fillable = [
        "name",
        "description",
        "type",
        "cost",
        "image_path",
    ];
}
