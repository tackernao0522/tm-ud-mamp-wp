<?php

namespace DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealUtils;

// Simply check for defined constants, we do not need to `die` here
if (\defined('ABSPATH')) {
    \DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealUtils\UtilsProvider::setupConstants();
    \DevOwl\RealThumbnailGenerator\Vendor\DevOwl\RealUtils\Localization::instanceThis()->hooks();
}
