<?php

/**
 * @author ToiYeuCNTT.Blogspot.com
 * @copyright 2021
 */

$jwt = "eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJncm91bmQiLCJpc3MiOiJhZHJvcG9mbGlxdWlkLmNvbSIsImV4cCI6MTYzNDcwOTczNCwiaWF0IjoxNjM0NjczNzM0fQ.reNFxh6H2v0wWWBW4u99q8aodfqejl0BuBmysqf8-64";



function CallAPI($endpoint, $method, $jwt = false, $data = false)
{

    $url = "http://localhost:8080/".$endpoint;
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    if($jwt)
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$jwt));
    else
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return json_decode($result);
}
?>