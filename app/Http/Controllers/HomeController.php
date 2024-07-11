<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index(){
        try{

            $client = new Client();
            $response = $client->request('GET', 'https://test.drogueriahofmann.cl/usuarios/ListTableUsers');
            $dataApi = json_decode($response->getBody(), true);
    
            return view('home', ['datos' => $dataApi]);
        }catch (\GuzzleHttp\Exception\RequestException $e){
            // Manejo del error
        }
    }

    

    public function edit($id)
    {
        // Lógica para cargar el formulario de edición
        // Puedes obtener los datos del registro con el ID proporcionado
        // y pasarlos a la vista de edición
        return view('home.edit', ['id' => $id]);
    }
}
