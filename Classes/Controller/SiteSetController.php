<?php

namespace Passionweb\SiteSets\Controller;

use TYPO3\CMS\Extensionmanager\Controller\AbstractController;
use \TYPO3\CMS\Core\Site\Set\SetRegistry;

class SiteSetController extends AbstractController
{
    protected SetRegistry $setRegistry;
    public function __construct(SetRegistry $setRegistry)
    {
        $this->setRegistry = $setRegistry;
    }

    public function initAction()
    {
        $site = $this->request->getAttribute('site');

        // Retrieve settings from site configuration
        $color = $site->getSettings()->get('colorScheme.secondary');
        $headerType = $site->getSettings()->get('styles.content.defaultHeaderType');

        // Get all given site sets including dependencies
        $sets = $this->setRegistry->getSets('site-sets/codebreak-site-set', 'site-sets/default-styling', 'site-sets/some-fresh-site-set');

        // Check if the set exists in the registry
        if($this->setRegistry->hasSet('site-sets/codebreak-site-set')){
            // Get the set from the registry without dependencies
            $getSet = $this->setRegistry->getSet('site-sets/codebreak-site-set');
        }

        return $this->htmlResponse();
    }
}
