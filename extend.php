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
                // 1. Neutralizza la chiusura prematura del tag <style> (previene XSS breakout)
                $safeCss = preg_replace('/<\/style\s*>/i', '<\\/style>', $customCss);
                // 2. Rimuove qualsiasi tag <script>
                $safeCss = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $safeCss);
                // 3. Neutralizza URL javascript:
                $safeCss = preg_replace('/javascript\s*:/i', 'blocked:', $safeCss);
                // 4. Neutralizza expression() (vettore legacy)
                $safeCss = preg_replace('/expression\s*\(/i', 'blocked(', $safeCss);
                // 5. Neutralizza behavior: (vettore legacy)
                $safeCss = preg_replace('/behavior\s*:/i', 'blocked:', $safeCss);
                
                $document->head[] = '<style id="peopleinside-admin-custom-css">' . $safeCss . '</style>';
            }
        }),
];
