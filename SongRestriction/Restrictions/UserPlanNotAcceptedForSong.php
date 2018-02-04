<?php

namespace SongRestriction\Restrictions;

use SongRestriction\RestrictionInterface;
use Entities\Song;
use Entities\User;

class UserPlanNotAcceptedForSong implements RestrictionInterface
{
    /**
     * @var Song
     */
    private $song;

    /**
     * @var User
     */
    private $user;

    /**
     * @param Song $song
     * @param User $user
     */
    public function __construct(Song $song, User $user)
    {
        $this->song = $song;
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function isRestricted()
    {
        return !$this->song->allowedForFreePlan() && $this->user->getPlan() == 'free';
    }
}
