
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "\TP-site-informatique-cinema\config\config.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '\TP-site-informatique-cinema\vendor\autoload.php');
use GuzzleHttp\Client;

function pretty_print_r($var): void
{
    echo '<pre>' . print_r($var, true) . '</pre>';
}
// --------------------------------------------------------------------------------------------------------------------------------------------


function get_client()
{
    $client = new GuzzleHttp\Client();
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

function get_page(){
    if(isset($_GET['page']) && !empty($_GET['page'])){
        return $_GET['page'];
    }
    else{
        return $_GET['page']=1;
    }
}



function get_films(){
    $client = get_client();
    return make_request($client, starURL . '/movie/popular' . starKey . endURL.'&language=fr&page='.get_page().'')->results;
}


function get_films_id($id){
    $client = get_client();
    return make_request($client, starURL . '/movie/'. $id . starKey . endURL.'&language=fr');
}

function get_search($search){
    $client = get_client();
    return make_request($client, starURL . '/search/movie' . starKey . endURL.'&language=fr&query='.$search.'')->results;
}

function is_search_exist(){
    return isset($_POST['search']);
}

function is_search_empty(){
    return empty($_POST['search']);
}


?>