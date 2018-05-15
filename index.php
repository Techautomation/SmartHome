<!doctype html>
<?php 
/*Here we are making a connection to database and getting details from dhtdata table which will be passed to the graph */
$connect = mysqli_connect("localhost", "hello", "", "smarthome");
$query = "SELECT * FROM dhtdata";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ temp:'".$row["temp"]."', date:'".$row["date"]."',humidity:'".$row["humidity"]."'} ,";
}
$chart_data = substr($chart_data, 0, -2);
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel=" icon " type="image/png" href="assets/images/icon123.png"></link>
	<title>Smart Home With I.O.T</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--links for chart-->
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>




        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />


        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body onload="refresh()">
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="< fa-phone"></i>+91 9755186485</a>
                                <a href="#"><i class="fa fa-envelope"></i>techautomation87@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="Logo" /></a>
                </div>



                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="devices.php">Devices</a></li>

                        <li><a href="history.php">history</a></li>
                        <li><a href="support.html">Support</a></li>
                        <li class="login"><a href="login.html">Sign In</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <h1 style="color:pink; text-shadow: 2px 2px 4px #000000"><b>Manage Your Connected Devices Remotely</b></h1>
                                    <p style="color:black;"><i>"If You Think That The Internet Has Changed Your Life,Think Again.The Internet Of things Is About To Change It All Over Again!!"</i> </p>

                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                            <div class="home-contact">



                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Sections -->




        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">


                        <div class="col-sm-6">
                            <div id="chart"></div>
                        </div>

                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2 style="color:red;"><b>Real Time Data</b></h2>
                                <p>This Graph Show The Real Time Data Of Your Home </p>
                                <ul>
                                    <li>This is the temprature data in celcius</li>
                                    <li>Comming Directly from your DHT11 sensor connected at your home</li>
                                    <li></li>
                                </ul>
                                <div class="features_buttom">
                                    <a href="" class="btn btn-default">Show More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">



                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2 style ="color:blue;"><b>Real Time Data</b></h2>
                                <p>This Graph Show The Real Time Data Of Your Home</p>
                                <ul>
                                    <li>This is the humidity data </li>
                                    <li>comming directly from your DHT11 sensor connected at your home</li>
                                    <li></li>
                                </ul>
                                <div class="features_buttom">
                                    <a href="" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div id="chart1"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->


        <section id="service" class="service2 sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_service2">
                        <div class="head_title text-center">
                            <h2 style="color:green;">SERVICES FOR YOUR HOME</h2>
                            <p>At the end of the day, the goals are simple:<br/> safety and security.</p>
                        </div>

                        <div class="service_content">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="assets/images/tempsensor.jpg" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2 style="color:orange;">DHT11</h2>
                                        <p>The DHT11 is a relatively good sensor for measuring temperature and humidity.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                       <img src="assets/images/picam.jpg" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2 style="color:orange;">Raspberry Pi 5MP Camera Module.</h2>
                                        <p>The camera is capable of 2592 x 1944 pixel static images and also supports 1080p30, 720p60 and 640x480p60/90 video.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                      <img src="assets/images/flaticon3.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2 style="color:orange;">passive infrared sensor</h2>
                                        <p>A passive infrared sensor (PIR sensor) is an electronic sensor that measures infrared (IR) light radiating from objects in its field of view. They are most often used in PIR-based motion detectors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="assets/images/moisture_sensor.jpg" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2 style="color:orange;">Moisture Sensor</h2>
                                        <p>Soil moisture sensors measure the volumetric water content in soil. Since the direct gravimetric measurement of free soil moisture requires removing, drying, and weighting of a sample. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Service2 Section -->



        <!-- Sections -->
        <section id="price" class="price sections">


            <div class="head_title text-center">
                <h2>Configure Devices According To Your Need</h2>
        <p>If You Don't Want To Use Sensors Deactivate Them By Switching To Manual mode</p>
            </div>
            <!-- Example row of columns -->
            <div  style="padding-left: 220px;"class="cd-pricing-container cd-has-margins">
                <div style="padding-right: 300px;"class="cd-pricing-switcher">
                    <p class="fieldset">
                        <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked onclick="auto()">
                        <label for="monthly-2">Auto-mode</label>
                        <input type="radio" name="duration-2" value="yearly" id="yearly-2" onclick="manual()">
                        <label for="yearly-2">Manual</label>
                        <span class="cd-switch"></span>
                    </p>
                </div> <!-- .cd-pricing-switcher -->

                <ul class="cd-pricing-list cd-bounce-invert">
                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Auto-mode</h2>


                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>sensors on</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>saving history</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>automated security</li>
                                        <li><em><i class="fa fa-remove"></i></em>manually control devices</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">settings</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>manual-mode</h2>

                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>control device manually</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>take images manually</li>
                                        <li><em><i class="fa fa-remove"></i></em>sensors are off</li>
                                        <li><em><i class="fa fa-remove"></i></em>automated security</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">settings</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="cd-popular">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Manual-mode</h2>

                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                           <li><em><i class="fa fa-check-circle"></i></em>control device manually</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>take images manually</li>
                                        <li><em><i class="fa fa-remove"></i></em>sensors are off</li>
                                        <li><em><i class="fa fa-remove"></i></em>automated security</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">settings</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Auto-mode</h2>


                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                         <li><em><i class="fa fa-check-circle"></i></em>sensors on</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>saving history</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>automated security</li>
                                        <li><em><i class="fa fa-remove"></i></em>manually control devices</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">settings</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>


                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>
                </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->

        </section>

        <!-- Sections -->
        <section id="business" class="portfolio sections">
            <div class="container">
                <div class="head_title text-center">
                    <h1 style="color:tomato;">The Secure I.O.T  Platform</h1>
          <p>Securely connect and manage the internet connected devices,innovative I.O.T solutions from techautomation<b style="color:red;">&#8482</b></p>
                </div>

                <div class="row">
                    <div class="portfolio-wrapper text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-book"></i>
                                <div class="separator"></div>
                                <h4>Explore More!</h4>
                                <p> How it works?Here is the introduction of all the devices connected in your home.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-bug"></i>
                                <div class="separator"></div>
                                <h4>Online Devices</h4>
                                <p>This gives the breif status of your online devices connected in your home.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-gears"></i>
                                <div class="separator"></div>
                                <h4>Schematics</h4>
                                <p>This consists of circut digram and all hardware details of your devices</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-folder-open"></i>
                                <div class="separator"></div>
                                <h4>History</h4>
                                <p>This will show you the history of the connected devices.</p>
                            </div>
                        </div>

                    </div>
                </div>


        </section>


        <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li>iot link1</li>
                                        <li>iot link2</li>
                                        <li>iot link3</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Legal</h5>
                                    <ul>
                                        <li>PRIVACY & COOKIES</li>
                                        <li>TERMS OF USE</li>
                                        <li>TRADEMARKS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Information</h5>
                                    <ul>
                                        <li>SUPPORT</li>
                                        <li>DEVELOPERS</li>
                                        <li>CONTACT</li>

                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="assets/images/logo.png" alt="logo" />
                            </div>
                        </div>


                </div>
            </div>
        </footer>


		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
<script>
/*Here we are passing the temperature data recieved above to the data variable of morris graph which will automatically generate graph*/
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['temp'],
 labels:['temp'],
 hideHover:'auto',
 stacked:true
});
</script>
<script>
/*Here we are passing the humadity data recieved above to the data variable of morris graph which will automatically genearate graph*/
Morris.Line({
 element : 'chart1',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['humidity'],
 labels:['humidity'],
 hideHover:'auto',
 stacked:true
});
 function refresh() {
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              
            }
        };
        xmlhttp.open("GET", "php/onload/onload.php", true);
        xmlhttp.send();
}

function auto(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
		{alert('Your home is configured in auto mode')
		}	       
 	 };
        xmlhttp.open("GET", "php/auto/auto.php", true);
        xmlhttp.send();
}

function manual(){
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(' Your home is configured in manual mode');
            }
        };
        xmlhttp.open("GET", "php/manual/manual.php", true);
        xmlhttp.send();
}


</script>
