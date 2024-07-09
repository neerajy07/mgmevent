<?php include 'include/header.php'; ?>

<link rel="stylesheet" href="assets\css\index.css">



<!-- slide-section - start

   ================================================== -->



<style>

    

.body {

    display: flex;

    align-items: center;

    justify-content: center;

    min-height: 70vh;

    background: #f1f4fd;

}



.slider-container {

    width: 100%;

    overflow: hidden;

  }

  

  .slider {

    display: flex;

    transition: transform 0.5s ease-in-out;

  }

  

  .slide {

    flex: 0 0 auto;

    width: 200px; /* Adjust the width as needed */

    padding: 20px;

    text-align: center;

  }

  

  .slide img {

    max-width: 100%;

    height: auto;

  }

  

  .slide p {

    margin-top: 10px;

    font-weight: bold;

  }





.container {

    max-width: 1400px;

    

    width: 97%;

}

.expertise-item .image img{

    height: 400px !important;

}

.slider-wrapper {

    position: relative;

}



.slider-wrapper .slide-button {

    position: absolute;

    top: 50%;

    outline: none;

    border: none;

    height: 50px;

    width: 50px;

    z-index: 5;

    color: #fff;

    display: flex;

    cursor: pointer;

    font-size: 2.2rem;

    background: #000;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    transform: translateY(-70%);

}



.slider-wrapper .slide-button:hover {

    background: #404040;

}



.slider-wrapper .slide-button#prev-slide {

    left: -25px;

    display: none;

}



.slider-wrapper .slide-button#next-slide {

    right: -25px;

}



.slider-wrapper .image-list {

    display: grid;

    grid-template-columns: repeat(32, 1fr);

    gap: 0px;

    font-size: 0;

    list-style: none;

    margin-bottom: 30px;

    overflow-x: auto;

    scrollbar-width: none;

}



.slider-wrapper .image-list::-webkit-scrollbar {

    display: none;

}



.slider-wrapper .image-list .image-item {

    width: 350px;

    height: 450px;

    /* object-fit: cover; */

}



.slider-wrapper .image-list .image-item img {

    width: 310px !important;

    height: 345px;

    object-fit: cover;

}



.container .slider-scrollbar {

    height: 24px;

    width: 100%;

    display: flex;

    align-items: center;

}



.slider-scrollbar .scrollbar-track {

    background: #ccc;

    width: 100%;

    height: 2px;

    display: flex;

    align-items: center;

    border-radius: 4px;

    position: relative;

}



.slider-scrollbar:hover .scrollbar-track {

    height: 4px;

}



.slider-scrollbar .scrollbar-thumb {

    position: absolute;

    background: #000;

    top: 0;

    bottom: 0;

    width: 50%;

    height: 100%;

    cursor: grab;

    border-radius: inherit;

}



.slider-scrollbar .scrollbar-thumb:active {

    cursor: grabbing;

    height: 8px;

    top: -2px;

}



.slider-scrollbar .scrollbar-thumb::after {

    content: "";

    position: absolute;

    left: 0;

    right: 0;

    top: -10px;

    bottom: -10px;

}

.speaker-image img{

    border: 1px solid white;

   background:  white !important;

    width: 450px !important;

    height: 400px !important;

    object-fit: contain !important;

    border-radius: 7px;

}

.slider-nav{

    margin-top: 75px !important;

}

/* Styles for mobile and tablets */

@media only screen and (max-width: 1023px) {

    .slider-wrapper .slide-button {

        /* display: none !important; */

        font-size:1.6rem;

    }



    .slider-wrapper .image-list {

        gap: 10px;

        margin-bottom: 15px;

        scroll-snap-type: x mandatory;

    }



    .slider-wrapper .image-list .image-item {

        width: 180px;

        height: 450px;

    }



    .slider-wrapper .image-list .image-item img {

        width: 210px !important;

        height: 300px;

        object-fit: cover;

    }



    .slider-scrollbar .scrollbar-thumb {

        width: 20%;

    }

}



</style>



