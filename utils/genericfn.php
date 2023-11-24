<?php
function getAmenityImages()
{
    $amenityImages = [
        '<i class="fa-solid fa-bed"></i>',
        '<i class="fa-solid fa-wifi"></i>',
        '<i class="fa-solid fa-car"></i>',
        '<i class="fa-regular fa-snowflake"></i>',
        '<i class="fa-solid fa-dumbbell"></i>',
        '<i class="fa-solid fa-ban-smoking"></i>',
        '<i class="fa-solid fa-martini-glass-citrus"></i>',
        '<i class="fa-solid fa-mug-hot"></i>',
        '<i class="fa-solid fa-person-swimming"></i>',
        '<i class="fa-solid fa-shower"></i>',
        '<i class="fa-solid fa-bell-concierge"></i>',
        '<i class="fa-solid fa-hot-tub-person"></i>',
        '<i class="fa-solid fa-lock"></i>',
        '<i class="fa-solid fa-sun"></i>',
        '<i class="fa-solid fa-taxi"></i>',
    ];

    shuffle($amenityImages);
    return array_slice($amenityImages, 0, 8);
}

function getRandomImage()
{
    $arrayImages = [
        '<img src="/img/home/pic-slider1.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider2.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider3.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider4.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider5.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider6.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider7.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider8.jpg" alt="Room image">',
        '<img src="/img/home/pic-slider9.jpg" alt="Room image">',
    ];
    $indiceAleatorio = array_rand($arrayImages);
    return $arrayImages[$indiceAleatorio];
}
