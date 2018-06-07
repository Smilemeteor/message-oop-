<?php 
header('content-type:texthtml;charset-utf8');
include 'DB.class.php';
$db = mysql_db::getIntance();
$arr = $_POST;
$res=$db->insert('message',$arr);
if ($res) {
		echo "<script>alert('OK');parent.location.href='show.php'</script>";
	}else{
		echo "<script>alert('NO');parent.location.href='add.php'</script>";
	}
 ?>