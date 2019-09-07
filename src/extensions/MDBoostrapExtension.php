<?php

namespace ConnyNyman\MDBootstrap;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class MDBoostrapExtension extends Extension
{
    public function onBeforeInit()
    {
        Requirements::css(SILVERSTRIPE_MDBOOSTRAP_BASE_DIR . '/scss/mdbootstrap.scss');
    }
}

