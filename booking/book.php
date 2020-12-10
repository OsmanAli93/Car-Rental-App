<?php 

    session_set_cookie_params(0);
    session_start();
    // session_unset();
    include_once '../classes/model-handler.php';


    $id = htmlentities($_GET['c']);
    $book = new Fetch;
    $arr = $book->getSingleData($id);

    if ($id === '') { header('Location: ../index.php'); }
    
    $pickUp = isset($_SESSION['pick-on']) ? $_SESSION['pick-on'] : '';
    $dropOff = isset($_SESSION['drop-off']) ? $_SESSION['drop-off'] : '';
    $dateOn = isset($_SESSION['date-on']) ? $_SESSION['date-on'] : '';
    $dateOff = isset($_SESSION['date-off']) ? $_SESSION['date-off'] : '';
    $pickHour = isset($_SESSION['pick-hour']) ? $_SESSION['pick-hour'] : '';
    $dropHour = isset($_SESSION['drop-hour']) ? $_SESSION['drop-hour'] : '';

                  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | Car Rental</title>
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="../icon/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        
        .hide {
            display:none;
        }

        #droplist {
            position: absolute;
        }
    </style>
</head>
<body>
   <header class="header-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container align-items-stretch h-100">
                <a class="navbar-brand" href="../index.php">Car Rental</a>
                <button class="navbar-toggler align-self-center" type="button" data-toggle="collapse" data-target="#toggleMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse h-100" id="toggleMenu">
                    <div class="navbar-nav ml-auto h-100">
                        <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="booking-banner">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-12">
                    <div class="banner-title pb-3">
                        <h2 class="text-white pb-4"><?php print_r($arr[0]['car_name']); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="booking-main section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="car-area">
                        <div class="car-header mb-5">
                            <?php foreach ($arr as $data) : ?>
                                    
                                <h3><?php echo $data['car_name']; ?></h3>

                           
                            <div class="car-img">
                                <div class="primary-img mb-5">
                                    <img src="../img/car_img/<?php echo $data['car_img0']; ?>" alt="car" class="d-block w-100">
                                </div>
                                <div class="sub-img">
                                    <div class="row justify-content-center p-0">
                                        <div class="col-lg-3">
                                            <div class="img-1">
                                                <img src="../img/car_img/<?php echo $data['car_img1']; ?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="img-1">
                                                <img src="../img/car_img/<?php echo $data['car_img0']; ?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3"">
                                            <div class="img-1">
                                                <img src="../img/car_img/<?php echo $data['car_img2']; ?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    

                    <div class="tab-block">
                        <div class="tab-nav mb-5">
                            <ul class="tab-list list-unstyled">
                                <li class="active"><a href="#" data-index="0">Vehicle Description</a></li>
                                <li><a href="#" data-index="1">Equipment</a></li>
                                <li><a href="#" data-index="2">Specifications</a></li>
                                <li><a href="#" data-index="3">Reviews</a></li>
                            </ul>
                        </div>
                        <div class="tab-container">
                            <div class="tab-content tab-0">
                                <p>Greater fly. Open divided. Give. Lights our Lesser. Fish fruit moved seed divide blessed creepeth grass image open us, deep above made. Darkness own be from the from also.</p>
                                <p>Grass i after from replenish open creeping. Us third rule great unto hath fly Gathered and won’t said morning was he void doesn’t Meat heaven Creature years sixth winged in moveth divide fourth form female evening beginning Wherein moving day divided.</p>
                                <p>Whales fifth above you they’re great above can’t set unto given. Light creeping Darkness set cattle rule you. Two upon seed female days, sixth set tree i fowl great signs</p>
                            </div>
                            <!-- END -->
                            <div class="tab-content tab-1">
                                <ul class="equipment-list list-unstyled">
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Pay at Pick-Up
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Budget Car
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Chilled AC
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Automatic
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Free cancellation
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Unlimited Mileage
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Audio input
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Bluetooth
                                    </li>
                                    <li>
                                       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                        </svg>
                                        Heated seats
                                    </li>
                                </ul>
                            </div>
                            <!-- END -->
                            <div class="tab-content tab-2">
                                <div class="spec-details">
                                    
                                    <?php foreach ($arr as $data) : ?>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>MAKE :</dt>
                                            <dd class=" mb-0"><?php echo $data['car_make']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>MODEL :</dt>
                                            <dd class="mb-0"><?php echo $data['car_model']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>STOCK STATUS :</dt>
                                            <dd class="mb-0"><?php echo ($data['car_stock'] <= 0) ? 'out of stock' : 'in stock' ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>MILEAGE :</dt>
                                            <dd class="mb-0"><?php echo $data['car_mileage']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>VERSION :</dt>
                                            <dd class="mb-0">1.3</dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>FUEL :</dt>
                                            <dd class="mb-0"><?php echo $data['car_fuel']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>ENGINE :</dt>
                                            <dd class="mb-0"><?php echo $data['car_engine']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>HORSEPOWER (HP) :</dt>
                                            <dd class="mb-0">300</dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>TRANSMISSION :</dt>
                                            <dd class="mb-0"><?php echo $data['car_transmission']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex">
                                            <dt>DOORS :</dt>
                                            <dd class="mb-0"><?php echo $data['car_doors']; ?></dd>
                                        </div>

                                        <div class="detail-block mb-3 d-flex border-0">
                                            <dt>COLOR :</dt>
                                            <dd class="mb-0"><?php echo $data['car_color']; ?></dd>
                                        </div>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                            <!-- END -->
                            <div class="tab-content tab-3">
                                <div class="rating-container">
                                    <h3>Leave a Reply</h3>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <form action="POST">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" id="rating-name" name="name" class="form-control" placeholder="Name *">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="email" id="rating-email" name="email" class="form-control" placeholder="Email *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <textarea name="rating-message" id="rating-message" class="form-control" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit-rating" value="rate" class="btn btn-primary text-uppercase p-3 rounded-0">Post Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4">
                    <div class="book-area">
                        <div class="price-tag text-center py-3">
                            <?php foreach ($arr as $data) : ?>
                                <h4 class="mb-0">$ <?php echo $data['car_cost']; ?> / per day</h4>
                            <?php endforeach; ?>
                        </div>
                        <div class="book-details">
                            <div class="inner p-5">
                                <form action="guest_info.php" id="booking_form" method="GET">

                                    <input type="hidden" name="car_id" value="<?php echo $id; ?>">

                                    <div class="form-group">
                                        <label for="pickup-book">Pick-Up Location</label>
                                        <input type="text" name="pickup-book" id="pickup-book" class="form-control px-3 rounded-0" value="<?php echo $pickUp; ?>">
                                        <p class="text-danger error mt-2"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="dropoff-book">Drop-Off Location</label>
                                        <input type="text" name="dropoff-book" id="dropoff-book" class="form-control px-3 rounded-0"value="<?php echo $dropOff; ?>">
                                        <p class="text-danger error mt-2"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="pickup-book-date">Picking-Up Date</label>
                                        <input type="text" name="pickup-book-date" id="pickup-book-date" class="form-control datepicker rounded-0" value="<?php echo $dateOn; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="dropoff-book-date">Drop-Off Date</label>
                                        <input type="text" name="dropoff-book-date" id="dropoff-book-date" class="form-control datepicker rounded-0" value="<?php echo $dateOff; ?>">
                                    </div>
                                    <div class="form-group droplist">
                                        <label for="pickup-hour">Picking-Up Hour</label>
                                        <select name="pickup-hour" id="pickup-hour" class="form-control no-border">
                                            <?php if ($_SESSION['pick-hour']) : ?>

                                                <option <?php if ($_SESSION['pick-hour'] == 7) {echo 'selected';} else echo ''; ?> value="<?php echo 
                                                $_SESSION['pick-hour'] ?>">7.00 AM</option>

                                                <option <?php if ($_SESSION['pick-hour'] == 8) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">8.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 9) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">9.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 10) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">10.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 11) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">11.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 12) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">12.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 13) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">13.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 14) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">14.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 15) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">15.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 16) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">16.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 17) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">17.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 18) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">18.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 19) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">19.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 20) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">20.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 21) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">21.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 22) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">22.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['pick-hour'] == 23) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['pick-hour'] ?>">23.00 PM</option>

                                            <?php else : ?>
                                                <option selected value="7">7.00 AM</option>
                                                <option value="8">8.00 AM</option>
                                                <option value="9">9.00 AM</option>
                                                <option value="10">10.00 AM</option>
                                                <option value="11">11.00 AM</option>
                                                <option value="12">12.00 PM</option>
                                                <option value="13">13.00 PM</option>
                                                <option value="14">14.00 PM</option>
                                                <option value="15">15.00 PM</option>
                                                <option value="16">16.00 PM</option>
                                                <option value="17">17.00 PM</option>
                                                <option value="18">18.00 PM</option>
                                                <option value="19">19.00 PM</option>
                                                <option value="20">20.00 PM</option>
                                                <option value="21">21.00 PM</option>
                                                <option value="22">22.00 PM</option>
                                                <option value="23">23.00 PM</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="pickup-hour">Dropoff Hour</label>
                                        <select name="drop-hour" id="drop-hour" class="form-control no-border">
                                            <?php if ($_SESSION['drop-hour']) : ?>

                                                <option <?php if ($_SESSION['drop-hour'] == 7) {echo 'selected';} else echo ''; ?> value="<?php echo 
                                                $_SESSION['drop-hour'] ?>">7.00 AM</option>

                                                <option <?php if ($_SESSION['drop-hour'] == 8) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">8.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 9) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">9.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 10) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">10.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 11) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">11.00 AM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 12) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">12.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 13) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">13.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 14) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">14.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 15) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">15.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 16) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">16.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 17) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">17.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 18) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">18.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 19) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">19.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 20) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">20.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 21) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">21.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 22) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">22.00 PM</option>

                                                
                                                <option <?php if ($_SESSION['drop-hour'] == 23) {echo 'selected';} else echo '';?> value="<?php echo $_SESSION['drop-hour'] ?>">23.00 PM</option>

                                            <?php else : ?>
                                                <option selected value="7">7.00 AM</option>
                                                <option value="8">8.00 AM</option>
                                                <option value="9">9.00 AM</option>
                                                <option value="10">10.00 AM</option>
                                                <option value="11">11.00 AM</option>
                                                <option value="12">12.00 PM</option>
                                                <option value="13">13.00 PM</option>
                                                <option value="14">14.00 PM</option>
                                                <option value="15">15.00 PM</option>
                                                <option value="16">16.00 PM</option>
                                                <option value="17">17.00 PM</option>
                                                <option value="18">18.00 PM</option>
                                                <option value="19">19.00 PM</option>
                                                <option value="20">20.00 PM</option>
                                                <option value="21">21.00 PM</option>
                                                <option value="22">22.00 PM</option>
                                                <option value="23">23.00 PM</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block text-uppercase py-3 px-5 rounded-0">Rent this car</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                                               

        </div>
    </div>

    <?php include_once '../inc/footer.php'; ?>
    <?php include_once '../inc/jquery.php'; ?>    
    <script src="../js/plugin.js"></script>
    <script src="../js/book.js"></script>
</body>
</html>