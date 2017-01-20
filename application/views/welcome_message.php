<html lang="en">

    <head>

        <title>Ngular & CI 3</title>

        <!-------------------bootsrap css ----------------------->
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <!-------------------Angular js file--------------------->
        <script src="asset/js/angular.min.js"></script>
        <!-------------------Angular Routing  file -------------->
        <script src="asset/js/angular-route.min.js"></script>
        <!-------------------Angular custome route file---------->
        <script src="angular/routes.js"></script>
        <!-------------------Custome angular controll------------>
        <script src="angular/controllers/ngController.js"></script>
        <!-------------------Toaster css file-------------------->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
        <link rel="stylesheet" type="text/css" href="asset/css/toaster.min.css">
        <link rel="stylesheet" type="text/css" href="asset/css/jquery-ui.css">
        <!-----------------Toaster JS file----------------------->
        <script src="asset/js/script.js"></script>
        <script src="asset/js/toaster.min.js"></script>
        <script>
            var base_url = "<?php echo base_url()?>";
        </script>

    </head>

    <body ng-app="main-App">

        <nav class="navbar navbar-default">

            <div class="container-fluid">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle Navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="#">Home Page</a>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">

                        <li><a href="#/student">Student List</a></li>
                        <li><a href="#/product">Product List</a></li>
                        <li><a href="#/link2">Link-2</a></li>
                        <li><a href="#/link3">Link-3</a></li>

                    </ul>

                </div>

            </div>

        </nav>

        <div class="container">

            <ng-view></ng-view>

        </div>
    <toaster-container toaster-options="{'time-out': 3000,'position-class': 'toast-top-right'}"></toaster-container>
</body>
</html>
