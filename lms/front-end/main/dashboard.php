
<?php 
session_start ();

if(!isset($_SESSION['login_username']))
{header("Location: https://mogahenze.com/lms-dir/lms/back-end/index.php");}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Dashboard </title>
<script src="../static/js/jquery.min.js"></script>
<script src="../static/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../static/css/navabar.css">
<link rel="stylesheet" type="text/css" href="../static/css/main.css">
<link rel="stylesheet" type="text/css" href="../static/css/w3.css">

<script>
function InitDashBoard ()
{
   OloadInitiApplication();
   // CountTotalFromDataBase (total_staffs_api,'staff-span');
   // CountTotalFromDataBase (total_ridders_api,'ridders-span');
   // CountTotalFromDataBase (total_stages_api,'stages-span');
   // CountTotalFromDataBase (total_todays_oil_sales_api,'todays-oil-sales-span');
   // CountTotalFromDataBase (total_todays_fuel_sales_api,'todays-fuel-sales-span');
   // CountTotalFromDataBase (total_todays_fuel_ltrs_api,'todays-fuel-ltrs-span');
   // CountTotalFromDataBase (total_todays_oil_ltrs_api,'todays-oil-ltrs-span');
   // CountTotalFromDataBase (total_todays_expenses_api,'todays-expenses-span');
   // CountTotalFromDataBase (total_oil_defaulters_api,'oil-defaulters-span');
   // CountTotalFromDataBase (total_fuel_defaulters_api,'fuel-defaulters-span');
   // CountTotalFromDataBase (total_fuel_payments_api,'fuel-payments-span');
   // CountTotalFromDataBase (total_oil_payments_api,'oil-payments-span');
   // ViewBalancing (view_balancing_today_api);
}

</script>

</head>

