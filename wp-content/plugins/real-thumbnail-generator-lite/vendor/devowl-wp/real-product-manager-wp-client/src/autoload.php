<?php

namespace DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealProductManagerWpClient;

// Simply check for defined constants, we do not need to `die` here
if (\defined('ABSPATH')) {
    \DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealProductManagerWpClient\UtilsProvider::setupConstants();
    \DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealProductManagerWpClient\Localization::instanceThis()->hooks();
}
