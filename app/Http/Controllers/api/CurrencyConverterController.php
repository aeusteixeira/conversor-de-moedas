<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{
    public function search($coin1, $coin2)
    {
        $url = file_get_contents('https://economia.awesomeapi.com.br/last/'.$coin1.'-'.$coin2);
        return $url;
    }
}