<section id="main-carousel2" class="main-carousel2 clearfix">

   <div class="item" style="background-image: url(assets/images/slider/slider-bg4.webp);"  loading="lazy" >

      <div class="overlay-black">

         <div class="container">

            <div class="row">

               <!-- reg-form - start -->

               <div class="col-lg-4 col-md-12 col-sm-12">

                  <div class="reg-form">

                     <div class="from-title">

                        <h2 class="title-text"><strong>Book</strong> now</h2>

                        <div class="sub-title pb-2">make a booking now</div>

                     </div>

                     <div class="form-wrapper mb-30">

                       <form action="process-form.php" method="POST">

        <div class="form-item">

            <input type="text" name="name" placeholder="Full Name" required>

        </div>

        <div class="form-item">

            <input type="email" name="email" placeholder="Email Address" required>

        </div>

        <div class="form-item">

            <input type="tel" name="phone" id="phone-inputs" placeholder="Phone Number" required>

            <span id="phone-errors" style="color: red; display: none; font-size:6px;">Invalid phone number</span>

        </div>

        <div class="form-item">

            <select name="package" class="package-select" required>

                <option selected="" disabled>Our Services</option>

                <option value="Haldi Function">Haldi Function</option>

                <option value="Engagement Celebration">Engagement Celebration</option>

                <option value="Anniversary Celebration">Anniversary Celebration</option>

                <option value="Ceremony Event">Ceremony Event</option>

                <option value="Marriage Celebration">Marriage Celebration</option>

                <option value="Sufi Night">Sufi Night</option>

                <option value="Folk Music">Folk Music</option>

                <option value="Qawwali Program">Qawwali Program</option>

                <option value="Shehnai Event">Shehnai Event</option>

                <option value="Bhangra Dance Party">Bhangra Dance Party</option>

                <option value="Sai Sandhya Program">Sai Sandhya Program</option>

                <option value="Bhajan Sandhya">Bhajan Sandhya</option>

                <option value="Classical Music Event">Classical Music Event</option>

                <option value="Reception Party">Reception Party</option>

                <option value="Destination Wedding Planning">Destination Wedding Planning</option>

                <option value="Wedding Sangeet">Wedding Sangeet</option>

                <option value="Pre Wedding Event">Pre Wedding Event</option>

                <option value="Events With Celebrity">Events With Celebrity</option>

                <option value="Magical Event">Magical Event</option>

                <option value="Laughter Event">Laughter Event</option>

                <option value="Choreographer Event">Choreographer Event</option>

                <option value="Bhagwati Jagran">Bhagwati Jagran</option>

                <option value="Celebrity Live Concert">Celebrity Live Concert</option>

                <option value="Celebrity Chief Guest">Celebrity Chief Guest</option>

                <option value="Sangeet Choreographer">Sangeet Choreographer</option>

                <option value="Musical Show Organizer">Musical Show Organizer</option>

                <option value="Dance Event">Dance Event</option>

                <option value="Photography And Videography">Photography And Videography</option>

                <option value="Birthday Celebration">Birthday Celebration</option>

                <option value="MGM the Band">MGM</option>

                <option value="DJ Artist">DJ Artist</option>

                <option value="MGM Symphony Orchestra">MGM Symphony Orchestra</option>

            </select>

        </div>

        <button type="submit" class="submit-btn" style="background: linear-gradient(to bottom right, #ff3e00, #ffbe30); padding: 10px 16px; color: white; border-radius: 12px;">Submit</button>

    </form>

                     </div>

                    

                  </div>

               </div>

               <!-- reg-form - end -->

               <!-- slider-content - start -->

               <div class="col-lg-8 col-md-12 col-sm-12">
                  <div class="slider-content">
                     <h1 class="title-text">Elevate Your Events with MGM Events!
                     </h1>
                     <strong class="bold-text">Discover MGM Events, where dreams meet reality. From concept to execution, we're dedicated to crafting unforgettable moments tailored to you.</strong>
                     <style>
                        .bold-text1 {
      display: inline-block;
      font-size: 2em;}
                     </style>


                  </div>

               </div>

               <!-- slider-content - end -->

            </div>

         </div>

      </div>

   </div>

   <div class="item " style="background-image: url(assets/images/slider/slider-bg5.webp);" loading="lazy">

      <div class="overlay-black">

         <div class="container">

            <div class="row">

               <!-- reg-form - start -->

               <div class="col-lg-4 col-md-12 col-sm-12">

                  <div class="reg-form">

                     <div class="from-title">

                        <h2 class="title-text"><strong>Book</strong> now</h2>

                        <div class="sub-title pb-2">make a booking now</div>

                     </div>

                     <div class="form-wrapper mb-30">

                       <form action="process-form.php" method="POST">

        <div class="form-item">

            <input type="text" name="name" placeholder="Full Name" required>

        </div>

        <div class="form-item">

            <input type="email" name="email" placeholder="Email Address" required>

        </div>

        <div class="form-item">

            <input type="tel" name="phone" id="phone-inputs" placeholder="Phone Number" required>

            <span id="phone-errors" style="color: red; display: none; font-size:6px;">Invalid phone number</span>

        </div>

        <div class="form-item">

            <select name="package" class="package-select" required>

                <option selected="" disabled> Services</option>

                <option value="Haldi Function">Haldi Function</option>

                <option value="Engagement Celebration">Engagement Celebration</option>

                <option value="Anniversary Celebration">Anniversary Celebration</option>

                <option value="Ceremony Event">Ceremony Event</option>

                <option value="Marriage Celebration">Marriage Celebration</option>

                <option value="Sufi Night">Sufi Night</option>

                <option value="Folk Music">Folk Music</option>

                <option value="Qawwali Program">Qawwali Program</option>

                <option value="Shehnai Event">Shehnai Event</option>

                <option value="Bhangra Dance Party">Bhangra Dance Party</option>

                <option value="Sai Sandhya Program">Sai Sandhya Program</option>

                <option value="Bhajan Sandhya">Bhajan Sandhya</option>

                <option value="Classical Music Event">Classical Music Event</option>

                <option value="Reception Party">Reception Party</option>

                <option value="Destination Wedding Planning">Destination Wedding Planning</option>

                <option value="Wedding Sangeet">Wedding Sangeet</option>

                <option value="Pre Wedding Event">Pre Wedding Event</option>

                <option value="Events With Celebrity">Events With Celebrity</option>

                <option value="Magical Event">Magical Event</option>

                <option value="Laughter Event">Laughter Event</option>

                <option value="Choreographer Event">Choreographer Event</option>

                <option value="Bhagwati Jagran">Bhagwati Jagran</option>

                <option value="Celebrity Live Concert">Celebrity Live Concert</option>

                <option value="Celebrity Chief Guest">Celebrity Chief Guest</option>

                <option value="Sangeet Choreographer">Sangeet Choreographer</option>

                <option value="Musical Show Organizer">Musical Show Organizer</option>

                <option value="Dance Event">Dance Event</option>

                <option value="Photography And Videography">Photography And Videography</option>

                <option value="Birthday Celebration">Birthday Celebration</option>

                <option value="MGM the Band">MGM the Band</option>

                <option value="DJ Artist">DJ Artist</option>

                <option value="MGM Symphony Orchestra">MGM Symphony Orchestra</option>

            </select>

        </div>

        <button type="submit" class="submit-btn" style="background: linear-gradient(to bottom right, #ff3e00, #ffbe30); padding: 10px 16px; color: white; border-radius: 12px;">Submit</button>

    </form>



                     </div>

                     

                  </div>

               </div>

               <!-- reg-form - end -->

               <!-- slider-content - start -->

               <div class="col-lg-8 col-md-12 col-sm-12">

                  <div class="slider-content">





                     <h1 class="title-text">

                    Celebrating Life's Special Moments with Style

                     </h1>

                     <strong class="bold-text" style="font-size:2em;">

Experience extraordinary events tailored to your vision. MGM Events crafts unforgettable memories with passion, precision, and impeccable attention to detail.</strong>



                  </div>

               </div>

               <!-- slider-content - end -->

            </div>

         </div>

      </div>

   </div>



