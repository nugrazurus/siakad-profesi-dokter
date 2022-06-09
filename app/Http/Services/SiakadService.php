<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

class SiakadService
{
    protected $dpna_url = 'http://servicedpna.untan.ac.id';
    protected $siakad_url = 'http://service.siakad.untan.ac.id/datasnap/rest/tservermethods1';

    public function __construct(Client $client)
    {
        $this->client = new $client;
    }

    public function getMakulDosen($iddosen)
    {
        $response = $this->client->get("{$this->dpna_url}/getjadwalmkbydosen/$iddosen");
        return json_decode($response->getBody(), true);
    }

    public function getMhsMakul($idjadwal)
    {
        $response = $this->client->get("{$this->dpna_url}/getmhsmkperprogdi/$idjadwal");
        return json_decode($response->getBody(), true);
    }

    public function loginDosen($username, $password)
    {
        $response = $this->client->get("{$this->siakad_url}/logindosen/X$username/X$password");
        return json_decode($response->getBody(), true);
    }

    public function loginMahasiswa($username, $password)
    {
        $response = $this->client->get("{$this->siakad_url}/loginmhs/$username/X$password");
        return json_decode($response->getBody(), true);
    }
}
