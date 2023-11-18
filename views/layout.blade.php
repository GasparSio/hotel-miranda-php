<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
</head>
<body>
    <header class="header__section">
        <div class="header__section-ham-menu">
            <span class="hamIcon"><img src="./img/home/img-hamb.png" alt="Hamburg menu icon" class="icon-menu--big"></span>
            <span class="crossIcon"><img src="./img/home/img-cross.png" alt="Cross menu icon" class="icon-menu--cross inactive"></span>
        </div>
        <div class="header__section-icon">
            <div class="icon_section-H">
                <span>H</span>
            </div>
            <div class="icon_section-HM">
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
    <div>
        @yield('content')
    </div>
<footer>
    <section class="footer__section" style="background-image: url(./img/home/Footer.png)">
        <div class="footer__section-info-container">
            <div class="footer__section-title-container">
                <div class="info-container-icon">
                    <span class="title-h">H</span>
                </div>
                <div class="info-container-title">
                    <span class="title-hotel">HOTEL</span>
                    <span class="title-miranda">MIRANDA</span>
                </div>
            </div>
            <div class="footer__section-paragraph-container">
                <p>
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
            </div>
            <div class="footer__section-icons-container">
                <img src="./img/home/footer-social1.png" alt="social media icon">
                <img src="./img/home/footer-social2.png" alt="social media icon" class="twitter-icon">
                <img src="./img/home/footer-social3.png" alt="social media icon">
                <img src="./img/home/footer-social4.png" alt="social media icon">
                <img src="./img/home/footer-social5.png" alt="social media icon">
            </div>
        </div>
        <div class="footer__section-services-container">
            <h1>Services.</h1>
            <div class="footer__section-services-list-container">
                <div class="footer__section-services-list">
                    <span>+ Resturent & Bar</span>
                    <span>+ Swimming Pool</span>
                    <span>+ Wellness & Spa</span>
                    <span>+ Restaurant</span>
                    <span>+ Conference Room</span>
                    <span>+ Coctail Party House</span>
                </div>
                <div class="footer__section-services-list2">
                    <span>+ Gaming Zone</span>
                    <span>+ Marrige Party</span>
                    <span>+ Party Planning</span>
                    <span>+ Tour Consultancy</span>
                </div>
            </div>
        </div>
        <div class="footer__section-contact-container">
            <h1>Contact Us.</h1>
            <div class="footer__section-contact-info">
                <div class="footer__section-phone">
                    <div class="footer__section-image">
                        <img src="./img/home/footer-icon-contact1.png" alt="icon phone">
                    </div>
                    <div class="footer__section-number">
                        <span class="span-title">Phone Number</span>
                        <span class="span-number">+987 876 765 76 577</span>
                    </div>
                </div>
                <div class="footer__section-phone">
                    <div class="footer__section-image">
                        <img src="./img/home/footer-icon-contact2.png" alt="icon mail">
                    </div>
                    <div class="footer__section-number">
                        <span class="span-title">Phone Number</span>
                        <span class="span-number">+987 876 765 76 577</span>
                    </div>
                </div>
                <div class="footer__section-phone">
                    <div class="footer__section-image">
                        <img src="./img/home/footer-icon-contact3.png" alt="icon map">
                    </div>
                    <div class="footer__section-number">
                        <span class="span-title">Phone Number</span>
                        <span class="span-number">+987 876 765 76 577</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer__section2">
        <div class="footer__section-copyright-container">
            <div class="footer__section-copyright"><span>Copyright By@Example - 2020</span></div>
            <div class="footer__section-terms"><span>Terms of use | Privacy Environmental Policy</span></div>
        </div>
    </section>
</footer>
    
</body>
</html>





