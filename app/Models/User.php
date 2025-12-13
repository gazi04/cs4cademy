<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "name",
        "email",
        "password",
        "xp",
        "level",
        "coins",
        "equipped_avatar_item_id",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        "password",
        "remember_token",
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            "email_verified_at" => "datetime",
            "password" => "hashed",
        ];
    }

    /**
     * Get the avatar item the user is currently wearing.
     * One-to-One relationship via foreign key on the users table.
     */
    public function equippedItem(): BelongsTo
    {
        return $this->belongsTo(AvatarItem::class, "equipped_avatar_item_id");
    }

    /**
     * Get all cosmetic items the user owns (their Inventory).
     * Many-to-Many relationship with the user_inventory pivot table.
     */
    public function inventory(): BelongsToMany
    {
        return $this->belongsToMany(AvatarItem::class, "user_inventory");
    }

    /**
     * Get all achievements unlocked by the user.
     * Many-to-Many relationship with the user_achievements pivot table.
     */
    public function achievements(): BelongsToMany
    {
        return $this->belongsToMany(Achievement::class, "user_achievements")
            ->withTimestamps(); // Useful for tracking unlock time
    }

    /**
     * Get the progress records for all lessons the user has started or completed.
     * Many-to-Many relationship with the user_lesson_progress pivot table.
     */
    public function lessonProgress(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class, "user_lesson_progress")
            ->withPivot("completed", "completed_at") // Get the status from the pivot table
            ->withTimestamps();
    }
}
