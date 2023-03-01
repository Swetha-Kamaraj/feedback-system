<?php
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION["admin"])) {
  $_SESSION["logout"] = "Logged out ";

  // header("location: index.php");
}
?> <!--header start-->

<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="http://www.aubit.edu.in/index.htm" class="logo">Feedback<span class="lite">Form</span></a>
  <!--logo end-->

  <div class="top-nav notification-row">
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">


      <!-- alert notification end-->
      <!-- user login dropdown start-->
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="profile-ava">
            <img alt="" src="images/profile.png" width="25">
          </span>
          <span class="username">Guest</span>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>
          <li>
            <a href="../index.php"><i class="icon_key_alt"></i> Log Out</a>
          </li>
        </ul>
      </li>
      <!-- user login dropdown end -->
    </ul>
    <!-- notificatoin dropdown end-->
  </div>
</header>
<!--header end-->