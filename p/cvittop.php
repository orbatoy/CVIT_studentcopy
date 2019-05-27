<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <link href="favicon.ico" rel="shortcut icon" />

  <title>TAFE TBS- Technology & Business Services</title>
  
  <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script|Open+Sans+Condensed:300" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,600,600italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,700,900' rel='stylesheet' type='text/css'>
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/app.css">
<link rel="stylesheet" href="stylesheets/custom.css">

  <script src="javascripts/jquery.js"></script>
  <script src="plugins/jquery.cycle2.all.js"></script>

  <script src="javascripts/modernizr.foundation.js"></script>
  <script src="plugins/jquery.backstretch.min.js"></script>

       <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script src="plugins/contact.js"></script>
    <script src="javascripts/cvit.js"></script>      
<script type="text/javascript">
 
$(document).ready(function(){
 
 $("#header_home").backstretch([
"images/section_header_1.jpg"
, "images/section_header_2.jpg"
, "images/section_header_3.jpg"
, "images/section_header_4.jpg"
, "images/section_header_5.jpg"
], {duration: 4000, fade: 750});

$('#next').click(function(x) {
    x.preventDefault();
    $('#header_home').data('backstretch').next();
});
$('#prev').click(function(x) {
    x.preventDefault();
    $('#header_home').data('backstretch').prev();
});
 
});
</script>
</head>
<body>


<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="279795538818-36i0pnmqrgut4fuqspbf0cvtpjhvfs0f.apps.googleusercontent.com">
<script type="text/javascript">
  /*
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
}
*/
/*
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    }
	
	}
  */
  
</script>

<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
<!--::::::::::::::: START Header top :::::::::::::::::::::::::-->
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
<section class="header_top">
  <div id="topnav">
    <div class="row">
      <div id="logo" class="three columns"><a href="/">CVIT</a></div>
      <div id="buttonnav-col" class="four columns offset-by-five">
        <div id="buttonnav">
          <ul>
            <?php if (isset($_SESSION['cu'])){ ?>
            <li id="nav-top3"><a class="panel_search" href="javascript:void(0)">Search</a></li>
            <li id="nav-top2"><a href="profile.php">Profile</a></li>
            <li id="nav-top1"><a href="logout.php">Log out</a></li> 
                <?php }else{ ?>
             <li id="nav-top3"><a class="panel_search" href="javascript:void(0)">Search</a></li>
             <li id="nav-top2"><a class="panel_quote" href="javascript:void(0)">Quote</a></li>
            <li id="nav-top1"><a href="javascript:void(0)" data-reveal-id="loginModal">Sign In</a></li>            
             <?php } ?>
            <!--<li id="nav-top3"><a href="javascript:void(0)" onclick="signOut();" >Sign out</a></li> -->
          </ul>
          <div class="clear"></div>
          <div class="panel_quote_frm">
            <h5 class="white">Custom training quote</h5>
            <form class="custom" action="mail-it.php" method="post" autocomplete="on">
              <div class="row collapse">
                <div class="twelve mobile-four columns">
                  <input type="text" placeholder="Name" class="twelve" name="name" required="required" autocomplete="name"  />
                  <input name="surname" id="111fr" type="hidden"  placeholder="surname" value="cvit" style="display:none;"  />
                </div>
              </div>
              <div class="row collapse">
                <div class="twelve mobile-four columns">
                  <input type="email" placeholder="Email" class="twelve" name="email" autocomplete="email"  />
                </div>
              </div>
              <div class="row collapse">
                <div class="twelve mobile-four columns">
                  <input type="text" placeholder="Business" class="twelve" name="business" autocomplete="organization" />
                </div>
              </div>
              <div class="row collapse">
                <div class="six mobile-two columns pr5">
                  <input type="text" placeholder="Phone" class="twelve" name="phone" autocomplete="tel"/>
                </div>
                <div class="six mobile-two columns pl5">
                  <input type="text" placeholder="Postcode" class="twelve" name="postcode" autocomplete="postal-code" />
                </div>
              </div>
              <div class="row collapse">
                <div class="twelve mobile-four columns pb10">
                  <label for="quote_signup"><input type="checkbox" CHECKED id="quote_signup" name="quote_signup"> Subscribe to newsletter</label>
                </div>
              </div>
              <div class="row collapse">
                <div class="six mobile-two columns text-center">
                  <a href="javascript:void(0)" class="button panel_quote">Cancel</a>
                </div>
                <div class="six mobile-two columns text-center">
                  <input type="submit" value="Send" class="button"  onclick="document.getElementById('111fr').value='';">
                </div>
              </div><input type="hidden" style="display:none;" id="quotesender" name="sender" value="Quote - page header">
            </form>
  
          </div>
          <!-- END PANEL QUOTE -->
          <div class="panel_search_frm">
            <div class="row collapse">
              <div class="two mobile-one columns">
                <span class="prefix"> <i class="icon-search"></i> </span>
              </div>
              <div class="ten mobile-three columns"><form method="post" action="search.php">
                <input type="text" class="twelve" name="search" /></form>
              </div>
            </div>
          </div>
          <!-- END PANEL SEARCH -->
        </div>
      </div>
    </div>
  </div>
