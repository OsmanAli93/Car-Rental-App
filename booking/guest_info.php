<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="../icon/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>
    
    <header class="header-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container align-items-stretch h-100">
                <a class="navbar-brand" href="#">Car Rental</a>
                <button class="navbar-toggler align-self-center" type="button" data-toggle="collapse" data-target="#toggleMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse h-100" id="toggleMenu">
                    <div class="navbar-nav ml-auto h-100">
                        <a class="nav-item nav-link active" href="../index.php">Home <span class="sr-only">(current)</span></a>
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
                        <h1 class="text-white">Booking Details</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <main>
        <div class="container py-5 my-5">
            <div class="title mb-3 text-center pb-5">
                <h2>Booking Details</h2>
                <p>Please Provide Your Information to us</p>
            </div>
            
            <div class="details-wrapper">
                <form action="submit.php" method="post">

                    <input type="hidden" name="car_id" value="<?php echo $_GET['car_id'] ?>">

                   <div class="row justify-content-center">
                       <div class="col-lg-10">

                           <div class="row">
                               <div class="col-lg-6 p-0 mb-3">
                                   <div class="form-group d-flex align-items-center">
                                       <label for="" class="">Nationality</label>
                                       <input type="text" name="nationality" id="nationality" class="form-control">
                                   </div>
                               </div>
                               <div class="col-lg-6 p-0 mb-3">
                                   <div class="form-group d-flex align-items-center">
                                       <label for="passport">No IC / Passport</label>
                                       <input type="text" name="passport" id="passport" class="form-control">
                                   </div>
                               </div>
                           </div>

                            <div class="row">
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="address_1">Address Line 1</label>
                                        <input type="text" name="address_1" id="address_1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="address_2">Address Line 2</label>
                                        <input type="text" name="address_2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="state">State</label>
                                        <input type="text" name="state" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="postal_code">Postal Code</label>
                                        <input type="text" name="postal_code" id="postal_code" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="country">Country</label>
                                        <select name="country" id="country" class="form-control">
                                            <option value>-- Please Select --</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="SG">Singapore</option>
                                            <option value="BRN">Brunei</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 mb-3">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="contact">Contact No</label>
                                        <input type="text" name="contact" id="contact" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="form-group d-flex">
                                        <label for="special_request" id="sp">Special Request (optional)</label>
                                        <textarea name="sp_request" id="special_request" cols="30" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-4 p-0" id="submit-block">
                                    <button type="submit" name="submit" class="btn btn-primary text-uppercase font-weight-bold">Submit</button>
                                </div>
                                
                            </div>
                            <p><small>All fields marked with an asterisk (*) are required.</small></p>
                       </div>
                   </div>

                </form>
            </div>
        </div>
    </main>

    <?php include '../inc/footer.php'; ?>

</body>
</html>