</section>

<!-- slide-section - end

   ================================================== -->



<!-- about-section - start

   ================================================== -->

<section id="about-section" class="about-section sec-ptb-100 clearfix">

   <div class="container">

      <div class="row">

         <!-- section-title - start -->

         <div class="col-lg-4 col-md-12 col-sm-12">

            <div class="section-title text-left mb-30">

               <span class="line-style"></span>

              <h1> <small class="sub-title">we are MGM</small></h1>

               <h2 class="big-title"><strong>No.1 Events Management</strong> </h2>

               <p class="black-color mb-50">

                  From the corporate conferences and product launches to wedding and social gatherings ,we

                  approaches each project with ethusiasm and attention to details .

               </p>

               <a href="about" class="custom-btn">

                  about MGM

               </a>

            </div>

         </div>

         <!-- section-title - end -->

         <!-- about-item-wrapper - start -->

         <div class="col-lg-8 col-md-12 col-sm-12">

            <div class="about-item-wrapper ul-li">

               <ul>

                  <li>

                     <a href="#!" class="about-item">

                        <span class="icon">

                           <i class="flaticon-handshake"></i>

                        </span>

                        <strong class="title">

                           Friendly Team

                        </strong>

                        <small class="sub-title">

                           More than 200 teams

                        </small>

                     </a>

                  </li>

                  <li>

                     <a href="#!" class="about-item">

                        <span class="icon">

                           <i class="flaticon-two-balloons"></i>

                        </span>

                        <strong class="title">

                           perfact venues

                        </strong>

                        <small class="sub-title">

                           perfact venues

                        </small>

                     </a>

                  </li>

                  <li>

                     <a href="#!" class="about-item">

                        <span class="icon">

                           <i class="flaticon-cheers"></i>

                        </span>

                        <strong class="title">

                           Unique Scenario

                        </strong>

                        <small class="sub-title">

                           We thinking out of the box

                        </small>

                     </a>

                  </li>

                  <li>

                     <a href="#!" class="about-item">

                        <span class="icon">

                           <i class="flaticon-clown-hat"></i>

                        </span>

                        <strong class="title">

                           Unforgettable Time

                        </strong>

                        <small class="sub-title">

                           We make you perfect event

                        </small>

                     </a>

                  </li>

                  <li>

                     <a href="#!" class="about-item">

                        <span class="icon">

                           <i class="flaticon-speech-bubble"></i>

                        </span>

                        <strong class="title">

                           24/7 Hours Support

                        </strong>

                        <small class="sub-title">

                           Anytime anywhere

                        </small>

                     </a>

                  </li>

                  <li>

                     <a href="#!" class="about-item">

                        <span class="icon">

                           <i class="flaticon-light-bulb"></i>

                        </span>

                        <strong class="title">

                           Briliant Idea

                        </strong>

                        <small class="sub-title">

                           We have million idea

                        </small>

                     </a>

                   </li>

               </ul>

            </div>

         </div>

         <!-- about-item-wrapper - end -->

      </div>

   </div>

</section>

<!-- about-section - end

   ================================================== -->







<!-- event-expertise-section - start

		================================================== -->



<section id="event-expertise-section" class="event-expertise-section bg-gray-light sec-ptb-90 clearfix">

   <div class="container" style="max-width: 1600px;width:96%;margin:0 auto;">



      <!-- section-title - start -->

      <div class="section-title mb-50">

         <span class="line-style"></span>

         <small class="sub-title">our services</small>

         <h2 class="big-title">MGM

            <strong>Event</strong>

         </h2>

      </div>

      <!-- section-title - end -->



      <!-- event-expertise-carousel - start -->

      <div id="event-expertise-carousel" class="event-expertise-carousel owl-carousel owl-theme">



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Wedding party

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\wedding.webp" alt="Image_not_found">

                  <a href="wedding-planners-near-me" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Wedding Party</h3>

                  <a href="wedding-planners-near-me" class="link-btn">

                     <i class="fas fa-arrow-circle-right"></i>

                  </a>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">MGM party

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important; object-fit:cover;" src="assets\images\Home_page_Slider_link\mgmBand.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/corporate-event-bands" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">MGM The Band</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Celebrity Management</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\celebrity_management_3.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/celebrity-management-companies" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Celebrity Management</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Magical Show

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\magical_show.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/magical-show-company-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Magical Show</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Dj party

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\Dj_Artist.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/dj-artist-management-companies-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Dj Artist</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Standup Comedy

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\stand_upComedy.jpeg" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/standup-comedy-show-company-events" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Standup Comedy</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Rajshtani Sangeet

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\rajsthani.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/rajasthani-folk-music-group" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Rajsthani Sangeet</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Laughter

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\laughter.webp" alt="Image_not_found">

                  <a href="laughter-show-event-company" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Laughter Events</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Pre Wedding

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\pre_wedding.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/pre-wedding-planner-company" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Pre Wedding Planning</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Ceremony

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\ceremony_event.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/ring-ceremony-event-planner" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Ceremony Events</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Photography

               & Vediography</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\photography_vedio.jpg
                  
                  " alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/video-product-company" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Photography & Vediography</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Birthday Celebration

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\birthday.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/birthday-event-planner" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Birthday Celebration Party</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Anniversary

               Celebration</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\anniversary.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/wedding-anniversary-event-management" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Anniversary Celebration</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Haldi

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\hldi_celebration.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/haldi-event-management-company" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Haldi Celebration </h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Destination Wedding

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\destination_wedding.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/destination-wedding-planner-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Destination Wedding Planning </h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Reception

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\reception.jpg
                  
                  " alt="Image_not_found">

                  <a href="wedding-reception-event-management" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Reception Celebration</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Engagement

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\engagement.jpeg" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/best-engagement-planners-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Engagement Celebration</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Bhangra Dance

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\bhangra.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/bhangra-dance-group-in-delhi" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Bhangra Dance Party</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Classical Music

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\classical_music.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/classical-music-event" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Classical Music Event</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Wedding Sangeet

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\weddingSangeet.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/event-organisers-for-ladies-sangeet" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Wedding Sangeet</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Qawwali

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\qawwali.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/best-qawwali-group-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Qawwali Program</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Shehnai

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\shehnai.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/top-shehnai-company-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Shehnai Event</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->











         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Choreographer

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\choreographer.webp" alt="Image_not_found">

                  <a href="wedding-dance-choreography" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Choreographer</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->







         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Bhagwati Jagran

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\bhagwatiJagran.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/maa-bhagwati-jagran-party" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Bhagwati Jagran</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Sai Sandhya

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\SaiSandhya.jpeg" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/sai-bhajan-sandhya-organisers-in-delhi" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Sai Sandhya</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Bhajan Sandhya

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\bhajanSandhya.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/bhajan-sandhya-organisers-near-me" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Bhajan Sandhya</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Celebrity

               Event</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\CelebrityLiveConcert.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/event-management-company" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Celebrity Live Concert</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Dance

               events</span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\DanceEvent.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/dancing-performance-event" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Dance Event Organizer</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->





         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Celebrity Chief

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\CelebrityChief.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/celebrity-management-agencies-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Celebrity Chief Guest</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Music Show

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\MusicShow.webp" alt="Image_not_found">

                  <a href="http://localhost/mgmevents.in/mgmevents.in/music-event-management-companies" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Music Show Organizer</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



         <!-- expertise-item - start -->

         <div class="item">

            <span class="expertise-title">Mgm Symphony

            </span>

            <div class="expertise-item">

               <div class="image image-wrapper">

                  <img style="height:400px !important ; object-fit:cover;" src="assets\images\Home_page_Slider_link\MgmOrchestra.webp" alt="Image_not_found">

                  <a href="best-orchestra-in-india" class="plus-effect"></a>

               </div>

               <div class="content">

                  <h3 class="title">Mgm Symphony Orchestra</h3>

               </div>

            </div>

         </div>

         <!-- expertise-item - end -->



      </div>

      <!-- event-expertise-carousel - end -->



   </div>

