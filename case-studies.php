<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body>
    <?php include("include/header.php"); ?>
    <!-- banner start -->
    <section class="banner-wrap banner-main-wrap">
        <div class="container">
            <div class="banner banner-main-main">
                <h1 class="h1">Featured Case Studies</h1>

                <div class="row blog-content-list">
                    <div class="col-lg-4 col-md-6 blog-content-area">
                        <div class="blog-content-item">
                            <div class="blog-banner-img">
                                <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                            </div>

                            <div class="blog-schedule">
                                <div class="content-date">jun 24, 2024</div>
                                <a href='#' target="_self">Kairos.ai</a>
                            </div>
                            <a class='blog-content-text' href='#' target='_self'>
                                <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                            </a>
                            <p>Empowering private equity firms to achieve their full potential through...</p>
                            <div class="btn-link">
                                <a href='blog-details.php' target='_self'>
                                    Read More
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-content-area">
                        <div class="blog-content-item">
                            <div class="blog-banner-img">
                                <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                            </div>

                            <div class="blog-schedule">
                                <div class="content-date">jun 22, 2024</div>
                                <a href='#' target="_self">Cloud</a>
                            </div>
                            <a class='blog-content-text' href='#' target='_self'>
                                <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                            </a>
                            <p>Empowering private equity firms to achieve their full potential through...</p>
                            <div class="btn-link">
                                <a href='blog-details.php' target='_self'>
                                    Read More
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-content-area">
                        <div class="blog-content-item">
                            <div class="blog-banner-img">
                                <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                            </div>

                            <div class="blog-schedule">
                                <div class="content-date">jun 21, 2024</div>
                                <a href='#' target="_self">solutions</a>
                            </div>
                            <a class='blog-content-text' href='#' target='_self'>
                                <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                            </a>
                            <p>Empowering private equity firms to achieve their full potential through...</p>
                            <div class="btn-link">
                                <a href='blog-details.php' target='_self'>
                                    Read More
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- blog-tabs-section start -->
    <section class="blog-tabs-wrap">
        <div class="container">
            <div class="blog-tabs">
                <div class="blog-tabs-listing">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="banking-tab" data-bs-toggle="tab" data-bs-target="#banking-tab-pane" type="button" role="tab" aria-controls="banking-tab-pane">Banking</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="chemicals-tab" data-bs-toggle="tab" data-bs-target="#chemicals-tab-pane" type="button" role="tab" aria-controls="chemicals-tab-pane">Chemicals</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="food-tab" data-bs-toggle="tab" data-bs-target="#food-tab-pane" type="button" role="tab" aria-controls="food-tab-pane">Food Processing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health-tab-pane" type="button" role="tab" aria-controls="health-tab-pane">Health Care</button>
                        </li>
                    </ul>
                    <div class="tab-search">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Please Search here..." aria-label="Please Search here.." aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 16L19.5 19.5" stroke="#020617" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
                                    <path d="M11 17.25C14.4518 17.25 17.25 14.4518 17.25 11C17.25 7.54822 14.4518 4.75 11 4.75C7.54822 4.75 4.75 7.54822 4.75 11C4.75 14.4518 7.54822 17.25 11 17.25Z" stroke="#020617" stroke-width="1.5" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <!-- home-tab -->
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row blog-content-list">
                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cloud-tab -->
                    <div class="tab-pane fade" id="banking-tab-pane" role="tabpanel" aria-labelledby="banking-tab">
                        <div class="row blog-content-list">
                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- kairos-tab -->
                    <div class="tab-pane fade" id="chemicals-tab-pane" role="tabpanel" aria-labelledby="chemicals-tab">
                        <div class="row blog-content-list">
                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- servicrs-tab -->
                    <div class="tab-pane fade" id="food-tab-pane" role="tabpanel" aria-labelledby="food-tab">
                        <div class="row blog-content-list">
                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- solutions-tab -->
                    <div class="tab-pane fade" id="health-tab-pane" role="tabpanel" aria-labelledby="health-tab">
                        <div class="row blog-content-list">

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogOne.png' alt='blog-one' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 24, 2024</div>
                                        <a href='#' target="_self">Kairos.ai</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogTwo.png' alt='blog-two' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 22, 2024</div>
                                        <a href='#' target="_self">Cloud</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 blog-content-area">
                                <div class="blog-content-item">
                                    <div class="blog-banner-img">
                                        <img src='./images/blogThree.png' alt='blog-three' width='325' height='174' />
                                    </div>

                                    <div class="blog-schedule">
                                        <div class="content-date">jun 21, 2024</div>
                                        <a href='#' target="_self">solutions</a>
                                    </div>
                                    <a class='blog-content-text' href='#' target='_self'>
                                        <h5 class="h5">Lorem ipsum dolor sit amet, sectetur adipiscing elit lorem ipsum dolor sit amet.</h5>
                                    </a>
                                    <p>Empowering private equity firms to achieve their full potential through...</p>
                                    <div class="btn-link">
                                        <a href=' #' target='_self'>
                                            Read More
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.16602 6H12.8327M12.8327 6L7.83268 11M12.8327 6L7.83268 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-more">
                    <div class="cta-btn btn-lg">
                        <a href='#' target='_self'>Load More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog-tabs-section end -->


    <!-- partners-today-section start -->
    <section class="future-with-us-wrap">
        <div class="container">
            <div class="future-with-us">
                <h2 class="h2">Subscribe To Our Newsletter</h2>
                <p>Sign up to receive Brownloop news and updates.</p>
                <div class="form-col">
                    <input type="email" class="form-control" id="eamil" placeholder="Enter your email here">
                </div>
                <div class="cta-btn btn-lg">
                    <a href='#' target='_self'>Subscribe</a>
                </div>
            </div>
        </div>
    </section>
    <!-- partners-today-section end -->


    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>