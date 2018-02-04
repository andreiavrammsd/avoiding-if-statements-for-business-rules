<?php

namespace Entities;

class Song
{
    /**
     * @return string
     */
    public function getStatus()
    {
        return 'ready';
    }

    /**
     * @return bool
     */
    public function allowedForFreePlan()
    {
        return false;
    }
}
