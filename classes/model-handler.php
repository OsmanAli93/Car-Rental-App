<?php

    include_once 'config.php';

    class Fetch extends Database {

        public function getAllData ($tb_name) {

            try {

                $sql = "SELECT * FROM $tb_name";
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute();
                $count = $stmt->rowCount();

                $result = ($count > 0) ? $stmt->fetchAll() : 'Sorry, No Record Found';

                return $result;

            } catch (PDOExecption $e) {

                echo exit("Error: " . $e->getMessage());
            }

            $conn = null;
        }

        public function getSingleData ($id) {

            try {

                $sql = "SELECT * FROM `cars` WHERE id = :id";
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute(['id' => $id]);

                $result = ($stmt->rowCount() > 0) ? $stmt->fetchAll() : 'Sorry, No Record Found';
                
                return $result;

            } catch (PDOException $e) {
                
                echo exit("Error: " . $e->getMessage());

            }

            $conn = null;
        }

        public function getSinglePostData ($id) {

            try {

                $sql = "SELECT * FROM `blog_post` WHERE post_id = :id";
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute(['id' => $id]);

                $result = ($stmt->rowCount() > 0) ? $stmt->fetchAll() : 'Sorry, No record found';

                return $result;

            } catch (PDOException $e) {

                echo exit("Error: " . $e->getMessage());
            }

            $conn = null;
        }

        public function getBlogPost () {

            try {

                $sql = "SELECT * FROM `blog_post` ORDER BY `post_id` DESC";
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute();
                $count = $stmt->rowCount();
                
                $result = ($count > 0) ? $stmt->fetchAll() : 'Sorry, No Record Found';

                return $result;

            } catch (PDOException $e) {

                echo exit("Error: " . $e->getMessage());
            }

            $conn = null;
        }


       
    }

    class Insert extends Database {

        public function insertBlogPost ($data) {

            try {

                $sql = "INSERT INTO `blog_post`(blog_img, blog_title, post, id) VALUES (:img, :title, :post, :id);";
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute($data);

            } catch (PDOExecption $e) {

                echo exit("Error: " . $e->getMessage());
                
            }

            $conn = null;
        }

        public function insertBooking ($data) {

            try {

                $sql = "INSERT INTO `bookings`(car_id, first_name, last_name, nationality, passport, address_1, address_2, city, state, postal, country, email, contact, request) VALUES (:car_id, :first_name, :last_name, :nationality, :passport, :address_1, :address_2, :city, :state, :postal, :country, :email, :contact, :request);";
                
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute($data);

            } catch (PDOException $e) {

                echo exit("Error: " . $e->getMessage());

            }

            $conn = null;
             
        }

    }



    class Login extends Database {

        public function loginUser ($email, $password) {

            try {

                $sql = "SELECT * FROM `admin` WHERE email=:email";
                $conn = $this->connect();
                $stmt = $conn->prepare($sql);

                $stmt->execute(['email' => $email]);
                $count = $stmt->rowCount();

                $result = ($count > 0) ? $stmt->fetchAll() : 'Sorry, No Record Found';

                foreach ($result as $data) {

                    $admin_id = $data['id'];
                    $admin_email = $data['email'];
                    $admin_password = $data['password'];
                    $admin_firstName = $data['first_name'];
                    $admin_lastName = $data['last_name'];
                }

                if ($email !== $admin_email || $password !== $admin_password) {

                    header("Location: ../blog/login.php?error=wrongcredentials");
                    exit();

                } else {

                    session_start();
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['admin'] = $data['email'];
                    $_SESSION['firstName'] = $data['first_name'];
                    $_SESSION['lastName'] = $data['last_name'];
                    header("Location: ../blog/admin.php");

                }

                
            } catch (PDOExecption $e) {

                echo exit("Error: " . $e->getMessage());

            }

            $conn = null;
        }

    }