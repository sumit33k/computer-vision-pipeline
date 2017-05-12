<?php
session_start();
include 'video_render_functions.php';
/**
 * Created by PhpStorm.
 * User: Wai
 * Functions called are done by Ben (functions in video_render_functions.php)
 * Date: 5/12/2017
 * Time: 2:07 AM
 */

if($pa == $argv[2]){
    $vID = $argv[1];
    eyeTrack($vID);
    openFace($vID);
    parsePointFilesAndInsert($vID);
}else{
    error_log('video_render.php accessed without post');
    ?>
    <script lang="javascript">
        window.location.href = "/index.php";
    </script>
    <?php
}
?>