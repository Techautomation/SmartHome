  <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel=" icon " type="image/png" href="assets/images/icon123.png">
    <title>Smart Home With I.O.T</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

    <!--Theme custom css -->
    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <style>
  .onoffswitch {
      position: relative; width: 99px;
      -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
  }
  .onoffswitch-checkbox {
      display: none;
  }
  .onoffswitch-label {
      display: block; overflow: hidden; cursor: pointer;
      border: 2px solid #999999; border-radius: 19px;
  }
  .onoffswitch-inner {
      display: block; width: 200%; margin-left: -100%;
      transition: margin 0.3s ease-in 0s;
  }
  .onoffswitch-inner:before, .onoffswitch-inner:after {
      display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
      font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
      box-sizing: border-box;
  }
  .onoffswitch-inner:before {
      content: "ON";
      padding-left: 18px;
      background-color: #59230E; color: #FFC629;
  }
  .onoffswitch-inner:after {
      content: "OFF";
      padding-right: 18px;
      background-color: #EEEEEE; color: #999999;
      text-align: right;
  }
  .onoffswitch-switch {
      display: block; width: 35px; margin: 0.5px;
      background: #18C42F;
      position: absolute; top: 0; bottom: 0;
      right: 59px;
      border: 2px solid #999999; border-radius: 19px;
      transition: all 0.3s ease-in 0s;
  }
  .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
      margin-left: 0;
  }
  .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
      right: 0px;
  }


 /*--on off switch fan--*/
