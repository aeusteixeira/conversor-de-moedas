<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrencyConverterController extends Controller
{
    public function search($to, $from)
    {
        $url = file_get_contents('https://economia.awesomeapi.com.br/last/'.$to.'-'.$from);
        return $url;
    }
}