</section>

<!-- event-expertise-section - end

		================================================== -->





<!-- speaker-section - start

   ================================================== -->

<section id="speaker-section" class="speaker-section clearfix">

   <div class="jarallax" style="background-image: url(assets/images/speaker/Black-White-Dubai-Wallpaper.
   
   );">

      <div class="overlay-white">

         <div class="container">

            <!-- speaker-carousel - start -->

            <div class="speaker-carousel">

               <div class="slider-for" style="padding: 100px 0px ;">

                  <div class="item">

                     <div class="row">

                        <!-- speaker-image - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-image image-wrapper text-center">

                              <img src="assets\images\home_speaker\NehaKakkar.webp" alt="Image_not_found">

                              <span class="speaker-name"><strong>Neha</strong>Kakkar</span>

                           </div>

                        </div>

                        <!-- speaker-image - end -->

                        <!-- speaker-content - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-content">

                              <!-- section-title - start -->

                              <div class="section-title text-left mb-50">

                                 <span class="line-style"></span>

                                 <!-- <small class="sub-title">MGM staffs</small> -->

                                 <h2 class="big-title">Professional <strong>Singer</strong></h2>

                              </div>

                              <!-- section-title - end -->

                              <div class="speaker-info">

                                 <div class="speaker-title mb-30">

                                    <span class="speaker-name"><strong>Neha </strong> Kakkar</span>

                                    <span class="work-experienc yellow-color"><strong>15

                                          Years</strong>

                                       experienced</span>

                                 </div>

                                 <p class="black-color">

                                    Neha Kakkar Singh is an Indian playback singer. She is the younger sister of playback singers Tony Kakkar and Sonu Kakkar.

                                 </p>





                              </div>

                           </div>

                        </div>

                        <!-- speaker-content - end -->

                     </div>

                  </div>

                  <div class="item">

                     <div class="row">

                        <!-- speaker-image - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-image image-wrapper text-center">

                              <img src="assets\images\home_speaker\Shreya-Ghoshal.webp
                              
                              " alt="Image_not_found">

                              <span class="speaker-name"><strong>Shreya</strong> Ghoshal</span>

                           </div>

                        </div>

                        <!-- speaker-image - end -->

                        <!-- speaker-content - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-content">

                              <!-- section-title - start -->

                              <div class="section-title text-left mb-50">

                                 <span class="line-style"></span>

                                 <!-- <small class="sub-title">MGM staffs</small> -->

                                 <h2 class="big-title">Professional <strong>Singer</strong></h2>

                              </div>

                              <!-- section-title - end -->

                              <div class="speaker-info">

                                 <div class="speaker-title mb-30">

                                    <span class="speaker-name"><strong>Shreya</strong> Ghoshal</span>

                                    <span class="work-experienc yellow-color"><strong>10

                                          Years</strong>

                                       experienced</span>

                                 </div>

                                 <p class="black-color mb-30 ">

                                    Shreya Ghoshal is an Indian singer. Noted for her range and versatility, she is one of the most prolific and popular singers of India.

                                 </p>





                              </div>

                           </div>

                        </div>

                        <!-- speaker-content - end -->

                     </div>

                  </div>

                  <div class="item">

                     <div class="row">

                        <!-- speaker-image - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-image image-wrapper text-center">

                              <img src="assets\images\home_speaker\TulsiKumar.webp" alt="Image_not_found">

                              <span class="speaker-name"><strong>Tulsi</strong> Kumar</span>

                           </div>

                        </div>

                        <!-- speaker-image - end -->

                        <!-- speaker-content - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-content">

                              <!-- section-title - start -->

                              <div class="section-title text-left mb-50">

                                 <span class="line-style"></span>

                                 <!-- <small class="sub-title">MGM staffs</small> -->

                                 <h2 class="big-title">Professional <strong>Singer</strong></h2>

                              </div>

                              <!-- section-title - end -->

                              <div class="speaker-info">

                                 <div class="speaker-title mb-30">

                                    <span class="speaker-name"><strong>Tulsi</strong> Kumar</span>

                                    <span class="work-experienc yellow-color"><strong>15

                                          Years</strong>

                                       experienced</span>

                                 </div>

                                 <p class="black-color mb-30">

                                    Tulsi Kumar Dua, popularly known as Tulsi Kumar, is an Indian playback singer, radio jockey, musician, and actress in the Bollywood industry.

                                 </p>





                              </div>

                           </div>

                        </div>

                        <!-- speaker-content - end -->

                     </div>

                  </div>

                  <div class="item">

                     <div class="row">

                        <!-- speaker-image - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-image image-wrapper text-center">

                              <img src="assets\images\home_speaker\guru-randava.webp" alt="Image_not_found">

                              <span class="speaker-name"><strong>Guru</strong> Randhawa</span>

                           </div>

                        </div>

                        <!-- speaker-image - end -->

                        <!-- speaker-content - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-content">

                              <!-- section-title - start -->

                              <div class="section-title text-left mb-50">

                                 <span class="line-style"></span>

                                 <!-- <small class="sub-title">MGM staffs</small> -->

                                 <h2 class="big-title">Professional <strong>Singer</strong></h2>

                              </div>

                              <!-- section-title - end -->

                              <div class="speaker-info">

                                 <div class="speaker-title mb-30">

                                    <span class="speaker-name"><strong>Guru</strong> Randhawa</span>

                                    <span class="work-experienc yellow-color"><strong>3

                                          Years</strong>

                                       experienced</span>

                                 </div>

                                 <p class="black-color mb-30">

                                    Gursharanjot Singh Randhawa is an Indian singer, songwriter and music composer associated with Punjabi, Bhangra, and Bollywood music

                                 </p>



                              </div>

                           </div>

                        </div>

                        <!-- speaker-content - end -->

                     </div>

                  </div>

                  <div class="item">

                     <div class="row">

                        <!-- speaker-image - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-image image-wrapper text-center">

                              <img src="assets\images\home_speaker\Vishal-Mishra.webp" alt="Image_not_found">

                              <span class="speaker-name"><strong>Vishal</strong> Mishra</span>

                           </div>

                        </div>

                        <!-- speaker-image - end -->

                        <!-- speaker-content - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-content">

                              <!-- section-title - start -->

                              <div class="section-title text-left mb-50">

                                 <span class="line-style"></span>

                                 <!-- <small class="sub-title">MGM staffs</small> -->

                                 <h2 class="big-title">Professional <strong>Singer</strong></h2>

                              </div>

                              <!-- section-title - end -->

                              <div class="speaker-info">

                                 <div class="speaker-title mb-30">

                                    <span class="speaker-name"><strong>Vishal</strong> Mishra</span>

                                    <span class="work-experienc yellow-color"><strong>15

                                          Years</strong>

                                       experienced</span>

                                 </div>

                                 <p class="black-color mb-30">

                                    Vishal Mishra is an Indian music composer and singer. He first appeared in a reality show aired on DD National.

                                 </p>





                              </div>

                           </div>

                        </div>

                        <!-- speaker-content - end -->

                     </div>

                  </div>

                  <div class="item">

                     <div class="row">

                        <!-- speaker-image - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-image image-wrapper text-center">

                              <img src="assets\images\home_speaker\KumarSanu.webp" alt="Image_not_found">

                              <span class="speaker-name"><strong>Kumar</strong>Sanu</span>

                           </div>

                        </div>

                        <!-- speaker-image - end -->

                        <!-- speaker-content - start -->

                        <div class="col-lg-6 col-md-12 col-sm-12">

                           <div class="speaker-content">

                              <!-- section-title - start -->

                              <div class="section-title text-left mb-50">

                                 <span class="line-style"></span>

                                 <!-- <small class="sub-title">MGM staffs</small> -->

                                 <h2 class="big-title">Professional <strong>Speakers</strong></h2>

                              </div>

                              <!-- section-title - end -->

                              <div class="speaker-info">

                                 <div class="speaker-title mb-30">

                                    <span class="speaker-name"><strong>Kumar</strong> Sanu</span>

                                    <span class="work-experienc yellow-color"><strong>15

                                          Years</strong>

                                       experienced</span>

                                 </div>

                                 <p class="black-color mb-30">

                                    Kedarnath Bhattacharya, professionally known as Kumar Sanu, is an Indian playback singer who primarily sings in Hindi film songs

                                 </p>





                              </div>

                           </div>

                        </div>

                        <!-- speaker-content - end -->

                     </div>

                  </div>

               </div>

               <div class="slider-nav">

                  <div class="item">

                     <div class="item-content">

                        <span class="speaker-thumbnail">

                           <img src="assets\images\home_speaker\Neha-kak.webp" width="100%;" alt="Image_not_found">

                        </span>

                        <h3 class="speaker-name">Neha Kakkar</h3>

                        <span class="sub-title">Singer</span>

                     </div>

                  </div>

                  <div class="item">

                     <div class="item-content">

                        <span class="speaker-thumbnail">

                           <img src="assets\images\home_speaker\shreya.webp" alt="Image_not_found">

                        </span>

                        <h3 class="speaker-name">Shreya Ghoshal</h3>

                        <span class="sub-title">Singer</span>

                     </div>

                  </div>

                  <div class="item">

                     <div class="item-content">

                        <span class="speaker-thumbnail">

                           <img src="assets\images\home_speaker\tulsi-kumar.webp" alt="Image_not_found">

                        </span>

                        <h3 class="speaker-name">Tulsi Kumar</h3>

                        <span class="sub-title">Singer</span>

                     </div>

                  </div>

                  <div class="item">

                     <div class="item-content">

                        <span class="speaker-thumbnail">

                           <img src="assets\images\home_speaker\guruRandhwa.webp" alt="Image_not_found">

                        </span>

                        <h3 class="speaker-name">Guru Randhawa</h3>

                        <span class="sub-title">Singer</span>

                     </div>

                  </div>

                  <div class="item">

                     <div class="item-content">

                        <span class="speaker-thumbnail">

                           <img src="assets\images\home_speaker\vishal.webp" alt="Image_not_found">

                        </span>

                        <h3 class="speaker-name">Vishal Mishra</h3>

                        <span class="sub-title">Singer</span>

                     </div>

                  </div>

                  <div class="item">

                     <div class="item-content">

                        <span class="speaker-thumbnail">

                           <img src="assets\images\home_speaker\kumarSanu_.webp" width="100%;" alt="Image_not_found">

                        </span>

                        <h3 class="speaker-name">Kumar Sanu</h3>

                        <span class="sub-title">Singer</span>

                     </div>

                  </div>

               </div>

               <!-- speaker-carousel - end -->

            </div>

         </div>

      </div>

   </div>

