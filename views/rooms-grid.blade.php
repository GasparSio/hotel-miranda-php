<?php
include '../config.php';

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
$photosImages = [
    '<img src="../img/home/pic-slider1.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider2.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider3.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider4.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider5.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider6.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider7.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider8.jpg" alt="Room image">',
    '<img src="../img/home/pic-slider9.jpg" alt="Room image">',
];
?>



@extends('layout')
@section('title', 'Rooms Grid')

@section('content')

<section class="rooms__about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="rooms__about__section-general">
        <div class="rooms__about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>Ultimate Room</h1>
        </div>
        <div class="rooms__about__section-links">
            <a href="./index.php" class="rooms-link-home">Home</a>
            <span>|</span>
            <a href="./rooms-grid.php" class="rooms-link-about">Rooms</a>
        </div>
    </div>
</section>
<section class="rooms__slider__section">
    <div class="rooms-slider-container">
        @foreach ($rooms as $room)
        <div class="rooms-slider">
            <?php
            $indiceAleatorio = array_rand($photosImages);
            $imagenAleatoria = $photosImages[$indiceAleatorio];
            ?>
            <?php echo $imagenAleatoria; ?>
            <div class="rooms__section-amenities">
                <?php
                // Mezclar y seleccionar imágenes para cada habitación
                shuffle($amenityImages);
                $selectedImages = array_slice($amenityImages, 0, 8);
                ?>
                @foreach ($selectedImages as $image)
                {!! $image !!}
                @endforeach
            </div>
            <h3>{{$room['room_type']}}</h3>
            <p>{{$room['description']}}</p>
            <div class="rooms__grid-price">
                <span>$ {{$room['price']}} /Night</span>
                <a href="./room-detail.php">Booking Now</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="rooms-pagination">
        <button class="rooms-prev"><img src="../img/rooms-grid/prev-arrow.png" alt=""></button>
        <div class="rooms-pages">
            <!-- Los botones de las páginas se generarán dinámicamente con JavaScript -->
        </div>
        <button class="rooms-next"><img src="../img/rooms-grid/next-arrow.png" alt=""></button>
    </div>
</section>



@endsection