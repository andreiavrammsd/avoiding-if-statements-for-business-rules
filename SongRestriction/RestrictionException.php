<?php

namespace SongRestriction;

class RestrictionException extends \Exception
{
    /**
     * @var RestrictionInterface
     */
    private $restriction;

    /**
     * @param RestrictionInterface
     */
    public function setRestriction(RestrictionInterface $restriction)
    {
        $this->restriction = $restriction;
    }

    /**
     * @return RestrictionInterface
     */
    public function getRestriction()
    {
        return $this->restriction;
    }
}
