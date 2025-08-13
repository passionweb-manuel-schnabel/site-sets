<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$pluginKey = ExtensionUtility::registerPlugin(
    'SiteSets',
    'SiteSets',
    'SiteSetPlugin',
);
