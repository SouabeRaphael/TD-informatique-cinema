
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\index.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\config\config.php");
require_once './vendor/autoload.php';

function pretty_print_r($var): void {
    echo '<pre>' . print_r($var, true) . '</pre>';
}
// --------------------------------------------------------------------------------------------------------------------------------------------

use GuzzleHttp\Client;

function get_client() {
    $client = new Client();
    return $client;
}
// pretty_print_r(get_client());

function make_request(Client $client, string $url) {
    $response = $client->get($url);
    $result = $response->getBody()->getContents();
    $result = (json_decode($result, JSON_PRETTY_PRINT));

    return pretty_print_r($result);
}

function get_films(){
    $client = get_client();
    return make_request($client, starURL.'/movie/popular'.starKey.endURL);
}

function get_films_by_id(){
    $client = get_client();
    return make_request($client, starURL.'/movie/1402'.starKey.endURL);
}
// get_films();
get_films_by_id();


// /tv/1402

?>