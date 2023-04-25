<?php

namespace App\Http\Controllers;

use Phpfastcache\Helper\Psr16Adapter;

class InstagramController extends Controller
{

    public function index()
    {
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'username', 'password', new Psr16Adapter('Files'));
        $instagram->login();
        $instagram->saveSession();
        $account = $instagram->getAccount('Larimar');
        $accountMedias = $account->getMedias();

        foreach ($accountMedias as $key => $accountMedia) {
            $images[$key] = str_replace("&amp;", "&", $accountMedia->getimageHighResolutionUrl());
            $path = $accountMedia->getimageHighResolutionUrl();
            $imageName = $key . '.png';
            $img = public_path('insta/images/') . $imageName;
            file_put_contents($img, file_get_contents($path));
        }
        return view('gallery', compact('images'));
    }
}
