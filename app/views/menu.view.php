<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/meta.view.php')?>
    <title>MissSpelt! | Menu</title>
    <!-- Custom page specific styles -->
    <link href="/public/css/pages/menu.css" rel="stylesheet">
</head>
<body>

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
                        <li><a href="javascript:delay('/menu')" onfocus="this.blur();"  class="active-tab">Menu</a></li>
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

    <div class="header move-down">
        <div class="container">
            <div class="menu-box well fly-in" produces="intro-animation-up">
                <ul class="nav nav-tabs" role="tablist" id="myTabs">
                    <li role="presentation" class="active col-xs-3 text-center">
                        <a href="#entrees" aria-controls="entrees" role="tab" data-toggle="tab" onfocus="this.blur();" class="btn btn-raised">Entrées</a>
                    </li>
                    <li role="presentation" class="col-xs-3 text-center">
                        <a href="#salads" aria-controls="salads" role="tab" data-toggle="tab" onfocus="this.blur();" class="btn btn-raised">Salads</a>
                    </li>
                    <li role="presentation" class="col-xs-3 text-center">
                        <a href="#appetizers" id="app-tab" aria-controls="appetizers" role="tab" data-toggle="tab" onfocus="this.blur();" class="btn btn-raised">Appetizers</a>
                    </li>
                    <li role="presentation" class="col-xs-3 text-center">
                        <a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab" onfocus="this.blur();" class="btn btn-raised">Desserts</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="entrees">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/chicken_enchiladas.jpg" class="img-responsive" alt="Chicken Enchiladas" />
                                    <div class="text-center">
                                        <h3>Chicken Enchiladas</h3>
                                        <p><b>Price: $8.99</b></p>
                                        <p>2 Chicken Enchiladas made with corn tortilla shells covered a warm cheese sauce.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/pancakes.jpg" class="img-responsive" alt="Pancakes" />
                                    <div class="text-center">
                                        <h3>Buckwheat Pancakes</h3>
                                        <p><b>Price: $10.99</b></p>
                                        <p>4 pancakes stacked with butter and your choice of maple, strawberry, and butter pecan syrup.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/quinoa.jpg" class="img-responsive" alt="Fried Quinoa" />
                                    <div class="text-center">
                                        <h3>Fried Quinoa</h3>
                                        <p><b>Price: $10.99</b></p>
                                        <p>Fried Quinoa mixed with chicken and assorted vegetables.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/pizza.jpg" class="img-responsive" alt="Pizza" />
                                    <div class="text-center">
                                        <h3>Pizza</h3>
                                        <p><b>Price: $12.99</b></p>
                                        <p>Special order Pizza made completly gluten free.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/fish_tacos.jpg" class="img-responsive" alt="Fish Tacos" />
                                    <div class="text-center">
                                        <h3>Fish Tacos</h3>
                                        <p><b>Price: $10.99</b></p>
                                        <p>Tilapia fish with other toppings on a corn tortilla shell.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/chicken_sandwhich.jpg" class="img-responsive" alt="Grilled Chicken Sandwhich" />
                                    <div class="text-center">
                                        <h3>Grilled Chicken Sandwich</h3>
                                        <p><b>Price: $8.99</b></p>
                                        <p>Grilled Chicken Sandwich with lettuce, tomato, and a specialty cheese also served with a side of sweet potato fries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="salads"><div class="row">
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/cabbage_salad.jpg" class="img-responsive" alt="Chicken Cabbage Salad" />
                                    <div class="text-center">
                                        <h3>Chicken Cabbage Salad</h3>
                                        <p><b>Price: $6.99</b></p>
                                        <p>A refreshing and healthy chicken and cabbage salad with an Asian flare.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/taco_salad.jpg" class="img-responsive" alt="Taco Salad" />
                                    <div class="text-center">
                                        <h3>Taco Salad</h3>
                                        <p><b>Price: $7.99</b></p>
                                        <p>Crispy lettuce with meat, beans, and crunchy corn tortilla chips.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/cashew_salad.jpg" class="img-responsive" alt="Chicken Cashew Salad" />
                                    <div class="text-center">
                                        <h3>Chicken Cashew Salad</h3>
                                        <p><b>Price: $8.99</b></p>
                                        <p>Chicken salad served with cashew nuts and an oriental dressing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/rasberry_pecan_salad.jpg" class="img-responsive" alt="Raspberry Pecan Salad" />
                                    <div class="text-center">
                                        <h3>Raspberry Pecan Salad </h3>
                                        <p><b>Price: $8.99</b></p>
                                        <p>Sweet tangy salad with a rasberry dressing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/greek_salad.jpg" class="img-responsive" alt="Greek Salad" />
                                    <div class="text-center">
                                        <h3>Greek Salad</h3>
                                        <p><b>Price: $7.99</b></p>
                                        <p>Light and tangy salad with a vinagarette dressing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/green_salad.jpg" class="img-responsive" alt="Spinach and Strawberry Salad" />
                                    <div class="text-center">
                                        <h3>Spinach and Strawberry Salad</h3>
                                        <p><b>Price: $9.99</b></p>
                                        <p>Spinach and Strawberry Salad topped with fetta cheese, pecans, and a vinaigrette.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="appetizers">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/stuffed_mushrooms.jpg" class="img-responsive" alt="Stuffed Mushrooms" />
                                    <div class="text-center">
                                        <h3>Stuffed Mushrooms</h3>
                                        <p><b>Price: $4.49</b></p>
                                        <p>Savory stuffed portabella mushrooms topped with a black walnut topping.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/salmon_spread.jpg" class="img-responsive" alt="Salmon Spread" />
                                    <div class="text-center">
                                        <h3>Salmon Spread</h3>
                                        <p><b>Price: $3.99</b></p>
                                        <p>A salmon spread served with rice crackers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/sushi.jpg" class="img-responsive" alt="Sushi" />
                                    <div class="text-center">
                                        <h3>Sushi</h3>
                                        <p><b>Price: $4.49</b></p>
                                        <p>Assortment of sushi served completely gluten free.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/chicken_wings.jpg" class="img-responsive" alt="Hot Wings" />
                                    <div class="text-center">
                                        <h3>Hot Wings</h3>
                                        <p><b>Price: $3.49</b></p>
                                        <p>Mini chicken wings with a choice of barbecue, honey mustard, and hot sauce.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/onion_rings.jpg" class="img-responsive" alt="Onion Rings" />
                                    <div class="text-center">
                                        <h3>Onion Rings</h3>
                                        <p><b>Price: $3.25</b></p>
                                        <p>Onion Rings dipped in rice and quinoa flour.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/chips_and_salsa.jpg" class="img-responsive" alt="Chips and Salsa" />
                                    <div class="text-center">
                                        <h3>Chips and Salsa</h3>
                                        <p><b>Price: $3.99</b></p>
                                        <p>Corn tortilla chips covered with a melted cheese and served with a fresh organic salsa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="desserts">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/cheesecake.jpg" class="img-responsive" alt="Cheesecake" />
                                    <div class="text-center">
                                        <h3>Cheesecake</h3>
                                        <p><b>Price: $3.49</b></p>
                                        <p>Delicious cheesecake made with a special pecan crust and served with blueberry topping.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/brownies.jpg" class="img-responsive" alt="Brownies" />
                                    <div class="text-center">
                                        <h3>Brownies</h3>
                                        <p><b>Price: $5.49</b></p>
                                        <p>2 chocolate brownies with a scoop of vanilla ice cream.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/carrot_cake.jpg" class="img-responsive" alt="Carrot Cake" />
                                    <div class="text-center">
                                        <h3>Carrot Cake</h3>
                                        <p><b>Price: $3.75</b></p>
                                        <p>Carrot cake topped with a rich vanilla frosting.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/lemon_cake.jpg" class="img-responsive" alt="Lemon Cake" />
                                    <div class="text-center">
                                        <h3>Lemon Cake</h3>
                                        <p><b>Price: $3.24</b></p>
                                        <p>Fluffy lemon cake drizzled with a lemon glaze.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/berry_pie.jpg" class="img-responsive" alt="Mixed Berry Pie" />
                                    <div class="text-center">
                                        <h3>Mixed Berry Pie</h3>
                                        <p><b>Price: $4.49</b></p>
                                        <p>Delicious mixed berry pie served with a scoop of ice cream.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="menu-item">
                                    <img src="/public/img/menu/pumpkin_roll.jpg" class="img-responsive" alt="Pumpkin Roll" />
                                    <div class="text-center">
                                        <h3>Pumpkin Roll</h3>
                                        <p><b>Price: $4.49</b></p>
                                        <p>Soft pumpkin roll filled with a sweet cream cheese filling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('partials/footer.view.php')?>

<?php require('partials/scripts.view.php')?>

<script type="text/javascript">
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>

</body>
