<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
       /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        $stateCodes = \DB::table('rto_details')->pluck('rto_no');
        foreach ($stateCodes as $stateCode) {
            $stateCode = trim(strtolower($stateCode));
            $stateCodeWithoutHyphen = str_replace('-', '', $stateCode);
            $url = url("{$stateCodeWithoutHyphen}-rto-vehicle-registration-details-number");
            $sitemap->add(Url::create($url));
            \Illuminate\Support\Facades\Log::info('sitemap method'.json_encode($sitemap));
        }
        $stateCodes = \DB::table('state_code')->pluck('state');
        foreach ($stateCodes as $stateCode) {
            $stateCode = trim(strtolower($stateCode));
            $stateCodeWithoutSpace = str_replace(' ', '', $stateCode);
            $url = url("{$stateCodeWithoutSpace}-an-rto-vehicle-registration-details");
            $sitemap->add(Url::create($url));
            \Illuminate\Support\Facades\Log::info('sitemap method'.json_encode($sitemap));
        }
        return $sitemap->writeToFile(public_path('sitemap.xml'));
            
    }
}
