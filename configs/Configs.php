

<?php
/**
* Created by PhpStorm.
* User: Ben
* Date: 4/26/2017
* Time: 6:33 PM
*/

/*
Host
*/
define("dbHost", "your-host-here");

/*
Username
*/
define("dbUsername","your-user-name-here");

/*
Password
*/
define("dbPassword", "your-password-here");

/*
Database name
*/
define("dbDBname","your-database-name-here");

/*
* OpenFace Command
* I had to add the sudo because without it the program did not have the permissions to write point files
* To get sudo to work on apache I had to call sudo visudo and add www-data ALL=NOPASSWD: ALL
*
* Change this line to where OpenFace FaceLandmarkImg is installed
*/
define("cmdOpenFace", "sudo /path-to-open-face-here/openface/build/bin/FaceLandmarkImg");

/*
* EyeLike Command
*
* Change this line to where EyeLike is installed
* */
define("cmdEyeLike","sudo /path-to-eyeLike-here/eyeLike/build/bin/eyeLike");

/*
* openCV Command
*/
define("openCv", "opencv-command");

/*
* To call cli ** IMPORTANT **
*/
define("clP", "---");
define("cliF", "---");
define("cliC", "---");
define("cliR", "---");

/*
* For progress bar
*/
define("operations", "3");

?>


