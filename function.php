
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\index.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\config\config.php");
require_once './vendor/autoload.php';

function pretty_print_r($var): void
{
    echo '<pre>' . print_r($var, true) . '</pre>';
}
// --------------------------------------------------------------------------------------------------------------------------------------------

use GuzzleHttp\Client;

function get_client()
{
    $client = new Client();
    return $client;
}
// pretty_print_r(get_client());

function make_request(Client $client, string $url)
{
    $response = $client->get($url);
    $result = $response->getBody()->getContents();
    $result = (json_decode($result));

    return $result;
}

function get_films()
{
    $client = get_client();
    return make_request($client, starURL . '/movie/popular' . starKey . endURL)->results;
}

// pretty_print_r(get_films());

// function getImg($array){
//     $arrayImg = [];
//     foreach($array as $img){
//         array_push($arrayImg, $img->poster_path);
//     }
//     return $arrayImg;
// }
// pretty_print_r(getImg(get_films()));

$movies = get_films();


foreach ($movies as $element) {
    $title = $element->original_title;
    $img = $element->poster_path;
    $oversiew = $element->overview;
    require './composant.php';
}

// pretty_print_r(getElement(get_films()));


?>