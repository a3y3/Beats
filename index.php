<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beats | Your Music, Anytime, Anywhere</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/musicplayer.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

</head>

<body>
<?php
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image: '' "></div>
                <div class="carousel-caption">
                    <h2>Latest Songs</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:''"></div>
                <div class="carousel-caption">
                    <h2>Upcoming Artists</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image: ''"></div>
                <div class="carousel-caption">
                    <h2>Retro Music</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

       
        <div class="row">
            <div class="col-lg-12">
                <p>
                    Trending
                </p>
            </div>
	    </div>
		
		
        	<div class="col-md-3 col-sm-6">
	               <a href="Popular.html">
                    <img class="img-responsive img-portfolio img-hover" src="popular.png" style="width:200px;height:200px;" alt=":P">
                </a>
            </div>
			<div class="col-md-3 col-sm-6">
                <a href="jagjitsingh.html">
                    <img class="img-responsive img-portfolio img-hover" src="jagjitsingh.jpg" style="width:200px;height:200px;" alt=":P">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="switchfoot.html">
                    <img class="img-responsive img-portfolio img-hover" src="switchfoot.jpeg" style="width:200px;height:200px;" alt=":P">
                </a>
			</div>
			<div class="col-md-3 col-sm-6">
                <a href="cokestudio.html">
                    <img class="img-responsive img-portfolio img-hover" src="cokestudio.png" style="width:200px;height:200px;" alt=":P">
                </a>
			</div>
		

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>