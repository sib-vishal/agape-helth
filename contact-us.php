<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agape Health</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body>


    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="hero contact-banner overflow-hidden">
            <div class="row">
                <div class="w-100  contact-banner_inner ">
                    <h1 class="large_heading text-center">
                        Contact Us
                    </h1>
                    <p class="text-center title mt-3">
                        Home / Contact Us


                    </p>

                </div>
                <div class="hero-carousel-main">

                    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img src="images/lovely-dog-posing-garden.jpg" class="w-100" alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="images/man-having-fun-with-his-dog-garden.jpg" class="w-100" alt="...">
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- ********************************************* -->


        <!-- CONTACT -->
        <section class="py-3">
            <div class="containerFull ">
                <div class="address-details">
                    <div class="  align-items-center d-flex gap-3 p-4 address-details-card ">
                        <i class="fa-solid text-white heading fa-phone-volume me-2"></i>
                        <div class="d-inline-block ">
                            <a class="title text-white " href=" ">
                                Phone <br>
                                <span class="fs-6">
                                    +91 1234567890
                                </span>
                            </a>
                        </div>

                    </div>
                    <div class=" address-details-card align-items-center d-flex gap-3 p-4 ">
                        <i class="fa-solid text-white heading  fa-envelope me-2"></i>
                        <div>
                            <a class="title text-white " href="">
                                Mail <br>
                                <span class="fs-6">

                                    demo@gmail.com
                                </span>

                            </a>
                        </div>

                    </div>
                    <div class=" address-details-card align-items-center d-flex gap-3 p-4 ">
                        <i class="fa-solid text-white heading  fa-location-dot me-2"></i>
                        <div>
                            <a class="title text-white " href="">
                                Address <br>
                                <span class="fs-6">
                                 Lorem ipsum dolor sit amet.
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-main">
            <div class=" containerFull  ">
                <div class="contact-main-inner shadow">

                    <div class="contact-main-inner-left ">
                        <img class="w-100 h-100 object-fit-cover" src="images/contact_form.png" alt="contact-form.png">

                    </div>
                    <div class="contact-main-inner-right bg-white">
                        <div class="">
                            <p class="title">
                                Get in touch with us
                            </p>
                            <h5 class=" fontWeight600 heading mt-2">
                                We care your pets
                            </h5>

                            <form action="">


                                <div>
                                    <input class="input-field" type="text " placeholder="Name">
                                </div>
                                <div>
                                    <input class="input-field" type="text " placeholder="Phone No.">
                                </div>
                                <div>
                                    <input class="input-field" type="text " placeholder="Email">
                                </div>
                                <div>
                                    <select class="seclectfield" name="" id="">
                                        <option value="dog">Select Pet</option>
                                        <option value="dog">Dog</option>
                                        <option value="Cat">Cat</option>
                                    </select>
                                </div>
                                <div class="message-input">
                                    <textarea class="input-field" type="text " placeholder="Message"></textarea>
                                </div>
                                <button class=" w-100  d-block message-input">
                                    Send Message
                                </button>
                            </form>



                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- map -->
        <section>
            <div class="containerFull ">
                <iframe class="w-100 shadow"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028682.7534937053!2d-79.55130716170325!3d42.15674893034856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f16f48068503%3A0x8df915a15aa21b34!2sPittsburgh%2C%20PA%2C%20USA!5e0!3m2!1sen!2sin!4v1719491292095!5m2!1sen!2sin"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>


        <?php include 'include/footer.php'; ?>
    </div>

    <?php include 'include/footer-links.php'; ?>
</body>

</html>