<?php 
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require_once('fcon.php');
if(isset($_POST["add-faculty"])){ 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
    } else{ 
$subject_name=$_POST['subject_name'];
$subject_code=$_POST['subject_code'];
$year=$_POST['year'];
$semester=$_POST['semester'];
    
$q=mysqli_query($confaculty,"SELECT * FROM subject WHERE scode='".$subject_code."' "); 
	$numrows1=mysqli_num_rows($q);
	 
	if($numrows1>0)  
    {  
	$msg="Subject Code is already added, please chose different code";
	 echo "<script type='text/javascript'>alert('$msg');</script>"; 
	 //exit('Already Registered Please refresh the page and go back'); 
	 }
	//echo $messag;
    else 
	{
	 $sql="INSERT INTO subject(sname,scode,sy,ssem,duration) VALUES('$subject_name','$subject_code','$year','$semester',now())";
	// echo $sql;
		
		$result=mysqli_query($confaculty,$sql);
		$msg="Subject Added";
	 echo "<script type='text/javascript'>alert('$msg');</script>"; 

	}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Faculty Feedback system in php mysql contact form">
  <meta name="author" content="Dr Tutorial NoidaTut">
  <meta name="keyword" content="free download faculty feedback, faculty feedback management system in php mysql, feedback system in php mysql">
  <link rel="shortcut icon" href="https://noidatut.com/gs-title.ico"/>
  <meta property="og:image" content="http://noidatut.com/dashboard/noida-tut-fav.JPG">

  <title>Add Subject in Faculty Feedback section php mysql</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

 
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
   <?php include 'header.php';
include 'sidebar.php';
 ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Subject Data</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Admin</li>
              <li><i class="fa fa-file-text-o"></i>Add Subject</li>
            </ol>
          </div>
        </div>
        <!--progress bar start-->
            <section class="panel">
              <header class="panel-heading">
                Basic Progress Bars              </header>
              <div class="panel-body">
                <div class="progress progress-xs">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
				jhkjhk
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>
				
                               </div>
              </div>
            </section>

 <!--progress bar start-->
            <section class="panel">
              <header class="panel-heading">
                Basic Progress Bars              </header>
              <div class="panel-body">
                <div class="progress progress-xs">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
				jhkjhk
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete</span>
                  </div>
                </div>
				
                               </div>
              </div>
            </section>

       
                      <!--color picker end-->

    <!--main content end-->
    <div class="text-center">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://www.noidatut.com/">Dr. Aadarsh Malviya</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
