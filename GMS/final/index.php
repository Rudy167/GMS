
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>WELCOME</title>

  <!-- Bootstrap CSS -->    
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />    
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">	
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
        ======================================================= -->

      </head>

      <body>

        <!-- container section start -->
        <section id="container" class="">


          <header class="header dark-bg">
            <div class="toggle-nav">
              <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo">Welcome Admin</a>
            <!--logo end-->
            
<!--  search form start 
          
           <div class="nav search-row" id="top_menu">
                

                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                              
            </div> 
            search form end --> 

            <div class="top-nav notification-row">                
              <!-- notificatoin dropdown start-->
              <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#message">
                    <i class="icon-task-l"></i>
                      <span class="badge bg-important" id="badge"></span>
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                      <p class="blue">You have 6 pending letter</p>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Design PSD </div>
                          <div class="percent">90%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">90% Complete (success)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">
                            Project 1
                          </div>
                          <div class="percent">30%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                            <span class="sr-only">30% Complete (warning)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Digital Marketing</div>
                          <div class="percent">80%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Logo Designing</div>
                          <div class="percent">78%</div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                            <span class="sr-only">78% Complete (danger)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">50%</div>
                        </div>
                        <div class="progress progress-striped active">
                          <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                            <span class="sr-only">50% Complete</span>
                          </div>
                        </div>

                      </a>
                    </li>
                    <li class="external">
                      <a href="#">See All Tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->
                
              <!-- inbox notificatoin end -->
              <!-- alert notification start-->

              <!-- alert notification end-->
              <!-- user login dropdown start-->
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="http://localhost/log4/manager_login.php">
                 
                  <span class="username">logout</span>
                  <b class="caret"></b>
                </a>
                
                    <!-- notificatoin dropdown end-->
                  </div>
                </header>      
                <!--header end-->

                <!--sidebar start-->
                <aside>
                  <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">                
                      <li class="active">
                        <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                        </a>
                      </li>
				 <!-- <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Elements</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Elements</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                -->
                <li>                     
                  <a class="" href="index1.php">
                    <i class="icon_piechart"></i>
                    <span>Statistics</span>

                  </a>

                </li>
                <li>                     
                  <a class="" href="#calendar">
                    <i class="icon_table"></i>
                    <span>calendar</span>

                  </a>

                </li>

                <li class="sub-menu">
                  <a href="reg1.php" class="">
                    <i class="fa fa-cog"></i>
                    <span>add new member</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                    <li><a class="" href="basic_table.html" >Basic Table</a></li>
                  </ul>
                </li>

               
                 <!-- <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                -->

              </ul>
              
              <!-- sidebar menu end-->
            </div>
          </aside>
          <!--sidebar end-->

          <!--main content start-->
          <section id="main-content">
            <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                 <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                 <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
                </ol>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="info-box red-bg">
                <i class="fa fa-user" aria-hidden="true"></i>
                <div class="count" id="div2">6.674</div>
                <div class="title">customers</div>						
              </div><!--/.info-box-->			
            </div><!--/.col-->


            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <div class="info-box green-bg">
              <i class="fa fa-rupee" aria-hidden="true"></i>
              <div class="count" id="div4"></div>
              <div class="title">revenue generated this month in rupees</div>						
            </div><!--/.info-box-->			
          </div><!--/.col-->	

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <div class="info-box blue-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count" id="div1"></div>
            <div class="title">registered</div>						
          </div><!--/.info-box-->			
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <div class="info-box dark-bg">
          <i class="fa fa-cubes"></i>
          <div class="count" id="div3"></div>
          <div class="title">instructors</div>						
        </div><!--/.info-box-->			
      </div><!--/.col-->

    </div><!--/.row-->


    <div class="row">
      <div class="col-lg-9 col-md-12"">
       <!--insert something here-->
       <h4>SEARCH FOR CUSTOMER</h4>
       <form action="<?php $_PHP_SELF ?>" method="GET" style="height:10vh; padding bottom: 30%">
        <div class="form-group">
          <label for="email">customerID</label>
          <input type="text" class="form-control" id="customerID" placeholder="Enter customerID" name="customerID">
          <div style="padding-top: 1%">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>


        <div class="col-lg-9 col-md-12"">
          <h3>Search results will appear here....</h3>    
          <?php

          if( isset($_GET["customerID"])) {

            include_once("connection.php");

            try {

             $ab=$_GET["customerID"] ;
             $stmt = $conn->prepare(" select * from customer where customer.customerid= '".$ab."' " );


             $stmt->execute();
             $result=$stmt->fetchAll(PDO::FETCH_NUM);


             $i=0;
             foreach($result as $row)
              {if($i==0)
                {echo'<table class="table bootstrap-datatable countries" id=myTable2>
                <tr>

                  <th>Customer ID</th>
                  <th>name</th>
                  <th>Age</th>
                  <th>gender</th>
                  <th>join date</th>
                </tr>';

              }

              echo 
              "<tr>" .
              '<form action="<?php $_PHP_SELF ?>" method="GET">'.



              '<td >' . '<input type="text" name="job_num" value="'.$row[0].'"   >'."</td>".
              '<td >' . '<input type="text" name="name" value="'.$row[1].'" >'."</td>".
              '<td >' . '<input type="text" name="age" value="'.$row[2].'" >'."</td>".
              '<td >' . '<input type="text" name="gender" value="'.$row[3].'" >'."</td>".
              '<td >' . '<input type="text" name="joindate" value="'.$row[4].'" >'."</td>".
              "<td>".
              '<input type="submit" name="update" value="update" >'.
              "</td>".
              
              
              '</form>'.
              "</tr>";

              $i++;
            }

            echo '</table>';

            echo'</form>';

          }

          catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
          }

        }
        ?>

        <?php

        require_once ("config.php");
        try{

          $conn=new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
          if(isset($_GET['update']))
          {
            $paramOne = $_GET['job_num'];
            $paramtwo=$_GET['name'];
            $paramthree=$_GET['age'];
            $paramfour=$_GET['gender'];
            $paramfive=$_GET['joindate'];

            $sql="update customer set name='$paramtwo',age='$paramthree',gender='$paramfour',join_date='$paramfive' where customerid=$paramOne";
            $stmt1 = $conn->prepare($sql);
            $stmt1->execute();
          }
          if(isset($_GET['insert']))
            {   echo'<table class="table bootstrap-datatable countries" id=myTable2>
          <tr>

            <th>CustomerID</th>
            <th>Name</th>
            <th>Age</th>
            <th>gender</th>
            <th>join date</th>
          </tr>';


          echo 
          "<tr>" .
          '<form action="<?php $_PHP_SELF ?>" method="GET">'.
          '<td >' . '<input type="text" name="job_num" value="mid"  >'."</td>".
          '<td >' . '<input type="text" name="name" value=0 >'."</td>".
          '<td >' . '<input type="text" name="age" value=0 >'."</td>".
          '<td >' . '<input type="text" name="gender" value=0 >'."</td>".
          '<td >' . '<input type="text" name="joindate" value=0 >'."</td>".
          '</form>'.
          "</tr>";

        }
        echo '</table>';

        echo'</form>';

      }
      catch (PDOException $exception)
      {
        echo "Error".$exception->getMessage();
      }?>
    </div>  
  </div>
  <div class="col-md-3">
    <!-- List starts -->
    
  </div>