.onoffswitch_fan {
    position: relative; width: 99px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch_fan-checkbox {
    display: none;
}
.onoffswitch_fan-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_fan-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_fan-inner:before, .onoffswitch_fan-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_fan-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_fan-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_fan-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_fan-checkbox:checked + .onoffswitch_fan-label .onoffswitch_fan-inner {
    margin-left: 0;
}
.onoffswitch_fan-checkbox:checked + .onoffswitch_fan-label .onoffswitch_fan-switch {
    right: 0px;
}


/*on off switch for bulb*/

.onoffswitch_bulb {
    position: relative; width: 99px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch_bulb-checkbox {
    display: none;
}
.onoffswitch_bulb-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_bulb-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_bulb-inner:before, .onoffswitch_bulb-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_bulb-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_bulb-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_bulb-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_bulb-checkbox:checked + .onoffswitch_bulb-label .onoffswitch_bulb-inner {
    margin-left: 0;
}
.onoffswitch_bulb-checkbox:checked + .onoffswitch_bulb-label .onoffswitch_bulb-switch {
    right: 0px;
}



/*on off switch for msensor*/

.onoffswitch_msensor {
    position: relative; width: 99px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch_msensor-checkbox {
    display: none;
}
.onoffswitch_msensor-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_msensor-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_msensor-inner:before, .onoffswitch_msensor-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_msensor-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_msensor-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_msensor-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_msensor-checkbox:checked + .onoffswitch_msensor-label .onoffswitch_msensor-inner {
    margin-left: 0;
}
.onoffswitch_msensor-checkbox:checked + .onoffswitch_msensor-label .onoffswitch_msensor-switch {
    right: 0px;
}

/*on off switch for light*/

.onoffswitch_light {
    position: relative; width: 99px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch_light-checkbox {
    display: none;
}
.onoffswitch_light-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_light-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_light-inner:before, .onoffswitch_light-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_light-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_light-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_light-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_light-checkbox:checked + .onoffswitch_light-label .onoffswitch_light-inner {
    margin-left: 0;
}
.onoffswitch_light-checkbox:checked + .onoffswitch_light-label .onoffswitch_light-switch {
    right: 0px;
}

/*on of switch for camera*/
.onoffswitch_cam {
    position: relative; width: 99px;
    /* -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none; */
}
.onoffswitch_cam-checkbox {
    display: none;
}
.onoffswitch_cam-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_cam-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_cam-inner:before, .onoffswitch_cam-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_cam-inner:before {
    content: "O.K";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_cam-inner:after {
    content: "~Img";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_cam-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_cam-checkbox:checked + .onoffswitch_cam-label .onoffswitch_cam-inner {
    margin-left: 0;
}
.onoffswitch_cam-checkbox:checked + .onoffswitch_cam-label .onoffswitch_cam-switch {
    right: 0px;
}

/*on off switch for dht11*/


.onoffswitch_dht11 {
    position: relative; width: 99px;
    /* -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none; */
}
.onoffswitch_dht11-checkbox {
    display: none;
}
.onoffswitch_dht11-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_dht11-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_dht11-inner:before, .onoffswitch_dht11-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_dht11-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_dht11-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_dht11-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_dht11-checkbox:checked + .onoffswitch_dht11-label .onoffswitch_dht11-inner {
    margin-left: 0;
}
.onoffswitch_dht11-checkbox:checked + .onoffswitch_dht11-label .onoffswitch_dht11-switch {
    right: 0px;
}




/*on off switch for passiveir*/


.onoffswitch_passiveir {
    position: relative; width: 99px;
    /* -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none; */
}
.onoffswitch_passiveir-checkbox {
    display: none;
}
.onoffswitch_passiveir-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_passiveir-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_passiveir-inner:before, .onoffswitch_passiveir-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_passiveir-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_passiveir-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_passiveir-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_passiveir-checkbox:checked + .onoffswitch_passiveir-label .onoffswitch_passiveir-inner {
    margin-left: 0;
}
.onoffswitch_passiveir-checkbox:checked + .onoffswitch_passiveir-label .onoffswitch_passiveir-switch {
    right: 0px;
}






.onoffswitch_pump {
    position: relative; width: 99px;
    /* -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none; */
}
.onoffswitch_pump-checkbox {
    display: none;
}
.onoffswitch_pump-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 19px;
}
.onoffswitch_pump-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch_pump-inner:before, .onoffswitch_pump-inner:after {
    display: block; float: left; width: 50%; height: 36px; padding: 0; line-height: 36px;
    font-size: 19px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch_pump-inner:before {
    content: "ON";
    padding-left: 18px;
    background-color: #59230E; color: #FFC629;
}
.onoffswitch_pump-inner:after {
    content: "OFF";
    padding-right: 18px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch_pump-switch {
    display: block; width: 35px; margin: 0.5px;
    background: #18C42F;
    position: absolute; top: 0; bottom: 0;
    right: 59px;
    border: 2px solid #999999; border-radius: 19px;
    transition: all 0.3s ease-in 0s;
}
.onoffswitch_pump-checkbox:checked + .onoffswitch_pump-label .onoffswitch_pump-inner {
    margin-left: 0;
}
.onoffswitch_pump-checkbox:checked + .onoffswitch_pump-label .onoffswitch_pump-switch {
    right: 0px;
}

  .button {
      background-color:orange;
      border: none;
      color: white;
      padding: 13px 50px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      width: 203px;
  }

  .button3 {
      background-color: #4CAF50; /* Green */
      border: 2px;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      text-shadow: 3px 2px red;
  }
  .checkbox {
      background-color:pink; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      text-shadow: 3px 2px red;
  }
  body {
      margin: 0;
      /* The image used */
      /* background-image: url("assets/images/smarthome.png"); */

      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
  .button_border {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
  }


  .button_border_background {
          background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    width: 203px;
    height: 56px;
  }

  .button_border_background:hover {
    background-color: #4CAF50;
    color: white;
}

.ripple {
    position: relative;
    background-color: #18c42f;
    border: none;
    font-size: 23px;
    color: darkmagenta;
    padding: 20px;
    width: 150px;
    height:50px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}
.innerbox{
	 width:250px; /* or whatever width you want. */
   display: inline-block;
}
.ripple:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.ripple:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
  </style>
  <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script>
    /*This is the main function which will call all the other functions*/
    function main(){
      fanupdate();
      bulbupdate();
      pumpupdate();
      dhtupdate();
      passiveirupdate();
      msensorupdate();
      lightupdate();
    }
  /*This function is called on button click and will insert the values into the fan table of smarthome database*/
function callfan()
{
  var x=document.getElementById('fan').checked;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      location.reload();

    }
  }
  xhttp.open("GET", "/php/fan/fancontrol.php?q="+x, true);
  xhttp.send();

}
/*This function is called on button click and will insert the vslues into the msensor table of smarthome database */
 
function callmsensor()
{
  var x=document.getElementById('msensor').checked;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     location.reload();

    }
  }
  xhttp.open("GET", "/php/msensor/msensorcontrol.php?q="+x, true);
  xhttp.send();

}


 /*This function is called on button click and will insert the values into the light table of smarthome database*/
function calllight()
{
  var x=document.getElementById('light').checked;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      location.reload();

    }
  }
  xhttp.open("GET", "/php/light/lightcontrol.php?q="+x, true);
  xhttp.send();

}


 /*This function is called on button click and will insert the values into the bulb table of smarthome database*/
function callbulb()
{
var x=document.getElementById('bulb').checked;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   location.reload();

  }
}
xhttp.open("GET", "/php/bulb/bulbcontrol.php?q=" +x, true);
xhttp.send();

}
 
  /*This function is called on button click and will insert the values into the camera table of smarthome database*/
function callcamera()
{
var x=document.getElementById('camera').checked;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
     var d = new Date()
   alert("Image saved as:"+d+".jpg");
   location.reload();

  }
}
xhttp.open("GET", "/php/camera/cameracontrol.php?q=" +x, true);
xhttp.send();

}
  /*This function is called on button click and will insert the values into the dht table of smarthome database*/
