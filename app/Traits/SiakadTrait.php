<?php 

namespace App\Traits;

use GuzzleHttp\Client;

trait SiakadTrait {

    private $idfak = 10;
    private $idprogdi = 391;
    private $idperiode = 377;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://servicedpna.untan.ac.id/'
        ]);
    }

    public function getMakulProgdi()
    {
        $uri = "getprogdi/{$this->idprogdi}/{$this->idperiode}";
        $response = $this->client->get($uri);
        return json_decode($response->getBody(), true);
    }

    public function getMhsMkProgdi($idjadwal)
    {
        $response = $this->client->get("getmhsmkperprogdi/$idjadwal");
        return json_decode($response->getBody(), true);
    }
}