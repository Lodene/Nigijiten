<?php

namespace App\Http\Controllers;

use App\Services\ApiAnime;
use Illuminate\Http\Request;
use Inertia\Inertia;


class HomeController extends Controller{
    
    public function home(){
        $anilist = new ApiAnime();
        $url = $anilist->popularity();
        $url = $anilist->numberData($url, 15);
        $data = $anilist->getJson($url);
        // if($serieInfo->apiStatus == "error"){
        //     return Inertia::render('Site/Salut');
        // }
        // dd($data->data);
        return Inertia::render('Home', [
            "datas" => $data->data
        ]);
    }
}
