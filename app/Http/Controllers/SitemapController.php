<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


class SitemapController extends Controller
{
    public function generate()
    {
        \Illuminate\Support\Facades\Log::info('Entering SitemapController@generate method');
        $sitemap = Sitemap::create();

        // Fetch state codes from the database
        $stateCodes = \DB::table('rto_details')->pluck('rto_no');
        Log::info("site :::".json_decode($stateCode));
        dd($sitemap->getUrls());
        // Generate URLs based on state codes
        foreach ($stateCodes as $stateCode) {
            $url = url("/state/{$stateCode}"); // Adjust the URL structure as needed
            $sitemap->add(Url::create($url));
        }

        return $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}