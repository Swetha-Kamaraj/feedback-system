<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('fcon.php');
if (isset($_GET['sc'])) {
  $s_code = $_GET["sc"];
} else {
  header("location: view-faculty.php");
}
//extract
$subject_code = mysqli_query($confaculty, "SELECT * FROM faculty  WHERE fid =" . $s_code);
// $question=mysqli_query($con,"SELECT * FROM ".$s_code. " WHERE c_id =" .$q_code);
$numrows1 = mysqli_num_rows($subject_code);
if ($numrows1 < 1) {
  header("location: view-faculty.php");
}

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
}
//extract			
if (isset($_POST["add-faculty"])) {
  $faculty_name = $_POST['faculty-name'];
  $faculty_email = $_POST['faculty-email'];
  $faculty_mobile = $_POST['faculty-mobile'];
  $faculty_qualification = $_POST['faculty-qualification'];
  $faculty_specialization = $_POST['faculty-specialization'];
  $faculty_designation = $_POST['faculty-designation'];
  $experience = $_POST['experience'];
  $status = $_POST['status'];
  //$image=$_POST['image'];
  $image = $_FILES['image']['name'];
  if (empty($image)) {
    //$q=mysqli_query($confaculty,"SELECT * FROM faculty WHERE fmail='".$faculty_email."' "); 
    //$numrows1=mysqli_num_rows($q);
    $sql1 = "UPDATE faculty SET fname = '$faculty_name', fmob= '$faculty_mobile', fqual = '$faculty_qualification', fexp = '$experience', specialization = '$faculty_specialization', designation = '$faculty_designation', status = '$status' WHERE fid = ' $s_code'";
    //echo $sql1;
    $result = mysqli_query($confaculty, $sql1);
    $msg = "Faculty Updated";
    echo "<script type='text/javascript'>alert('$msg');</script>";
  } else { //$sql="INSERT INTO faculty(fname,fmail,fmob,fqual,fexp,specialization,pic,designation,status,date) VALUES('$faculty_name','$faculty_email','$faculty_mobile','$faculty_qualification','$experience','$faculty_specialization','$image','$faculty_designation','$status',now())";
    // echo $sql;
    $target = "images/" . basename($image);
    $tar = basename($image);
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $ext = pathinfo($target, PATHINFO_EXTENSION);
    $d = "png";
    $e = "jpeg";
    $f = "jpg";

    // echo $ext;
    if ($ext == $e or $ext == $f or $ext == $d) {
      move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }
    $sql1 = "UPDATE faculty SET fname = '$faculty_name', fmob= '$faculty_mobile', fqual = '$faculty_qualification', fexp = '$experience', specialization = '$faculty_specialization', designation = '$faculty_designation', status = '$status', pic = '$image' WHERE fid = ' $s_code'";
    echo $sql1;
    $result = mysqli_query($confaculty, $sql1);
    $msg = "Faculty Updated";
    echo "<script type='text/javascript'>alert('$msg');</script>";
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
  <link rel="shortcut icon" href="https://noidatut.com/gs-title.ico" />
  <meta property="og:image" content="http://noidatut.com/dashboard/noida-tut-fav.JPG">

  <title>Edit Faculty in Faculty Feedback section php mysql</title>

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Faculty Data</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Admin</li>
              <li><i class="fa fa-file-text-o"></i>Add Faculty</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Add Faculty
              </header>
              <?php
              $subject_code = mysqli_query($confaculty, "SELECT * FROM faculty  WHERE fid =" . $s_code);
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
              }
              ?>
              <div class="panel-body">
                <form class="form-horizontal " enctype="multipart/form-data" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Full name </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="faculty-name" value="<?php echo $fname; ?>" required>
                    </div>
                  </div>

                  <form class="form-horizontal " method="get">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Faculty Email( Cannot be changed) </label>
                      <div class="col-sm-10">
                        <input type="text" readonly="" class="form-control" name="faculty-email" value="<?php echo $f_email; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Mobile Number </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="faculty-mobile" value="<?php echo $f_mobile; ?>">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-2 control-label">Highest Qualification </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="faculty-qualification" value="<?php echo $f_qual; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Specialization </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="faculty-specialization" value="<?php echo $f_sp; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Designation </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="faculty-designation" value="<?php echo $f_desig; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Experience in Years </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="experience" value="<?php echo $f_exp; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Status </label>
                      <div class="col-sm-10">
                        <select class="form-control m-bot15" name="status">
                          <option><?php echo $f_status; ?></option>
                          <option>Active</option>
                          <option>Deactive</option>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Faculty Image</label>
                      <div class="col-sm-10">
                        <label for="exampleInputFile">Upload Image</label>
                        <input type="file" id="exampleInputFile" name="image">
                        <p class="help-block">Only jpg and png images allowed</p>
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
            University College of Engineering - BIT Campus</a>
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