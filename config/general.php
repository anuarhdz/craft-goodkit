<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)
    // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls()
    // Preload Single entries as Twig variables
    ->preloadSingles(false)
    // Prevent user enumeration attacks
    ->preventUserEnumeration()
    // Enable Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
    ->devMode(App::env('DEV_MODE') ?? false)
    // Allow administrative changes
    ->allowAdminChanges(App::env('ALLOW_ADMIN_CHANGES') ?? false)
    // Disallow robots
    ->disallowRobots(App::env('DISALLOW_ROBOTS') ?? false)
    // Set the @webroot alias so the clear-caches command knows where to find CP resources
    ->aliases([
        '@webroot' => App::env('CRAFT_WEB_ROOT'),
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@filesystemPath' => App::env('FILESYSTEM_PATH'),
        '@filesystemUrl' => App::env('FILESYSTEM_URL'),
        '@viteDevUrl' => App::env('VITE_DEV_URL'),
        '@viteServerPublic' => rtrim(App::env('PRIMARY_SITE_URL'), '/') . '/dist/',
        '@viteDevServerPublic' => rtrim(App::env('PRIMARY_SITE_URL'), '/') . ':5173',
        '@assets' => '@webroot/assets',
    ]);
