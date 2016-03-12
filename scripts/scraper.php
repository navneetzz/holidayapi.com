<?php

$base_url       = 'https://en.wikipedia.org/wiki/';
$countries_html = file_get_contents($base_url . 'List_of_holidays_by_country');

preg_match_all('/\/wiki\/Public_holidays_in_[a-z_]+/i', $countries_html, $countries);

foreach ($countries as $country_url) {
    $country_html = file_get_contents($base_url . $country_url);

    $xml = simplexml_load_string($country_html);

    print_r($xml);

    exit;
}

