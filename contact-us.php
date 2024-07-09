<?php include 'include/header.php'; ?>
<!-- breadcrumb-section - start
		================================================== -->
<section id="breadcrumb-section" class="breadcrumb-section clearfix">
    <div class="jarallax" style="background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
        <div class="overlay-black">
            <div class="container" style="padding-top: 90px;">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <!-- breadcrumb-title - start -->
                        <div class="breadcrumb-title text-center mb-50">
                            <span class="sub-title">contact us now</span>
                            <h2 class="big-title">keep <strong>in touch</strong></h2>
                        </div>
                        <!-- breadcrumb-title - end -->

                        <!-- breadcrumb-list - start -->
                        <div class="breadcrumb-list">
                            <ul>
                                <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
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





<!-- contact-section - start
		================================================== -->
<section id="contact-section" class="contact-section sec-ptb-100 clearfix">
    <div class="container">

        <!-- section-title - start -->
        <div class="section-title mb-50">
            <small class="sub-title">contact us</small>
            <h2 class="big-title">Keep in touch <strong>with MGM</strong></h2>
        </div>
        <!-- section-title - end -->

        <!-- contact-form - start -->
        <div class="contact-form form-wrapper text-center shadow-lg p-3">
            <form action="contact-inquiry.php" method="post">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-item">
                            <input type="text" placeholder="Your Name" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-item">
                            <input id="email-input" type="email" placeholder="Email Address" required pattern="[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,}$">
                            <span id="email-error" style="color: red; display: none; font-size:10px;">Invalid email address</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-item">
                            <input type="text" placeholder="Your Country" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-item">
                            <input type="tel" id="phone-input" placeholder="Phone Number" required>
                            <span id="phone-error" style="color: red; display: none; font-size:10px;">Invalid phone number</span>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea placeholder="Your Message" required></textarea>
                        <button type="submit" class="custom-btn">send mail</button>
                    </div>

                </div>
            </form>
        </div>
        <!-- contact-form - end -->

    </div>
</section>
<!-- contact-section - end
		================================================== -->





<!-- google map - start
		================================================== -->
<section id="map-section" class="map-section clearfix">
    <div class="address-wrapper1">

      

    </div>
  
</section>
<!-- google map - end
		================================================== -->



<script>
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
</script>


<!-- default-footer-section - start
		================================================== -->
<?php include 'include/footer.php'; ?>