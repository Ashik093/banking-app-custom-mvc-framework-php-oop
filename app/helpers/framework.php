<?php
if(!function_exists('view')){
    function view(string $path, array $data=[])
    {
        extract($data);
        require_once __DIR__."./../../views/{$path}.php";
    }
}
if(!function_exists('redirect')){
    function redirect(string $url) {
        header("Location: $url");
    } 
}
if(!function_exists('redirectWithData')){
    function redirectWithData(string $url,array $data) {
        $query = http_build_query($data);
        header("Location: $url?$query");
        exit;
    } 
}
