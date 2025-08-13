<?php

use Passionweb\SiteSets\Controller\SiteSetController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'SiteSets',
    'SiteSets',
    [
        SiteSetController::class => 'init'
    ],
    [
        // Non-cached actions
        SiteSetController::class => 'init'
    ],
);