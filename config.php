<?php

require "src/VkGroup.php";


$config = [
    'confirmation_token' => '4e5c0845',
    'service_token'   => '6357b2126357b2126357b212ba6335d014663576357b212398692fcb29ff9aa211e1b20',
    'access_token' => '11c3081c58681d0e432164d6e1577f65451b97b5dc0debd7a0fa2db7697053bd512d6c012c5fc994c55ef',

    'group_id'   => 155042523,
    'background' => 'background.jpg',
    'like_interval' => [
        'from' => '01.07.2017 00:00:00',
        'to' => '', // if empty - now time
    ],
    'user_joined' => [
        'shape' => 'circle',
        'position' => [ // center position
        'x' => 1047,
        'y' => 170,
        ],
        'radius' => 100,
        'first_name' => [
            'font' => 'Roboto-Light.ttf',
            'size' => 28,
            'align' => 'center',
            'color' => [255, 255, 255], // RGB 255,255,255 - White
            'x' => 1047,
            'y' => 310,
            'angle' => 0,
        ],
        'second_name' => [
            'font' => 'Roboto-Light.ttf',
            'size' => 28,
            'align' => 'center',
            'color' => [255, 255, 255],
            'x' => 1047,
            'y' => 345,
            'angle' => 0,
        ],
    ],
    'user_liker' => [
        'shape' => 'circle',
        'position' => [
        'x' => 1388,
        'y' => 170,
        ],
        'radius' => 100,
        'first_name' => [
            'font' => 'Roboto-Light.ttf',
            'size' => 28,
            'align' => 'center',
            'color' => [255, 255, 255],
            'x' => 1388,
            'y' => 310,
            'angle' => 0,
        ],
        'second_name' => [
            'font' => 'Roboto-Light.ttf',
            'size' => 28,
            'align' => 'center',
            'color' => [255, 255, 255],
            'x' => 1388,
            'y' => 345,
            'angle' => 0,
        ],
    ],
];

$VkGroup = new VkGroup();
