
<?php
/*Here we are making a connection to the database */
$conn=mysqli_connect('localhost','hello','','smarthome');
global $fromdate,$newfromdate,$todate,$newtodate;
/*Get the values of date and arrange according to the mysql date format*/
if(isset($_POST['fromdate'])){
 $fromdate=$_POST['fromdate'];
$orderdate = explode('/', $fromdate);
$fmonth = $orderdate[0];
$fday   = $orderdate[1];
$fyear  = $orderdate[2];
$newfromdate=$fyear.'-'.$fmonth.'-'.$fday;
}
/*Get the values of date and arranfe according to the mysql date format */
if(isset($_POST['todate'])){
$todate=$_POST['todate'];
$orderdate = explode('/', $todate);
$tmonth = $orderdate[0];
$tday   = $orderdate[1]+1;
$tyear  = $orderdate[2];
$newtodate=$tyear.'-'.$tmonth.'-'.$tday;
}
/*Checks if date is selected then the values will be within the selected dates otherwise all the values will be given */
if($fromdate && $todate){
$fan="select * from fan  where  date  between '$newfromdate' and '$newtodate' order by date desc";
$fanresult = mysqli_query($conn, $fan);
}
else{
  $fan="select * from fan order by date desc ";
$fanresult = mysqli_query($conn, $fan);
  }

$cam="select * from camera order by ts desc ";
$cameraresult = mysqli_query($conn, $cam);



$bulb="select * from bulb order by date desc ";
$bulbresult = mysqli_query($conn, $bulb);

$pir="select * from pir order by date desc ";
$pirresult = mysqli_query($conn, $pir);


$dht="select * from dht order by date desc ";
$dhtresult = mysqli_query($conn, $dht);


$pump="select * from pump order by date desc ";
$pumpresult = mysqli_query($conn, $pump);


$msensor="select * from msensor order by date desc ";
$msensorresult = mysqli_query($conn, $msensor);


$light="select * from light order by date desc ";
$lightresult = mysqli_query($conn, $light);


?>
 
<!DOCTYPE html>
<html>
<head>
	<title>History</title>
	<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel=" icon " type="image/png" href="assets/images/icon123.png">
  <title>Smart Home With I.O.T</title>
  <meta name="description" content="">
  <meta name="vie
