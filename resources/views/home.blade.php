@include('partials/header')

<body>

    <!--********************************
   		Code Start From Here 
	******************************** -->
    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader " style="display: none;">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader">
                Guidance of Hope
                <span class="loading-text">GH</span>
            </span>
        </div>
    </div><!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-cart ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_1.png" alt="Cart Image">Books</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_2.png"
                                    alt="Cart Image">Medicine</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_3.png" alt="Cart Image">Dress</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_4.png" alt="Cart Image">Chair</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_5.png" alt="Cart Image">Cloths</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="far fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
    Mobile Menu
  ============================== -->
    @include('partials/mobile')
    <!--==============================Header Area
==============================-->
    @include('partials/nav')


    <!--==============================
Hero Area
==============================-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider1 swiper-fade swiper-initialized swiper-horizontal swiper-autoheight swiper-watch-progress swiper-backface-hidden"
            id="heroSlide1"
            data-slider-options="{&quot;effect&quot;:&quot;fade&quot;, &quot;autoHeight&quot;: &quot;true&quot;}">
            <div class="swiper-wrapper" id="swiper-wrapper-f63b9a98db2dafe5" aria-live="off"
                style="height: 467px; transition-duration: 0ms; transition-delay: 0ms;">

                <div class="swiper-slide swiper-slide-next swiper-slide-prev" role="group" aria-label="1 / 2"
                    style="width: 712px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"
                    data-swiper-slide-index="0">
                    <div class="hero-inner background-image" data-overlay="black4" data-opacity="5"
                        style="background-image: url(&quot;assets/img/hero/training_session.jpg&quot;);">
                        <div class="hero-bg-shape1-1">
                            <img src="assets/img/hero/training_session.jpg" alt="img">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center slideinup" data-ani="slideinup"
                                            data-ani-delay="0.2s" style="animation-delay: 0.2s;">Hope &
                                            Resilience</span>
                                        <h1 class="hero-title text-white">
                                            <span class="title1 slideinup" data-ani="slideinup" data-ani-delay="0.4s"
                                                style="animation-delay: 0.4s;">
                                                Strengthening lives through empowerment </span>
                                            <span class="title1 slideinup" data-ani="slideinup" data-ani-delay="0.4s"
                                                style="animation-delay: 0.4s;">
                                                & support.</span>
                                        </h1>
                                        <div class="btn-wrap justify-content-center slideinup" data-ani="slideinup"
                                            data-ani-delay="0.7s" style="animation-delay: 0.7s;">
                                            <a href="#" id="about" class="th-btn style4">Explore <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            {{-- <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="th-btn style5 popup-video"><i class="fas fa-play me-2"></i> Watch
                                                Video</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="2 / 2"
                    style="width: 712px; opacity: 1; transform: translate3d(-712px, 0px, 0px); transition-duration: 0ms;"
                    data-swiper-slide-index="1">
                    <div class="hero-inner background-image" data-overlay="black4" data-opacity="5"
                        style="background-image: url(&quot;assets/img/hero/gh_3.jpg&quot;);">
                        <div class="hero-bg-shape1-1">
                            <img src="assets/img/hero/gh_3.jpg" alt="img">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">


                                        <span class="sub-title justify-content-center slideinup" data-ani="slideinup"
                                            data-ani-delay="0.2s" style="animation-delay: 0.2s;">Skills
                                            Empowerment</span>
                                        <h1 class="hero-title text-white">
                                            <span class="title1 slideinup" data-ani="slideinup" data-ani-delay="0.4s"
                                                style="animation-delay: 0.4s;">
                                                Equipping individuals with </span>
                                            <span class="title1 slideinup" data-ani="slideinup" data-ani-delay="0.4s"
                                                style="animation-delay: 0.4s;">
                                                the tools for self-reliance. </span>
                                        </h1>
                                        <div class="btn-wrap justify-content-center slideinup" data-ani="slideinup"
                                            data-ani-delay="0.7s" style="animation-delay: 0.7s;">
                                            <a href="#" id="about" class="th-btn style4">Explore <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            {{-- <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="th-btn style5 popup-video"><i class="fas fa-play me-2"></i> Watch
                                                Video</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="2 / 2"
                    style="width: 712px; opacity: 1; transform: translate3d(-712px, 0px, 0px); transition-duration: 0ms;"
                    data-swiper-slide-index="1">
                    <div class="hero-inner background-image" data-overlay="black4" data-opacity="5"
                        style="background-image: url(&quot;assets/img/hero/gh_4.jpg&quot;);">
                        <div class="hero-bg-shape1-1">
                            <img src="assets/img/hero/gh_4.jpg" alt="img">
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">

                                        <span class="sub-title justify-content-center slideinup" data-ani="slideinup"
                                            data-ani-delay="0.2s" style="animation-delay: 0.2s;">Community
                                            Support</span>
                                        <h1 class="hero-title text-white">
                                            <span class="title1 slideinup" data-ani="slideinup" data-ani-delay="0.4s"
                                                style="animation-delay: 0.4s;">
                                                Uniting efforts to uplift </span>
                                            <span class="title1 slideinup" data-ani="slideinup" data-ani-delay="0.4s"
                                                style="animation-delay: 0.4s;">
                                                and transform communities </span>
                                        </h1>
                                        <div class="btn-wrap justify-content-center slideinup" data-ani="slideinup"
                                            data-ani-delay="0.7s" style="animation-delay: 0.7s;">
                                            <a href="contact.html" class="th-btn style4">Discover Now <i
                                                    class="fas fa-arrow-up-right ms-2"></i></a>
                                            {{-- <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="th-btn style5 popup-video"><i class="fas fa-play me-2"></i> Watch
                                                Video</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================

    
About Area  
==============================-->
    <div class="overflow-hidden space shape-mockup-wrap" id="about">
        <div class="shape-mockup about-bg-shape1-1 jump-reverse" style="top: 10%; right: 5%;">
            <img src="assets/img/shape/heart-shape1.png" alt="shape">
        </div>
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-7">
                    <div class="img-box1">
                        <div class="img1 bg-mask"
                            style="mask-image: url(&quot;assets/img/normal/about_2_3-mask.png&quot;);">
                            <img src="assets/img/hero/training_session.jpg" alt="About">
                        </div>
                        <div class="about-shape1-1 jump">
                            <img src="assets/img/shape/heart-shape1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-wrap1">
                        <div class="title-area mb-30">
                            <span class="sub-title before-none">About Us </span>
                            <h2 class="sec-title">Guardian of Hope</h2>
                            <p class="">Is a non-profit organization dedicated to bridging gaps in education, health, and
                                personal development for marginalized groups. Our primary focus is on empowering girls,
                                young women, and children with disabilities through sustainable programs designed to
                                promote self-reliance and community integration.</p>
                        </div>
                        {{-- <div class="checklist style2 list-two-column">
                            <ul>
                                <li>Charity For Foods</li>
                                <li style="--theme-color: var(--theme-color2);">Charity For Water</li>
                                <li style="--theme-color: #FF5528;">Charity For Education</li>
                                <li style="--theme-color: #122F2A;">Charity For Medical</li>
                            </ul>
                        </div> --}}
                        {{-- <div class="btn-wrap mt-40">
                            <a href="about" class="th-btn">About More<i class="fas fa-arrow-up-right ms-2"></i></a>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    <!---- Section Two ---->
    <section class="space-bottom overflow-hidden" id="service-sec">
        <div class="service-wrap1 space th-radius overflow-hidden background-image" data-overlay="gray" data-opacity="5"
            style="background-image: url(&quot;assets/img/bg/gray-bg2.png&quot;);">
            <div class="shape-mockup service-bg-shape1-5 d-xxl-inline-block d-none z-index-3 spin" data-top="15%"
                data-left="18%">
                <div class="color-masking">
                    <div class="masking-src bg-mask"
                        style="mask-image: url(&quot;assets/img/shape/service_shape2_1.png&quot;);"></div>
                    <img src="assets/img/shape/service_shape2_1.png" alt="img">
                </div>
            </div>
            <div class="shape-mockup service-bg-shape1-6 d-xxl-inline-block d-none z-index-3 jump" data-bottom="28%"
                data-right="5%">
                <div class="color-masking2">
                    <div class="masking-src bg-mask"
                        style="mask-image: url(&quot;assets/img/shape/service_shape2_2.png&quot;);"></div>
                    <img src="assets/img/shape/service_shape2_2.png" alt="img">
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area text-center">
                            <span class="sub-title after-none before-none">Charity Services</span>
                            <h2 class="sec-title">We Do it for all People
                                Humanist Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-30 gx-30 justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="service-card style2">
                            <div class="box-thumb">
                                <img src="assets/img/hero/gh_1.jpg" alt="img">
                            </div>
                            <div class="box-icon">
                                <img src="assets/img/icon/service-icon/service-card-icon1-1.svg" alt="Icon">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="#">Menstrual Health Education</a></h3>
                                <p class="box-text">We train girls on how to make reusable sanitary pads.
                                    We educate young women on menstrual health, promoting hygiene and reducing stigma.
                                </p>
                                {{-- <a href="about.html" class="th-btn">Learn More<i
                                        class="fas fa-arrow-up-right ms-2"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-card style2">
                            <div class="box-thumb">
                                <img src="assets/img/hero/gh_4.jpg" alt="img">
                            </div>
                            <div class="box-icon">
                                <img src="assets/img/icon/service-icon/service-card-icon1-2.svg" alt="Icon">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="#">Support for Children</a></h3>
                                <p class="box-text">
                                    We offer skill acquisition and educational support tailored to children with
                                    disabilities and those affected by crises or the loss of loved ones.
                                </p>
                                {{-- <a href="about.html" class="th-btn">Learn More<i
                                        class="fas fa-arrow-up-right ms-2"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service-card style2">
                            <div class="box-thumb">
                                <img src="assets/img/hero/women.jpeg" alt="img">
                            </div>
                            <div class="box-icon">
                                <img src="assets/img/icon/service-icon/service-card-icon1-3.svg" alt="Icon">
                            </div>
                            <div class="box-content">
                                <h3 class="box-title"><a href="#">Empowering Young Women</a></h3>
                                <p class="box-text">We provide training, mentorship, and capacity-building programs to
                                    raise confident and self-reliant young women who can contribute meaningfully to
                                    society.</p>
                                {{-- <a href="about.html" class="th-btn">Learn More<i
                                        class="fas fa-arrow-up-right ms-2"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---- End of Section Two ---->
    <!--==============================
Cta Area  
==============================-->
    <div class="cta-area-1">
        <div class="container z-index-common " data-pos-for="#donation-sec" data-sec-pos="bottom-half"
            style="margin-bottom: -345px;">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="cta-card background-image shape-mockup-wrap"
                        style="background-image: url(&quot;assets/img/bg/cta-bg1-1.jpg&quot;);">
                        <div class="shape-mockup cta-card-bg-shape bg-mask"
                            style="mask-image: url(&quot;assets/img/shape/cta_shape1_1.png&quot;); right: 0px; bottom: 0px;">
                            <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                        </div>
                        <h3 class="box-title">Guidance of Hope Initiatives</h3>
                        <p class="box-text">
                            We empower marginalized communities by providing education, health, and personal development programs. Our focus is on equipping girls, young women, and children with disabilities with skills and resources for self-reliance and brighter futures.
                        </p>
                        <a href="#about" class="th-btn style5">Learn More <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-card style2 background-image shape-mockup-wrap"
                        style="background-image: url(&quot;assets/img/bg/cta-bg1-2.jpg&quot;);">
                        <div class="shape-mockup cta-card-bg-shape bg-mask"
                            style="mask-image: url(&quot;assets/img/shape/cta_shape1_1.png&quot;); bottom: 0px; left: 0px;">
                            <img src="assets/img/shape/cta_shape1_1.png" alt="img">
                        </div>
                        <h3 class="box-title">Support Our Mission</h3>
                        <p class="box-text">
                            Join us in making a difference. Your support helps us provide vital training, mentorship, and resources to those who need it most. Together, we can build a future filled with hope, resilience, and opportunity for all. Join us in this mission.
                        </p>
                        <a href="https://wa.link/0zxjn1" class="th-btn style5">Get Involved <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Donation Area  
==============================-->
    <section class="space bg-gray background-image arrow-wrap shape-mockup-wrap" id="donation-sec"
        style="background-image: url(&quot;assets/img/bg/donation-bg1-1.png&quot;); padding-top: 425px;">
        <div class="shape-mockup donation-bg-shape1-1" style="right: 0px; bottom: 0px;"><img
                src="assets/img/shape/donation-shape1-1.png" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title">Lets Start Donating</span>
                        <h2 class="sec-title">See Your Impact: Transparent
                            Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow swiper-initialized swiper-horizontal swiper-autoheight swiper-backface-hidden"
                    id="donationSlider1"
                    data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}}, &quot;autoHeight&quot;: &quot;true&quot;}">
                    <div class="swiper-wrapper" id="swiper-wrapper-5a24446632f3eaf1" aria-live="off"
                        style="height: 581px; transform: translate3d(-2700px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">

                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="0">
                            <div class="donation-card">
                                <div class="donation-card-shape bg-mask"
                                    style="mask-image: url(&quot;assets/img/donation/donation-card-bg-shape1-1.png&quot;);">
                                </div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/menstrual_2.jpg" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Promoting Health Awareness and Providing Sanitary Pads to Young Girls in Daffo</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Event</span>
                                            <span class="donation-card_goal">Girl Child</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.link/0zxjn1" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="2 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="1">
                            <div class="donation-card" style="--theme-color: var(--theme-color2);">
                                <div class="donation-card-shape bg-mask"
                                    style="mask-image: url(&quot;assets/img/donation/donation-card-bg-shape1-1.png&quot;);">
                                </div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-2.png" alt="image">
                                    <div class="donation-card-tag">100%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Providing Health Support to Homeless and Underprivileged Children</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Outreach</span>
                                            <span class="donation-card_goal">Health</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.link/0zxjn1" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="2">
                            <div class="donation-card" style="--theme-color: #FF5528;">
                                <div class="donation-card-shape bg-mask"
                                    style="mask-image: url(&quot;assets/img/donation/donation-card-bg-shape1-1.png&quot;);">
                                </div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation-s-1-1.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Construction of Housing for Economically Disadvantaged Women in Africa..</a></h3>
                                    <div class="donation-card_progress-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Housing</span>
                                            <span class="donation-card_goal">Goal: Support</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.link/0zxjn1" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="3">
                            <div class="donation-card">
                                <div class="donation-card-shape bg-mask"
                                    style="mask-image: url(&quot;assets/img/donation/donation-card-bg-shape1-1.png&quot;);">
                                </div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-1.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Empowering IDP Children Through the Construction of a Charity-Funded School</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">IDP </span>
                                            <span class="donation-card_goal">Goal: Education</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.link/0zxjn1" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="5 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="4">
                            <div class="donation-card" style="--theme-color: var(--theme-color2);">
                                <div class="donation-card-shape bg-mask"
                                    style="mask-image: url(&quot;assets/img/donation/donation-card-bg-shape1-1.png&quot;);">
                                </div>
                                <div class="box-thumb">
                                    <img src="assets/img/donation/donation1-2.png" alt="image">
                                    <div class="donation-card-tag">85%</div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Extending Essential Health Services to IDP and Homeless Children in Need</a></h3>
                                    <div class="donation-card_progress-wrap">

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <div class="donation-card_progress-content">
                                            <span class="donation-card_raise">Medical Outreach </span>
                                            <span class="donation-card_goal">Goal: Health</span>
                                        </div>
                                    </div>
                                    <a href="https://wa.link/0zxjn1" class="th-btn style6">Donate Now <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Cta Area  
==============================-->
    <section class="cta-area-2 space overflow-hidden bg-theme-dark shape-mockup-wrap" id="contact-sec">
        <div class="cta-bg-shape2-1 shape-mockup jump d-lg-block d-none" style="top: -22%; left: 2%;"><img
                src="{{asset('img/shape/service_shape2_2.png')}}" alt="img"></div>
        <div class="cta-bg-shape2-2 shape-mockup jump-reverse d-lg-block d-none" style="top: -12%; right: -5%;"><img 
                src="{{asset('img/shape/service_shape2_2.png')}}" alt="img"></div>
        <div class="cta-bg-shape2-3 shape-mockup jump-reverse d-md-block d-none" style="bottom: 5%; left: 0px;"><img
                src="{{asset('img/shape/cta_shape2_3.png')}}" alt="img"></div>
        <div class="cta-bg-shape2-4 shape-mockup jump d-md-block d-none" style="right: 0px; bottom: 5%;"><img
                src="{{asset('assets/img/shape/cta_shape2_4.png')}}" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area text-center mb-0">
                        <h2 class="sec-title text-white">Our Door Are Always Open to More People Who Want to Support
                            Each Others!</h2>
                        <a href="contact.html" class="th-btn style5 mt-40">Get Involved <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Story Area  
==============================-->
    <div class="story-area-1 overflow-hidden space">
        <div class="container">
            <div class="row gy-40 gx-80 justify-content-between flex-row-reverse align-items-center">
                <div class="col-xl-7">
                    <div class="story-img-box1">
                        <div class="img1">
                            <img src="{{asset('/img/hero/training_session.jpg')}}" alt="img">
                        </div>
                        <div class="story-shape1-1 jump-reverse">
                            <img src="{{asset('/img/shape/story_shape1_1.png')}}" alt="img">
                        </div>
                        <div class="story-card movingX">
                            <h5 class="box-title">Adam Cruz</h5>
                            <p class="box-text">Our success stories highlight the
                                real life impact of your donations &amp;
                                the resilience of those we help.
                                These narratives showcase the
                                power of compassion.</p>
                            <div class="quote-icon bg-mask"
                                style="mask-image: url(&quot;{{asset('/img/icon/quote.svg&quot;)')}}';"></div>
                        </div>
                        <div class="year-counter">
                            <p class="year-counter_text">Years of <span>Experience</span></p>
                            <div class="year-counter_number"><span class="counter-number">4</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="story-wrap1">
                        <div class="title-area mb-0">
                            <span class="sub-title before-none">Success Story</span>
                            <h2 class="sec-title">We Help Fellow Nonprofits Access the Funding Tools, Training</h2>
                            <p class="mt-30">Our secure online donation platform allows you to make contributions
                                quickly and safely. Choose from various payment methods and set up one-time.exactly.</p>
                            <div class="btn-wrap mt-35">
                                <a href="about.html" class="th-btn style-border">Our Success Story <i
                                        class="fas fa-arrow-up-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!--==============================
Team Area  
==============================-->
    <section class="space-bottom team-area-1 arrow-wrap shape-mockup-wrap">
        <div class="shape-mockup team-bg-shape1-1 spin d-xxl-block d-none" style="top: 0%; right: 3%;"><img
                src="assets/img/shape/hand-group-shape1.png" alt="img"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow team-slider1 swiper-initialized swiper-horizontal swiper-backface-hidden"
                    id="teamSlider1"
                    data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;4&quot;}}}">
                    <div class="swiper-wrapper" id="swiper-wrapper-0f10d256c5fdbc9f4" aria-live="off"
                        style="transition-duration: 0ms; transform: translate3d(-1350px, 0px, 0px); transition-delay: 0ms;">
                        <!-- Single Item -->


                        <!-- Single Item -->


                        <!-- Single Item -->


                        <!-- Single Item -->


                        <!-- Single Item -->


                        <!-- Single Item -->


                        <!-- Single Item -->


                        <!-- Single Item -->


                        <div class="swiper-slide" role="group" aria-label="1 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="0">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_1.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Michel Connor</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="2 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="1">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_2.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Joseph Alexander</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="2">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_3.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="3">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_4.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="5 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="4">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_1.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Michel Connor</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="6 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="5">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_2.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Joseph Alexander</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="6">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_3.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="8 / 8"
                            style="width: 246px; margin-right: 24px;" data-swiper-slide-index="7">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_1_4.png" alt="Team">
                                    </div>
                                    <div class="team-social-hover">
                                        <a href="#" class="team-social-hover_btn">
                                            <i class="far fa-plus"></i>
                                        </a>
                                        <div class="th-social">
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="https://behance.com/"><i
                                                    class="fab fa-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                                    <span class="team-desig">Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section><!--==============================
Video Area  
==============================-->
    <div class="video-area-1 space bg-theme overflow-hidden shape-mockup-wrap">
        <div class="shape-mockup video-bg-shape1-1" style="top: 0px; left: 0px;">
            <img src="assets/img/shape/video_shape1_1.png" alt="img">
        </div>
        <div class="shape-mockup video-bg-shape1-2" style="right: 0px; bottom: 0px;">
            <img src="assets/img/shape/video_shape1_2.png" alt="img">
        </div>
        <div class="container">
            <div class="row gy-40 justify-content-between">
                <div class="col-lg-5">
                    <div class="title-area mb-35">
                        <h2 class="sec-title text-white">We Always Help The
                            Needy People</h2>
                        <p class="text-white">Discover the inspiring stories of individuals and communities transformed
                            by our programs. Our success stories highlight the real-life impact of your donations.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-theme2"><span class="counter-number">15</span>k<span
                                        class="fw-light">+</span></h2>
                                <p class="box-text text-white">Incredible Volunteers</p>
                            </div>
                        </div>
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-white"><span class="counter-number">1</span>k<span
                                        class="fw-light">+</span></h2>
                                <p class="box-text text-white">Successful Campaigns</p>
                            </div>
                        </div>
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-white"><span class="counter-number">400</span><span
                                        class="fw-light">+</span></h2>
                                <p class="box-text text-white">Monthly Donors</p>
                            </div>
                        </div>
                        <div class="col-sm-6 counter-card-wrap">
                            <div class="counter-card">
                                <h2 class="box-number text-theme2"><span class="counter-number">35</span>k<span
                                        class="fw-light">+</span></h2>
                                <p class="box-text text-white">Team Support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-thumb1-1 video-box-center">
                        <img src="assets/img/normal/video-thumb1-1.png" alt="img">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i
                                class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Brand Area  
==============================-->
    <div class="overflow-hidden brand-area-1">
        <div class="container">
            <div class="brand-wrap1 bg-gray text-center bg-mask"
                style="mask-image: url(&quot;assets/img/shape/brand-bg-shape1.png&quot;);">
                <h3 class="brand-wrap-title">Trusted by over <span class="text-theme2"><span
                            class="counter-number">90</span>K+</span> companies worldwide</h3>
                <div class="swiper th-slider swiper-initialized swiper-horizontal swiper-backface-hidden"
                    id="brandSlider1"
                    data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:2},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;4&quot;},&quot;1400&quot;:{&quot;slidesPerView&quot;:&quot;5&quot;, &quot;spaceBetween&quot;: &quot;90&quot;}}}">
                    <div class="swiper-wrapper" id="swiper-wrapper-c78718e5b1d783fe" aria-live="off"
                        style="transition-duration: 0ms; transform: translate3d(-1610px, 0px, 0px); transition-delay: 0ms;">










                        <div class="swiper-slide" role="group" aria-label="3 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="2">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-3.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="3">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-4.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="4">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-5.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="6 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="5">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-1.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="6">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-2.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="8 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="7">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-3.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="9 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="8">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-4.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="10 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="9">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-5.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="0">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-1.svg" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="2 / 10"
                            style="width: 206px; margin-right: 24px;" data-swiper-slide-index="1">
                            <a href="blog.html" class="brand-box">
                                <img src="assets/img/brand/brand1-2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>

                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area-1 space overflow-hidden shape-mockup-wrap" id="testi-sec">
        <div class="shape-mockup testi-bg-shape1-1 jump-reverse d-xl-block d-none" style="top: 5%; right: 0px;">
            <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape1-2" style="top: 28%; left: 5%;">
            <img src="assets/img/shape/testimonial_shape1_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="sec-title">What People Say About
                            Our Charity</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-end">
                <div class="col-lg-5">
                    <div class="swiper th-slider testi-thumb-slider1 swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden swiper-thumbs"
                        data-slider-options="{&quot;effect&quot;:&quot;fade&quot;,&quot;loop&quot;:false}">
                        <div class="swiper-wrapper" id="swiper-wrapper-9daa933eabce8b30" aria-live="off"
                            style="transition-duration: 0ms; transition-delay: 0ms;">
                            <div class="swiper-slide" role="group" aria-label="1 / 4"
                                style="width: 516px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="2 / 4"
                                style="width: 516px; opacity: 1; transform: translate3d(-516px, 0px, 0px); transition-duration: 0ms;">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 4"
                                style="width: 516px; opacity: 1; transform: translate3d(-1032px, 0px, 0px); transition-duration: 0ms;">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                role="group" aria-label="4 / 4"
                                style="width: 516px; opacity: 1; transform: translate3d(-1548px, 0px, 0px); transition-duration: 0ms;">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testi-slider1">
                        <div class="swiper th-slider testimonial-slider1 swiper-fade swiper-initialized swiper-horizontal swiper-autoheight swiper-watch-progress swiper-backface-hidden"
                            id="testiSlide1"
                            data-slider-options="{&quot;loop&quot;:false,&quot;paginationType&quot;:&quot;progressbar&quot;,&quot;effect&quot;:&quot;fade&quot;, &quot;autoHeight&quot;: &quot;true&quot;, &quot;thumbs&quot;:{&quot;swiper&quot;:&quot;.testi-thumb-slider1&quot;}}">
                            <div class="swiper-wrapper" id="swiper-wrapper-1ed068d94e528861" aria-live="off"
                                style="height: 401px; transition-duration: 0ms; transition-delay: 0ms;">
                                <div class="swiper-slide" role="group" aria-label="1 / 4"
                                    style="width: 516px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security. Our
                                            donation process uses the latest encryption technology to protect your
                                            personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon bg-mask"
                                            style="mask-image: url(&quot;assets/img/icon/quote2.svg&quot;);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 4"
                                    style="width: 516px; opacity: 1; transform: translate3d(-516px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption technology
                                            to protect your personal and financial information. Donate with confidence
                                            knowing Stay informed about our upcoming events and campaigns. Whether it's
                                            a fundraising gala, a charity run, or a community outreach program, there
                                            are plenty of ways to get involved and support our cause. Check our event
                                            calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon bg-mask"
                                            style="mask-image: url(&quot;assets/img/icon/quote2.svg&quot;);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 4"
                                    style="width: 516px; opacity: 1; transform: translate3d(-1032px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security. Our
                                            donation process uses the latest encryption technology to protect your
                                            personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon bg-mask"
                                            style="mask-image: url(&quot;assets/img/icon/quote2.svg&quot;);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group"
                                    aria-label="4 / 4"
                                    style="width: 516px; opacity: 1; transform: translate3d(-1548px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption technology
                                            to protect your personal and financial information. Donate with confidence
                                            knowing Stay informed about our upcoming events and campaigns. Whether it's
                                            a fundraising gala, a charity run, or a community outreach program, there
                                            are plenty of ways to get involved and support our cause. Check our event
                                            calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon bg-mask"
                                            style="mask-image: url(&quot;assets/img/icon/quote2.svg&quot;);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-pagination swiper-pagination-progressbar swiper-pagination-horizontal">
                                <span class="swiper-pagination-progressbar-fill"
                                    style="transform: translate3d(0px, 0px, 0px) scaleX(1) scaleY(1); transition-duration: 1000ms;"></span>
                            </div>
                            <div class="slider-pagination2"><span class="current-slide">04</span> <span
                                    class="total-slides">04</span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide1"
                                class="slider-arrow default style-border slider-prev"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide1"
                                class="slider-arrow default style-border slider-next"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Project Area  
==============================-->
    <section class="overflow-hidden">
        <div class="project-wrap1 space th-radius overflow-hidden background-image arrow-wrap shape-mockup-wrap"
            data-overlay="gray" data-opacity="5" style="background-image: url(&quot;assets/img/bg/gray-bg2.png&quot;);">
            <div class="shape-mockup project-bg-shape1-1" style="top: 0px; right: 0px;">
                <img src="assets/img/shape/project-shape1-1.png" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-md-between align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="title-area">
                            <span class="sub-title before-none">Complete Projects</span>
                            <h2 class="sec-title">Our Recent Project</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <a href="contact.html" class="th-btn">View All Project<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider swiper-initialized swiper-horizontal swiper-backface-hidden"
                        id="ProjectSlider1"
                        data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}}}">
                        <div class="swiper-wrapper" id="swiper-wrapper-879976f4aa972ed2" aria-live="off"
                            style="transition-duration: 0ms; transform: translate3d(-1080px, 0px, 0px); transition-delay: 0ms;">
                            <!-- Single Item -->






                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3"
                                style="width: 516px; margin-right: 24px;" data-swiper-slide-index="1">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_1_2.png" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-card-bg-shape bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/project-card-bg-shape1-1.png&quot;);">
                                        </div>
                                        <h3 class="project-title"><a href="project-details.html">Child Educations</a>
                                        </h3>
                                        <p class="project-subtitle">Charity &amp; Fundraising</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 3"
                                style="width: 516px; margin-right: 24px;" data-swiper-slide-index="2">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_1_3.png" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-card-bg-shape bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/project-card-bg-shape1-1.png&quot;);">
                                        </div>
                                        <h3 class="project-title"><a href="project-details.html">Nurturing Health</a>
                                        </h3>
                                        <p class="project-subtitle">Healing Hearts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3"
                                style="width: 516px; margin-right: 24px;" data-swiper-slide-index="0">
                                <div class="project-card">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_1_1.png" alt="project image">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-card-bg-shape bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/project-card-bg-shape1-1.png&quot;);">
                                        </div>
                                        <h3 class="project-title"><a href="project-details.html">Compassion Connect</a>
                                        </h3>
                                        <p class="project-subtitle">Stronger Community</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Faq Area
==============================-->
    <div class="overflow-hidden space-top shape-mockup-wrap">
        <div class="shape-mockup faq-bg-shape1-1 jump bg-mask"
            style="mask-image: url(&quot;assets/img/normal/faq_1_3.png&quot;); top: 15%; right: 2%;">
            <img src="assets/img/normal/faq_1_3.png" alt="img">
        </div>
        <div class="container">
            <div class="row gx-80 justify-content-between">
                <div class="col-xl-5">
                    <div class="faq-img-box1">
                        <div class="img1">
                            <img src="assets/img/normal/faq_1_1.png" alt="img">
                        </div>
                        <div class="mask-shape bg-mask"
                            style="mask-image: url(&quot;assets/img/normal/faq_1_1-mask.png&quot;);"></div>
                        <div class="img2 jump">
                            <img src="assets/img/normal/faq_1_2.png" alt="img">
                        </div>
                        <div class="img3 spin">
                            <img src="assets/img/shape/hand-group-shape1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-wrap1">
                        <div class="title-area">
                            <span class="sub-title before-none">Frequently Asked Questions</span>
                            <h2 class="sec-title">Have Any Questions For Us?</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true"
                                        aria-controls="collapse-1">What motivates you to donate to our charity?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available.
                                            From event planning and fundraising to fieldwork and administrative support,
                                            there are many ways to lend your talents. Find the perfect fit for your
                                            skills and interests.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">How did you hear about our organization?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available.
                                            From event planning and fundraising to fieldwork and administrative support,
                                            there are many ways to lend your talents. Find the perfect fit for your
                                            skills and interests.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">How frequently do you prefer to volunteer?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available.
                                            From event planning and fundraising to fieldwork and administrative support,
                                            there are many ways to lend your talents. Find the perfect fit for your
                                            skills and interests.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">What motivated you to participate in this
                                        event?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Explore the variety of volunteer opportunities available.
                                            From event planning and fundraising to fieldwork and administrative support,
                                            there are many ways to lend your talents. Find the perfect fit for your
                                            skills and interests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
Blog Area  
==============================-->
    <section class="space arrow-wrap" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">News &amp; Articles</span>
                <h2 class="sec-title">Our Latest News &amp; Articles</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow swiper-initialized swiper-horizontal swiper-autoheight swiper-backface-hidden"
                    id="blogSlider1"
                    data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;1200&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}}, &quot;autoHeight&quot;: &quot;true&quot;}">
                    <div class="swiper-wrapper" id="swiper-wrapper-4cd6fb5eedaf10aaf" aria-live="off"
                        style="height: 609px; transform: translate3d(-2700px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">

                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="0">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="https://wa.link/0zxjn1">
                                        <div class="blog-img-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-2.png&quot;);">
                                        </div>
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape bg-mask"
                                        style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-1.png&quot;);">
                                    </div>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar"></i>July 16, 2024</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
                                    <a href="https://wa.link/0zxjn1" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="2 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="1">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="https://wa.link/0zxjn1">
                                        <div class="blog-img-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-2.png&quot;);">
                                        </div>
                                        <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape bg-mask"
                                        style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-1.png&quot;);">
                                    </div>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar"></i>March 24, 2024</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Every Contribution Counts: Make a
                                            Difference</a></h3>
                                    <a href="https://wa.link/0zxjn1" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="2">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="https://wa.link/0zxjn1">
                                        <div class="blog-img-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-2.png&quot;);">
                                        </div>
                                        <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape bg-mask"
                                        style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-1.png&quot;);">
                                    </div>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar"></i>June 30, 2024</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Real Stories, Real Impact: Your
                                            Donations at Work</a></h3>
                                    <a href="https://wa.link/0zxjn1" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="3">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="https://wa.link/0zxjn1">
                                        <div class="blog-img-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-2.png&quot;);">
                                        </div>
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape bg-mask"
                                        style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-1.png&quot;);">
                                    </div>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar"></i>July 16, 2024</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
                                    <a href="https://wa.link/0zxjn1" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="5 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="4">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="https://wa.link/0zxjn1">
                                        <div class="blog-img-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-2.png&quot;);">
                                        </div>
                                        <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape bg-mask"
                                        style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-1.png&quot;);">
                                    </div>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar"></i>March 24, 2024</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Every Contribution Counts: Make a
                                            Difference</a></h3>
                                    <a href="https://wa.link/0zxjn1" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="6 / 6"
                            style="width: 516px; margin-right: 24px;" data-swiper-slide-index="5">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="https://wa.link/0zxjn1">
                                        <div class="blog-img-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-2.png&quot;);">
                                        </div>
                                        <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-card-shape bg-mask"
                                        style="mask-image: url(&quot;assets/img/blog/blog-card-bg-shape1-1.png&quot;);">
                                    </div>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar"></i>June 30, 2024</a>
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>
                                    <h3 class="box-title"><a href="https://wa.link/0zxjn1">Real Stories, Real Impact: Your
                                            Donations at Work</a></h3>
                                    <a href="https://wa.link/0zxjn1" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <!--==============================
	Footer Area
