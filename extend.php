<?php

use Flarum\Extend;
use Stezkoy\FlarumModularis\AddAdminStyles;
use Stezkoy\FlarumModularis\AddForumStyles;
use Stezkoy\FlarumModularis\Api\Resource\StyleResource;
use Stezkoy\FlarumModularis\Listener\ClearCache;

return [

    (new Extend\Frontend('forum'))
        ->content(AddForumStyles::class),

    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js')
        ->css(__DIR__ . '/less/admin.less')
        ->content(AddAdminStyles::class),

    new Extend\Locales(__DIR__ . '/locale'),

    // Register the Style JSON:API resource (auto-generates list/create/update/delete endpoints)
    (new Extend\ApiResource(StyleResource::class)),

    // Rebuild / invalidate the rendered-css cache whenever a style is created,
    // updated, deleted or when the whole Flarum cache is cleared.
    (new Extend\Event())
        ->subscribe(ClearCache::class),
];
