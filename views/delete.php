<?php
include '../classes/User.php';
$user = new User();
session_start();

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Delete</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- FontAwesome CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    </head>

    <body class="">
    <?php include 'nav.php' ?>
        <div class="height: 100vh;">
            <div class="row h-100 m-0">
                <div class="w-50 mx-auto my-auto">
                    <div class="">
                        <div class="">
                            <h2 class="text-center mt-4 text-warning"><i class="fa-solid fa-triangle-exclamation fa-3x"></i></h2>
                                <form action="../actions/delete.php" method="post">
                                    <div class="text-center">
                                        <h2 class="text-danger mt-3">DELETE ACCOUNT</h2>
                                    
                                    <h5 class="mt-3">Are you sure you want to delete your account?</h5>
                                    <div class="col">
                                        <a href="dashbord.php" class="btn btn-dark w-25 mx-2 mt-3" name="cancel">Cancel</a>
                                        <form action ="../actions/"></form>
                                        <button class="btn btn-outline-danger w-25 mx-2 mt-3" name="delete">Delete</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