<!-- START NAV -->
  <div class="row">
    <div class="eight columns">
      <div class="container">
        <h5><a class="toggleMenu" href="#"><i class="icon-reorder"></i> Menu</a></h5>
        <ul class="nav">
          <li  class="test">
            <a href="index.php">Home</a>
          </li>
         
          <li>
            <a href="index.php#panels">Short Courses</a>
          </li>
           <li>
            <a href="course.php">Current Courses</a>
            <ul>
                <?php
                   $sql = 'SELECT `code`, `shortname` FROM `course`where `active` = 1  ORDER BY `course`.`code` ASC';
                   //echo 'sql ...'.$sql .'<hr>';
                   $rs = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($rs) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($rs)) {
                            echo '<li><a href="course.php?'.$row["code"].'">'.$row["shortname"].'</a></li>';
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </ul>
          </li>
          <li>
            <a href="#">Projects</a>
            <ul>
             <li><a href="welcome.php"><i class="icon-eye-open"></i> Welcome to IT</a></li>
             <li><a href="tour.php"><i class="icon-map-marker"></i> Campus Tour</a></li>
              <li><a href="lanparties.php"><i class="icon-fighter-jet"></i> LAN Parties</a></li>
              <li><a href="/students/index.php" target="_blank"><i class="icon-pushpin"></i> Web Projects</a></li>
              <li><a href="playingwithcoding.php"><i class="icon-pushpin"></i> Code this</a></li>
              <li><a href="https://www.facebook.com/GraftonIT" target="_blank"><i class="icon-facebook-sign"></i> IT Facebook</a></li>

              <li><a href=":s://www.facebook.com/cosplaync" target="_blank"><i class="icon-facebook-sign"></i> <i class="icon-fire"></i> Cosplay NC</a></li>
              <li><a href="https://www.facebook.com/colourusnctafe" target="_blank"><i class="icon-facebook-sign"></i> <i class="icon-tint"></i> Colour Us </a></li>
            
             <!-- <li>
                <a href="#">Web <i class="icon-caret-right"></i> </a>
                <ul>
                  <li><a href="/auble/"> Auble</a></li>
                  <li><a href="/hosting/"> Hosting</a></li>
                  <li><a href="/vrtour/"> Virtual tour</a></li>
                </ul>
              </li>  -->
            </ul>
          </li>
          <!-- <li><a href="skillscheck.php"> Skills Check</a></li>
             -->
          <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

    </div>
    <div class="four mobile-four text-center columns">
      <p class="hours">M-F 9am - 3pm <a href="tel:0266411711">(02) 6641 1711</a></p>
    </div>
  </div>
<!-- END NAV -->
</section>