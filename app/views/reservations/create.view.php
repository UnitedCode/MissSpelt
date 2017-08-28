<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('app/views/partials/meta.view.php')?>
    <title>MissSpelt!| Reservations | Create</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/create-check.css" rel="stylesheet">
    <link href="/public/css/date-time.css" rel="stylesheet">
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
            <div class="well form-card">
                <h2 class="text-center">Create a Reservation</h2>
                <div id="error_msg"></div>
                <form action="/reservations/create" method="POST" name="create" onsubmit="return validateCreate();">
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
                            <label class="control-label" for="phone">Phone Number</label>
                            <input class="form-control" id="phoneInput" type="text" name="phone">
                        </div>

                        <div class="form-group label-floating hidden col-md-8" id="email">
                            <label class="control-label" for="email">Email Address</label>
                            <input class="form-control" id="emailInput" type="text" name="email">
                        </div>

                        <div class="form-group col-md-4">
                            <h2 class="form-item-title" id="party-fix">Number of Party Members</h2>
                            <input class="form-control" type="number" name="party_members" id="partyMembers">
                        </div>

                        <div class="form-group">
                            <h2 class="form-item-title">Location</h2>
                            <div class="col-md-8">
                                <select id="location" class="form-control" name="location">
                                    <option value="none">Please select an option</option>
                                    <option value="Atlanta, Georgia">Atlanta, Georgia</option>
                                    <option value="New York City, New York">New York City, New York</option>
                                    <option value="Chicago, Illinois">Chicago, Illinois</option>
                                    <option value="Kansas City, Missouri">Kansas City, Missouri</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <h2 class="form-item-title" id="date-fix">Date</h2>
                            <input class="form-control" type="text" id="datetimepicker" placeholder="mm/dd/yyyy"/ name="date"><br><br>
                        </div>

                        <div class="form-group">
                            <h2 class="form-item-title">Time</h2>
                            <div class="col-md-8">
                                <select id="time" class="form-control" name="time">
                                    <option value="none">Please select an approximate time</option>
                                    <option value="7:00 A.M.">7:00 A.M.</option>
                                    <option value="8:00 A.M.">8:00 A.M.</option>
                                    <option value="9:00 A.M.">9:00 A.M.</option>
                                    <option value="10:00 A.M.">10:00 A.M.</option>
                                    <option value="11:00 A.M.">11:00 A.M.</option>
                                    <option value="12:00 A.M.">12:00 A.M.</option>
                                    <option value="1:00 P.M.">1:00 P.M.</option>
                                    <option value="2:00 P.M.">2:00 P.M.</option>
                                    <option value="3:00 P.M.">3:00 P.M.</option>
                                    <option value="4:00 P.M.">4:00 P.M.</option>
                                    <option value="5:00 P.M.">5:00 P.M.</option>
                                    <option value="6:00 P.M.">6:00 P.M.</option>
                                    <option value="7:00 P.M.">7:00 P.M.</option>
                                </select>
                            </div>
                        </div>

                        <br><br><br>
                        <div class="g-recaptcha" data-sitekey="6LcTMx8TAAAAALZYLTDyvNKs8oyP2b3A7x3zt--B"></div>

                        <div class="form-group submit-button">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-raised btn-warning" name="submit" herf="#">Submit</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <?php require('app/views/partials/footer.view.php')?>

    <?php require('app/views/partials/scripts.view.php')?>

    <!-- Script for date and time picker -->
    <script type="text/javascript" src="/public/js/date-time.js"></script>

    <!-- Recaptcha code from Google -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Validates the form before submitting to the server -->
    <script type="text/javascript" src="/public/js/validate.js"></script>

    <script type="text/javascript" src="/public/js/pages/create_check.js"></script>

    <script src="/public/js/ripples.min.js"></script>

</body>
