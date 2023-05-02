<?php

namespace App\Services;

class ApiAnime{
    protected $url ="https://kitsu.io/api/edge/anime?";

    public function getJson($url){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ));
        $data = curl_exec($curl);
        curl_close($curl);
        return json_decode($data);
    }

    public function popularity($url = null): String {
        if($url == null){
            return $this->url . "sort=popularityRank";
        } else {
            return $url . "&sort=popularityRank";
        }
    }

    public function numberData($url = null, $number): String {
        if($url == null){
            return $this->url . "page[limit]=" . $number;;
        } else {
            return $url . "&page[limit]=" . $number;
        }
    }
}

