
<?php

    include_once '../classes/model-handler.php';

    if (isset($_POST['submit'])) {

        $guest_info = [

            "car_id" => $_POST["car_id"],
            "nationality" => $_POST["nationality"],
            "passport" => $_POST["passport"],
            "first_name" => $_POST["first_name"],
            "last_name" => $_POST["last_name"],
            "address_1" => $_POST["address_1"],
            "address_2" => $_POST["address_2"],
            "city" => $_POST["city"],
            "state" => $_POST["state"],
            "postal" => $_POST["postal_code"],
            "country" => $_POST["country"],
            "email" => $_POST["email"],
            "contact" => $_POST["contact"],
            "request" => $_POST["sp_request"]
        ];


        $booking = new Insert;
        $booking->insertBooking($guest_info);

        header("Location: ../index.php?booking=success");


    }

