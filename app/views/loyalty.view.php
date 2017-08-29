<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/meta.view.php')?>
    <title>MissSpelt!</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/loyalty.css" rel="stylesheet">
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
                            <li><a href="javascript:delay('/')" onfocus="this.blur();" class="active-tab">Home</a></li>
                            <li><a href="javascript:delay('/menu')" onfocus="this.blur();">Menu</a></li>
                            <li><a href="javascript:delay('/reservations')" onfocus="this.blur();">Reservations</a></li>
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
        <div class="container header-element fly-in" produces="intro-animation-up">
            <div class="well">
                <div class="text-center">
                    <h1>Loyalty Programs</h1>
                    <br>
                    <p style="font-size:16px;">
                        Interested in recieving discounts on your purchases from MissSpelt!?<br>
                        Read below to find out what customer loyalty programs we offer.
                    </p>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary text-center loyalty-card">
                            <div class="panel-heading">
                                <h3 class="panel-title">Request a card</h3>
                            </div>
                            <div class="panel-body">
                                <p>Request a food card at one of our locations and begin earning credit for each meal. After spending $40 you can get up to $10 off your next purchase!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-primary text-center loyalty-card">
                            <div class="panel-heading">
                                <h3 class="panel-title">Refer a friend</h3>
                            </div>
                            <div class="panel-body">
                                <p>After signing up if you bring a friend then your next meal is half off!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action-box">
                    <div class="text-center">
                        <h1>Sign Up!</h1>
                        <a href="#" class="btn btn-raised btn-warning" data-toggle="modal" data-target="#reviewModal">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="reviewModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">
                    <div class="form-card">
                        <h2 class="text-center">Sign up</h2>
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <h2 class="form-item-title">First Name</h2>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name here">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2 class="form-item-title">Last Name</h2>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name here">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2 class="form-item-title">Email</h2>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="Email" placeholder="Enter email here">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-raised btn-warning">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require('partials/footer.view.php')?>

    <?php require('partials/scripts.view.php')?>

    <script src="/public/js/ripples.min.js"></script>

</body>
