<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CSRF Protection  by Synchronizer Token Pattern</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
  </head>
  <body>
  <style>

    body {

      background-color: skyblue;
    }

  </style>
 
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <b><a class="navbar-brand" href="index.php">CSRF Protection by Synchronizer Token Pattern </a></b>
      </div>
      <ul class="nav navbar-nav navbar-right">
	  <ul class="nav navbar-nav">
        <?php
          if (isset($_COOKIE['session_cookie'])) {
            echo "<li class='active'><a href='profile.php'>Profile</a></li>";
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (!isset($_COOKIE['session_cookie'])) {
            echo "<li><a href='login.php'><span class='glyphicon glyphicons-log-in'></span> Login </a></li>";
          }
        ?><?php
          if (isset($_COOKIE['session_cookie'])) {
            echo "<li><a href='logout.php'><span class='glyphicon glyphicons-log-out'></span> Logout</a></li>";
          }
        ?>
      </ul>
    </div>
  </nav>
   <h1 align='center'> CSRF Protection by Synchronizer Token Pattern </h1>
	<p align="center" style="padding: 50px">

Cross-Site Request Forgery (CSRF) is a type of attack that occurs when a malicious web site, email, blog, instant message,
or program causes a user’s web browser to perform an unwanted action on a trusted site for which the user is currently
authenticated. The impact of a successful CSRF attack is limited to the capabilities exposed by the vulnerable application. 
For example, this attack could result in a transfer of funds, changing a password, or purchasing an item in the user's context. 
In effect, CSRF attacks are used by an attacker to make a target system perform a function via the target's browser without
knowledge of the target user, at least until the unauthorized transaction has been committed.

Impacts of successful CSRF exploits vary greatly based on the privileges of each victim. When targeting a normal user, 
a successful CSRF attack can compromise end-user data and their associated functions. If the targeted end user is an
 administrator account, a CSRF attack can compromise the entire web application. Sites that are more likely to be attacked 
 by CSRF are community websites (social networking, email) or sites that have high dollar value accounts associated with 
 them (banks, stock brokerages, bill pay services). Utilizing social engineering, an attacker can embed malicious HTML or 
 JavaScript code into an email or website to request a specific 'task URL'. The task then executes with or without the user's 
 knowledge, either directly or by utilizing a Cross-Site Scripting flaw (ex: Samy MySpace Worm).</p>
    <br>
  </body>
</html>
