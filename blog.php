<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">


</head>

<body>


    <!-- Header Section -->

    <?php include 'inc/header.php'; ?>

    <!-- End Header Section -->



    <section id="blogsec-banner">
        <span></span>
        <h1>OUR BLOGS</h1>
    </section>



    <section id="blogpagesection">
        <div class="container">
            <!-- <h2>OUR LATEST BLOGS</h2> -->

            <div class="coming-soon">
                <img src="assets/img/coming-soon.png" alt="">
            </div>

            <!-- <div class="blogs mt-5">
                <div class="blogitems">
                    <div class="img-div">
                        <img src="assets/img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog-cont">
                        <h3>Blog Title - 1</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, cum.</p>
                        <a href="" class="blog-btn">Read More</a>
                    </div>
                </div>
                <div class="blogitems">
                    <div class="img-div">
                        <img src="assets/img/blog/blog-2.jpg" alt="">
                    </div>
                    <div class="blog-cont">
                        <h3>Blog Title - 1</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, cum.</p>
                        <a href="" class="blog-btn">Read More</a>
                    </div>
                </div>
                <div class="blogitems">
                    <div class="img-div">
                        <img src="assets/img/blog/blog-3.jpg" alt="">
                    </div>
                    <div class="blog-cont">
                        <h3>Blog Title - 1</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, cum.</p>
                        <a href="" class="blog-btn">Read More</a>
                    </div>
                </div>
            </div> -->

        </div>
    </section>






    <!-- scnd cta Section -->

    <?php include 'inc/scnd-cta.php'; ?>

    <!-- End scnd cta Section -->






    <!-- Footer Section -->

    <?php include 'inc/footer.php'; ?>

    <!-- End Footer Section -->





    <script>
        document.querySelectorAll('.cnt-nav-link').forEach((item) => item.classList.add('active'));
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