</div>  


<!-- Today status end -->



<div class="row">

  <div class="col-lg-6 col-md-12">	
   <div class="panel panel-default">
    <div class="panel-heading">
     <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
     <div class="panel-actions">
      <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
      <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
      <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>

    </div>
  </div>

  <div class="panel-body"  style=" height:50vh;width:100%;overflow-y: scroll;">

   <?php
   include_once("connection.php");
   try {

    $stmt = $conn->prepare('SELECT * from customer ');
    echo'<table class="table bootstrap-datatable countries">

    <tr>

      <th>CustomerID</th>
      <th>Name</th>
      <th>Age</th>
      <th>gender</th>
      <th>join date</th>
    </tr>';
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row)
    {
     echo 
     "<tr>" .
     "<td >" . $row["customerid"] . "</td>".
     "<td >" . $row["name"] . "</td>".
     "<td >" . $row["age"] . "</td>".
     "<td >" . $row["gender"] . "</td>".
     "<td >" . $row["join_date"] . "</td>".
     "</tr>";
   }

   echo"  
 </table>
</div>
";


}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
</div>	
</div>
<!--/col-->
<div class="col-lg-6 col-md-12">	
 <div class="panel panel-default">
  <div class="panel-heading">
   <h2><i class="fa fa-flag-o red"></i><strong>Paid Members</strong></h2>
   <div class="panel-actions">
    <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
    <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
    <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>

  </div>
