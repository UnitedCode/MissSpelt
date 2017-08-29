<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('app/views/partials/meta.view.php')?>
    <title>MissSpelt! | Reservations | Check</title>
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
            <?php if (!count($reservations) > 0) : ?>
                <h2 class="text-center">No reservations found</h2>
                <br>
                <br>
                <p class="text-center" style="font-size:18px;">We couldn't find any reservations matching the information that you submitted. Pleae try again or create a new reservation.</p>
                <br>
                <p class="text-center">
                    <a href="/reservations/create" class="btn btn-warning btn-raised">Create</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="/reservations/check" class="btn btn-warning btn-raised">Check</a></p>
            <?php else: ?>
                <h2 class="text-center">Your reservations</h2>
                <?php foreach($reservations as $reservation): ?>
                    <div class="result">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td><?= "{$reservation['firstname']} {$reservation['lastname']}" ?></td>
                            </tr>
                            <tr>
                                <td>Contact info</td>
                                <td><?= $reservation['contact'] ?></td>
                            </tr>
                            <tr>
                                <td># of party members</td>
                                <td><?= $reservation['party_members'] ?></td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td><?= $reservation['location'] ?></td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td><?= $reservation['date'] ?></td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td><?= $reservation['time'] ?></td>
                            </tr>
                            </tbody>
                        </table>

                        <form action="/reservations/cancel" method="POST" class="text-center">
                            <input type="hidden" name="id" value="<?= $reservation['id']?>">
                            <input class="btn btn-raised btn-danger" type="Submit" name="delete" value="Cancel Reservation">
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php require('app/views/partials/footer.view.php')?>

    <?php require('app/views/partials/scripts.view.php')?>

    <script src="/public/js/ripples.min.js"></script>

</body>
