<?php

namespace DevOwl\RealThumbnailGenerator\overrides\interfce;

use DevOwl\RealThumbnailGenerator\Vendor\DevOwl\Freemium\ICore;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
interface IOverrideCore extends \DevOwl\RealThumbnailGenerator\Vendor\DevOwl\Freemium\ICore {
    /**
     * Additional c'tor.
     */
    public function overrideConstruct();
    /**
     * Additional init action.
     */
    public function overrideInit();
}
