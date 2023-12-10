<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function store(Request $request){
        try{
            $data = $request->all();

            $request->validate([
                'name'=> 'string|required',
                'email'=> 'email|required|unique:clients',
                'date_birth' => 'date_format:Y-m-d|required',
                'cpf'=> 'string|required|unique:clients',
                'adress'=> 'string|required'
            ]);
            $client = Client::create($data);
            return $client;
        } catch (Exception $exception){
            return $this->error($exception->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }
}