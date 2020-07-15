<?php

function presentPrice($price)
{
    return sprintf('%d DA', $price);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path)
{
    //return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
    return $path  ? asset('storage/'.$path) : asset('img/not-found.jpg');
}



