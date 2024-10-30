<?php 

  header ("Content-type: text/css");
	// load some things, just in case they aren't yet
//	if (! function_exists('plugin_dir_url')) {
//		include_once( '/wp-admin/includes/plugin.php');}
  

  
  ?>
/*	CSS for custom longin page */

<style type="text/css"> 
.login #backtoblog a, .login #nav a, .login h1 a {
    color: #000 !important;
    background-image: url('login/logo-signin.png') !important;
    background-size: auto !important;
    width: auto !important;

}

 /*.login h1 a, .login h1 a, .login h1 a{
	background-image:url('login/logo-signin.png') !important;
	background-size:auto !important;
	width:auto !important;
}*/
/*style the labels to make the text darker, and the form input boxes to give them a more rounded look*/
.login label {
	font-size: 12px;
	color: #555555;
}
body.login {
	background-image:url('login/forest-sunrise-small.jpg') !important;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
}
.login input[type="text"] {
	background-color: #ffffff;
	border-color: #dddddd;
	-webkit-border-radius: 4px;
}
.login input[type="password"] {
	background-color: #ffffff;
	border-color: #dddddd;
	-webkit-border-radius: 4px;
}

/*style the button to make it a lighter shade of blue*/
.login .button-primary {
	width: 120px;
	float:right;
	background-color:#17a8e3 !important;
	background: -webkit-gradient(linear, left top, left bottom, from(#17a8e3), to(#17a8e3));
	background: -webkit-linear-gradient(top, #17a8e3, #17a8e3);
	background: -moz-linear-gradient(top, #17a8e3, #17a8e3);
	background: -ms-linear-gradient(top, #17a8e3, #17a8e3);
	background: -o-linear-gradient(top, #17a8e3, #17a8e3);
	background-image: -ms-linear-gradient(top, #17a8e3 0%, #17a8e3 100%);
	color: #ffffff;
	-webkit-border-radius: 4px;
	border: 1px solid #0d9ed9;
	}
.login .button-primary:hover {
	background-color: #17a8e3 !important;
	background: -webkit-gradient(linear, left top, left bottom, from(#17a8e3), to(#0d9ed9 ));
	background: -webkit-linear-gradient(top, #17a8e3, #0d9ed9 );
	background: -moz-linear-gradient(top, #17a8e3, #0d9ed9 );
	background: -ms-linear-gradient(top, #17a8e3, #0d9ed9 );
	background: -o-linear-gradient(top, #17a8e3, #0d9ed9 );
	background-image: -ms-linear-gradient(top, #0b436e 0%, #0d9ed9 100%);
	color: #fff;
	-webkit-border-radius: 4px;
	border: 1px solid #0d9ed9;
}
.login .button-primary:active {
	background-color: #17a8e3 !important;
	background: -webkit-gradient(linear, left top, left bottom, from(#0d9ed9), to(#17a8e3));
	background: -webkit-linear-gradient(top, #0d9ed9, #17a8e3);
	background: -moz-linear-gradient(top, #0d9ed9, #17a8e3);
	background: -ms-linear-gradient(top, #0d9ed9, #17a8e3);
	background: -o-linear-gradient(top, #0d9ed9, #17a8e3);
	background-image: -ms-linear-gradient(top, #0d9ed9 0%, #17a8e3 100%);
	color: #fff;
	-webkit-border-radius: 4px;
	border: 1px solid #0d9ed9;
}
/* for the lost password/visit site links */
.login #backtoblog a, .login #nav a, .login h1 a {
	color: #000 !important;
}
p#nav, p#backtoblog {
	background-color: #fff;
}
 </style>';
