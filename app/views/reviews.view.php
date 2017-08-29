<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/meta.view.php')?>
    <title>MissSpelt! | Reviews</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/review.css" rel="stylesheet">
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
                            <li><a href="javascript:delay('/reviews')" onfocus="this.blur();"  class="active-tab">Reviews</a></li>
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
                    <h1>Reviews</h1>
                    <p>Read what others are saying about MissSpelt!</p>
                </div>
                <blockquote>
                    <h3>Jimmy</h3>
                    <div class="rating">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p>I was absoulety amazed at the level of service I was given while eating at this resturaunt. The staff's attention to detail was quite impressive. The best part was definitely their food. I had no idea gluten-free meals could taste that good. I would highly recommond to anyone who is looking for food that's not only delicious, but also gluten-free.</p>
                </blockquote>
                <blockquote>
                    <h3>Jessica</h3>
                    <div class="rating">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p>While trying to plan an event for my mother's birthday I was worried about finding a place with enough room to seat everyone. After finding MissSpelt! I was able to create a reservation in seconds using their online form. I was thourougly impressed with how it easy it was. The dinner went smoothly without any hassle at all.</p>
                </blockquote>
                <blockquote>
                    <h3>Billy</h3>
                    <div class="rating">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p>The service was great, everyone was really nice. 10/10 would recommend to all gluten haters.</p>
                </blockquote>
                <blockquote>
                    <h3>Freddy</h3>
                    <div class="rating">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                    </div>
                    <p>I was expecting alright food, but it tasted way better than I though, 4/5 for exceeding my expectations.</p>
                </blockquote>
                <blockquote>
                    <h3>Brian</h3>
                    <div class="rating">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p>What can I say, best food that I have ever tasted.</p>
                </blockquote>
                <div class="action-box">
                    <div class="text-center">
                        <h2>Write a review!</h2>
                        <a href="#" class="btn btn-raised btn-warning" data-toggle="modal" data-target="#reviewModal">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="text-center">Create a Review</h2>
                </div>
                <div class="modal-body">
                    <div id="error_msg"></div>
                    <div class="form-card">
                        <form action="/reviews" method="POST" name="reviews" onsubmit="return validateReview();">
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
                                <div class="form-group">
                                    <h2 class="form-item-title">Rating</h2>
                                    <div class="col-md-8">
                                        <fieldset>
                                            <span class="star-cb-group">
                                              <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
                                              <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
                                              <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                                              <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
                                              <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
                                              <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
                                            </span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2 class="form-item-title">Write your review here.</h2>
                                    <div class="col-md-8">
                                        <textarea type="text" class="form-control" id="review" placeholder="Enter text here" name="review"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-raised btn-warning" value="Submit">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