<body onload=" InitDashBoard()" class="app-body">
   <nav class="navbar navbar-default no-margin">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="side-header-navbar navbar-header fixed-brand">
      <div id="log-name-div" >
         <?php include 'name.php'; ?>
      </div>
      </div>
      <!-- navbar-header-->
      <div class="header-navbar collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li >
               <button class="menu-btn-link navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
                  <img src="../static/imgs/menu.png" class="menu-fas-img">
               </button>
            </li>
         </ul>

         <div id="header-navbar-inner-div">
            <?php include 'header.php'; ?>
         </div>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
   </nav>
   <div id="wrapper">
         
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <?php include 'navigation.php' ?>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-content">
            <label>Dashboard</label>
               <div id="quick-links-div">
                  <div class="dashboard-grid-container">
                     <div class="dashboard-grid-item ">
                        <div class="dashboard-icon-div fuel-card">
                           <!-- <img src="../static/imgs/fuel.png" class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                              My Wallet<br>
                                 <center><span id="todays-fuel-sales-span">30,000,000</span></center>
                           </label>
                        </div>
                     </div>

                     <div class="dashboard-grid-item ">
                        <div class="dashboard-icon-div oil-card">
                           <!-- <img src="../static/imgs/oil.png" class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                              Loans<br>
                                 <center><span id="todays-oil-sales-span">10</span></center>
                                 <center><span id="todays-oil-sales-span">10,000,000</span></center>
                           </label>
                        </div>
                     </div>


                     <div class="dashboard-grid-item">
                        <div class="dashboard-icon-div ridders-card">
                           <!-- <img src="../static/imgs/rider.png" class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                              Half Payment<br>
                                 <center><span id="ridders-span">10</span></center>
                                 <center><span id="ridders-span">800,000</span></center>
                           </label>
                        </div>
                     </div>

                     <div class="dashboard-grid-item ">
                        <div class="dashboard-icon-div fuel-card">
                           <!-- <img src="../static/imgs/fuel.png" class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                              Customers<br>
                                 <center><span id="todays-fuel-ltrs-span">25</span></center>
                           </label>
                        </div>
                     </div>

                     <!-- ======================================================= -->
                     <!-- ======================================================= -->
                     <!-- ======================================================= -->

                     <div class="dashboard-grid-item">
                        <div class="dashboard-icon-div fuel-card">
                           <!-- <img src="../static/imgs/oil.png" class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                           My Withdraws <br>
                                 <center><span id="todays-oil-ltrs-span">5</span></center>
                                 <center><span id="todays-oil-ltrs-span">15,000,000</span></center>

                           </label>
                        </div>
                     </div>

                     <div class="dashboard-grid-item ">
                        <div class="dashboard-icon-div oil-card">
                           <!-- <img src="../static/imgs/fuel.png" class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                           Transactions<br>
                                 <center><span id="fuel-defaulters-span">30</span></center>
                                 <center><span id="fuel-defaulters-span">30,000,000</span></center>

                           </label>
                        </div>
                     </div>

                     <div class="dashboard-grid-item ">
                        <div class="dashboard-icon-div ridders-card">
                              <!-- <img src="../static/imgs/stage.png" class="dashboard-fas-img"> -->
                           </div>
                           <div class="dashboard-label-div-2">
                              <label class="dashboard-labels">
                                 Full Payments<br>
                                    <center><span id="stages-span">800,000</span></center>
                              </label>
                           </div>
                     </div>

                     <div class="dashboard-grid-item">
                        <div class="dashboard-icon-div fuel-card">
                           <!-- <img src="../static/imgs/fuel.png " class="dashboard-fas-img"> -->
                        </div>
                        <div class="dashboard-label-div-2">
                           <label class="dashboard-labels">
                           Employees<br>
                                 <center><span id="fuel-payments-span">20</span></center>
                           </label>
                        </div>
                     </div>


                  </div>
               </div>
               <!-- <div id="sales-products-outer-div">
                  <div id="sales-chart-div" >
                     <label>Sales Chart</label><br>
               </div>
               <div id="top-products-div" >
                     <label class="page-title-label">Todys</label>
                     <center>
                     <br>
                     <label class="page-title-label">Total Oil Collections:<span id="oil-collection-id">  </span> </label><br>
                     <label class="page-title-label">Total Fuel Collections:<span id="fuel-collection-id">  </span> </label><br>
                     <label class="page-title-label">Total Expenses Made:<span id="expenses-collection-id">  </span> </label><br>
                     <label class="page-title-label">-----------------------------------------------</label><br>
                     <label class="page-title-label">Total Oil & Fuel:<span id="oil-fuel-id">  </span> </label><br>
                     <label class="page-title-label">Total Expenses :<span id="expenses-id">  </span> </label><br>
                     <label class="page-title-label">Balance:<span id="balance-id">  </span> </label><br>
                  </center>
               </div>
               </div> -->

            </div>
         </div>
      </div>
      <!-- /#page-content-wrapper -->
   </div>

   <footer class="main-footer">
        <div class="pull-right">
            Version <strong>4.0.19</strong>
        </div>

        <span class="copyright-span"> Copyright © 2022 Liquor Store. All rights reserved.</span>
    </footer>


  <script>
  $("#menu-toggle").click(function(e) {
     e.preventDefault();
     $("#wrapper").toggleClass("toggled");
  });
  $("#menu-toggle-2").click(function(e) {
     e.preventDefault();
     $("#wrapper").toggleClass("toggled-2");
     $('#menu ul').hide();
  });

  function initMenu() {
     $('#menu ul').hide();
     $('#menu ul').children('.current').parent().show();
     //$('#menu ul:first').show();
     $('#menu li a').click(
        function() {
           var checkElement = $(this).next();
           if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
              return false;
           }
           if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
              $('#menu ul:visible').slideUp('normal');
              checkElement.slideDown('normal');
              return false;
           }
        }
     );
  }
  $(document).ready(function() {
     initMenu();
  });
  </script>
</body>
</html>
