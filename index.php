<?php

use GuzzleHttp\Client;

require_once "vendor/autoload.php";

const NOTTINGHAM_NORTH = 53.051698;
const NOTTINGHAM_SOUTH = 52.875512;
const NOTTINGHAM_EAST = -1.018570;
const NOTTINGHAM_WEST = -1.337860;

const REGION = 'gb';

const GEOCODE_API_URL = 'https://maps.googleapis.com/maps/api/geocode/json';

$params = [
    'region' => REGION,
    'bounds' => NOTTINGHAM_SOUTH . ',' . NOTTINGHAM_WEST . '|' . NOTTINGHAM_NORTH . ',' . NOTTINGHAM_EAST,
    'address' => $_GET['place']
];

$guzzle = new Client();

$result = $guzzle->get(GEOCODE_API_URL, ['query' => $params]);

print_r($result->getBody());
