<?php 
session_start();

include("includes/header.php");
?>
<div class="content">
    <?php
    if(isset($_GET['login']))
    {
       include "login.php";
    }
    else if(isset($_GET['signup']))
    {
       include "sign.php";
    }
?>
</div>
<?php 
include("includes/footer.php");