</div>



<div class="panel-body"  style=" height:50vh;width:100%;overflow-y: scroll;">

 <?php
 include_once("connection.php");
 try {

  $stmt = $conn->prepare('SELECT * from mship ');
  echo'<table class="table bootstrap-datatable table-hover" id="myTable">

  <tr>

    <th>membership ID</th>
    <th>membership level</th>
    <th>cost</th>
    <th>length</th>
    <th>join date</th>
    <th>expire date</th>
    <th>customerid</th>
    <th>package</th>
  </tr>';
  $stmt->execute();
  $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $row)
    {$row["age"]=0;
  $row["gender"]="m";
  $row["join_date"]="12";
  echo
  "<tr>" .
  '<form action="welcome_get.php" method="get">'.
  "<td >" . $row["mid"] . "</td>".
  "<td >" . $row["mlevel"] . "</td>".
  "<td >" . $row["mrate"] . "</td>".
  "<td >" . $row["mlength"] . "</td>".
  "<td >" . $row["c_date"] . "</td>".
  "<td >" . $row["e_date"] . "</td>".
  "<td >" . $row["customer_id"] . "</td>".
  "<td >" . $row["package"] . "</td>".
  "<td>".
  '<input type="submit" name="submit" value="Delete" >'.
  "<td>".
  '<td style="">' . '<input type="hidden" name="job_num" value="'.$row["mid"].'" min="1" max="5">'."</td>".
  "</form>" .
  "</tr>";

}

echo"  
</table>
</div>
";


}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>


</div>  


</div>

</div>	

</div><!--/col-->

</div>



<!-- statics end -->




<!-- project team & activity start -->
<div class="row">
  <div class="col-md-4 portlets">
    <!-- Widget -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="pull-left" id="message">Message</div>
        <div class="widget-icons pull-right">
          <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
          <a href="#" class="wclose"><i class="fa fa-times"></i></a>
        </div>  
        <div class="clearfix"></div>
      </div>

      <div class="panel-body">
        <!-- Widget content -->
        <div class="padd sscroll">

          <ul class="chats">

            <!-- Chat by us. Use the class "by-me". -->
        

            <!-- Chat by other. Use the class "by-other". -->
            <li class="by-other">
              <!-- Use the class "pull-right" in avatar -->
              

              <div class="chat-content">
                <!-- In the chat meta, first include "time" then "name" -->
                <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                <div class="clearfix"></div>
              </div>
            </li>   

       

            
          <?php
include_once("connection.php");
try {

  $stmt = $conn->prepare('SELECT * from message ');



  $stmt->execute();
  $result=$stmt->fetchAll(PDO::FETCH_NUM);
  
    foreach($result as $row)
    {
      echo '   <li class="by-other">


      <div class="chat-content">

        <div class="chat-meta">'.$row[0].' <span class="pull-right">'.$row[1].'</span></div>
        '.$row[2].'
        <div class="clearfix"></div>
      </div>
    </li>   ';

  }


}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
         
                                                                                           

          </ul>

        </div>
        <!-- Widget footer -->
      
     </div>


   </div> 
 </div>



