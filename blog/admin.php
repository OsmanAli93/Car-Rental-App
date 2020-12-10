
<?php

    session_start();
    include_once '../classes/model-handler.php';

    if (!isset($_SESSION['admin'])) {

        header('Location: ../index.php');
    }

    $imageName = '';
    
    if (isset($_POST['post'])) {

        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        // Get last string of an array
        $fileActualExt = strtolower(end($fileExt));

        $isAllowed = ['jpg', 'jpeg', 'png', 'pdf'];

        // Check for allowed image extension
        if (in_array($fileActualExt, $isAllowed)) {

            // Check for any error
            if ($fileError === 0) {

                if ($fileSize < 1000000) {

                    $fileNewName = uniqid('', true) . '.' . $fileActualExt;
                    $fileDestination = '../img/upload/' . $fileNewName;
                    move_uploaded_file($fileTmp, $fileDestination);
                    $imageName = $fileNewName;

                } else {

                    echo 'Your file is too big!';

                }

            } else {

                echo 'There was an error uploading the file!';
            }

        } else {

            echo 'You cannot upload files of this type';
        }

        $data = [

            'img' => $imageName,
            'title' => $_POST['title'],
            'post' => htmlentities($_POST['message']),
            'id' => $_SESSION['id']
        ];

        if (empty($data['title']) || empty($data['post'])) {

            header('Location: admin.php?error=emptyfields');
            exit();

        } else {

            $postBlog = new Insert;
            $postBlog->insertBlogPost($data);

            header('Location: admin.php?status=blogsubmitted');

        }

        
    
    }
   
    

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | Admin Page</title>
    <link rel="stylesheet" href="../scss/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>  

    <section id="admin" class="vh-100">
        <div class="container-fluid h-100">
            <div class="row align-items-stretch h-100">
                <div class="col-lg-2 bg-secondary">
                    <div class="admin-left text-center">
                        <div class="admin-left__header py-5">
                            <div class="admin-img">
                                <svg class="img-fluid" width="80" height="80" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <p class="py-3 text-capitalize">Welcome <br> <?php echo $_SESSION['firstName']; ?>, <?php echo $_SESSION['lastName']; ?></p>
                        </div>
                        <div class="admin-left__body">
                            <div class="nav-container">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="#">Create Post</a></li>
                                    <li class="mb-2">
                                        <form action="logout.php" method="post">
                                            <button type="submit" id="logout-btn" name="logout" value="Logout">Log out</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="admin-right h-100">
                        <div class="tab-container h-100">
                            <div class="tab h-100" id="blog">
                                <h3 class="mb-5">Write A Blog</h3>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                   
                                    <div class="form-group mb-3">
                                        <label for="uploadImg">Upload Image :</label>
                                        <input type="file" name="file" id="uploadImg" class="d-block">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Blog Title</label>
                                        <input type="text" name="title" id="tile" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea name="message" id="editor" cols="30" rows="10" class="form-control" placeholder="Write Your Post Here...."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="Post" class="btn btn-primary" name="post">Post It</button>
                                    </div>
                                   
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message');
    </script>
</body>
</html>