<?php
include '../config.php';
$admin =new Admin();

if(isset($_GET['sub']))
{
    $ctid=$_GET['category']; 
    echo"<script>
    window.location='../catproduct.php?ctid=$ctid';
    </script>";
}
?>