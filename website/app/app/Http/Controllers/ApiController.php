<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getMenu()
    {
        $client = new Client();
        $response = $client->get('http://restapi:3000/data');
        $data = json_decode($response->getBody(), true);

        // Debugging: Log the data structure
        \Log::info('Fetched data: ', $data);

        // Check if data is null or empty
        if (is_null($data) || empty($data)) {
            \Log::error('No data fetched from REST API');
        }

        return view('menu', ['data' => $data]);
    }
}