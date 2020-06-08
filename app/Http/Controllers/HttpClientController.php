<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HttpClientController extends Controller
{
    public function getclient(){
        $response = Http::get('https://thongtindoanhnghiep.co/api/city');
        $data=$response->json();
        print_r($data);
    }
}
