<?php

$is_auth =  rand(0, 1);
$user_name = 'Сергей';
$categories_list = [
    'promo__item--boards' => 'Доски и лыжи',
    'promo__item--attachment' => 'Крепления',
    'promo__item--boots' => 'Ботинки',
    'promo__item--clothing' => 'Одежда',
    'promo__item--tools' => 'Инструменты',
    'promo__item--other' => 'Разное'
];
$announcements_list = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10999,
        'url' => 'img/lot-1.jpg',
        'description' => 'Cноуборд'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'url' => 'img/lot-2.jpg',
        'description' => 'Cноуборд'
    ],
    [
        'name' => 'Крепление Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'url' => 'img/lot-3.jpg',
        'description' => 'Крепление'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'url' => 'img/lot-4.jpg',
        'description' => 'Ботинки для сноуборда'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 7500,
        'url' => 'img/lot-5.jpg',
        'description' => 'Куртка для сноуборда'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'url' => 'img/lot-6.jpg',
        'description' => 'Маска для сноуборда'
    ],
];

function include_template($name,$data)
{
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require($name);

    $result = ob_get_clean();

    return $result;
}

function fun($sum, $rub = true)
{
    $sum = ceil($sum);

    if ($sum >= 1000){
        $price = number_format($sum, 0, '.', ' ');
    }
    else{
        $price = $sum;
    }

    if ($rub){
        return $price."<b class=\"rub\">р</b>";
    }
    else{
        return $price;
    }
}

function count_time(){
    $dateNow = strtotime("now");
    $dateTomorrow = strtotime("tomorrow");
    $diff = $dateTomorrow - $dateNow;
    $remain_hours = floor($diff/(3600));
    $remain_min = floor(($diff-$remain_hours*(3600))/(60));
    return "$remain_hours:$remain_min";
}
