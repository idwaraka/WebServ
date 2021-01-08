<?php

    $json = file_get_contents('https://geolocation-db.com/json');
    $data = json_decode($json);

    print $data->country_code . '<br>';
    print $data->country_name . '<br>';
    print $data->state . '<br>';
    print $data->city . '<br>';
    print $data->postal . '<br>';
    print $data->latitude . '<br>';
    print $data->longitude . '<br>';
    print $data->IPv4 . '<br>';

?>