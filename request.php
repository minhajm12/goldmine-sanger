<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>


    <!-- Header Section -->

    <?php include 'inc/header.php'; ?>

    <!-- End Header Section -->



    <section id="requestbanner">
        <span></span>
        <h1>OUR PRODUCTS</h1>
        <p>Interested in our gold offerings? Reach out to us to learn more and request information.</p>
    </section>







    <section id="productsection">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 products">
                    <div class="img-div">
                        <img src="assets/img/gold/gold-500g.png" alt="">
                    </div>
                    <div class="details">
                        <h4>500g Gold Bar</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 products">
                    <div class="img-div">
                        <img src="assets/img/gold/gold-1000g.png" alt="">
                    </div>
                    <div class="details">
                        <h4>1000g Gold Bar</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 products">
                    <div class="img-div">
                        <img src="assets/img/gold/oz-bars.png" alt="">
                    </div>
                    <div class="details">
                        <h4>12.44kg Gold Bar</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="requestfromsection">
        <div class="container">
            <div class="req-form">
                <h2>REQUEST AND<br>CONNECT WITH US</h2>
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
                                <input type="text" class="dropdown-input" readonly value="- select service -">
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
                        <button type="submit" class="main-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- scnd cta Section -->

    <?php include 'inc/scnd-cta.php'; ?>

    <!-- End scnd cta Section -->



    <!-- Footer Section -->

    <?php include 'inc/footer.php'; ?>

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

    <!-- Smooth Scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/275b00d5ce.js" crossorigin="anonymous"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="Assets/js/main.js"></script>

</body>

</html>