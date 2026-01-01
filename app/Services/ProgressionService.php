<?php

namespace App\Services;

use App\Models\User;

class ProgressionService
{
    /**
     * Award XP and Coins to a user and check for level ups.
     */
    public function awardRewards(User $user, int $xpAmount, int $coinAmount)
    {
        $user->xp += $xpAmount;
        $user->coins += $coinAmount;

        // Check for level up
        $newLevel = $this->calculateLevel($user->xp);

        if ($newLevel > $user->level) {
            $user->level = $newLevel;
            // You could trigger a "Level Up" event here!
        }

        $user->save();
    }

    /**
     * Determine level based on total XP.
     * Formula: Level = floor( (XP / 100) ^ (1/1.5) )
     */
    public function calculateLevel(int $xp): int
    {
        if ($xp <= 0) return 1;

        $level = floor(pow(($xp / 100), 1 / 1.5)) + 1;

        return (int) $level;
    }

    /**
     * Calculate how much XP is needed for the next level.
     */
    public function xpForNextLevel(int $currentLevel): int
    {
        return (int) (100 * pow($currentLevel, 1.5));
    }
}