wport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.1/flexslider.css"/>
  <!--For Plugins external css-->
  <link rel="stylesheet" href="assets/css/plugins.css" />
  <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

  <!--Theme custom css -->
  <!--Theme custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!--Theme Responsive css-->
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
  	button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
  </style>
  <script>
  	$( function() {
    $( "#datepicker1" ).datepicker();
  } );

  	$( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
</head>
<body>

	   
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
                            <a href="#"><i class="<fa fa-phone"></i>+91 9755186485</a>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="devices.php">Devices</a></li>

                    <li class="active"><a href="history.php">history</a></li>
                    <li><a href="support.html">Support</a></li>
                    <li class="login"><a href="login.html">Sign In</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <h1 style="text-align: center; font-size: 40px; padding-top:20px; color:#002d21b8; background-color: darkkhaki; letter-spacing: 3px;"><b>History</b></h1>
 			<!--Code for history of devices-->
 			<div class="container">
 				<!--This row is for the date -->
 			<div class="row">
        <form action="#" method="post">
 				<table class="table">
 					<tr>
 						<thead>
 					<th scope="col">
 						<strong>From:</strong><input type="text" id="datepicker1" name="fromdate" required="">
 					</th>
 					<th scope="col">
 						<strong>To:</strong><input type="text" id="datepicker2" name="todate" required="">
 					</th>
                    <th scope="col">
          <input type="submit" value="Filter" style="background-color: #2fde44;color:white;width: 70px;height: 32px;">

          </th>
           					</thead>

 				</tr>
 				<tr>
 					
 				</tr>
 				</table>
        </form>
 				</div>

	<!--This row is of the camera-->
        <div class="row">
	
	<!--This div is of  the camera on  image-->
          <div class="col-sm-4">
          <img src="assets/images/camera.jpg" height="50%" width="50%">  
          </div>
	<!--This div is of the data -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 90%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Image</th>
                </thead>
              </tr>

              <?php 
	/*Here we are getting the data from the camera table and displaying it in form of tables.*/
               if (mysqli_num_rows($cameraresult) > 0) {
                 while($row= mysqli_fetch_assoc($cameraresult)) {
                  ?>
            
                  <tr>
		  <td><?php echo $row['ts'];?></td>
      <td><a href="<?php echo  'campic/'.$row['status'];?>"><?php echo  $row['status'];?><td>
		
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

            <!--This div is of the camera off image-->
              <div class="col-sm-4">
          <img src="assets/images/camera.jpg" height="50%" width="50%">  
          </div>
        </div>
<br />
<br />
<br />


 				<!--This row is of  the fan-->
 				<div class="row">
				<!--This div is of  the  fan on  image -->
 					<div class="col-sm-4">
 					<img src="assets/images/fanon.gif" height="50%" width="50%">	
 					</div>
 				<!-- This div is of the data    -->
 					<div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
 						<table>
 							<tr>
 								<thead>
 									<th scope="col">Date</th>
 									<th scope="col">Status</th>
 								</thead>
 							</tr>

 							<?php 
		/*Here we are getting the data from the fan table and displaying it in the form of tables*/
 							 if (mysqli_num_rows($fanresult) > 0) {
								 while($row= mysqli_fetch_assoc($fanresult)) {
								 	?>
            
								 	<tr>
								 <td><?php echo  $row['date'];?></td>
							     <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
							      
						<?php    }?>
						<?php }  ?>
           
 						</table>
             </div>
 					</div> 

 		<!--This div is of the fan off image  -->			
         			<div class="col-sm-4">
 					<img src="assets/images/fanoff.jpeg" height="50%" width="50%">	
 					</div>
 				</div>
<br />
<br />
<br />
        <!--This div is of the bulb -->
<div class="row">
	<!--This div is of the bulb on image -->
          <div class="col-sm-4">
          <img src="assets/images/bulbon.jpeg" height="50%" width="50%"> 
          </div>
    <!-- This div is of the data    -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </thead>
              </tr>

              <?php 
/*Here we are getting the data from the bulb table and showing the data in the form of the table*/
               if (mysqli_num_rows($bulbresult) > 0) {
                 while($row= mysqli_fetch_assoc($bulbresult)) {
                  ?>
            
                  <tr>
                 <td><?php echo  $row['date'];?></td>
                   <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

    <!-- This div is of the bulb off image  -->      
              <div class="col-sm-4">
          <img src="assets/images/bulboff.png" height="50%" width="50%"> 
          </div>
        </div>
<br />
<br />
<br />
 				<!--This div is the pir -->
  <div class="row">
	<!--This div is of the pir on image-->
          <div class="col-sm-4">
          <img src="assets/images/piron.gif" height="50%" width="50%"> 
          </div>
    <!--This div is of the data   -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </thead>
              </tr>

              <?php 
/*Here we are getting the data from the pir table and displaying it in the form of tables*/
               if (mysqli_num_rows($pirresult) > 0) {
                 while($row= mysqli_fetch_assoc($pirresult)) {
                  ?>
            
                  <tr>
                 <td><?php echo  $row['date'];?></td>
                   <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

    <!-- This div is of the pir off image  -->      
              <div class="col-sm-4">
          <img src="assets/images/piroff.jpeg" height="50%" width="50%"> 
          </div>
        </div>
<br />
<br />
<br />
			<!--This div is of the dht -->
        <div class="row">
          <div class="col-sm-4">
          <img src="assets/images/dhton.gif" height="180px" width="90px"> 
          </div>
    <!--This div is of the dht on image   -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </thead>
              </tr>

              <?php 
/*Here we are getting the data from the dht table and showing it in the form of tables*/
               if (mysqli_num_rows($dhtresult) > 0) {
                 while($row= mysqli_fetch_assoc($dhtresult)) {
                  ?>
            
                  <tr>
                 <td><?php echo  $row['date'];?></td>
                   <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

    <!-- This div is of the dht off image  -->      
              <div class="col-sm-4">
          <img src="assets/images/dhtoff.jpeg" height="180px" width="90px"> 
          </div>
        </div>
 				<!--This div is of the pump-->
<div class="row">
          <div class="col-sm-4">
          <img src="assets/images/pumpon.gif" height="50%" width="50%"> 
          </div>
    <!-- This div is of the data  -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </thead>
              </tr>
              <?php 
		/*Here we are getting the data from pump table and showing it in the form of tables*/
               if (mysqli_num_rows($pumpresult) > 0) {
                 while($row= mysqli_fetch_assoc($pumpresult)) {

                  ?>
            
                  <tr>
                 <td><?php echo  $row['date'];?></td>
                   <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

    <!-- This div is of the pump off image -->      
              <div class="col-sm-4">
          <img src="assets/images/pumpoff.jpeg" height="50%" width="50%"> 
          </div>
        </div>
<br />
<br />
<br />
				<!--This div is of the msensor-->
 				
<div class="row">
	<!--This div is of the msensor on image-->
          <div class="col-sm-4">
          <img src="assets/images/msensoron.gif" height="50%" width="50%"> 
          </div>
    <!-- This div is of the data   -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </thead>
              </tr>

              <?php 
/*Here we are getting the data from the msensor table and showing the data in the form of tables*/
               if (mysqli_num_rows($msensorresult) > 0) {
                 while($row= mysqli_fetch_assoc($msensorresult)) {
                  ?>
            
                  <tr>
                 <td><?php echo  $row['date'];?></td>
                   <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

    <!-- This div is of the msensor off image -->      
              <div class="col-sm-4">
          <img src="assets/images/msensoroff.png" height="50%" width="50%"> 
          </div>
        </div>
<br />
<br />
<br />
 				<!--This row is of the light -->
<div class="row">
	<!--This div is of the garden light on image-->
          <div class="col-sm-4">
          <img src="assets/images/bulbongarden.gif" height="50%" width="50%"> 
          </div>
    <!-- This div is of the data    -->
          <div class="col-sm-4">
            <div style="overflow-x:auto; height: 125px; width: 70%;">
            <table>
              <tr>
                <thead>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </thead>
              </tr>

              <?php 
/*Here we are getting the data from the light table and showing the data in the form of the tables*/
               if (mysqli_num_rows($lightresult) > 0) {
                 while($row= mysqli_fetch_assoc($lightresult)) {
                  ?>
            
                  <tr>
                 <td><?php echo  $row['date'];?></td>
                   <td><?php if($row['status']=='true'){
                    echo 'ON';
                   }
                   else{
                    echo 'OFF';
                   };?></td>
                    
            <?php    }?>
            <?php }  ?>
           
            </table>
             </div>
          </div> 

    <!-- This div is of the garden light off image  -->      
              <div class="col-sm-4">
          <img src="assets/images/bulboff.png" height="50%" width="50%"> 
          </div>
        </div>
<!--start of footer section-->
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
<!--End of footer section-->

</body>
</html>