</section>

<!-- speaker-section - end

   ================================================== -->

<!-- testimonial5-section - start

   ================================================== -->

<section id="testimonial5-section" class="testimonial5-section clearfix">

   <div class="jarallax" style="background-image: url('assets/images/gallery/6.image.webp');">

      <div class="overlay-black sec-ptb-100">

         <div class="container">

            <!-- testimonial5-carousel - start -->



            <!-- testimonial5-section - start

		================================================== -->

            <section id="testimonial5-section" class="testimonial5-section sec-ptb-100 clearfix">

               <div class="container">



                  <!-- section-title - start -->

                  <div class="section-title text-center mb-80 sr-fade1">

                     <small class="sub-title" style="color:#ffeb30;">testimonials</small>

                     <h2 class="big-title" style="color: white;"><strong>clients testimonial</strong></h2>

                  </div>

                  <!-- section-title - end -->





                  <!-- testimonial5-carousel - start -->

                  <div id="testimonial5-carousel" class="testimonial5-carousel sr-fade2 owl-carousel owl-theme">



                     <div class="item text-center">

                        <span class="quote-icon">

                           <i class="fas fa-quote-right"></i>

                        </span>

                        <p class="clients-comment">

                           “Bring people together, or turn your passion into a business. MGM gives you everything you need

                           to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a

                           business. MGM gives you everything you need to host your best event yet.”

                        </p>

                        <div class="client-info">

                           <h3 class="client-name">Shushant Singh</h3>

                           <span class="client-sub-title"></span>

                        </div>

                     </div>



                     <div class="item text-center">

                        <span class="quote-icon">

                           <i class="fas fa-quote-right"></i>

                        </span>

                        <p class="clients-comment">

                           “Choosing MGM Events was the best decision we made for our corporate retreat. Their professionalism, creativity, and attention to detail were outstanding. They took the time to understand our objectives and delivered an event that not only met but exceeded our goals. Our team left feeling inspired and motivated, thanks to the memorable experience crafted by MGM Events. We look forward to collaborating with them again!"



                        </p>

                        <div class="client-info">

                           <h3 class="client-name">Rohit Arora</h3>

                           <!-- <span class="client-sub-title">Graphic Designer</span> -->

                        </div>

                     </div>



                     <div class="item text-center">

                        <span class="quote-icon">

                           <i class="fas fa-quote-right"></i>

                        </span>

                        <p class="clients-comment">

                           “

                           MGM Events turned our vision into reality with ease and finesse. Their team's expertise and commitment to excellence ensured that our event ran seamlessly from start to finish. Not only did they meet our expectations, but they also surpassed them, delivering an unforgettable experience for our guests. We highly recommend MGM Events for any occasion!"

                           ”

                        </p>

                        <div class="client-info">

                           <h3 class="client-name">Mohit Chauhan</h3>

                           <!-- <span class="client-sub-title">Graphic Designer</span> -->

                        </div>

                     </div>



                     <div class="item text-center">

                        <span class="quote-icon">

                           <i class="fas fa-quote-right"></i>

                        </span>

                        <p class="clients-comment">

                           “MGM Events met every expectation! Their imaginative flair and meticulous dedication to detail made our celebration absolutely unforgettable. They are the best option for every occasion because of their professionalism, which guarantees flawless execution. Strongly advised!”

                        </p>

                        <div class="client-info">

                           <h3 class="client-name">Manish Shukla</h3>

                           <!-- <span class="client-sub-title">Graphic Designer</span> -->

                        </div>

                     </div>



                  </div>

                  <!-- testimonial5-carousel - end -->

               </div>

         </div>

      </div>

