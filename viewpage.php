
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link rel="stylesheet" href="scss/style.css">
</head>
<body>
    <header class="header-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container align-items-stretch h-100">
                <a class="navbar-brand" href="index.php">Car Rental</a>
                <button class="navbar-toggler align-self-center" type="button" data-toggle="collapse" data-target="#toggleMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse h-100" id="toggleMenu">
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


    <div class="booking-banner">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-12">
                    <div class="banner-title pb-3">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<main>
    <div class="container"> 
        <div class="row justify-content-center py-5 my-5">
            <div class="col-lg-6">
                <?php

                    require_once 'classes/model-handler.php';

                    $fetchPost = new Fetch;
                    $datas = $fetchPost->getSinglePostData($_GET['id']);
                ?>

                <?php foreach ($datas as $data) : ?>
                    
                    <article>
                        <h2 class="mb-5"><?php echo $data['blog_title']; ?></h2>
                        <?php echo html_entity_decode($data['post']) ?>
                    </article>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
</main>

<?php include_once 'inc/footer.php'; ?>