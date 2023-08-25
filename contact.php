<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body>


    <!-- Header Section -->

    <?php include 'inc/header.php'; ?>

    <!-- End Header Section -->



    <section id="contactsec-banner">
        <span></span>
        <h1 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">CONTACT WITH US</h1>
        <p data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">Begin your journey here to explore the gold and its gain.</p>
    </section>



    <section id="contactform">
        <div class="container">
            <div class="formsection" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="1200">
                <h2>CONTACT<br class="cont-head-br"> GOLDMINE SANGER</h2>
                <form action="">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <input type="text" class="form-control mt-4" placeholder="Enter Your Name">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <input type="text" class="form-control mt-4" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea type="text" class="form-control mt-4" rows="8" placeholder="Comment Here"></textarea>
                        </div>
                    </div>
                    <div class="cnt-btn">
                        <button type="submit" class="main-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- <section id="scndctasection">
        <div class="container">
            <div class="scnd-cta-sec">
                <div class="row">
                    <div class="col-12 col-lg-6 left">
                        <h1>Seize the Gold Investment Opportunity Today....!</h1>
                        <p>Discover the brilliance of investing in gold with us. As a gold investor, you'll gain access to a world of precious opportunities</p>
                        <a href="" class="cta-btn">CONTACT US</a>
                    </div>
                    <div class="col-12 col-lg-6 "></div>
                </div>
            </div>
        </div>
    </section> -->


    <section id="contact-details">
        <div class="container">
            <div class="details" data-aos="zoom-in" data-aos-duration="500">
                <div class="row">
                    <div class="box col-12 col-lg-4 d-flex align-items-center justify-content-center  justify-content-lg-start align-item-md-start mb-md-4">
                        <div class="cont">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Al Khabeesi Office 212 - 1, Abdulrahman Hassan Building, Dubai, UAE, P.O Box 215484</p>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center">
                        <div class="cont">
                            <i class="fa-solid fa-envelope-circle-check"></i>
                            <a href="mailto:info@goldminesanger.com">info@goldminesanger.com</a>
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center">
                        <div class="cont">
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <a href="tel:+971 50 504 3988" class="cont-number">+971 50 504 3988</a>
                                <a href="tel:+491 76 236 33379" class="cont-number">+491 76 236 33379</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="map-section">
        <div class="container" data-aos="zoom-in" data-aos-duration="500">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14432.498245841753!2d55.32074518342638!3d25.26639492797003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ce906f867d1%3A0x8a6d992d9274e41e!2sAl%20Khabaisi%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1692598042051!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>





    <!-- Footer Section -->

    <?php include 'inc/footer.php'; ?>

    <!-- End Footer Section -->





    <script>
        document.querySelectorAll('.cnt-nav-link').forEach((item) => item.classList.add('active'));
    </script>




    <script>
        // TRANSLATOR

        document.getElementById("myButton").addEventListener("click", function() {
            window.location.href = "contact-gr.php";
        });
    </script>






    <!-- Smooth Scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>


    <script src="assets/js/main.js"></script>

</body>

</html>