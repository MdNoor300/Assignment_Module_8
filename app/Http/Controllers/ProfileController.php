<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    function index($id){
        $name = "Donald Trump";
        $age = "75";

        $data = [
            "id" => $id,     
            "name" => $name,
            "age" => $age,
        ];

        $Name = 'access_token';
        $Value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $response = new Response();
        $response->withCookie(cookie(
            $Name,
            $Value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        ));

        return response()->json($data, 200, [], JSON_PRETTY_PRINT)->withCookie($Name, $Value, $minutes, $path, $domain, $secure, $httpOnly);

    }

}