</section>

<!-- testimonial5-section - end

   ================================================== -->



<!-- event-section - start

   ================================================== -->

<section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix ">

   <div class="container">

      <div class="mb-10">

         <div class="row">

            <!-- section-title - start -->

            <div class="col-lg-4 col-md-12 col-sm-12">

               <div class="section-title text-left">

                  <span class="line-style"></span>

                  <small class="sub-title">MGM events</small>

                  <h2 class="big-title"><strong>event</strong> listing</h2>

               </div>

            </div>

            <!-- section-title - end -->

            <!-- event-tab-menu - start -->

            <div class="col-lg-8 col-md-12 col-sm-12">

               <div class="event-tab-menu clearfix">

                  <ul class="nav">

                     <li>

                        <a class="active" data-toggle="tab" href="#musical-event">

                           <strong><i class="fas fa-music"></i> musical</strong> event

                        </a>

                     </li>

                     <li>

                        <a data-toggle="tab" href="#conference-event">

                           <strong><i class="fas fa-microphone"></i> Dance</strong> event

                        </a>

                     </li>

                  </ul>

               </div>

            </div>

            <!-- event-tab-menu - end -->

            <!-- event-tab-menu - start -->



         </div>

      </div>

   </div>

</section>

<!-- tab-content - start -->

