@extends('layout')
@section('title', 'Room Detail')

@section('content')

    <header class="header__section">
        <div class="header__section-ham-menu">
            <span class="hamIcon"><img src="./img/home/img-hamb.png" alt="Hamburg menu icon" class="icon-menu--big"></span>
            <span class="crossIcon"><img src="./img/home/img-cross.png" alt="Cross menu icon" class="icon-menu--cross inactive"></span>
        </div>
        <div class="header__section-icon">
            <div class="icon_section-H">
                <!-- <img src="./img/img-icon.png" alt="Logo icon"> -->
                <span>H</span>
            </div>
            <div class="icon_section-HM">
                <!-- <img src="./img/img-icon-title.png" alt="Title icon"> -->
                <span class="section__HM-hotel">HOTEL</span>
                <span class="section__HM-miranda">MIRANDA</span>
            </div>
        </div>
        <div class="header__section-links">
            <a href="./about.html" class="section-why">About Us</a>
            <a href="./rooms-grid.html" class="section-benefits">Rooms</a>
            <a href="./offers.html" class="section-prices">Offers</a>
            <a href="./contact.html" class="section-contact">Contact</a>
        </div>
        <div class="header__section-search-account">
            <img src="./img/home/img-account.png" alt="Account icon">
            <img src="./img/home/img-search.png" alt="Search icon">
        </div>
        <div class="header__mob-menu inactive">
            <a href="./about.html" class="section-why">About Us</a>
            <a href="./rooms-grid.html" class="section-benefits">Rooms</a>
            <a href="./offers.html" class="section-prices">Offers</a>
            <a href="./contact.html" class="section-contact">Contact</a>
        </div>  
    </header>
    <section class="room__detail-about__section">
        <div class="taketour_section-header-rect"></div>
        <div class="room__detail-about__section-general">
            <div class="room__detail-about__section-info">
                <h2>THE ULTIMATE LUXURY</h2>
                <h1>Ultimate Room</h1>
            </div>
            <div class="room__detail-about__section-links">
                <a href="./index.html" class="room-detail-link-home">Home</a>
                <span>|</span>
                <a href="./room-detail.html" class="room-detail-link-about">Room Details</a>
            </div>
        </div>
    </section>
    <section class="room__detail-availability">
        <div class="room__detail-availability-container">
            <div class="room__detail-title-price-container">
                <div class="room__detail-title">
                    <h2>Double Bed</h2>
                    <h1>Luxury Double Bed</h1>
                </div>
                <div class="room__detail-price">
                    <span class="detail-price">$345</span>
                    <span class="detail-night">/Night</span>
                </div>
            </div>
            <div class="room__detail-image">
                <img src="./img/rooms-grid/room-1.avif" alt="room 1">
            </div>
            <div class="room__detail-form-container">
                <h1>Check Availability</h1>
                <form action="/submit" method="post">

                    <label for="check-in">Check in</label>
                    <input type="date" id="check-in" name="check-in" required>
            
                    <label for="check-out">Check out</label>
                    <input type="date" id="check-out" name="check-out" required>
            
                    <label for="opcion_1">Rooms</label>
                    <select id="opcion_1" name="opcion_1">
                        <option value="opcion1">01 Room</option>
                        <option value="opcion2">02 Rooms</option>
                        <option value="opcion3">03 Rooms</option>
                        <option value="opcion4">04 Rooms</option>
                    </select>
            
                    <label for="opcion_2">Guests</label>
                    <select id="opcion_2" name="opcion_2">
                        <option value="opcion1">01 Guest</option>
                        <option value="opcion2">02 Guests</option>
                        <option value="opcion3">03 Guests</option>
                        <option value="opcion4">04 Guests</option>
                        <option value="opcion5">05 Guests</option>
                        <option value="opcion6">06 Guests</option>
                        <option value="opcion7">07 Guests</option>
                        <option value="opcion8">08 Guests</option>
                        <option value="opcion9">09 Guests</option>
                        <option value="opcion10">10 Guests</option>
                    </select>
            
                    <input type="submit" value="Check Availability" class="room__detail-form-button">
            
                </form>
            </div>
            <div class="room__detail-info-container">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
        </div>
    </section>
    <section class="room__detail-amenities">
        <h1>Amenities</h1>
        <div class="room__detail-amenities-line"></div>
        <div class="room__detail-amenities-info-container">
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-air-cond.png" alt="image amenities">
                <span>Air conditioner</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-breakfast.png" alt="image amenities">
                <span>Breakfast</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-cleaning.png" alt="image amenities">
                <span>Cleaning</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-grocery.png" alt="image amenities">
                <span>Grocery</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-shop near.png" alt="image amenities">
                <span>Shop near</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-online.png" alt="image amenities">
                <span>24/7 Online Support</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-security.png" alt="image amenities">
                <span>Smart Security</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-wifi.png" alt="image amenities">
                <span>High speed WiFi</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-kitchen.png" alt="image amenities">
                <span>Kitchen</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-shower.png" alt="image amenities">
                <span>Shower</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-bad.png" alt="image amenities">
                <span>Single bed</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-towels.png" alt="image amenities">
                <span>Towels</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-locker.png" alt="image amenities">
                <span>Strong Locker</span>
            </div>
            <div class="room__detail-amenities-info">
                <img src="./img/room-detail/img-team.png" alt="image amenities">
                <span>Expert Team</span>
            </div>
        </div>

    </section>
    <section class="room__detail-profile">
        <div class="room__detail-profile-image">
            <img src="./img/room-detail/img-profile.jpg" alt="image profile" class="profile-image-face">
            <img src="./img/room-detail/Ellipse 4.png" alt="circle brown" class="profile-image-circle">
            <img src="./img/room-detail/profile-check.png" alt="image check" class="profile-image-check">
        </div>
        <div class="room__detail-profile-info">
            <h1>Gaspar Sio</h1>
            <h2>Founder, Qux Co.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
    </section>
    <section class="room__detail-cancellation">
        <h1>Cancellation</h1>
        <div class="room__detail-cancellation-line"></div>
        <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </section>
    <section class="room__detail-related-rooms">
        <div class="room__detail-title">
            <h1>Related Rooms</h1>
        </div>
        <div class="room__detail-line"></div>
        <div class="room__detail-slider-container">
            <div class="room__detail-cards-container">
                <div class="room__detail-rooms-slider card-detail1" id="cardContainer">
                    <img src="./img/rooms-grid/room-1.avif" alt="room 1">
                    <div class="room__detail-section-amenities">
                        <img src="./img/home/img-amenities-air-condition.png" alt="air condition image">
                        <img src="./img/home/img-amenities-bar.png" alt="drink image">
                        <img src="./img/home/img-amenities-bed.png" alt="bed image">
                        <img src="./img/home/img-amenities-gim.png" alt="gim image">
                        <img src="./img/home/img-amenities-not-smoke.png" alt="not-smoke image">
                        <img src="./img/home/img-amenities-parking.png" alt="car image">
                        <img src="./img/home/img-amenities-wifi.png" alt="wifi image">
                    </div>
                    <h3>Minimal Duplex Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__detail-grid-price">
                        <span>$345/Night</span>
                        <a href="room-detail.html">Booking Now</a>
                    </div>
                </div>
                <div class="room__detail-rooms-slider card-detail2">
                    <img src="./img/rooms-grid/room-3.avif" alt="room 3">
                    <div class="room__detail-section-amenities">
                        <img src="./img/home/img-amenities-air-condition.png" alt="air condition image">
                        <img src="./img/home/img-amenities-bar.png" alt="drink image">
                        <img src="./img/home/img-amenities-bed.png" alt="bed image">
                        <img src="./img/home/img-amenities-gim.png" alt="gim image">
                        <img src="./img/home/img-amenities-not-smoke.png" alt="not-smoke image">
                        <img src="./img/home/img-amenities-parking.png" alt="car image">
                        <img src="./img/home/img-amenities-wifi.png" alt="wifi image">
                    </div>
                    <h3>Minimal Duplex Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__detail-grid-price">
                        <span>$345/Night</span>
                        <a href="room-detail.html">Booking Now</a>
                    </div>
                </div>
            </div>
            <button class="prev-btn-detail" id="prevBtn"><img src="./img/home/img-slider-left-arrow.png" alt="left arrow"></button>
            <button class="next-btn-detail" id="nextBtn"><img src="./img/home/img-slider-right-arrow.png" alt="right arrow"></button>
        </div>
    </section>

    <script src="./js/header.js"></script>
    <script src="./js/room-detail.js"></script>

@endsection