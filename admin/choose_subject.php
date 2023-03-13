<?php
if (!isset($_SESSION)) {
  session_start();
}

//$uid = $_SESSION["userid"] ;
require_once('fcon.php');
if (isset($_POST["add-faculty"])) {

  $faculty_name = $_POST['faculty-name'];
  $_SESSION["facultynm"] = $_POST['faculty-name'];
  //header("location: choose_subject.php");

}
if (isset($_POST["feedback"])) {


  $batch = $_POST['batch'];
  $sem = $_POST['sem'];
  $faculty = $_POST['faculty'];
  $subj = $_POST['subj'];
  $punctuality = $_POST['punctuality'];
  $conceptual = $_POST['conceptual'];
  $elequant = $_POST['elequant'];
  $syllabus = $_POST['syllabus'];
  $approachable = $_POST['approachable'];
  $grading = $_POST['grading'];
  $clarity = $_POST['clarity'];
  $feedform = $_POST['feed'];
  $helping = $_POST['help'];
  //$feedback=$_POST['feedback'];
  $sql = "INSERT INTO feedback(batch,sem,stnm,stem,fnm,sub,syl,extra,eff,cc,moti,pk,cla,feed,help,date) VALUES('$batch','$sem','$stnm','$stem','$faculty','$subj',$punctuality,$conceptual,$elequant,$syllabus,$approachable,$grading,$clarity,$feedform,$helping,now())";
  $result = mysqli_query($confaculty, $sql);
  $_SESSION["feedback"] = "Thank You for your valuable time ";
  header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Faculty Feedback system in php mysql contact form">


  <title>Enter Feedback in Faculty Feedback section php mysql</title>

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
              <li><i class="fa fa-file-text-o"></i>Choose Subject</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enter Feedback
              </header>
              <form class="form-horizontal " enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <div class="col-sm-2 control-label">Batch</div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="batch" readonly value="<?php $batch = $_SESSION["batch"];
                                                                                          echo $batch; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2 control-label">Semester</div>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="sem" readonly value="<?php $sem = $_SESSION["semno"];
                                                                                        echo $sem; ?>">
                  </div>
                </div>
                <!-- <div class=" form-group">
                    <label class="col-sm-2 control-label">Faculty Name </label>
                    <div class="col-sm-9">
          
                  </div> -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Select Subject</label>
                  <div class="col-sm-9">
                    <select class="form-control m-bot15" name="subj">
                      <option></option>
                      <?php
                      $t = "SELECT * FROM subsem WHERE sem ='" . $_SESSION["semno"] . "'";
                      $subjects = mysqli_query($confaculty, $t);
                      //$numrows1 = mysqli_num_rows($subject_code);

                      while ($row = mysqli_fetch_assoc($subjects)) {
                        $sub = $row['sub'];

                        // $ncid = md5($id);
                        //} 
                      ?> <option><?php echo $sub; ?></option>
                      <?php } ?>


                    </select>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Select Faculty</label>
                  <div class="col-sm-9">
                    <select class="form-control m-bot15" name="faculty">
                      <option></option>
                      <?php
                      $t = "SELECT * FROM faculty WHERE status='Active'";
                      $subjects = mysqli_query($confaculty, $t);
                      //$numrows1 = mysqli_num_rows($subject_code);

                      while ($row = mysqli_fetch_assoc($subjects)) {
                        $fname = $row['fname'];

                        // $ncid = md5($id);
                        //} 
                      ?> <option><?php echo $fname; ?></option>
                      <?php } ?>


                    </select>

                  </div>
                </div>

                <!-- <div class="form-group">
                    <label class="col-sm-2 control-label">Subjectcode</label>
                    <input type="text" name="subcode ">
                    <div class="col-sm-10">
                    </div>
                  </div>-->

                <div class="form-group">
                  <label class="col-sm-2 control-label">Syllabus Coverage</label>
                  <div class="col-sm-10">
                    <p class="help-block">Has the teacher covered entire syllabus as prescribed by University/College/Board</p>
                    <input type="radio" name="punctuality" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="punctuality" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="punctuality" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="punctuality" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="punctuality" value="5" style="margin-right:10px; margin-left:10px">Excellent
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Extra Information</label>

                  <div class="col-sm-10">
                    <p class="help-block">Has the teacher covered relevant topics beyond the syllabus</p>
                    <input type="radio" name="conceptual" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="conceptual" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="conceptual" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="conceptual" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="conceptual" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Effectiveness</label>
                  <div class="col-sm-10">
                    <p class="help-block">Effectiveness of Teacher in terms of: </p>
                    <p class="help-block">a.Technical content/course content b.Communication skills c.Use of teaching aids</p>
                    <input type="radio" name="elequant" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="elequant" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="elequant" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="elequant" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="elequant" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Course content</label>
                  <div class="col-sm-10">
                    <p class="help-block">Pace on which contents were covered</p>
                    <input type="radio" name="syllabus" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="syllabus" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="syllabus" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="syllabus" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="syllabus" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Motivation</label>
                  <div class="col-sm-10">
                    <p class="help-block">Motivation and inspiration for students</p>

                    <input type="radio" name="approachable" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="approachable" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="approachable" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="approachable" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="approachable" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Practical knowledge</label>
                  <div class="col-sm-10">
                    <p class="help-block">Support for the development of Students skill</p>
                    <p class="help-block">a.Practical knowledge b.Hands on training</p>

                    <input type="radio" name="grading" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="grading" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="grading" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="grading" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="grading" value="5" style="margin-right:10px; margin-left:10px">Excellent</option>
                    </select>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Clarity</label>
                  <div class="col-sm-10">
                    <p class="help-block">Clarity of expectations of students</p>
                    <input type="radio" name="clarity" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="clarity" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="clarity" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="clarity" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="clarity" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Feedback</label>
                  <div class="col-sm-10">
                    <p class="help-block">Feedback provided on students</p>

                    <input type="radio" name="feed" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="feed" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="feed" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="feed" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="feed" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Helping</label>
                  <div class="col-sm-10">
                    <p class="help-block">Willingness to offer help and advice to students</p>

                    <input type="radio" name="help" value="1" style="margin-right:10px; margin-left:10px">Very poor
                    <input type="radio" name="help" value="2" style="margin-right:10px; margin-left:10px">Poor
                    <input type="radio" name="help" value="3" style="margin-right:10px; margin-left:10px">Good
                    <input type="radio" name="help" value="4" style="margin-right:10px; margin-left:10px">Very Good
                    <input type="radio" name="help" value="5" style="margin-right:10px; margin-left:10px">Excellent

                  </div>
                </div>





                <!--<div class="form-group">
                    <label class="col-sm-2 control-label"><img src="captcha1.php"></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="vercode">
                      <span class="help-block">Enter the Code in the box to continue .( To let us know you are not a robot)</span>
                    </div>
                  </div>-->

                <button type="submit" class="btn btn-primary" name="feedback">Submit</button>
              </form>
          </div>
      </section>




      </div>
      </div>


      <!--color picker end-->

      <!--main content end-->
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