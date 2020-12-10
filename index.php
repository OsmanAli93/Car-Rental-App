<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | Landing Page</title>
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="icon/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
    <?php include_once 'inc/header.php'; ?>

    <div class="banner-wrapper">
        <div class="banner-inner">

            <div class="banner-slide active"></div>
            <div class="banner-slide"></div>
            <div class="banner-slide"></div>

            <div class="banner-header h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="banner-title">
                                <h1 class="font-weight-bold">Book Your Car Rental Today!</h1>
                                <p>Book Cars at low-cost, start <span class="text-primary">$75/day</span></p>
                                <p>from over 100 premium locations</p>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="booking-wrapper">
                                <div class="booking-inner">
                                    <form action="listing.php" method="POST">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="pickup">Picking Up Location</label>
                                                    <input type="text" name="pickup-location" id="pickup-location" class="form-control" placeholder="Airport Or Anywhere">
                                                    <button type="button" class="locate-me">
                                                        <i class="ion-android-locate"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="pickup">Dropping off Location</label>
                                                    <input type="text" name="dropoff-location" id="dropoff-location" class="form-control" placeholder="Airport Or Anywhere">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="date-wrapper">
                                                        <label for="pickup-date">Picking Up Date</label>
                                                        <div class="row">
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="icon">
                                                                    <i class="ion-calendar"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 pl-0">
                                                                <input type="text" name="pickup-date" id="pickup-date" class="form-control datepicker no-border">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="date-wrapper">
                                                        <label for="pickup-date">Picking Up Hours</label>
                                                        <div class="row">
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="icon">
                                                                    <i class="ion-android-time"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 pl-0">
                                                                <select name="pickup-time" id="pickup-time" class="form-control no-border">
                                                                    <?php for ($i = 7; $i <= 23; $i++) 
                                                                        {
                                                                            if ($i > 11) {

                                                                                echo '<option value="'.$i.'">'.$i.':00 PM</option>';

                                                                            } else {

                                                                                echo '<option value="'.$i.'">'.$i.':00 AM</option>';
                                                                            }
                                                                        }
                                                                    ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="date-wrapper">
                                                        <label for="pickup-date">Dropping Off Date</label>
                                                        <div class="row">
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="icon">
                                                                    <i class="ion-calendar"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 pl-0">
                                                                <input type="text" name="dropoff-date" id="dropoff-date" class="form-control datepicker no-border">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                    <div class="date-wrapper">
                                                        <label for="pickup-date">Dropping Off Hours</label>
                                                        <div class="row">
                                                            <div class="col-lg-3 pr-0">
                                                                <div class="icon">
                                                                    <i class="ion-android-time"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 pl-0">
                                                                <select name="dropoff-time" id="dropoff-time" class="form-control no-border">
                                                                    <?php for ($i = 7; $i <= 23; $i++) 
                                                                        {
                                                                            if ($i > 11) {

                                                                                echo '<option value="'.$i.'">'.$i.':00 PM</option>';

                                                                            } else {

                                                                                echo '<option value="'.$i.'">'.$i.':00 AM</option>';
                                                                            }
                                                                        }
                                                                    ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END -->
                                        <div class="form-group pt-3">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <button type="submit" name="find" value="find-car" class="btn btn-primary">Find A Car</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END BANNER -->

    <section id="about" class="section-gap">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h2 class="text-uppercase font-weight-bold">Our Benefits</h2>
                        <small class="sub-title">Luxury AutoStar Rental Services</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-block text-center"">
                        <div class="about-image">
                            <img src="img/as001.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="about-customer">
                            <h4>Our Customers Always <br> 100% Satisfied</h4>
                        </div>
                        <p class="about-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit sed don eiusmod tempor enim minim veniam quis notrud exercitation</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-block text-center"">
                        <div class="about-image">
                            <img src="img/as002.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="about-customer">
                            <h4>We Provide Easier & <br> Faster Bookings</h4>
                        </div>
                        <p class="about-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit sed don eiusmod tempor enim minim veniam quis notrud exercitation</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-block text-center"">
                        <div class="about-image">
                            <img src="img/as003.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="about-customer">
                            <h4>Your Choice of <br> Any Pickup Location</h4>
                        </div>
                        <p class="about-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit sed don eiusmod tempor enim minim veniam quis notrud exercitation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-work" class="section-gap">
        <div class="container">
            <div class="row mb-3 pb-3">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h2 class="text-uppercase text-white font-weight-bold">How Does The <br> Car Rental Work</h2>
                        <small class="sub-title">Luxury AutoStar Rental Services</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="how-block d-flex align-items-center">
                        <div class="how-image mr-2">
                            <img src="img/steps01.png" alt="">
                        </div>
                        <div class="how-desc">
                            <p>Once selected. Book our car and set a pickup date/time</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-block d-flex align-items-center">
                        <div class="how-image mr-2">
                            <img src="img/steps02.png" alt="">
                        </div>
                        <div class="how-desc">
                            <p>Once selected. Book our car and set a pickup date/time</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-block d-flex align-items-center">
                        <div class="how-image">
                            <img src="img/steps03.png" alt="">
                        </div>
                        <div class="how-desc">
                            <p>Once selected. Book our car and set a pickup date/time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rental-cars" class="section-gap">
        <div class="container">
            <div class="row mb-3 pb-3 justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2 class="text-uppercase">Our Rental Fleets</h2>
                        <small class="sub-title">Luxury AutoStar Rental Services</small>
                        <p>Amco laboris nisi ut aliquip xea comod consequt duis aute irure dolor reprehenderit voluptate velit cillum dolore fugiat lore ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="slide-container">
                <div class="slide-inner">
                    <div class="slider">
                    
                        
                        <?php 

                            include_once 'classes/view-handler.php';
                         
                            $data = new Show;
                   
                            $data->showAllData();
                            
                        ?>

                    </div>
                    
                </div>

                <div class="btn-container">
                    <button type="button" class="slide-btn prev">
                        <svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </button>
                    <button type="button" class="slide-btn next">
                        <svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="section-gap bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-left">
                        <h3 class="mb-5">Autostar Rental Service With a wide range of Vehicles</h3>
                        <p>Integer tortor bibendum est faucibus gravida aliquam nulla lectus lacinia eget lorem acdua eros pharetral interdum quisque convallis nula dpsum val mualiq amet consectetur adipisicing sed eiusmod tem pory.</p>
                        <p class="mb-5">Ut enim ad minim ven quis nostrud exercitation ulamco laboris nisi ut aliquip exl dolor in reprehenderit voluptate velit non proident sunt in culpa.</p>
                        <div class="service-block d-flex mb-3">
                            <div class="service-icon">
                                <svg class="text-primary" width="34" height="34" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 4l10-3A1.5 1.5 0 0 1 14 2.5v2h-1v-2a.5.5 0 0 0-.5-.5L5.833 4H2.5z"/>
                                    <path fill-rule="evenodd" d="M1 5.5A1.5 1.5 0 0 1 2.5 4h11A1.5 1.5 0 0 1 15 5.5v8a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5v-8zM2.5 5a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-11z"/>
                                </svg>
                            </div>
                            <div class="service-desc mb-0">
                                <h5>Easy & Competitive Prices</h5>
                                <p class="mb-0">Faucibus gravida aliquam nulla lectus lacinia eget</p>
                            </div>
                        </div>
                        <!-- END -->
                        <div class="service-block d-flex">
                            <div class="service-icon">
                                <svg class="text-primary" width="34" height="34" viewBox="0 0 16 16" class="bi bi-cone-striped" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.879 11.015a.5.5 0 0 1 .242 0l6 1.5a.5.5 0 0 1 .037.96l-6 2a.499.499 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l6-1.5z"/>
                                    <path d="M9.97 4.88l.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.159-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm2.005 8.015l-.565-2.257c-.862.212-1.964.339-3.165.339s-2.303-.127-3.165-.339l-.565 2.257 3.609-.902a.5.5 0 0 1 .242 0l3.609.902z"/>
                                </svg>
                            </div>
                            <div class="service-desc mb-0">
                                <h5>Breakdown Assistance</h5>
                                <p>Faucibus gravida aliquam nulla lectus lacinia eget</p>
                            </div>
                        </div>
                        <!-- END -->
                        <div class="service-block d-flex">
                            <div class="service-icon">
                                <svg class="text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>
                            </div>
                            <div class="service-desc mb-0">
                                <h5>Trusted Rent Service</h5>
                                <p>Faucibus gravida aliquam nulla lectus lacinia eget</p>
                            </div>
                        </div>
                        <!-- END -->
                        <div class="service-block d-flex">
                            <div class="service-icon">
                                <svg class="text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                </svg>
                            </div>
                            <div class="service-desc mb-0">
                                <h5>Trusted Rent Service</h5>
                                <p>Faucibus gravida aliquam nulla lectus lacinia eget</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-right">
                        <div class="service-img">
                            <img src="img/lay01.png" class="img-fluid" alt="">
                        </div>
                        <div class="service-img">
                            <img src="img/lay02.png" class="img-fluid" alt="">
                        </div>
                        <div class="service-img">
                            <img src="img/lay03.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="call-us" class="section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content text-center">
                        Call Today For Booking Your Next Ride 
                        <svg class="text-primary" width="32" height="32" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                        </svg>
                        <span class="call-us-highlight">(800) 650 743</span>
                        Operators available 24/7
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2>LATEST NEWS</h2>
                        <small class="sub-title">Luxury AutoStar Rental Services</small>
                        <p>Amco laboris nisi ut aliquip xea comod consequt duis aute irure dolor reprehenderit voluptate velit cillum dolore fugiat lore ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="blog-container">

                <div class="blog-inner">
                    <div id="blog-slider">
                        <?php 

                            include_once 'classes/view-handler.php';

                            $blog = new Show;
                            $blog->blogPostData();

                        ?>
                                
                    </div>
                </div>
                

                <div class="nav-container">
                    <button type="button" id="prev" class="prev nav-btn">
                        <svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </button>

                    <button type="button" id="next" class="next nav-btn">
                        <svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </div>                                
            </div>
        </div>
    </section>

    <div class="our-app bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="app-block text-right">
                        <img src="img/asapp.png" alt="app" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="app-block mb-5 pb-3">
                        <h6>Faster, easier access to car rental services</h6>
                        <h2 class="text-uppercase">Download Our App</h2>
                        <p>Integer tortor bibendum est faucibus gravida aliquam nulla lectus lacinia eget lorem acdua eros pharetral interdum quisque convallis nula dpsum val mualiq amet consectetur adipisicing sed eiusmod tem ipsum pory.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="btn-container">
                                <a href="#">
                                    <img src="img/google-play.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn-container">
                                <a href="#">
                                    <img src="img/apple-store.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php include_once 'inc/footer.php'; ?>
   
    <?php include_once 'inc/jquery.php'; ?>
    <script src="js/plugin.js"></script>
    <script src="js/script.js"></script>
</body>
</html>