function calldht()
{
var x=document.getElementById('dht11').checked;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    location.reload();

  }
}
xhttp.open("GET", "/php/dht/dhtcontrol.php?q=" +x, true);
xhttp.send();

}

 /*This function is called on button click and will insert the values into the pir table of smarthome database*/
function callpassiveir()
{
var x=document.getElementById('passiveir').checked;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200){
      location.reload();
  }
}
xhttp.open("GET", "/php/pir/pircontrol.php?q=" +x, true);
xhttp.send();

}
 
/*This function is called on button click and will insert the values into the pump table of smarthome database*/
function callpump()
{
var x=document.getElementById('pump').checked;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   location.reload();

  }
}
xhttp.open("GET", "/php/pump/pumpcontrol.php?q=" +x, true);
xhttp.send();

}

/*This function gets the data from the pir table and change buttons accordingly*/
function passiveirupdate(){
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#passiveir").attr("checked","checked");
      document.getElementById("passiveir1").innerHTML ="online";
      document.getElementById('pirImage').src="assets/images/piron.gif"
       });
     }

    }
  }
  xhttp.open("GET", "/php/pir/pirupdate.php", true);
  xhttp.send();

}

/*This function gets the data from the light table and change buttons accordingly*/
function lightupdate(){
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#light").attr("checked","checked");
      document.getElementById("light1").innerHTML ="online";
       document.getElementById("lightImage").src ="assets/images/bulbongarden.gif";
       });
     }

    }
  }
  xhttp.open("GET", "/php/light/lightupdate.php", true);
  xhttp.send();

}

//This function gets the data from the msensor table and change buttons accordingly*/
function msensorupdate(){
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#msensor").attr("checked","checked");
      document.getElementById("msensor1").innerHTML ="online";
      document.getElementById('msensorImage').src="assets/images/msensoron.gif"
       });
     }

    }
  }
  xhttp.open("GET", "/php/msensor/msensorupdate.php", true);
  xhttp.send();

}

/*This function gets the data from the fan table and change buttons accordingly*/
function fanupdate(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#fan").attr("checked", "checked");
      document.getElementById("fan1").innerHTML ="online";
        document.getElementById("fanImage").src ="assets/images/fanon.gif";

       });
     }

    }
  }
  xhttp.open("GET", "/php/fan/fanupdate.php", true);
  xhttp.send();

}


/*This function gets the data from the bulb table and change buttons accordingly*/
  	function bulbupdate(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#bulb").attr("checked", "checked");
      document.getElementById("bulb1").innerHTML ="online";
      document.getElementById('bulbImage').src="assets/images/bulbon.jpeg"
       });
     }

    }
  }
  xhttp.open("GET", "/php/bulb/bulbupdate.php", true);
  xhttp.send();
}


/*This function gets the data from the pump table and change buttons accordingly*/
        function pumpupdate(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#pump").attr("checked", "checked");
      document.getElementById("pump1").innerHTML ="online";
      document.getElementById('pumpImage').src="assets/images/pumpon.gif"
       });
     }

    }
  }
  xhttp.open("GET", "/php/pump/pumpupdate.php", true);
  xhttp.send();
}

/*This function gets the data from the dht table and change buttons accordingly*/
  	function dhtupdate(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     x= this.responseText;
     if(x=="true"){
        $(document).ready(function(){
      $("#dht11").attr("checked", "checked");
      document.getElementById("dht111").innerHTML ="online";
      document.getElementById('dhtImage').src="assets/images/dhton.gif"
       });
     }

    }
  }
  xhttp.open("GET", "/php/dht/dhtupdate.php", true);
  xhttp.send();

}
</script>
</head><body onload="main()">
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
                            <a href="#"><i class="fa fa-phone"></i>+91 9755186485</a>
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
                    <li class="active"><a href="devices.php">Devices</a></li>

                    <li><a href="history.php">history</a></li>
                    <li><a href="support.php">Support</a></li>
                    <li class="login"><a href="login.html">Sign In</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <h1 style="text-align: center; font-size: 40px; padding-top:20px; color:#002d21b8; background-color: darkkhaki; letter-spacing: 3px;"><b>Devices</b></h1>
    <div class="container">
    <table border="0">
    <tr><th>&nbsp;</th><th>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Action</th></tr>
    <div height="50% width="50%>
    <tr><td><div class="innerbox"><img src="assets/images/camera.jpg"></div></td><td><div class="innerbox">
