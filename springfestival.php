<?php include("header.html"); ?>

<!-- Carousel -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images\spring_date.jpg" alt="First slide"  height="730">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images\sp2wp.jpg" alt="Second slide"  height="730">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images\logo.jpg" alt="Third slide" height="730">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Nav -->azeazeazeazeaze

<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block" href="#">Spring</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Festival</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Promotion</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Sponsors</a>
        <a class="py-2 d-none d-md-inline-block" href="#">PayIcam</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Social Network</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
    </div>
</nav>

<!-- Vidéo -->

<p><center>
    <iframe width="900" height="506" src="https://www.youtube.com/embed/9AeS6aR3PRU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center></p>

<!-- Timer -->

<br><center><h1 id="timer"></h1></center>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Apr 25, 2020 18:00:00").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Display the result in the element with id="demo"
        document.getElementById("timer").innerHTML = days + "j " + hours + "h "
        + minutes + "m " + seconds + "s ";
        // If the count down is finished, write some text
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<!-- Chapters -->

<div class="container marketing">
    <center>
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="images\logo.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Ingénierie</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="images\logo.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Art et Musique</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="images\logo.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Rencontres</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details</a></p>
            </div>
        </div>
    </center>
</div>

<!-- Body -->

<div class="container">

    <h5>Ingénierie</h5>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <br>
    <h5>Art et musique</h5>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <h5>Rencontres</h5>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <br>

</div>

<?php include("footer.html"); ?>