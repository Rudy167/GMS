
<?php
session_start();








?>
<html>
<head>
  <title>page 2</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    <style type="text/css">
      html,
      body {
        height: 100%;
      }
      html {
        display: table;
        margin: auto;
      }
      display: table-cell;
      body {
        vertical-align: middle;
      }
      .margin {
        margin: 0 !important;
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="Javascript" src="jquery.js"></script>
    <script type="text/JavaScript" src='state.js'></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <div  style ="background:url('2.jpg'); background-repeat: no-repeat; background-position: center;width: 1080px; background-size:cover;">
    <body >


      <h3>New Customer</h3>



      <form action="reg3.php" method="post">

        <div class="form-group">
          <label for="height">height in cm</label>
          <input type="number" class="form-control" name="height" id="height">
        </div>
        <div class="form-group">
          <label for="weight">weight in kgs</label>
          <input type="number" class="form-control" name="weight" id="weight">
        </div>

        <div class="form-group">
          <label for="phone">phone</label>
          <input type="number" class="form-control" name="phone" id="phone">

          <div class="form-group">
          <label for="email">email</label>
          <input type="email"class="form-control" name="email" id="email">


          <div class="form-group">
            <label for="house number">house number</label>
            <input type="number" class="form-control" name="houseno" id="house number">
          </div>


          <label for="street">street</label>
          <input type="text" class="form-control" name="street" id="street">
        </div>


        <div  class="form-group" style="width: cover;padding-left: 5px;">
          <p <h5><font style='font: 1em/1.3em Tahoma,Geneva,sans-serif;'>
            <b>Enter State</b><div class="form-group"></font></h5></p>
            <div id="selection">
              <select id="listBox" onchange='selct_district(this.value)' name="state"></select>
              <select id='secondlist' name="city"></select>
            </div>
            <div id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;">
              <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="http://www.hscripts.com">&copy;h</a>
            </div>
          </div>

          <div class="form-group">
            <label for="pincode">Pincode</label>
            <input type="number" class="form-control" name="pincode" id="pincode" required/>
          </div>
 <div class="form-group">
            <label for="join">join date</label>
            <input type="date" class="form-control" name="join_date" id="join" required/>
          </div>



          <button type="submit" class="btn btn-info">Submit</button>
        </form>

      </div>
      <!-- Right side div -->


    </div>



</div>
  </body>

  </html>