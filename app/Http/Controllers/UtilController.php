<?php

namespace NewsCMS\Http\Controllers;

use NewsCMS\Http\Requests;

class UtilController extends Controller
{
    public function manifest()
    {
        $asset_path = config('newscms.favicon.path');
        $icons = [
            [
                'src' => \Theme::asset($asset_path . 'android-chrome-36x36.png'),
                'sizes' => '36x36',
                'type' => 'image/png',
                'density' => 0.75
            ],
            [
                'src' => \Theme::asset($asset_path . 'android-chrome-48x48.png'),
                'sizes' => '48x48',
                'type' => 'image/png',
                'density' => 1
            ],
            [
                'src' => \Theme::asset($asset_path . 'android-chrome-72x72.png'),
                'sizes' => '72x72',
                'type' => 'image/png',
                'density' => 1.5
            ],
            [
                'src' => \Theme::asset($asset_path . 'android-chrome-96x96.png'),
                'sizes' => '96x96',
                'type' => 'image/png',
                'density' => 2
            ],
            [
                'src' => \Theme::asset($asset_path . 'android-chrome-144x144.png'),
                'sizes' => '144x144',
                'type' => 'image/png',
                'density' => 3
            ],
            [
                'src' => \Theme::asset($asset_path . 'android-chrome-192x192.png'),
                'sizes' => '192x192',
                'type' => 'image/png',
                'density' => 4
            ],
        ];
        return response()->json(['name' => config('newscms.company.name'), 'icons' => $icons]);
    }
}
