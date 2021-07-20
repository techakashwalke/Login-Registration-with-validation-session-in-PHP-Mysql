<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "groupbook";

$con = mysqli_connect($server,$user,$password,$db);

if ($con){
    ?>
    <script>
    alert("connection Successfull");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("No Connection");
    </script>
    <?php
}
    
?>