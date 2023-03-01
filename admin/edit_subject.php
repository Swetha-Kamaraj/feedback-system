<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('fcon.php');
if (isset($_GET['kc'])) {
  $s_code = $_GET["kc"];
} else {
  header("location: view-subject.php");
}
$sub = mysqli_query($confaculty, "SELECT * FROM subject  WHERE sid =" . $s_code);
// $question=mysqli_query($con,"SELECT * FROM ".$s_code. " WHERE c_id =" .$q_code);
$numrows1 = mysqli_num_rows($sub);
if ($numrows1 < 1) {
  header("location: view-subject.php");
}
if (isset($_POST["add-faculty"])) {
  $subject_name = $_POST['subject_name'];
  //$subject_code=$_POST['subject_code'];
  $year = $_POST['year'];
  $semester = $_POST['semester'];

  $sql1 = "UPDATE subject SET sname = '$subject_name', ssem= '$semester', sy = '$year' WHERE sid = ' $s_code'";
  //echo $sql1;
  $result = mysqli_query($confaculty, $sql1);
  $msg = "Subject Updated";
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="http://noidatut.com/dashboard/noida-tut-fav.JPG">

  <title>Edit Subject in Faculty Feedback section php mysql</title>

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
              <li><i class="fa fa-file-text-o"></i>Edit Subject</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Edit Subject
              </header>
              <?php
              // $sub=mysqli_query($confaculty,"SELECT * FROM subject  WHERE sid =" .$s_code); 

              $subj = mysqli_query($confaculty, "SELECT * FROM subject  WHERE sid =" . $s_code);
              $numrows1 = mysqli_num_rows($subj);

              while ($row = mysqli_fetch_assoc($subj)) {
                $s_c = $row['sid'];
                $sname = $row['sname'];
                $s_code = $row['scode'];
                $s_sem = $row['ssem'];
                $s_yr = $row['sy'];
                $s_faculty = $row['sfaculty'];

                // $ncid = md5($id);
              }
              ?>
              <div class="panel-body">
                <form class="form-horizontal " enctype="multipart/form-data" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Subject Name </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="subject_name" value="<?php echo $sname; ?>" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Subject Code </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="subject_code" readonly="" value="<?php echo $s_code; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Faculty Alloted </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="subject_code" readonly="" value="<?php echo $s_faculty; ?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Year </label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="year">
                        <option><?php echo $s_yr; ?></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Semester </label>
                    <div class="col-sm-10">
                      <select class="form-control m-bot15" name="semester">
                        <option><?php echo $s_sem; ?></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>

                      </select>
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