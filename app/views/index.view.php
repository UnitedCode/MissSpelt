<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/meta.view.php')?>
    <title>MissSpelt!</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/home.css" rel="stylesheet">
</head>
<body>

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

    <div class="h-header z-11" id="Parallax-content">
        <div class="logo">
            <img src="/public/img/logo.png">
            <h2 class="text-center">Delicious, Healthy . . . Gluten-free</h2>
        </div>
    </div>
    <div class="next-section fly-in z-11" produces="intro-animation-up">
        <a href="#section-1" class="arrow-wrap">
            <i class="fa fa-angle-down fa-5x"></i>
        </a>
    </div>
    <div id="section-1" class="shadow-bottom">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-primary panel-well" id="section-1-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">What We Do</h3>
                    </div>
                    <div class="panel-body">
                        <img src="http://i.imgur.com/mvxJfea.jpg" class="panel-img">
                        <p>Everywhere we turn in today's world we see Gluten. Grocery stores are stocked full of gluten-related items. Although these stores carry gluten-free items, they are usually not at the forefront. With this need in mind, we decided to start MissSpelt! We wanted a place dedicated to making solely gluten-free foods. When we started MissSpelt! we didn't have only people with gluten sensitivity or Celiac disease in mind. We wanted a place where anyone with an interest in the gluten-free lifestyle could come and enjoy great food, served gluten free.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="section-1-2">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center section-1-desc">
                            <i class="material-icons">&#xE556;</i>
                            <h3>Great Food</h3>
                            <a href="javascript:delay('pages/menu.html')" class="btn btn-raised btn-warning">Menu</a>
                            <p>At MissSpelt! we do our very best to assure that our food is delicious and healthy. Take a look at our menu full of gluten-free meals.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center section-1-desc">
                            <i class="material-icons">&#xE7FB;</i>
                            <h3>Bring Your Friends</h3>
                            <a href="javascript:delay('pages/reservations.html')" class="btn btn-raised btn-warning">Reservations</a>
                            <p>Why go to an awesome restaurant by yourself? Call ahead or make an online reservation for you and your friends.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center section-1-desc">
                            <i class="material-icons">&#xE560;</i>
                            <h3>Leave a Review</h3>
                            <a href="javascript:delay('pages/reviews.html')" class="btn btn-raised btn-warning">Reviews</a>
                            <p>Did you enjoy your meal with us? Leave a review telling others how awesome it was.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center section-1-desc">
                            <i class="material-icons">&#xE32A;</i>
                            <h3>Customer Loyalty</h3>
                            <a href="javascript:delay('pages/loyalty.html')" class="btn btn-raised btn-warning">Loyalty Program</a>
                            <p>Does a gluten-free lifestyle interest you? Check out our customer loyalty program where we offer discounts and specials to regulars in our diners.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('partials/footer.view.php')?>

    <?php require('partials/scripts.view.php')?>

</body>
