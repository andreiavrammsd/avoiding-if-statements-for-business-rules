<?php

namespace SongRestriction\Restrictions;

use Entities\Song;
use SongRestriction\RestrictionInterface;

class SongIsNotReady implements RestrictionInterface
{
    /**
     * @var Song
     */
    private $song;

    /**
     * @param Song $song
     */
    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    /**
     * @return bool
     */
    public function isRestricted()
    {
        return $this->song->getStatus() != 'ready';
    }
}
