<h1 style="text-align: center">ROT16pl</h1>
<?php

include 'rot16pl.php';
header('Content-Type: text/html; charset=utf-8');


?>

    <form  
     action="example.php" method="post">
        <textarea style="display: block; margin-left: auto;
    margin-right: auto; border-style: dotted ; color: blue" rows="20" cols="40" name="text"><?php  if(true===array_key_exists('text',$_POST))   echo ROT16pl::rot16($_POST['text'],ROT16pl::$tab_rot16pl);?></textarea><br>
        <input  style="display:block;margin-left:auto; margin-right:auto" type="submit" value="CODE / DECODE">
    </form>

<?php



