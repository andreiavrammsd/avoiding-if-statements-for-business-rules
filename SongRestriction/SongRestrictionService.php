<?php

namespace SongRestriction;

class SongRestrictionService
{
    /**
     * @var array
     */
    private $restrictions;

    /**
     * @param array $restrictions
     */
    public function __construct(array $restrictions)
    {
        $this->restrictions = $restrictions;
    }

    /**
     * @throws RestrictionException
     */
    public function findRestriction()
    {
        /** @var RestrictionInterface $restriction */
        foreach ($this->restrictions as $restriction) {
            if ($restriction->isRestricted()) {
                $e = new RestrictionException('Song restriction was met');
                $e->setRestriction($restriction);
                throw $e;
            }
        }
    }
}
