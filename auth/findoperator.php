<?php include "session/db.php";
$num=(isset($_REQUEST['mobile']))?$sp->real_escape_string(trim($_REQUEST['mobile'])):'';
$sql= "select * from operator where num=$num";
$result= mysqli_query($sp, $sql);
$row = mysqli_fetch_assoc($result);
echo strtoupper($row['opr']);
?>