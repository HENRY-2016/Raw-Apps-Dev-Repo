<?php 
session_start ();

if(!isset($_SESSION['login_username']))
{header("Location: https://mogahenze.com/lms-dir/lms/back-end/index.php");}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Form </title>
<script src="../static/js/jquery.min.js"></script>
<script src="../static/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../static/css/main.css">
<link rel="stylesheet" type="text/css" href="../static/css/navabar.css">
<link rel="stylesheet" type="text/css" href="../static/css/w3.css">
<script>



function Do_Logic ()
{
   OloadInitiApplication ();
}
</script>

</head>

<body onload="Do_Logic()" class="app-body">
   <nav class="navbar navbar-default no-margin">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="side-header-navbar navbar-header fixed-brand">
      <div id="log-name-div" >
         <?php include '../main/name.php'; ?>
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
            <?php include '../main/header.php'; ?>
         </div>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
   </nav>
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <?php include '../main/navigation.php' ?>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid main-section-content">
            <label class="page-title-label" >Loan Application Form </label>
            <div id="feedback-popup" class="feedback-popup-window w3-dropdown-content  w3-card-4 w3-animate-zoom">
               <div id="feedback-div" >
                  <center>
                     <label id="feedback-label" class="feedback-label" ></label>
                  </center><br><br>
                  <button  onclick="OpenFeedbackPopupWindowAndResetForm()" class="btn btn-primary submit-btn">Ok</button>
               </div>
            </div>
            <div id="quick-links-div-2">
					<form id="my-form">
               <div class="inner-form-raw" >
						<div class="application-form-grid-container">
                  <div class="application-form-grid-item">
                     <label class="input-labels" >Borrower's Details</label><br>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" style="display:none" ></label><br>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" style="display:none" ></label><br>
                  </div>
                  

                  <!-- ====================================================== -->
                  <!-- ====================================================== -->
               

                  <div class="application-form-grid-item">
                     <label class="input-labels" >Photo</label><br>
                     <div>
                        <p><input type="file"  accept="image/*" name="file" id="photo-file"  onchange="DisplayUploadedImage(event,'photo-display-id')" style="display: none;"></p>
                        <p><label class="Browse-label" for="photo-file">Upload Image</label></p>
                        <p><img id="photo-display-id" class="img-to-be-displayed" /></p>
                     </div>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" >Id Front</label><br>
                     <div>
                        <p><input type="file"  accept="image/*" name="file" id="front-side-file"  onchange="DisplayUploadedImage(event,'front-side-display-id')" style="display: none;"></p>
                        <p><label class="Browse-label" for="front-side-file">Upload Image</label></p>
                        <p><img id="front-side-display-id" class="img-to-be-displayed" /></p>
                     </div>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" >Id Back</label><br>
                     <div>
                        <p><input type="file"  accept="image/*" name="file" id="back-side-file"  onchange="DisplayUploadedImage(event,'back-side-display-id')" style="display: none;"></p>
                        <p><label class="Browse-label" for="back-side-file">Upload Image</label></p>
                        <p><img id="back-side-display-id" class="img-to-be-displayed" /></p>
                     </div>
                  </div>


                     <div class="application-form-grid-item">
								<label class="input-labels" >Borrower's name :</label><br>
                        <div class="autocomplete">
                           <input id="ridder-name-input-id"   required type="text" class="form_input" name="ridder" placeholder="Borrower's  Name"  autocomplete="off">
                        </div>
							</div>
							<div class="application-form-grid-item">
								<label class="input-labels">Application Date :</label><br>
                        <div class="autocomplete">
								<input id="ridder-numberplate-input-id" required type="date" class="form_input" name="number_plate"   autocomplete="off">
                        </div>
							</div>
                     <div class="application-form-grid-item">
								<label class="input-labels"> Disbursement Date :</label><br>
                        <div class="autocomplete">
								<input id="ridder-stage-input-id" required type="date" class="form_input" name="stage"   autocomplete="off">
                        </div>
							</div>
                     <div class="application-form-grid-item">
								<label class="input-labels"> Gender:</label>
                        <select  class="form_input" name="itemname" type="text">
                           <option value="Male">Male</option>
                           <option value="female">Female</option>
                        </select>
							</div>
							<div class="application-form-grid-item">
								<label class="input-labels" >Age:</label>
								<input type="text" class="form_input" required name="amount" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" placeholder="Age"  autocomplete="off">
							</div>
	
                     <div class="application-form-grid-item">
								<label class="input-labels" >Phone:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="Phone:"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >Village zone:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="Village zone"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >Sub-county:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="sub-county"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >District:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="District"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >Amount:</label>
								<input type="text" class="form_input" required name="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" placeholder="Amount"  autocomplete="off">
							</div>

                     

                     <div class="application-form-grid-item">
								<label class="input-labels" >Previous Balance:</label>
								<input type="text" class="form_input" required name="amount"  placeholder="Balance" autocomplete="off">
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >Reason :</label>
								<input type="text" class="form_input" required name="amount" placeholder="Reason" autocomplete="off">
							</div>
                  
                     
							
						</div>
                  </div>
                  <br>




                  <div class="inner-form-raw" >
						<div class="application-form-grid-container">
                  <div class="application-form-grid-item">
                     <label class="input-labels" >Seconder's Details</label><br>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" style="display:none" ></label><br>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" style="display:none" ></label><br>
                  </div>
                  

                  <!-- ====================================================== -->
                  <!-- ====================================================== -->
               

                  <div class="application-form-grid-item">
                     <label class="input-labels" >Photo</label><br>
                     <div>
                        <p><input type="file"  accept="image/*" name="file" id="photo-file"  onchange="DisplayUploadedImage(event,'photo-display-id')" style="display: none;"></p>
                        <p><label class="Browse-label" for="photo-file">Upload Image</label></p>
                        <p><img id="photo-display-id" class="img-to-be-displayed" /></p>
                     </div>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" >Id Front</label><br>
                     <div>
                        <p><input type="file"  accept="image/*" name="file" id="front-side-file"  onchange="DisplayUploadedImage(event,'front-side-display-id')" style="display: none;"></p>
                        <p><label class="Browse-label" for="front-side-file">Upload Image</label></p>
                        <p><img id="front-side-display-id" class="img-to-be-displayed" /></p>
                     </div>
                  </div>
                  <div class="application-form-grid-item">
                     <label class="input-labels" >Id Back</label><br>
                     <div>
                        <p><input type="file"  accept="image/*" name="file" id="back-side-file"  onchange="DisplayUploadedImage(event,'back-side-display-id')" style="display: none;"></p>
                        <p><label class="Browse-label" for="back-side-file">Upload Image</label></p>
                        <p><img id="back-side-display-id" class="img-to-be-displayed" /></p>
                     </div>
                  </div>


                     <div class="application-form-grid-item">
								<label class="input-labels" >Seconder's name :</label><br>
                        <div class="autocomplete">
                           <input id="ridder-name-input-id"   required type="text" class="form_input" name="ridder" placeholder="Borrower's  Name"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels"> Gender:</label>
                        <select  class="form_input" name="itemname" type="text">
                           <option value="Male">Male</option>
                           <option value="female">Female</option>
                        </select>
							</div>
							<div class="application-form-grid-item">
								<label class="input-labels" >Age:</label>
								<input type="text" class="form_input" required name="amount" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" placeholder="Age"  autocomplete="off">
							</div>
	
                     <div class="application-form-grid-item">
								<label class="input-labels" >Phone:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="Phone:"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >Village zone:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="Village zone"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >Sub-county:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="sub-county"  autocomplete="off">
                        </div>
							</div>

                     <div class="application-form-grid-item">
								<label class="input-labels" >District:</label><br>
                        <div class="autocomplete">
								<input type="text" id="staff-name-input-id" class="form_input" required name="staffname" placeholder="District"  autocomplete="off">
                        </div>
							</div>

                     
							<div class="application-form-grid-item">
                        <button type="submit" onclick="submitFormData ('my-form',add_oil_url)" class="btn btn-primary submit-btn">Submit</button>
                     </div>
						</div>
                  </div>

                  <br><br>
					</form>
               </div>

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
