<?php include 'include/header.php'; ?>
<link rel="stylesheet" href="assets\css\classical.css">

<style>
    .service-type-list ul {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    .service-type-list ul li {padding: 10px;list-style: none;
    font-size: 14px;font-weight: 800;}

    /* Styles for screens less than or equal to 320px wide */
    @media only screen and (max-width: 320px) {
        .service-type-list ul {
            display: flex;
            flex-direction: column;
        }

        .service-content .service-title .title-text {
            font-size: 14px;
        }


    }

    /* Styles for screens between 321px and 768px wide */
    @media only screen and (min-width: 321px) and (max-width: 768px) {

        /* grid-template-columns: repeat(2, 1fr); */
        .service-type-list ul {
            display: flex;
            flex-direction: column;

        }

        .service-content .service-title .title-text {
            font-size: 16px !important;

        }

        .service-type-list ul li {
            align-self: flex-start;
        }
    }

    /* Styles for screens greater than or equal to 769px wide */
    @media only screen and (min-width: 769px) {
        /* grid-template-columns: repeat(2, 1fr); */
    }
</style>

<!-- breadcrumb-section - start
		================================================== -->
<section id="breadcrumb-section" class="breadcrumb-section clearfix">
    <div class="jarallax" style="background-image: url(assets/images/dance-event.png);">
        <div class="overlay-black">
            <div class="container" style="
    padding-top: 90px;">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <!-- breadcrumb-title - start -->
                        <div class="breadcrumb-title text-center mb-50">
                            <span class="sub-title">what we can do</span>
                            <h2 class="big-title">MGM <strong>services</strong></h2>
                        </div>
                        <!-- breadcrumb-title - end -->

                        <!-- breadcrumb-list - start -->
                        <div class="breadcrumb-list">
                            <ul>
                                <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item"><a href="about.php" class="breadcrumb-link">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li>
                            </ul>
                        </div>
                        <!-- breadcrumb-list - end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-section - end
		================================================== -->


<!-- service-section - start
		================================================== -->
<section id="service-section" class="service-section sec-ptb-100 clearfix">
    <div class="container">

        <!-- service-wrapper - start -->
        <div class="service-wrapper">


            <div class="service-content float-center">
                <div class="service-title mb-10">
                    <h2 class="title-text text-center"> <strong> Our Services</strong></h2>
                </div>
                <p class="service-description black-color mb-30 text-center">
                    Click Each Events See details Services
                </p>
                <div class="service-type-list mb-50 clearfix">
                    <ul>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="haldi-event-management-company.php">Haldi Function</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="best-engagement-planners-in-india.php">Engagement Celebration</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="wedding-anniversary-event-management.php">Anniversary Celebration</a>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="ring-ceremony-event-planner.php">Ceremony Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="wedding-planners-near-me.php">Marriage Celebration</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="sufi-music-artists.php">Sufi Night</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="rajasthani-folk-music-group.php">Folk Music</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="best-qawwali-group-in-india.php">Qawwali Program</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="top-shehnai-company-in-india.php">Shehnai Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="bhangra-dance-group-in-delhi.php">Bhangra Dance Party</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="sai-bhajan-sandhya-organisers-in-delhi.php">Sai Sandhya Program</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="bhajan-sandhya-organisers-near-me.php">Bhajan Sandhya</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="classical-music-event.php">Classical Music Event</a>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="wedding-reception-event-management.php">Reception Party</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="destination-wedding-planner-in-india.php">Destination Wedding Planing</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="event-organisers-for-ladies-sangeet.php"> Wedding Sangeet</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="pre-wedding-planner-company.php">Pre Wedding Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="celebrity-management-companiess.php">Events With Celebrity </a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="classical.php">Magical Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="laughter-show-event-company.php">Laughter Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="wedding-dance-choreography.php">Choreographer Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="maa-bhagwati-jagran-partys.php">Bhagwati Jagran</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="event-management-company.php">Celebrity Live Concert</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="celebrity-management-agencies-in-india.php">Celebrity Chief Guest</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="wedding-dance-choreography.php">Sangeet Choreographer</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="music-event-management-companies.php">Musical Show Organizer</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="dancing-performance-event.php">Dance Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="video-product-company.php">Photography And Vediography</a>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="birthday-event-planner.php">Birthday Celebration</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="corporate-event-bands.php">MGM the Band</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="dj-artist-management-companies-in-india.php">Dj Artist</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="best-orchestra-in-india.php">MGM Symphony <br> Orchestra</a>
                        </li>



                    </ul>
                </div>

            </div>


            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-left">
                    <div class="big-image">
                        <img style="width:500px !important;height:300px !important;object-fit:cover !important;" src="assets\images\service\service_big_top_1.avif" alt="Image_not_found">
                    </div>
                    <div class="small-img">
                        <img style="width:200px !important;height:200px !important;object-fit:cover !important;" src="assets\images\service\service_small_bottom_1.webp" alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-right">
                    <div class="service-title mb-30">
                        <h2 class="title-text">Complete <strong>Wedding</strong> Planning</h2>
                        <!-- <span class="service-price">price start from $52.00</span> -->
                    </div>
                    <!-- <p class="service-description black-color mb-30">
                        Marriage service include a series of rituals and ceremonies that celebratethe union of two
                        individuals. please click On given below link description for Each Events
                    </p> -->
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="haldi-event-management-company.php">Haldi Function</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="best-engagement-planners-in-india.php" style="font-size: 12px;">Engagement Celebration</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="wedding-anniversary-event-management.php" style="font-size: 12px;">Anniversary Celebration</a>
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="ring-ceremony-event-planner.php">Ceremony Event</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="wedding-planners-near-me.php">Marriage Celebration</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="pre-wedding-planner-company.php"> Pre Wedding Planning</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="wedding-reception-event-management.php">Reception Party</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="destination-wedding-planner-in-india.php">Destination Wedding </a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="event-organisers-for-ladies-sangeet.php"> Wedding Sangeet</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="wedding-dance-choreography.php"> Choreographer</a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-left">
                        <a href="contact-us.php" class="custom-btn">make an event</a>
                        <a href="contact-us.php" class="conference-btn">conference event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-right">
                    <div class="big-image">
                        <img style="width:500px !important;height:400px !important;object-fit:cover !important;  " src="assets\images\service\service_big_top_2.webp" alt="Image_not_found">
                    </div>
                    <div class="small-image">
                        <img style="width:300px !important;height:300px !important;object-fit:cover !important;" src="assets\images\All_page_image\birthday_1.webp" alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-left">
                    <div class="service-title mb-30">
                        <h2 class="title-text"><strong>Birthday Party,Musical,Magic celebration</strong>
                        </h2>
                        <!-- <span class="service-price">price start from $52.00</span> -->
                    </div>
                    <p class="service-description black-color mb-30">
                        Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
                        the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
                        adipiscing elit.
                    </p>
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="celebrity-management-companies.php">Event With Celebrity </a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="classical.php">Magical Event</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="laughter-show-event-company.php">Laughter Event</a>
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="maa-bhagwati-jagran-party.php">Bhagwati Jagran</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="event-management-company.php">Celebrity Live Concert</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="celebrity-management-agencies-in-india.php">Celebrity Chief Guest</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="music-event-management-companies.php">Musical Show</a>
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="birthday-event-planner.php">Birthday Celebration</a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-left">
                        <a href="contact-us.php" class="custom-btn">make an event</a>
                        <a href="contact-us.php" class="conference-btn">musical event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-left">
                    <div class="big-image">
                        <img style="width:500px !important;height:300px !important;object-fit:cover !important;" src="assets\images\service\service_big_top_2.webp" alt="Image_not_found">
                    </div>
                    <div class="small-image">
                        <img style="width:200px !important;height:200px !important;object-fit:cover !important;" src="assets\images\service\service_small_bottom_3.webp" alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-right">
                    <div class="service-title mb-30">
                        <h2 class="title-text"><strong>MGM Service Bands Orchestra</strong></h2>
                        <!-- <span class="service-price">price start from $52.00</span> -->
                    </div>
                    <!-- <p class="service-description black-color mb-30">
                        Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
                        the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
                        adipiscing elit.
                    </p> -->
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="corporate-event-bands.php">MGM the Band</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="dj-artist-management-companies-in-india.php">Dj Artist</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="best-orchestra-in-india.php" style=" font-size: 12px">MGM Symphony Orchestra</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="dancing-performance-event.php">Dance Event Organize</a>
                            </li>


                        </ul>
                    </div>
                    <div class="text-left">
                        <a href=" https://mgmevents.in/contact-us
" class="custom-btn">make an event</a>
                        <a href="https://mgmevents.in/contact-us
" class="conference-btn">playground event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-right">
                    <div class="big-image">
                        <img src="assets\images\All_page_image\birthday_2.webp" width="500px" alt="Image_not_found">
                    </div>
                    <div class="small-image">
                        <img src="https://d397bfy4gvgcdm.cloudfront.net/95296-PRI_0382.jpeg" width=" 300px" alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-left">
                    <div class="service-title mb-30">
                        <h2 class="title-text">Party <strong>Wedding & Birtday</strong></h2>
                        <!--<span class="service-price">price start from $52.00</span>-->
                    </div>
                    <p class="service-description black-color mb-30">
                        Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
                        the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
                        adipiscing elit.
                    </p>
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                traditional musical
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                personal consert
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                modern musical
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                traditional musical
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                personal consert
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                modern musical
                            </li>

                        </ul>
                    </div>
                    <div class="text-left">
                        <a href=" https://mgmevents.in/contact-us
" class="custom-btn">make an event</a>
                        <a href="https://mgmevents.in/contact-us
" class="conference-btn">party event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

        </div>
        <!-- service-wrapper - end -->

    </div>
</section>
<!-- service-section - end
		================================================== -->









<!-- google map - start
		================================================== -->
<!--<section id="map-section" class="map-section clearfix">-->
<!--    <div class="address-wrapper">-->

        <!-- address-info-topbar - start -->
<!--        <div class="address-info-topbar mb-30 clearfix">-->
<!--            <div class="address-info-left">-->
<!--                <h3 class="title-text">MGM event management</h3>-->
<!--                <p class="m-0">-->
<!--                    Apple Store, 112 Prince St New York,-->
<!--                    NY 10012, United States 80361,-->
<!--                    United States-->
<!--                </p>-->
<!--            </div>-->

<!--            <div class="address-info-right">-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <button type="button">-->
<!--                            <span class="icon"><i class="fas fa-street-view"></i></span>-->
<!--                            <small>Direction</small>-->
<!--                        </button>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <button type="button">-->
<!--                            <span class="icon"><i class="fas fa-rss"></i></span>-->
<!--                            <small>Save</small>-->
<!--                        </button>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
        <!-- address-info-topbar - end -->

        <!-- address-info-bottombar - start -->
<!--        <div class="address-info-bottombar clearfix">-->
<!--            <div class="address-info-left">-->
<!--                <div class="rating-star">-->
<!--                    <span class="rating-point">4.5</span>-->
<!--                    <ul>-->
<!--                        <li><i class="fas fa-star"></i></li>-->
<!--                        <li><i class="fas fa-star"></i></li>-->
<!--                        <li><i class="fas fa-star"></i></li>-->
<!--                        <li><i class="fas fa-star"></i></li>-->
<!--                        <li><i class="fas fa-star-half"></i></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <p class="m-0">105 reviews</p>-->
<!--            </div>-->

<!--            <div class="address-info-right">-->
<!--                <button type="button" class="map-larger-btn">-->
<!--                    view larger map-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
        <!-- address-info-bottombar - end -->

<!--    </div>-->
<!--    <div id="google-map">-->
<!--        <div id="googleMaps" class="google-map-container"></div>-->
<!--    </div>-->
<!--</section>-->
<!-- google map - end
		================================================== -->





<!-- default-footer-section - start
		================================================== -->
<?php include 'include/footer.php'; ?>