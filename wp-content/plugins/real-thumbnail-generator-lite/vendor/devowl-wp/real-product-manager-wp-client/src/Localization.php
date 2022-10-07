<?php

namespace DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealProductManagerWpClient;

use DevOwl\RealThumbnailGenerator\Vendor\MatthiasWeb\Utils\PackageLocalization;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Package localization for `real-product-manager-wp-client` package.
 */
class Localization extends \DevOwl\RealThumbnailGenerator\Vendor\MatthiasWeb\Utils\PackageLocalization {
    /**
     * C'tor.
     */
    protected function __construct() {
        parent::__construct(RPM_WP_CLIENT_ROOT_SLUG, \dirname(__DIR__));
    }
    /**
     * Create instance.
     *
     * @codeCoverageIgnore
     */
    public static function instanceThis() {
        return new \DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealProductManagerWpClient\Localization();
    }
}
