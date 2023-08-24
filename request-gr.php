<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>

    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body>


    <!-- Header Section -->

    <?php include 'inc/header-gr.php'; ?>

    <!-- End Header Section -->



    <section id="requestbanner">
        <span></span>
        <h1 data-aos="flip-up" data-aos-duration="1000" data-aos-delay="4000">UNSERE PRODUKTE</h1>
        <p>Interessiert an unseren Goldangeboten? Nehmen Sie Kontakt mit uns auf, um mehr zu erfahren und Informationen anzufordern.</p>
    </section>







    <section id="productsection">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 products" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="img-div">
                        <img src="assets/img/gold/gold-500g.png" alt="">
                    </div>
                    <div class="details">
                        <h4>500g Goldbarren</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 products" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1200">
                    <div class="img-div">
                        <img src="assets/img/gold/gold-1000g.png" alt="">
                    </div>
                    <div class="details">
                        <h4>1000g Goldbarren</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 products" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1400">
                    <div class="img-div">
                        <img src="assets/img/gold/oz-bars.png" alt="">
                    </div>
                    <div class="details">
                        <h4>12.44kg Goldbarren</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="requestfromsection">
        <div class="container">
            <div class="req-form" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="">
                <h2>ANFRAGE UND<br>MIT UNS IN VERBINDUNG TRETEN</h2>
                <form action="">
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-4">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col-12 col-lg-6 mt-4">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-4">
                            <input type="phone" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-12 col-lg-6 mt-4 input-div">
                            <div class="dropdown">
                                <input type="text" class="dropdown-input" readonly value="- select subject -">
                                <ul class="dropdown-div">
                                    <li name="" id="" class="dropdown-items" value="Gold Price">Gold Price</li>
                                    <li name="" id="" class="dropdown-items" value="Gold Quantity">Gold Quantity</li>
                                    <li name="" id="" class="dropdown-items" value="Invest With Us">Invest With Us</li>
                                    <li name="" id="" class="dropdown-items" value="Other">Other</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <textarea name="" id="" cols="30" rows="5" placeholder="Comment Here"></textarea>
                        </div>
                    </div>
                    <div class="sub-btn">
                        <button type="submit" class="main-btn">Absenden</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- scnd cta Section -->

    <?php include 'inc/scnd-cta-gr.php'; ?>

    <!-- End scnd cta Section -->



    <!-- Footer Section -->

    <?php include 'inc/footer-gr.php'; ?>

    <!-- End Footer Section -->



    <!-- Contact Page Service Custom Dropdown -->
    <script>
        let dropdown_input = document.querySelector('.dropdown-input')
        dropdown_input.addEventListener('click', function() {
            document.querySelector('.dropdown-div').classList.add('active')
        })

        document.querySelectorAll('.dropdown-items').forEach((item) => {
            console.log(item)
            item.addEventListener('click', function() {
                let services = item.getAttribute('value')
                dropdown_input.value = services
                document.querySelector('.dropdown-div').classList.remove('active')

            })
        })

        document.body.addEventListener('click', event => {
            // check if the clicked element is the 'my-element' element or one of its children
            const clickedElement = event.target;
            const myElement = document.querySelector('.dropdown-input');
            if (myElement.contains(clickedElement)) {
                // do nothing if the clicked element is the 'my-element' element or one of its children
                return;
            }

            // remove the 'active' class from the 'my-element' element
            document.querySelector('.dropdown-div').classList.remove('active')
        });
    </script>

    <!-- <script>
        document.querySelectorAll('.cnt-nav-link').forEach((item) => item.classList.add('active'));
    </script> -->

    <script>
        // TRANSLATOR

        document.getElementById("myButton").addEventListener("click", function() {
            window.location.href = "request.php";
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