<?php
namespace App\Providers;

class TrackerProvider extends \MatomoTracker {
    public function __construct() {
        parent::__construct(env("MTMSITEID"), env("MTMURL"));
        $this->setTokenAuth(env("MTMTOKENAUTH"));
    }
}
