<?php
	require_once __DIR__ .'/vendor/autoload.php';

    $sign = \GDS\Zodiac\Zodiac::getZodiacSign('15.01.1995');

    echo "<pre>";
    print_r(\GDS\Zodiac\Zodiac::getZodiacInformation($sign));