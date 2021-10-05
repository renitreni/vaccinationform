<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class VaccineFormController extends Controller
{
    public function index()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => 'https://bkintanar-psgc.herokuapp.com/api/regions?per_page=100',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'GET',
            CURLOPT_HTTPHEADER     => [
                'Accept: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $regions = json_decode($response)->data;

        Inertia::setRootView('layouts/index');

        return Inertia::render('VaccineForm', [
            'data' => [
                'regions'             => $regions,
                'get_provinces_link'  => route('get.provinces'),
                'get_cities_link'     => route('get.cities'),
                'get_baranggays_link' => route('get.baranggays'),
            ],
        ]);
    }

    public function getProvinces(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => "https://bkintanar-psgc.herokuapp.com/api/provinces?per_page=100",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'GET',
            CURLOPT_HTTPHEADER     => [
                'Accept: application/json',
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response)->data;
    }

    public function getCities(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => "https://bkintanar-psgc.herokuapp.com/api/cities?per_page=100",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'GET',
            CURLOPT_HTTPHEADER     => [
                'Accept: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response)->data;
    }
}
