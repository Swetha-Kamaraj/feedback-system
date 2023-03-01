<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('fcon.php');
/*if (isset($_POST["add-faculty"])) {

  $faculty_name = $_POST['faculty'];
  $_SESSION["facultynm"] = $faculty_name;
  //$msg="Faculty Updated";
  header("location: choose_subject.php");
}*/
if (isset($_POST["add-faculty"])) {

  $_SESSION['batch'] = $_POST['batch'];
  $semno = $_POST['semno'];
  $_SESSION["semno"] = $semno;

  header("location: choose_subject.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-5139634720777851",
      enable_page_level_ads: true
    });
  </script>
  <meta charset="utf-8">
  <meta property="og:image" content="images/faculty.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Faculty Feedback system in php mysql contact form">

  <meta property="og:image" content="images/faculty.png">

  <title>Choose Faculty in Faculty Feedback section php mysql</title>

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
    <?php include 'header-st.php';
    include 'sidebar-st.php';
    ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Feedback Section</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Feedback</li>
              <li><i class="fa fa-file-text-o"></i>Choose Faculty</li>
            </ol>
          </div>
        </div>
        <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5139634720777851",
            enable_page_level_ads: true
          });
        </script>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Select Faculty
              </header>
              <form class="form-horizontal " enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <div class="col-sm-2 control-label">Batch</div>
                  <div class="col-sm-10">
                    <select class="form-control m-bot15" name="batch" required>
                      <option></option>
                      <option>2020-24</option>
                      <option>2021-25</option>
                    </select>

                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">Semester</div>
                  <div class="col-sm-10">
                    <select class="form-control m-bot15" name="semno" required>
                      <option></option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>

                  </div>
                </div>
                <!--<div class=" form-group">
                  <label class="col-sm-2 control-label">Select Faculty </label>
                  <div class="col-sm-10">
                    <select class="form-control m-bot15" name="faculty">
                      <option></option>
                      <?php
                      /*$subject_code = mysqli_query($confaculty, "SELECT * FROM faculty where status = 'Active'");
                      $numrows1 = mysqli_num_rows($subject_code);

                      while ($row = mysqli_fetch_assoc($subject_code)) {
                        $f_code = $row['fid'];
                        $fname = $row['fname'];
                        $f_email = $row['fmail'];
                        $f_mobile = $row['fmob'];
                        $f_qual = $row['fqual'];
                        $f_exp = $row['fexp'];
                        $f_sp = $row['specialization'];
                        $f_pic = $row['pic'];
                        $f_desig = $row['designation'];
                        $f_status = $row['status'];
                        $f_date = $row['date'];
                        // $ncid = md5($id);
                        //} 
                      ?> <option><?php echo $fname; ?></option>
                      <?php }*/ ?>


                    </select>
                  </div>
                </div>-->
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">

                  </div>
                </div>



                <button type="submit" class="btn btn-primary" name="add-faculty">Submit</button>
              </form>
          </div>
      </section>




      </div>
      </div>


      <!--color picker end-->

      <!--main content end-->
      <div class="text-center">
        <div class="credits">
          University College of Engineering - BIT Campus.
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