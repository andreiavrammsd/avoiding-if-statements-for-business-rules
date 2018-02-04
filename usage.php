<?php

spl_autoload_register(
    function ($class) {
        include str_replace('\\', '/', $class) . '.php';
    }
);

use SongRestriction\RestrictionException;

$rules = [
    new \SongRestriction\Restrictions\SongIsNotReady(new \Entities\Song()),
    new \SongRestriction\Restrictions\UserPlanNotAcceptedForSong(new \Entities\Song(), new \Entities\User()),
];

$rulesService = new \SongRestriction\SongRestrictionService($rules);
try {
    $rulesService->findRestriction();
} catch (RestrictionException $e) {
    // If you need a key for translations or just to pass it forward,
    // do it here, not inside the restriction service
    $ruleKey = get_class($e->getRestriction());

    echo $ruleKey;
}
