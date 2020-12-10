<?php

    include_once 'model-handler.php';

    class Show extends Fetch {

        public function showAllData () {

            $datas = $this->getAllData('cars');
           
            foreach ($datas as $data) {

                echo    '
                            <div class="car-block expand">
                                <div class="car-image">
                                    <img src="./img/car_img/'. $data['car_img0'] . '" alt="" class="img-fluid">
                                </div>
                                <div class="car-desc bg-secondary p-4">
                                    <h5 class="py-3 text-center">' . $data['car_name'] . '</h5>
                                    <ul class="car-details list-unstyled d-flex justify-content-center text-center">
                                        <li>
                                            <i class="ion-android-car"></i>
                                            <p>'. $data['car_mileage'] .'</p>
                                        </li>
                                        <li>
                                            <i class="ion-flame"></i>
                                            <p>'. $data['car_fuel'] .'</p>
                                        </li>
                                        <li>
                                            <i class="ion-gear-b"></i>
                                            <p>'. $data['car_transmission'] .'</p>
                                        </li>
                                    </ul>
                                    <ul class="car-item list-unstyled">
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Pay at Pick-Up
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Chilled AC
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Free Cancellation
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Audio Input
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Audio Input
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Heated seats
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Budget Car
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Automatic
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Unlimited Mileage
                                        </li>
                                        <li>
                                            <svg class="mr-1" width="16" height="16" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            Bluetooth
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-danger mb-0 font-weight-bold">$ '. $data['car_cost'] .' / per day</p>
                                        <a href="booking/book.php?c='. $data['id'] .'" class="btn-custom">Rent It</a>
                                    </div>
                                </div>
                                
                            </div>
                        ';
            }
        }

        public function blogPostData () {

            $datas = $this->getBlogPost();

            for ($i = 0; $i <= 3; $i++) {

                $data_arr[] = $datas[$i];
            }

            foreach ($data_arr as $data) {

                $str = substr($data['post'], 0, 500);
                $decode = html_entity_decode($str);

                echo    '<div class="blog">
                            <div class="blog-post">
                                <div class="blog-header">
                                    <a href="viewpage.php?id=' . $data['post_id'] .'">
                                    <img src="img/upload/' . $data['blog_img'] . '" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="blog-body">
                                    <div class="blog-title__container py-3">
                                        <h3 class="blog-title font-17">' . $data['blog_title'] . '</h3>
                                    </div>
                                    <div class="blog-desc">
                                        <p>' . $decode . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }
        }

        
    }