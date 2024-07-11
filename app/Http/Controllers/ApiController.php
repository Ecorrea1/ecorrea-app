<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://test.drogueriahofmann.cl/usuarios/ListTableUsers');
        $dataApi = json_decode($response->getBody(), true);

        return view('api.index', ['data' => $dataApi]);
    }
}
