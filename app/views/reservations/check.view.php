<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('app/views/partials/meta.view.php')?>
    <title>MissSpelt!</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/create-check.css" rel="stylesheet">
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

        <div class="header-color"></div>
        <div class="container fly-in" produces="intro-animation-up">
            <div class="jumbotron form-card">
                <h2 class="text-center">Check on a Reservation</h2>
                <div id="error_msg"></div>
                <form action="/reservations/check" method="POST" name="check" onsubmit="return validateCheck();">
                    <fieldset>
                        <div class="form-group">
                            <h2 class="form-item-title">First Name</h2>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="firstName" placeholder="Enter text here" name="firstname">
                            </div>
                        </div>

                        <div class="form-group">
                            <h2 class="form-item-title">Last Name</h2>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lastName" placeholder="Enter text here" name="lastname">
                            </div>
                        </div>

                        <div class="form-group radio-group">
                            <h2 class="form-item-title">Contact Information</h2>
                            <div class="radio">
                                <label id="r-phone">
                                    <input type="radio" name="contact" value="phone" checked="checked"> Phone Number
                                </label>
                            </div>
                            <div class="radio">
                                <label id="r-email">
                                    <input type="radio" name="contact" value="email">Email Address
                                </label>
                            </div>
                        </div>

                        <div class="form-group label-floating col-md-8" id="phone">
                            <label class="control-label" for="phone">Phone number</label>
                            <input class="form-control" id="phoneInput" type="text" name="phone">
                        </div>

                        <div class="form-group label-floating hidden col-md-8" id="email">
                            <label class="control-label" for="email">Email Address</label>
                            <input class="form-control" id="emailInput" type="text" name="email">
                        </div>

                        <br><br><br>
                        <div class="g-recaptcha" data-sitekey="6LcTMx8TAAAAALZYLTDyvNKs8oyP2b3A7x3zt--B"></div>

                        <div class="form-group submit-button">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-raised btn-warning" name="submit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <?php require('app/views/partials/footer.view.php')?>

    <?php require('app/views/partials/scripts.view.php')?>

    <!-- Recaptcha code from Google -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Validates the form before submitting to the server -->
    <script type="text/javascript" src="/public/js/validate.js"></script>

    <script type="text/javascript" src="/public/js/pages/create_check.js"></script>

</body>
