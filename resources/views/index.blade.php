<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" type="image/x-icon" href="/images/x-icon.jpeg" />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=Nunito"
            rel="stylesheet"
        />

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href=" {{ asset('css/main.css') }} "
            type="text/css"
        />
        <!-- Bootstrap Font Icon CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <title>[Name] University- Home</title>
    </head>
    <body>
        <div class="fixed-top">
            <header>
                <div id="topbar" class="d-flex justify-content-center">
                    <div class="d-flex">
                        <i
                            class="bi bi-geo-alt-fill py-1 mx-1 d-flex align-items-center"
                            ><p class="my-1">
                                2925 SWICK HILL STREET, CHARLOTTE, NC 28202
                            </p>
                        </i>
                    </div>

                    <div class="d-flex">
                        <i
                            class="bi bi-telephone-fill py-1 mx-1 d-flex align-items-center"
                        >
                            <p class="my-1">+91 54678745</p></i
                        >
                    </div>

                    <div class="d-flex mx-5">
                        <div class="text-center my-3">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-linkedin"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-gmail"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-google"></i>
                        </div>
                    </div>
                </div>
                <!-- header -->

                <div class="d-flex justify-content-around bg-white">
                    <a
                        id="header"
                        class="d-flex justify-content-center"
                        href="#"
                    >
                        <img id="header-logo " src={{
                            url("/images/logo.jpeg")
                        }}
                        class="mt-1" height="150" alt="Logo"/>
                        <div
                            id="header-title"
                            class="d-flex flex-column align-items-center pt-2"
                        >
                            <span class="">
                                <h3>Yuunivarsiitii [Name]</h3></span
                            >
                            <span class=""><h4>መቱ ዩኒቨርሲቲ</h4></span>
                            <span class=""><h5>[Name] University</h5></span>
                            <span
                                id="description"
                                class="m-1 p-1 text-white fs-6"
                                itemprop="description"
                                >We are dedicated to serve the community!</span
                            >
                        </div>
                    </a>
                </div>
                <div class="d-flex pb-1" style="background-color: #2d2c72">
                    <span
                        id="newupdate"
                        class="bg-warning text-dark p-1 text-nowrap"
                        >New Update!</span
                    >
                    <a href="#" class="flex-fill text-white pt-2"
                        ><marquee
                            >New Admission | New Campus | Campus Life</marquee
                        ></a
                    >
                </div>
            </header>

            <!-- {{-- navbar --}} -->
            <div id="navbar">
                <nav class="navbar navbar-expand-lg bg-white">
                    <div class="container-fluid">
                        <a class="navbar-brand text-dark" href="#"
                            >[Name] University</a
                        >
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div
                            class="collapse navbar-collapse d-flex justify-content-center"
                            id="navbarNavDropdown"
                        >
                            <ul id="navbar-nav" class="navbar-nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link text-dark active"
                                        aria-current="page"
                                        href="#"
                                        >Home</a
                                    >
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link text-dark dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Colleges</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Registrar</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Library</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Others</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link text-dark dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Research
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Background</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Research Area & Guildlines</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >journals</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Publications & Proceeding</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Seminar & Conferences</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Research Project</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link text-dark dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Campus Life
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Overview</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Art & Culture</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Sports & Transport</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Clubs</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Dormitory</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Cafeteria</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link text-dark dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Community Services</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Student Services</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link text-dark dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        Collabrations
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Local</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >International</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link text-dark dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        About
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Background</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Mission and Vision
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >President Message</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Academic Vice President
                                                Message</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >University Boards</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="/contact"
                                                >Contact Us</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <li class="nav-item d-flex">
                            <a class="nav-link text-dark" href="#">Login</a>
                        </li>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Carousel -->

        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <!-- <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#demo"
                    data-bs-slide-to="0"
                    class="active"
                ></button>
                <button
                    type="button"
                    data-bs-target="#demo"
                    data-bs-slide-to="1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#demo"
                    data-bs-slide-to="2"
                ></button>
            </div> -->

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="hero-image " src={{ url("/images/hero.jpg") }}
                    class="img-fluid" alt="Hero Image"/>
                </div>
                <div class="carousel-item">
                    <img id="hero-image " src={{ url("/images/hero.jpg") }}
                    class="img-fluid" alt="Hero Image"/>
                </div>
                <div class="carousel-item">
                    <img id="hero-image " src={{ url("/images/hero.jpg") }}
                    class="img-fluid" alt="Hero Image"/>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#demo"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon"> </span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#demo"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- {{-- Campus card --}} -->
        <section>
            <div class="d-flex justify-content-center">
                <div class="shadow" id="campus-card" style="height: 50%">
                    <h4>Mettu</h4>
                    <h5>Campus (main)</h5>
                    <i class="bi bi-arrow-right-circle"></i>
                </div>
                <div class="shadow" id="campus-card" style="height: 50%">
                    <h4>Bedele</h4>
                    <h5>Campus (Agri)</h5>
                    <i class="bi bi-arrow-right-circle"></i>
                </div>
            </div>
        </section>

        <!-- about-us -->

        <section>
            <div class="container py-5">
                <h1 class="text-center pb-3">Welcome to [Name] University</h1>
                <div class="d-flex justify-content-center gap-5">
                    <div>
                        <img src={{ url("images/campus1.jpg") }} class="rounded"
                        style="height: 500px; width: 500px;" alt="Campus Image">
                    </div>
                    <div class="flex-column">
                        <h3 class="">About us</h3>
                        <p class="">
                            Welcome to [University Name], a place where
                            knowledge meets innovation, and dreams transform
                            into reality. Established in [Year], we have been
                            dedicated to fostering a community of learners,
                            thinkers, and creators who are poised to make a
                            meaningful impact on the world. At [University
                            Name], our mission is to provide a transformative
                            education that empowers individuals to excel in
                            their chosen fields and contribute to the betterment
                            of society. Through rigorous academic programs,
                            cutting-edge research opportunities, and a
                            commitment to diversity and inclusion, we aim to
                            inspire our students to become lifelong learners and
                            leaders in their respective domains.
                        </p>
                        <button type="button" class="btn btn-outline-danger">
                            Read More

                            <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- News & Annoucements -->
        <section style="background-color: #2d2c72">
            <div id="news-events-container" class="container d-flex">
                <div class="d-flex flex-column">
                    <h1 class="d-flex justify-content-lg-around text-white">
                        News & Annoucements
                    </h1>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center p-5">
                            <div
                                id="news-card"
                                class="shadow"
                                style="height: 50%"
                            >
                                <img src={{ url("images/program1.jpg") }}
                                style="height: 250px; width: 260px;" >
                                <hr />
                                <h4>New News Heading</h4>
                                <h6>Short description...</h6>
                                <P
                                    >See More
                                    <i class="bi bi-arrow-right-circle"></i
                                ></P>
                            </div>
                            <div
                                id="news-card"
                                class="shadow"
                                style="height: 50%"
                            >
                                <img src={{ url("images/program2.jpg") }}
                                style="height: 250px; width: 260px;">
                                <hr />
                                <h4>New News Heading</h4>
                                <h5>Short description</h5>
                                <P
                                    >See More
                                    <i class="bi bi-arrow-right-circle"></i
                                ></P>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <h1 class="d-flex justify-content-lg-around text-white">
                        Events
                    </h1>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center p-5">
                            <div
                                id="events-card"
                                class="shadow"
                                style="height: 50%"
                            >
                                <img src={{ url("images/program3.jpg") }}
                                style="height: 250px; width: 260px; ">
                                <hr />
                                <h4>Workshop</h4>
                                <h5>description</h5>
                                <P
                                    >See More
                                    <i class="bi bi-arrow-right-circle"></i
                                ></P>
                            </div>
                            <div
                                id="events-card"
                                class="shadow"
                                style="height: 50%"
                            >
                                <img src={{ url("images/program4.jpg") }}
                                style="height: 250px; width: 260px;">
                                <hr />
                                <h4>Workshop</h4>
                                <h5>description</h5>
                                <P
                                    >See More
                                    <i class="bi bi-arrow-right-circle"></i
                                ></P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog -->

        <section class="bg-white">
            <div class="d-flex flex-column">
                <h1
                    style="background-color: #ffc107"
                    class="d-flex justify-content-lg-around text-dark shadow p-2"
                >
                    Blogs
                </h1>
                <div class="container">
                    <div class="d-flex justify-content-center py-5">
                        <div id="blog-card" class="shadow my-3">
                            <p>
                                “Leo egestas molestie nunc eros, dictum vivamus
                                lectus vulputate tincidunt arcu id facilisi
                                augue sed mauris non, vitae consequat id.”
                            </p>

                            <div class="d-flex">
                                <img class="rounded-circle" src={{
                                    url("images/program3.jpg")
                                }}
                                style="height: 50px; width: 50px;">

                                <p class="text-muted p-2">Autor</p>
                            </div>
                            <hr />
                            <span
                                >View more
                                <i class="bi bi-arrow-right-circle"></i>
                            </span>
                        </div>
                        <div
                            id="blog-card"
                            class="shadow my-3"
                            style="height: 50%"
                        >
                            <p>
                                “Leo egestas molestie nunc eros, dictum vivamus
                                lectus vulputate tincidunt arcu id facilisi
                                augue sed mauris non, vitae consequat id.”
                            </p>
                            <div class="d-flex">
                                <img class="rounded-circle" src={{
                                    url("images/program4.jpg")
                                }}
                                style="height: 50px; width: 50px;">

                                <p class="text-muted p-2">Autor</p>
                            </div>
                            <hr />
                            <span
                                >View more
                                <i class="bi bi-arrow-right-circle"></i>
                            </span>
                        </div>

                        <div
                            id="blog-card"
                            class="shadow my-3"
                            style="height: 50%"
                        >
                            <p>
                                “Leo egestas molestie nunc eros, dictum vivamus
                                lectus vulputate tincidunt arcu id facilisi
                                augue sed mauris non, vitae consequat id.”
                            </p>

                            <div class="d-flex">
                                <img class="rounded-circle" src={{
                                    url("images/program6.jpg")
                                }}
                                style="height: 50px; width: 50px;">

                                <p class="text-muted p-2">Autor</p>
                            </div>
                            <hr />
                            <span
                                >View more
                                <i class="bi bi-arrow-right-circle"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->

        <section class="bg-white">
            <div class="d-flex flex-column">
                <h1
                    style="background-color: #2d2c72"
                    class="d-flex justify-content-lg-around text-white shadow p-2"
                >
                    Testimonials
                </h1>
                <div class="container">
                    <div class="d-flex justify-content-center py-5">
                        <div
                            id="testimonials-card"
                            class="shadow my-3"
                            style="height: 50%"
                        >
                            <p>
                                “Leo egestas molestie nunc eros, dictum vivamus
                                lectus vulputate tincidunt arcu id facilisi
                                augue sed mauris non, vitae consequat id.”
                            </p>

                            <div class="d-flex">
                                <img class="rounded-circle" src={{
                                    url("images/program3.jpg")
                                }}
                                style="height: 50px; width: 50px;">

                                <p class="text-muted p-2">Autor</p>
                            </div>
                            <hr />
                            <span
                                >View more
                                <i class="bi bi-arrow-right-circle"></i>
                            </span>
                        </div>
                        <div
                            id="testimonials-card"
                            class="shadow my-3"
                            style="height: 50%"
                        >
                            <p>
                                “Leo egestas molestie nunc eros, dictum vivamus
                                lectus vulputate tincidunt arcu id facilisi
                                augue sed mauris non, vitae consequat id.”
                            </p>
                            <div class="d-flex">
                                <img class="rounded-circle" src={{
                                    url("images/program4.jpg")
                                }}
                                style="height: 50px; width: 50px;">

                                <p class="text-muted p-2">Autor</p>
                            </div>
                            <hr />
                            <span
                                >View more
                                <i class="bi bi-arrow-right-circle"></i>
                            </span>
                        </div>

                        <div
                            id="testimonials-card"
                            class="shadow my-3"
                            style="height: 50%"
                        >
                            <p>
                                “Leo egestas molestie nunc eros, dictum vivamus
                                lectus vulputate tincidunt arcu id facilisi
                                augue sed mauris non, vitae consequat id.”
                            </p>

                            <div class="d-flex">
                                <img class="rounded-circle" src={{
                                    url("images/program6.jpg")
                                }}
                                style="height: 50px; width: 50px;">

                                <p class="text-muted p-2">Autor</p>
                            </div>
                            <hr />
                            <span
                                >View more
                                <i class="bi bi-arrow-right-circle"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->

        <footer id="footer" class="text-center text-lg-start text-muted">
            <!-- Section: Social media -->
            <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            >
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 link-secondary">
                        <i class="bi bi-facebook text-white"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="bi bi-twitter text-white"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="bi bi-google text-white"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="bi bi-instagram text-white"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="bi bi-linkedin text-white"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="bi bi-github text-white"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize
                                your footer content. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div
                            class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4"
                        >
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p>New York, NY 10012, US</p>
                            <p>info@example.com</p>
                            <p>+ 01 234 567 88</p>
                            <p>+ 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div
                class="text-center p-4 text-white"
                style="background-color: rgba(0, 0, 0, 0.025)"
            >
                <?php
              $year = date("Y");
              
             echo $year."©  Copyright:";
             ?>

                <a class="text-reset fw-bold" href="#">[Name] University</a>
            </div>
            <!-- Copyright -->
        </footer>

        <!-- Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