<button class="button_border button_border_background">Camera</button>
</td><td><button class="ripple" id="camera1">offline</button></td></div><td>  <div class="onoffswitch_cam">
      <input type="checkbox" name="camera" class="onoffswitch_cam-checkbox" id="camera" onclick
      ="callcamera()" >
      <label class="onoffswitch_cam-label" for="camera">
          <span class="onoffswitch_cam-inner"></span>
          <span class="onoffswitch_cam-switch"></span>
      </label>
  </div>
</td></tr>
</div>
<!--  new row-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/fanoff.jpeg"  id="fanImage"></div></td><td>
<button class="button_border button_border_background">FAN</button>
</td><td><button class="ripple" id="fan1">offline</button></td><td>  <div class="onoffswitch_fan">
      <input type="checkbox" name="fan" class="onoffswitch_fan-checkbox" id="fan" onclick="callfan()">
      <label class="onoffswitch_fan-label" for="fan">
          <span class="onoffswitch_fan-inner"></span>
          <span class="onoffswitch_fan-switch"></span>
      </label>
  </div>
</td></tr>
</div>
<!--  new row-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/bulboff.png" id="bulbImage"></div></td><td>
<button class="button_border button_border_background">BULB</button>
</td><td><button class="ripple" id="bulb1">offline</button></td><td>  <div class="onoffswitch_bulb">
      <input type="checkbox" name="bulb" class="onoffswitch_bulb-checkbox" id="bulb" onclick="callbulb()" >
      <label class="onoffswitch_bulb-label" for="bulb">
          <span class="onoffswitch_bulb-inner"></span>
          <span class="onoffswitch_bulb-switch"></span>
      </label>
  </div>
</td></tr>
</div>
<!--  new row3-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/bulboff.png" id="lightImage"></div></td><td>
<button class="button_border button_border_background">Garden Light</button>
</td><td><button class="ripple" id="light1">offline</button></td><td>  <div class="onoffswitch_light">
      <input type="checkbox" name="onoffswitch_light" class="onoffswitch_light-checkbox" id="light" onclick="calllight()" >
      <label class="onoffswitch_light-label" for="light">
          <span class="onoffswitch_light-inner"></span>
          <span class="onoffswitch_light-switch"></span>
      </label>
  </div>
</td></td></tr>
</div>
<!--  new row-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/pumpoff.jpeg" id="pumpImage"></div></td><td>
<button class="button_border button_border_background">PUMP</button>
</td><td><button class="ripple" id="pump1">offline</button></td><td>  <div class="onoffswitch_pump">
      <input type="checkbox" name="pump" class="onoffswitch_pump-checkbox" id="pump" onclick="callpump()" >
      <label class="onoffswitch_pump-label" for="pump">
          <span class="onoffswitch_pump-inner"></span>
          <span class="onoffswitch_pump-switch"></span>
      </label>
  </div>
</td></tr>
</div>
<!--  new row-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/dhtoff.jpeg" id="dhtImage"></div></td><td>
<button class="button_border button_border_background">Temprature Sensor</button>
</td><td><button class="ripple" id="dht111">offline</button></td><td>  <div class="onoffswitch_dht11">
      <input type="checkbox" name="onoffswitch_dht11" class="onoffswitch_dht11-checkbox" id="dht11" onclick="calldht()" >
      <label class="onoffswitch_dht11-label" for="dht11">
          <span class="onoffswitch_dht11-inner"></span>
          <span class="onoffswitch_dht11-switch"></span>
      </label>
  </div>
</td></tr>
</div>
<!--  new row1-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/piroff.jpeg" id="pirImage"></div></td><td>
<button class="button_border button_border_background">P.I.R Sensor</button>
</td><td><button class="ripple" id="passiveir1">offline</button></td><td>  <div class="onoffswitch_passiveir">
      <input type="checkbox" name="onoffswitch_passiveir" class="onoffswitch_passiveir-checkbox" id="passiveir" onclick="callpassiveir()" >
      <label class="onoffswitch_passiveir-label" for="passiveir">
          <span class="onoffswitch_passiveir-inner"></span>
          <span class="onoffswitch_passiveir-switch"></span>
      </label>
  </div>
</td></tr>
</div>
<!--  new row2-->
<div height="50%" width="50%">
<tr><td><div class="innerbox"><img src="assets/images/msensoroff.png" id="msensorImage"></div></td><td>
<button class="button_border button_border_background">Moisture Sensor</button>
</td><td><button class="ripple" id="msensor1">offline</button></td><td>  <div class="onoffswitch_msensor">
      <input type="checkbox" name="onoffswitch_msensor" class="onoffswitch_msensor-checkbox" id="msensor" onclick="callmsensor()" >
      <label class="onoffswitch_msensor-label" for="msensor">
          <span class="onoffswitch_msensor-inner"></span>
          <span class="onoffswitch_msensor-switch"></span>
      </label>
  </div>
</td></tr>
</div>
  </table>
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
  </div>
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
  </body></html>
