<?php
/*
 *  Free Room Finder Website
 *
 *  Copyright (C) 2013 Amit Jain, Anthony Jihn, Jonathan Gillett, and Joseph Heron
 *  All rights reserved.
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/*
 * The default template for the free room finder website header, this is for when a user
 * is not logged in
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- The title of the page -->
    <title>Free Room Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Room Finder">
    <meta name="author" content="Computer Science Club">

	<!-- CSS styles -->
		<style type="text/css">
		  body {
		    padding-top: 60px;
		    padding-bottom: 20px;
		  }
		</style>

    <!-- CSS styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


    <!-- HTML5 shiv, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  
  <!--<script src="js/bootstrap-datepicker.js">
    $('.datepicker').datepicker();
    </script>-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="index.php">
            Free Room Finder
          </a>
            <ul class="nav pull-right">
              <li class="divider-vertical"></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Sign in
                  <b class="caret"></b>
                </a>
                <div class="dropdown-menu login-dropdown">
                    <form class="form-horizontal" action="login.php" method="post" accept-charset="UTF-8">
                    <input id="login_username" class="input-large login-form" required type="text" maxlength="31" pattern="^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$" name="login_username" placeholder="Username" />
                    <input id="login_password" class="input-large login-form" required type="password" maxlength="31" pattern="^[a-zA-Z0-9\`\~\!\@\#\$\%\^\&amp;\*\(\)\-\_\=\+\|\&lt;\&gt;\?]{6,31}$" name="login_password" placeholder="Password"/>
                    <input id="login_remember" class="login-checkbox" type="checkbox" name="login_remember" checked="checked" value="1" />
                    <label class="string optional" for="login_remember">Remember me</label>
                    <input id="login_button" class="btn btn-primary" class="login-button" type="submit" name="login_button" value="Sign In" />
                    <p>
                      <a target="_blank" href="http://www.cs-club.ca/reset">Forgot/Reset Password</a>
                    </p>
                  </form>
                </div>
              </li>
            </ul>
        </div>
      </div>
    </div>
    <div class="container">