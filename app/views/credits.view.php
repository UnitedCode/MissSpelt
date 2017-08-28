<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/meta.view.php')?>
    <title>MissSpelt!</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/about.css" rel="stylesheet">
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
                    <h1>Credits</h1>
                    <p>This is the comprehensive list of organizations and companies that this site owes credit to. This includes technologies, images, and videos used</p>
                </div>
                <br>
                <p><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a><br>A huge thanks to bootstrap for their awesome framework</p>
                <br>
                <p><a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" target="_blank">Material Design for Bootstrap</a><br>A add-on to bootstrap that helped the site fit into the material design guidelines set by Google</p>
                <br>
                <p><a href="http://www.clickcomp.com" target="_blank">Click Computers Inc.</a><br>A local business that generously provided hosting for the website</p>
                <br>
                <p><a href="https://github.com/" target="_blank">GitHub</a><br>Github was used extensively throughout the development process to track changes</p>
                <br>
                <p><a href="http://rawgit.com/" target="_blank">RawGit</a><br>RawGit was used to temporarily host the website during development</p>
                <br>
                <p><a href="https://stocksnap.io/" target="_blank">StockSnap.io</a><br>StockSnap provided many of the background images used on the site</p>
                <br>
                <p><a href="https://photopin.io/" target="_blank">PhotoPin</a><br>PhotoPin provided most of the images used on the site</p>
                <br>
                <p><a href="http://draxe.com/" target="_blank">Dr. Josh Axe</a>, <a href="https://www.youtube.com/user/doctorjoshaxe/featured" target="_blank">YouTube</a><br>Created video used on the about page on gluten sensitivity</p>
                <p><a href="http://www.youbeauty.com/" target="_blank">YouBeauty</a>, <a href="https://www.youtube.com/user/YouBeautyVideo" target="_blank">YouTube</a><br>Created video used on the about page on Celiac Disease</p>
                <br>
            </div>
        </div>
    </div>

    <?php require('partials/footer.view.php')?>

    <?php require('partials/scripts.view.php')?>

    <script src="/public/js/ripples.min.js"></script>

</body>