<div class="tab-content">

   <!-- conference-event - start -->

   <div id="conference-event" class="tab-pane fade">

      <div class="row" style="margin-inline:40px;">

         <!-- event-item - start -->

         <div class=" col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important; ">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>



                  <div class="grid-item grid-item--width1 video-gallery " data-category="video-gallery">

                     <a class="popup-link" href="assets\images\video1.mp4">

                        <img src="assets\images\Musical_Event\Arijit_1.webp" alt="Image_not_found">

                     </a>

                  </div>

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->



               <div class="event-content" style="background:linear-gradient(to bottom right,white); padding:10px 0px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Arijit Singh Musical Concert

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                    

                  </div>

                 

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->



         <!-- event-item - start -->

         <div class=" col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important; ">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>





                  <div class="grid-item grid-item--width1 video-gallery " data-category="video-gallery">

                     <a class="popup-link" href="assets\images\video.mp4">

                        <img src="assets\images\home_speaker\TulsiKumar.webp" style="height: 270px; width:500px;object-fit:cover;" alt="Image_not_found">

                     </a>

                  </div>



               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->



               <div class="event-content" style="background:linear-gradient(to bottom right,white); padding:10px 0px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Tulsi Kumar Musical Concert

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                     

                  </div>

                  

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->



         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class=" col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important; ">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>





                  <div class="grid-item grid-item--width1 video-gallery " data-category="video-gallery">

                     <a class="popup-link" href="assets\images\weddingEvent.mp4">

                        <img src="assets\images\Home_page_Slider_link\pre_wedding.webp" style="height: 270px;" alt="Image_not_found">

                     </a>

                  </div>



               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->



               <div class="event-content" style="background:linear-gradient(to bottom right,white); padding:10px 0px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        All Wedding Plan

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                    

                  </div>

                 

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->





      </div>

   </div>

   <!-- conference-event - end -->

   <!-- musical-event - start -->

   <div id="musical-event" class="tab-pane fade in active show">

      <div class="row" style="margin-inline:30px;">

         <!-- event-item - start -->

         <div class=" col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important; ">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>



                  <img src="assets\images\Musical_Event\Arijit_1.webp" alt="Image_not_found">



               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->



               <div class="event-content" style="background:linear-gradient(to bottom right,white); padding:10px 0px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Arijit Singh Musical Concert

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                     <ul>

                       

                       

                     </ul>

                  </div>

                 

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\JavedAli_2.webp" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Javed Ali Musical Concert

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                    

                  </div>

                  

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\NehaKakkar.webp" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Neha kakkar Musical Concert

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30 " style="margin-left:13px;">

                     

                  </div>

                 

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\Jubin_4.webp" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Jubin Nutoiyal

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                     

                  </div>

                  

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets/images/event/1.event-grid.webp
                  
                  " alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Diller Mehnadi Events

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                    

                  </div>

                 

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\Kishor_ke_Naam.webp" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Ek sham Kishor ke Naam

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                    

                  </div>

                  

               </div>

               <!-- event-content - end -->

            </div>

         </div>

         <!-- event-item - end -->

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\Arijit_2.webp" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Sol Full Arijit Singh Musical Event

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                    

                  </div>

                 

               </div>

               <!-- event-content - end -->

               <!-- event-item - start -->

            </div>

         </div>

         <!-- event-item - start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\AashaBhoshle.webp" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Ek shaam Asha Bhoshle ke Naam

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left:13px;">

                   

                  </div>

                  

               </div>

            </div>

         </div>

         <!-- start -->

         <div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:40px !important;">

            <div class="event-item2 clearfix">

               <!-- event-image - start -->

               <div class="event-image">

                  <div class="post-date">

                     <span class="date"></span>

                     <small class="month"></small>

                  </div>

                  <img src="assets\images\Musical_Event\Latta_ke_Naam.webp" style="width: 480px; height:260px;" alt="Image_not_found">

               </div>

               <!-- event-image - end -->

               <!-- event-content - start -->

               <div class="event-content" style="background:linear-gradient(to bottom right,white);box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding:10px 0px;">

                  <div class="event-title mb-15" style="margin-left:13px;">

                     <h3 class="title" style="font-family: 'Poppins' ,sans-serif; font-size:20px; color:black">

                        Ek shaam Latta Ji ke Naam

                     </h3>

                  </div>

                  <div class="event-post-meta ul-li-block mb-30" style="margin-left: 13px;">

                     

                  </div>

                  

               </div>

            </div>

         </div>



      </div>

   </div>

</div>

<!-- musical-event - end -->



<!-- default-sponsor-section - start

   ================================================== -->

<!-- default-sponsor-section - start

   ================================================== -->

<section>

   <div class="col-lg-3 col-md-12 col-sm-12">

      <div class="section-title text-left">

         <span class="line-style"></span>

         <!-- <small class="sub-title">MGM event</small> -->

         <h2 class="big-title"><strong> MGM Clients</strong> </h2>

      </div>

   </div>



   <div class="slider-container">

      <div class="slider">

         <div class="slide">

            <img src="assets\images\comapny_logo\ABA_CORP.webp" style="width: 100px;height:100px;" alt="Company 9">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\relaince.webp" style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\Tata.webp" style="width: 100px;height:90px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\gaursSons.jpeg" style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\ITCImg.webp
            
            " style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\amilGroup.gif" style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\crownPlaza.webp
            
            " style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\BMDU.jpeg" style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>

         <div class="slide">

            <img src="assets\images\comapny_logo\logo_8.png" style="width: 100px;height:100px;object-fit:cover;" alt="Company 2">

         </div>



      </div>

   </div>

</section>

<!-- news-update-section - start

   ================================================== -->

