<?php 
session_start ();

if(!isset($_SESSION['login_username']))
{header("Location: http://127.0.0.1/station/back-end/index.php");}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Report | Balances </title>
  <script src="../static/js/jquery.min.js"></script>
   <script src="../static/js/main.js"></script>
   <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../static/css/navabar.css">
   <link rel="stylesheet" type="text/css" href="../static/css/main.css">
   <link rel="stylesheet" type="text/css" href="../static/css/w3.css">

<script>

function Do_Logic ()
{
   display_Date ();
   ViewBalancing (view_balancing_today_api);
}
</script>
</head>

<body onload=" Do_Logic ()" class="app-body">
   <nav class="navbar navbar-default no-margin">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="side-header-navbar navbar-header fixed-brand">
      <div id="log-name-div" >
         <?php include '../name.php'; ?>
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
            <?php include '../header.php'; ?>
         </div>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
   </nav>
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <?php include '../navigation.php' ?>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-content">
         <label class="page-title-label" >Balance | Report</label>
         <div id="navi-links">
            <button type="button" onclick="location.reload()" class="btn btn-primary">Refresh</button>
            <button type="submit" onclick="document.getElementById('options-modal').style.display='block'" class="btn btn-primary ">Options</button>
            <button id="download" onclick="PrintDocument('quick-links-div-2','Pdf')" class="btn btn-success">Print</button>
         </div>
            <div id="quick-links-div-2">
               <div id="reports-today-div">
                  <div style="text-align:justify; overflow: auto; height: 500px;" class="user-view-area">
                     <center>
                        <br><br>
                        <label class="page-title-label">Total Oil Collections:<span id="oil-collection-id">  </span> </label><br>
                        <label class="page-title-label">Total Fuel Collections:<span id="fuel-collection-id">  </span> </label><br>
                        <label class="page-title-label">Total Expenses Made:<span id="expenses-collection-id">  </span> </label><br>
                        <label class="page-title-label">------------------------------------------------------------------</label><br>
                        <label class="page-title-label">Total Oil & Fuel Collections:<span id="oil-fuel-id">  </span> </label><br>
                        <label class="page-title-label">Total Expenses Made:<span id="expenses-id">  </span> </label><br>
                        <label class="page-title-label">Balance:<span id="balance-id">  </span> </label><br>
                        <label class="page-title-label">------------------------------------------</label><br>
                     </center>
            </div>
               <!-- <div id="sales-products-outer-div">
                  <div id="sales-chart-div" >
                     <label>Sales Chart</label><br>
                  </div>
                  <div id="top-products-div" >
                     <label>Top Products (February 2022)</label><br>
                  </div>
               </div> -->

            </div>
         </div>
      </div>
      
      <!-- /#page-content-wrapper -->
   </div>
   <center>
   <div id="options-modal" class="w3-modal">
      <div class="w3-modal-content w3-animate-top w3-card-4">
            <div class="w3-container first-pop-up-window">
               <br>
                  <center>
                  <div class="options-main-div" >
                     <div class="options-grid-item ">
                        <button type="button" onclick="ShowTodaysData ()" class="btn btn-info range-view-btns">Today</button><br><br>
                        <button type="button" onclick="ShowAllData()" class="btn btn-info range-view-btns">All</button><br><br>

                        <form id="range-form">
                           <div class="view-by-name-div">
                              <label class="input-labels" >View By Range</label><br>
                                 <label>From old date</label>
                                 <input  required type="date" class="form-control range-view-inputs" name="from_date" placeholder="From"  autocomplete="off"><br>
                                 <label>To new date</label>
                                 <input  required type="date" class="form-control range-view-inputs" name="to_date" placeholder="From"  autocomplete="off">
                              <button type="submit" onclick="submitBalancingFormDataAndGet ('range-form',view_balancing_range_api)" class="btn btn-info range-view-btns">View</button>
                           </div>
                        </form>
                     </div>

                     <div class="options-grid-item ">
                        <button type="button" onclick="ShowThisWeekData()" class="btn btn-info range-view-btns">This Week</button><br><br>
                        <button type="button" onclick="ShowThisMonthData()" class="btn btn-info range-view-btns">This Month</button><br><br>
                     </div>
                  </div>
                  <script>
                     function ShowTodaysData ()
                        {ViewBalancing (view_balancing_today_api);document.getElementById('options-modal').style.display='none';}
                     function ShowAllData ()
                        {ViewBalancing (view_balancing_all_api);document.getElementById('options-modal').style.display='none';}
                     function ShowThisWeekData ()
                        {ViewBalancing (view_balancing_this_week_api);document.getElementById('options-modal').style.display='none';}
                     function ShowThisMonthData ()
                        {ViewBalancing (view_balancing_this_month_api);document.getElementById('options-modal').style.display='none';}
                  </script>
                  </center>
               <br><br>
               <button onclick="document.getElementById('options-modal').style.display='none'" type="button" class="close-popup-label" >Close</button><br>
            </div>		
      </div>
   </div>
   </center>
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
