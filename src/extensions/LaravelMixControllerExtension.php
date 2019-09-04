<?php

namespace ConnyNyman\LaravelMix;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class LaravelMixControllerExtension extends Extension
{
    public function onAfterInit()
    {
        Requirements::javascript(SILVERSTRIPE_MDBOOSTRAP_BASE_DIR . '/');
    }
}