<section id="news-update-section" class="news-update-section sec-ptb-100 clearfix">

   <div class="container">

      <div class="row">

         <!-- faq-accordion - start -->

         <div class="col-lg-6 col-md-12 col-sm-12">

            <!-- section-title - start -->

            <div class="section-title mb-30">

               <span class="line-style"></span>

               <small class="sub-title">find your answer</small>

               <h2 class="big-title">ask & <strong>questions</strong></h2>

            </div>

            <!-- section-title - end -->

            <div id="faq-accordion" class="faq-accordion">

               <div class="card">

                  <div class="card-header" id="headingone">

                     <button class="btn collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">

                        <span>01.</span> How to join MGM Event Management?

                     </button>

                  </div>

                  <div id="collapseone" class="collapse show " aria-labelledby="headingone" data-parent="#faq-accordion">

                     <div class="card-body">

                        <h3>answer</h3>

                        Bring people together, or turn your passion into a business. MGM gives

                        you

                        everything

                        you need to host your best event yet.

                     </div>

                  </div>

               </div>

               <div class="card">

                  <div class="card-header" id="headingtwo">

                     <button class="btn collapsed" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">

                        <span>02.</span> How to make my own event?

                     </button>

                  </div>

                  <div id="collapsetwo" class="collapse " aria-labelledby="headingtwo" data-parent="#faq-accordion">

                     <div class="card-body">

                        <h3>answer</h3>

                        Bring people together, or turn your passion into a business. MGM gives

                        you

                        everything

                        you need to host your best event yet. lorem ipsum diamet.

                     </div>

                  </div>

               </div>

               <div class="card">

                  <div class="card-header" id="headingthree">

                     <button class="btn collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">

                        <span>03.</span> About the price to make new event?

                     </button>

                  </div>

                  <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#faq-accordion">

                     <div class="card-body">

                        <h3>answer</h3>

                        Bring people together, or turn your passion into a business. MGM gives

                        you

                        everything

                        you need to host your best event yet. lorem ipsum diamet.

                     </div>

                  </div>

               </div>

               <div class="card">

                  <div class="card-header" id="headingfour">

                     <button class="btn collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">

                        <span>04.</span> About the price to make new event?

                     </button>

                  </div>

                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-accordion">

                     <div class="card-body">

                        <h3>answer</h3>

                        Bring people together, or turn your passion into a business. MGM gives

                        you

                        everything

                        you need to host your best event yet. lorem ipsum diamet.

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <!-- faq-accordion - end -->

         <!-- latest-blog-wrapper - start -->

         <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="latest-blog-wrapper">

               <!-- section-title - start -->

               <div class="section-title mb-30">

                  <span class="line-style"></span>

                  <small class="sub-title">our blog</small>

                  <h2 class="big-title">latest <strong>news</strong></h2>

               </div>

               <!-- section-title - end -->

               <!-- latest-blog - start -->

               <div class="latest-blog clearfix">

                  <div class="blog-image">

                     <img src="assets\images\Musical_Event\Arijit_3_short.webp" alt="Image_not_found">

                     <a href="#!" class="plus-effect"></a>

                  </div>

                  <div class="blog-content">

                     <div class="blog-title mb-30">

                        <h3>Arijit Singh Musical Concert</h3>

                        <span>2022-23</span>

                     </div>

                     <p class="m-0">

                        MGM gives you everything you need to host your best event yet.

                        Everythings Managed by MGM Staffs.

                     </p>

                  </div>

               </div>

               <!-- latest-blog - end -->

               <!-- latest-blog - start -->

               <div class="latest-blog clearfix">

                  <div class="blog-image">

                     <img src="assets\images\Musical_Event\Tulsi_kumar.webp" alt="Image_not_found">

                     <a href="#!" class="plus-effect"></a>

                  </div>

                  <div class="blog-content">

                     <div class="blog-title mb-30">

                        <h3>Tulsi Kumar</h3>

                        <span>26 June 2022-23</span>

                     </div>

                     <p class="m-0">

                        MGM gives you everything you need to host your best event yet.

                     </p>

                  </div>

               </div>

               <!-- latest-blog - end -->

            </div>

         </div>

         <!-- latest-blog-wrapper - end -->

      </div>

   </div>

</section>

<!-- news-update-section - end

   ================================================== -->



<!-- <script>

   const phoneInput = document.getElementById('phone-input');

   const phoneError = document.getElementById('phone-error');

   const phoneRegex = /^\d{10,13}$/;



   phoneInput.addEventListener('input', () => {

      if (phoneInput.value.length > 13) {

         phoneInput.value = phoneInput.value.slice(0, 13); // Limit  13 characters

      }



      if (!phoneRegex.test(phoneInput.value)) {

         phoneError.style.display = 'inline';

      } else {

         phoneError.style.display = 'none';

      }

   });

</script>
 -->




<!-- <script>

   const phoneInputs = document.getElementById('phone-inputs');

   const phoneErrors = document.getElementById('phone-errors');

   const phoneRegexs = /^\d{10,13}$/;



   phoneInputs.addEventListener('input', () => {

      if (phoneInputs.value.length > 13) {

         phoneInputs.value = phoneInputs.value.slice(0, 13); // Limit input to 13 characters

      }



      if (!phoneRegexs.test(phoneInputs.value)) {

         phoneErrors.style.display = 'inline';

      } else {

         phoneErrors.style.display = 'none';

      }

   });

</script>
 -->



<!-- 
<script>

   const emailInput = document.getElementById('email-input');

   const emailError = document.getElementById('email-error');



   emailInput.addEventListener('input', () => {

      if (!emailInput.checkValidity()) {

         emailError.style.display = 'inline';

      } else {

         emailError.style.display = 'none';

      }

   });

</script> -->





<script>

   let slideIndex = 0;



   function showSlides() {

      const slides = document.querySelectorAll('.slide');

      if (slideIndex >= slides.length) {

         slideIndex = 0;

      }

      const slideWidth = slides[0].clientWidth;

      const offset = -slideIndex * slideWidth;

      document.querySelector('.slider').style.transform = `translateX(${offset}px)`;

      slideIndex++;

      setTimeout(showSlides, 2000); // Change slide every 2 sec

   }



   showSlides(); // Initial call to start the slideshow

</script>



<!-- default-sponsor-section - end

   ================================================== -->

 <!-- <script>

     var owl = $('.owl-carousel');

owl.owlCarousel({

    items:4,

    loop:true,

    margin:10,

    autoplay:true,

    autoplayTimeout:1000,

    autoplayHoverPause:true

});

$('.play').on('click',function(){

    owl.trigger('play.owl.autoplay',[1000])

})

$('.stop').on('click',function(){

    owl.trigger('stop.owl.autoplay')

})

 </script>   -->

   

<?php include 'include/footer.php'; ?>