<div class="row">
 <div class="col-md-6 portlets">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2><strong>Calendar</strong></h2>
      <div class="panel-actions">
        <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
        <a href="#" class="wclose"><i class="fa fa-times"></i></a>
      </div>  

    </div><br><br><br>
    <div class="panel-body">
      <!-- Widget content -->

      <!-- Below line produces calendar. I am using FullCalendar plugin. -->
      <div id="calendar"></div>

    </div>
  </div> 

</div>





<!-- project team & activity end -->

</section>
<div class="text-right">
  <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                  -->
                  

                    </div>
                  </div>
                </section>
                <!--main content end-->
              </section>
              <!-- container section start -->

              <!-- javascripts -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <!-- <script src="js/jquery.js"></script> -->
              <script src="js/jquery-ui-1.10.4.min.js"></script>
              <!-- <script src="js/jquery-1.8.3.min.js"></script> -->
              <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
              <!-- bootstrap -->
              <script src="js/bootstrap.min.js"></script>
              <!-- nice scroll -->
              <script src="js/jquery.scrollTo.min.js"></script>
              <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
              <!-- charts scripts -->
              <script src="assets/jquery-knob/js/jquery.knob.js"></script>
              <script src="js/jquery.sparkline.js" type="text/javascript"></script>
              <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
              <script src="js/owl.carousel.js" ></script>
              <!-- jQuery full calendar -->
              <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
              <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
              <!--script for this page only-->
              <script src="js/calendar-custom.js"></script>
              <script src="js/jquery.rateit.min.js"></script>
              <!-- custom select -->
              <script src="js/jquery.customSelect.min.js" ></script>
              <script src="assets/chart-master/Chart.js"></script>

              <!--custome script for all page-->
              <script src="js/scripts.js"></script>
              <!-- custom script for this page-->
              <script src="js/sparkline-chart.js"></script>
              <script src="js/easy-pie-chart.js"></script>
              <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
              <script src="js/jquery-jvectormap-world-mill-en.js"></script>
              <script src="js/xcharts.min.js"></script>
              <script src="js/jquery.autosize.min.js"></script>
              <script src="js/jquery.placeholder.min.js"></script>
              <script src="js/gdp-data.js"></script>	
              <script src="js/morris.min.js"></script>
              <script src="js/sparklines.js"></script>	
              <script src="js/charts.js"></script>
              <script src="js/jquery.slimscroll.min.js"></script>
              <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true

        });
      });

      //custom select box

      $(function(){
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function(){
       $('#map').vectorMap({
         map: 'world_mill_en',
         series: {
           regions: [{
             values: gdpData,
             scale: ['#000', '#000'],
             normalizeFunction: 'polynomial'
           }]
         },
         backgroundColor: '#eef3f7',
         onLabelShow: function(e, el, code){
           el.html(el.html()+' (GDP - '+gdpData[code]+')');
         }
       });
     });

   </script>

   <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);






    }
    function deleteRow2(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable2").deleteRow(i);




    }
  </script>
  <!--  -->
  <script>
    $.post("fetch.php",function(data){
      $( "#div1").html(data);
    });
    $.post("fetch3.php",function(data){
      $( "#div3").html(data);
    });

    $.post("fetch2.php",function(data){
      $( "#div2").html(data);
    });
    $.post("fetch4.php",function(data){
      $( "#div4").html(data);
    });
 $.post("fetchmessages2.php",function(data){
      $( "#badge").html(data);
    });
 




  </script>

  <script type="text/javascript">
    function doSomething(i) {




    }</script>

  </body>
  </html>
