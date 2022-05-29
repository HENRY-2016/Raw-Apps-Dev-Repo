
<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
      <li>
         <div id="logo-div">
               <img class="logo-img" src="../static/imgs/logo.png" />
            </div>
      </li>
      <li class="main-navi-links">
         <a href="/lms-dir/lms/front-end/main/dashboard.php"><img src="../static/imgs/dashboard.png" class="my-fas-img">Dashboard</a>
      </li>
   
   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> Applications &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href="/lms-dir/lms/front-end/applications/form.php"><img src="../static/imgs/circle.png" class="my-list-fas-img"> Add</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">View</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Edit</a></li>
      </ul>
   </li>

   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> Payments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> Add</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Edit</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Half Payments</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Full Payments</a></li>
      </ul>
   </li>

   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> My Wallet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> Add</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Edit</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> View</a></li>
      </ul>
   </li>

   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> Withdraws &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> Add</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Edit</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> View</a></li>
      </ul>
   </li>

   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> Transactions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> View</a></li>
      </ul>
   </li>

   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> Customers &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> Add</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Edit</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> View</a></li>
      </ul>
   </li>

   <li >
      <a href="#"><img src="../static/imgs/oil.png" class="my-fas-img"> Employees &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> Add</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img">Edit</a></li>
         <li><a href=""><img src="../static/imgs/circle.png" class="my-list-fas-img"> View</a></li>
      </ul>
   </li>


   <li>
      <a href="#"><img src="../static/imgs/settings.png" class="my-fas-img">Settings&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <i class='fa fa-angle-down pointing-arrows'></i></a>
      <ul class="nav-pills nav-stacked nav-drop-down-list-links">
         
         <?php 
         if(isset($_SESSION['Admin_User_Type'])) :
            echo '<li><a href="/lms-dir/lms/front-end/accounts/admin.php""><img src="../static/imgs/circle.png" class="my-list-fas-img">Account</a></li>';
         else:
            echo '<li><a href="/lms-dir/lms/front-end/accounts/account.php"><img src="../static/imgs/circle.png" class="my-list-fas-img">Account</a></li>';
         endif 
         ?>
      </ul>
   </li>

</ul>