<?php
require('conn.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM student WHERE USN='$id'"; 
$b=$db->query($query);
                if($b)
                {
                   header("location:studenttable.php");
                }
?>