==============================-->
    <footer class="footer-wrapper footer-default background-image shape-mockup-wrap"
        style="background-image: url(&quot;assets/img/bg/footer-default-bg-mask.png&quot;);">
        <div class="footer-bg-shape2 shape-mockup jump" style="top: 20%; right: 0px;">
            <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="footer-bg-shape3 shape-mockup d-none" style="right: 0px; bottom: 0px;">
            <img src="assets/img/shape/footer-bg-shape2.png" alt="img">
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="subscribe-box">
                    <div class="row gy-40 align-items-center justify-content-center">
                        <div class="col-xl-6">
                            <h4 class="subscribe-box_title">Subscribe to Our Newsletter</h4>
                            <p class="subscribe-box_text">Regular inspections and feedback mechanisms</p>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter Email Address"
                                        required="">
                                </div>
                                <button type="submit" class="th-btn style3"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="assets/img/logo-white.svg" alt="Donat"></a>
                                </div>
                                <p class="about-text"> Our secure online donation platform allows you to make
                                    contributions quickly and safely. Choose from various.</p>
                                <a href="contact.html" class="th-btn"><i class="fas fa-heart me-2"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog.html">Our News</a></li>
                                    <li><a href="about.html">Our Campaign</a></li>
                                    <li><a href="contact.html">Privacy policy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Our Service</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="donate-now.html">Give Donation</a></li>
                                    <li><a href="faq.html">Education Support</a></li>
                                    <li><a href="faq.html">Food Support</a></li>
                                    <li><a href="faq.html">Health Support</a></li>
                                    <li><a href="gallery.html">Our Campaign </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-contact">
                                <h3 class="widget_title">Contact Us</h3>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-phone"></i>
                                        <div class="bg-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/info_card_icon_bg_shape_1_1.png&quot;);">
                                        </div>
                                        <div class="bg-shape2 bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/info_card_icon_bg_shape_1_1.png&quot;);">
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Call us any time:</p>
                                        <h4 class="box-title"><a href="tel:16336547896">+163-3654-7896</a></h4>
                                    </div>
                                </div>
                                <div class="info-card">
                                    <div class="box-icon">
                                        <i class="fal fa-envelope-open"></i>
                                        <div class="bg-shape1 bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/info_card_icon_bg_shape_1_1.png&quot;);">
                                        </div>
                                        <div class="bg-shape2 bg-mask"
                                            style="mask-image: url(&quot;assets/img/shape/info_card_icon_bg_shape_1_1.png&quot;);">
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <p class="box-text">Email us any time:</p>
                                        <h4 class="box-title"><a href="mailto:info@donat.com">info@donat.com</a></h4>
                                    </div>
                                </div>
                                <div class="th-social style2">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center gy-3 align-items-center">
                    <div class="col-lg-12">
                        <p class="copyright-text text-center">
                            <i class="fal fa-copyright"></i> Copyright 2024 <a href="index.html">Donat</a>. All Rights
                            Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top show">

        <svg class="progress-circle svg-content" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path
                d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2 160 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-306.7L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
        </svg>

    </div>

    @include('partials/footer')