<?php

use Flarum\Extend;
use Flarum\Frontend\Document;
use Flarum\Settings\SettingsRepositoryInterface;
use Psr\Http\Message\ServerRequestInterface as Request;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js')
        ->content(function (Document $document, Request $request) {
            $settings = resolve(SettingsRepositoryInterface::class);
            $customCss = $settings->get('peopleinside-admin-css.custom_css');
            
            if (!empty($customCss)) {
                // SICUREZZA: Sanitizzazione lato server per prevenire XSS e style breakout
                $safeCss = preg_replace('/<\/style\s*>/i', '<\\/style>', $customCss);
                $safeCss = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $safeCss);
                $safeCss = preg_replace('/javascript\s*:/i', 'blocked:', $safeCss);
                $safeCss = preg_replace('/expression\s*\(/i', 'blocked(', $safeCss);
                $safeCss = preg_replace('/behavior\s*:/i', 'blocked:', $safeCss);
                
                $document->head[] = '<style id="peopleinside-admin-custom-css">' . $safeCss . '</style>';
            }
        }),
];
