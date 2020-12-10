<?php

    //echo $_POST['dropoff-time'];

    if (isset($_POST['find'])) {
        
        session_start();
        
        $_SESSION['pick-on'] = $_POST['pickup-location'];
        $_SESSION['drop-off'] = $_POST['dropoff-location'];
        $_SESSION['date-on'] = $_POST['pickup-date'];
        $_SESSION['date-off'] = $_POST['dropoff-date'];
        $_SESSION['pick-hour'] = $_POST['pickup-time'];
        $_SESSION['drop-hour'] = $_POST['dropoff-time'];

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Listing | Car Rental</title>
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="icon/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
    <header class="header-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container align-items-stretch h-100">
                <a class="navbar-brand" href="index.php">Car Rental</a>
                <button class="navbar-toggler align-self-center" type="button" data-toggle="collapse" data-target="#toggleMenu1" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse h-100" id="toggleMenu1">
                    <div class="navbar-nav ml-auto h-100">
                        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="listing-banner">
        <div class="container pb-5">

            <div class="row">
                <div class="col-lg-12">
                    <div class="listing-header">
                        <h1 class="text-white">Auto Listing</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="section-gap">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div id="main-block">

                        <div class="sorting-container mb-5">
                            <div class="sorting-inner d-flex align-items-center">
                                
                                <div class="sorting-item mr-5">
                                    <span>Show On Page</span>
                                    <div class="select-current">
                                        <span>All Autos</span>
                                        <svg class="" width="14" height="14" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    </div>
                                    <ul class="select-options-1 select list-unstyled">
                                        <li class="option" data-val="10">10</li>
                                        <li class="option" data-val="20">20</li>
                                        <li class="option" data-val="50">50</li>
                                        <li class="option" data-val="-1">All Autos</li>
                                    </ul>
                                </div>
                                <!-- END -->

                                <div class="sorting-item">
                                    <span>Sort By</span>
                                    <div class="select-current">
                                        <span>All Autos</span>
                                        <svg class="" width="14" height="14" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    </div>
                                    <ul class="select-options-2 select list-unstyled">
                                        <li class="option" data-val="date_asc">Last Added</li>
                                        <li class="option" data-val="date_desc">First Added</li>
                                        <li class="option" data-val="price_asc">Cheap First</li>
                                        <li class="option" data-val="price_desc">Expensive First</li>
                                        <li class="option" data-val="make_asc">Make A-Z</li>
                                        <li class="option" data-val="make_desc">Make Z-A</li>
                                        <li class="option" data-val="year_asc">Old First</li>
                                        <li class="option" data-val="year_desc">New First</li>
                                    </ul>
                                </div>
                                <!-- END -->

                                <div class="view-by ml-auto">
                                    <button type="button">
                                        <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-list-task" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                                            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                                        </svg>
                                    </button>
                                    <button type="button">
                                        <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-grid-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <?php 

                                include_once 'classes/model-handler.php';
                            
                                $data = new Fetch;
                    
                                //print_r($data->getAllData('cars'));
                            
                            ?>

                            <?php foreach ($data->getAllData('cars') as $data) : ?>
                                

                                    <div class="col-lg-4 mb-5">
                                        <div class="car-block">
                                            <div class="car-header">
                                                <img src="img/car_img/<?php echo $data['car_img0']; ?>" class="img-fluid mb-3" alt="">
                                            </div>
                                            <div class="car-body">
                                                <div class="upper-body bg-secondary p-3">
                                                    <h5 class="py-3 text-center"><?php echo $data['car_name']; ?></h5>
                                                    <ul class="car-details text-center list-unstyled d-flex justify-content-center text-center">
                                                        <li>
                                                            <i class="ion-android-car"></i>
                                                            <p><?php echo $data['car_mileage']; ?></p>
                                                        </li>
                                                        <li class="mx-3">
                                                            <i class="ion-flame"></i>
                                                            <p><?php echo $data['car_fuel']; ?></p>
                                                        </li>
                                                        <li>
                                                            <i class="ion-gear-b"></i>
                                                            <p><?php echo $data['car_transmission']; ?></p>
                                                        </li>
                                                    </ul>

                                                    <ul class="car-item w-100 list-unstyled">
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Pay at Pick-Up
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Chilled AC
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Free Cancellation
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Audio Input
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Audio Input
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Heated seats
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Budget Car
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Automatic
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Unlimited Mileage
                                                        </li>
                                                        <li>
                                                            <svg class="mr-1" width="10" height="10" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                            </svg>
                                                            Bluetooth
                                                        </li>
                                                    </ul>

                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-danger mb-0 font-weight-bold">$ <?php echo $data['car_cost']; ?> / per day</p>
                                                        <a href="booking/book.php?c=<?php echo $data['id']; ?>" class="btn-custom">Rent It</a>
                                                    </div>
                                                    
                                                </div>


                                            </div>
                                        </div>
                                    </div>


                            <?php endforeach; ?>

                        </div>



                    </div>
                </div>
                <!--
                <div class="col-lg-3">
                    <div class="listing-booking bg-secondary p-4">
                        <h6 class="mb-4">Booking Time</h6>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="list-pickup" id="list-pick" class="form-control datepicker rounded-0" placeholder="Pick-up Date" value="<?php echo $_POST['pickup-date']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="list-dropoff" id="list-drop" class="form-control datepicker rounded-0" placeholder="Drop-off Date" value="<?php echo $_POST['dropoff-date']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="pickup-hour" id="pickup-hour" class="form-control rounded-0" placeholder="Pick-up Hour" value="<?php echo ($_POST['pickup-time'] >= 12 ? $_POST['pickup-time'] .'.00 PM' : $_POST['pickup-time'] . '.00 AM'); ?>">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="dropoff-hour" id="dropoff-hour" class="form-control rounded-0" placeholder="Drop-off Hour" value="<?php echo ($_POST['dropoff-time'] >= 12 ? $_POST['dropoff-time'] .'.00 PM' : $_POST['dropoff-time'] . '.00 AM'); ?>">
                            </div>

                            <div class="form-group">
                                <h6>Year Range</h6>
                                <div class="widget-container mb-3">
                                    <div class="slide-bg"></div>
                                    <input type="range" name="year-range" id="year-range" min="0" max="100" value="0" class="widget-slider">
                                </div>
                                <div class="d-flex">
                                    <div id="min-range" class="range"></div>
                                    <div id="max-range" class="range">2020</div>
                                </div>
                            </div>
                            

                        </form>
                    </div>
                </div>
                -->

            </div>
        </div>
    </section>

    <?php include_once 'inc/footer.php'; ?>
    <?php include_once 'inc/jquery.php'; ?>
    <script src="js/listing.js"></script>
    <script src="js/plugin.js"></script>
</body>
</html>