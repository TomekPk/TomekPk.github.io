<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tomasz Parfieniuk FRONT END DEVELOPER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Tomasz Parfieniuk">

  <!-- STYLESHEET INFORMATION: If some properties have been defined for the same selector (element)
  in different style sheets, the value from the last read style sheet will be used. -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <style>


  </style>

<script>
// hide start_information
$(document).ready(function() {
  $(".start_information").click(function() {
    $(this).hide('fast');
    /* Act on the event */
  });
});


</script>


</head>
<body>
<?php include('formularz.php'); ?>



  <!-- //Show start_information
  <div class="start_information">
    <p style="text-align:center; font-size:5vw;">
      Welcome on my site. Please Click to hide this window.
    </p>
  </div>
-->

  <nav class="navbar navbar-inverse navbar-static-top navbar-zero-bottom" role="navigation">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class = "navbar-brand" href = "index.html">LuxTrans</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <!-- BUTTONS -->
                <li><a href="ofirmie.html">O FIRMIE</a></li>
                <li><a href="flota.html">FLOTA</a></li>
                <li><a href="$.html">GALERIA</a></li>
                <li class="active"><a href="kontakt.php">KONTAKT</a></li>
              </ul>

          </div>
      </div>
  </nav>

<!-- USE GRID instead of table-cell -->

  <div class="parallax-3">

    <div class="container-fluid">

      <div class="row row-partnerzy-bottom">
        <div align="center" class="col-xs-6 col-sm-3" style="">
          <a href="#"><img class="partnerzy" src="images/partnerzy/partnerzy_01.gif"></a>
        </div>
        <div align="center" class="col-xs-6 col-sm-3">
          <a href="#"><img class="partnerzy" src="images/partnerzy/partnerzy_02.gif"></a>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div align="center" class="col-xs-6 col-sm-3">
          <a href="#"><img class="partnerzy" src="images/partnerzy/partnerzy_03.gif"></a>
        </div>
        <div align="center" class="col-xs-6 col-sm-3">
          <a href="#"><img class="partnerzy" src="images/partnerzy/partnerzy_04.gif"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="content4">
  <div style="  background-color: rgba(0, 0, 0, 0.5); width:100%; padding-left: 10%;
  padding-right: 10%;">


      <div class="information_div">

        <div class="information_center">
          <span class="information_text">
           KONTAKT
         </span>
        </div>

      </div>


      <div class="content_txt">

        <!-- Deklaracje php -->

        <!-- htmlspecialchars () function avoid exploits -->
        <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        	<div class="form-group"> <!--  form-groupIts only purpose is to provide margin-bottom-->
        		<label for="name" class="col-sm-2 control-label">Imię</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" id="name" name="name" placeholder="Imię i Nazwisko"
                value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
                <?php echo "<p class='form_alerts_red'>$errName</p>";?>
            </div>
        	</div>

        	<div class="form-group">
        		<label for="email" class="col-sm-2 control-label">Twój Email</label>
        		<div class="col-sm-10">
        			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com"
                value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
              <?php echo "<p class='form_alerts_red'>$errEmail</p>";?>
            </div>
        	</div>

        	<div class="form-group">
        		<label for="message" class="col-sm-2 control-label">Wiadomość</label>
        		<div class="col-sm-10">
        			<textarea class="form-control" rows="10" name="message"><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
              <?php echo "<p class='form_alerts_red'>$errMessage</p>";?>
            </div>
        	</div>

        	<div class="form-group">
        		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" id="human" name="human" placeholder="Twoja odpowiedź">
              <?php echo "<p class='form_alerts_red'>$errHuman</p>";?>
        		</div>
        	</div>

          <div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<!-- Will be used to display an alert to the user-->

              <?php echo $result; ?>
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<input id="submit" name="submit" type="submit" value="Wyślij" class="btn btn-primary">
        		</div>
        	</div>



        </form>


      </div>
  </div>
  </div>





    <div class="parallax-3">

    </div>

  <div class="footer_up">
    <div class="container">
      <div class="row company_info">
        <div class="col-xs-0 col-md-2">
        </div>
        <div class="col-xs-12 col-md-4 ">
          <div class="column_cn">
          <div class="company_name">
            <div>
              LuxTrans
            </div>
          </div>
          <div class="company_address">
            <hr class="company_hr" />
            <p>
              <span class="glyphicon glyphicon-circle-arrow-right"></span> LuxTrans Sp. z o.o.
            </p>
            <p>
              <span class="glyphicon glyphicon-circle-arrow-right"></span> ul.Ulica 5/11, 15-100 Białystok
            </p>
            <p>
              <span class="glyphicon glyphicon-circle-arrow-right"></span> tel. 500 500 500
            </p>
          </div>
        </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="company_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d76608.78054534887!2d23.086026124945494!3d53.12770770645892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ffc048f41971d%3A0x72317dcc8bf07b2c!2s15-001+Bia%C5%82ystok!5e0!3m2!1spl!2spl!4v1509104344218" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="footer_down footer-font">
    <span style="margin-top:100px;">Copyright © Tomasz Parfieniuk</span>
  </div>



  </div>

</body>
</html>
