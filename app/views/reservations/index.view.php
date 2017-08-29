<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('app/views/partials/meta.view.php')?>
    <title>MissSpelt!</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/reservations.css" rel="stylesheet">
</head>
<body>

    <div class="main">
        <div class="bs-component">
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="nav-container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="javascript:delay('/')" onfocus="this.blur();"><img src="/public/img/logo-2.png"></a>
                    </div>
                    <div class="navbar-collapse collapse navbar-warning-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:delay('/')" onfocus="this.blur();">Home</a></li>
                            <li><a href="javascript:delay('/menu')" onfocus="this.blur();">Menu</a></li>
                            <li><a href="javascript:delay('/reservations')" onfocus="this.blur();" class="active-tab">Reservations</a></li>
                            <li><a href="javascript:delay('/reviews')" onfocus="this.blur();">Reviews</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="javascript:delay('/contact')" onfocus="this.blur();">Contact</a></li>
                            <li><a href="javascript:delay('/about')" onfocus="this.blur();">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="container">
                <div class="row move-down fly-in" produces="intro-animation-up">
                    <div class="col-md-12">
                        <div class="jumbotron" id="reserve-jumbo">
                            <h1>Reservations</h1>
                            <p>Making a reservation at MissSpelt! is a great way to make sure that you and all of your party will have seating at our restaurants. All that's necessary to reserve is your name, a date, the number of people in your party, and a phone or email address for verification. Checking on your reservations is just as easy, just enter your email or phone number and your name and your reservation will be displayed.</p>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-3 text-center">
                                    <a href="javascript:delay('/reservations/create')" class="btn btn-raised btn-warning">Create</a>
                                </div>
                                <div class="col-md-3 text-center">
                                    <a href="javascript:delay('/reservations/check')" class="btn btn-raised btn-warning">Check</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('app/views/partials/footer.view.php')?>

    <?php require('app/views/partials/scripts.view.php')?>

    <script src="/public/js/ripples.min.js"></script>

</body>
