<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

        public function requireDefaultRecords()
        {
            parent::requireDefaultRecords();
            trigger_error("Pretend error", E_USER_ERROR);
        }
    }
}
