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
$arrayImages = [
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
@section('title', 'Offers')

@section('content')

<section class="room__detail-about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="room__detail-about__section-general">
        <div class="room__detail-about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>Our Offers</h1>
        </div>
        <div class="room__detail-about__section-links">
            <a href="./index.php" class="room-detail-link-home">Home</a>
            <span>|</span>
            <a href="./offers.php" class="room-detail-link-about">Offers</a>
        </div>
    </div>
</section>


@foreach ($rooms as $room)
<section class="offers__room-section">
    <div class="offers__room-info-container">
        <div class="offers__room-image">
            <?php
            $indiceAleatorio = array_rand($arrayImages);
            $imagenAleatoria = $arrayImages[$indiceAleatorio];
            ?>
            <?php echo $imagenAleatoria; ?>
        </div>
        <div class="offers__room-price-container">
            <div class="offers__room-title">
                <!-- <h2>Double Bed</h2> -->
                <h1>{{$room['room_type']}}</h1>
            </div>
            <div class="offers__room-price-section">
                <div class="offers__room-price-high">
                    <span class="price-high-number">$ {{$room['price']}}</span>
                    <span class="price-high-text">/Night</span>
                </div>
                <div class="offers__room-price-low">
                    @php
                    $calculatedPrice = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
                    @endphp
                    <span class="price-low-number">$ {{ $calculatedPrice }}</span>
                    <span class="price-low-text">/Night</span>
                </div>
            </div>
        </div>
    </div>
    <div class="offers__room-line"></div>
    <div class="offers__room-text-amen-container">
        <div class="offers__room-text-container">
            <p>{{$room['description']}}</p>
        </div>
        <div class="offers__room-amenities-container">
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-air-cond.png" alt="image amenities">
                <span>Air conditioner</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-breakfast.png" alt="image amenities">
                <span>Breakfast</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-cleaning.png" alt="image amenities">
                <span>Cleaning</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-grocery.png" alt="image amenities">
                <span>Grocery</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-shop near.png" alt="image amenities">
                <span>Shop near</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-online.png" alt="image amenities">
                <span>24/7 Online Support</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-wifi.png" alt="image amenities">
                <span>High speed WiFi</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-kitchen.png" alt="image amenities">
                <span>Kitchen</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-shower.png" alt="image amenities">
                <span>Shower</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-bad.png" alt="image amenities">
                <span>Single bed</span>
            </div>
            <div class="offers__room-amenities-info">
                <img src="../img/room-detail/img-towels.png" alt="image amenities">
                <span>Towels</span>
            </div>
        </div>
        <div class="offers__room-button-container">
            <a href="room-detail.php">Book Now</a>
        </div>
    </div>
</section>
@endforeach


<section class="offers__detail-related-rooms">
    <div class="offers__detail-title">
        <h2>Popular List</h2>
        <h1>Popular Rooms</h1>
    </div>
    <div class="offers__detail-line"></div>
    <div class="offers__detail-slider-container">
        <div class="offers__detail-cards-container">

            @foreach($rooms as $room)
            <div class="offers__detail-rooms-slider card-detail1">
                <img src="../img/rooms-grid/room-8.avif" alt="room 1">
                <div class="offers__detail-section-amenities">
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
                <div class="offers__detail-grid-price">
                    <span>${{$room['price']}} /Night</span>
                    <a href="room-detail.php">Booking Now</a>
                </div>
            </div>
            @endforeach
        </div>
        <button class="prev-btn-detail-offers" id="prevBtn"><img src="../img/home/img-slider-left-arrow.png" alt="left arrow"></button>
        <button class="next-btn-detail-offers" id="nextBtn"><img src="../img/home/img-slider-right-arrow.png" alt="right arrow"></button>
    </div>
</section>



@endsection