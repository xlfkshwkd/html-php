<?php
$_GET[count]=0;
$a=$_GET[name];
$b=$_GET[wr];
$c=$_GET[memo];
$str=implode(":",$_GET)."\n";
$fp=fopen("file.dat","a");
fwrite($fp,$str);
fclose($fp);
echo "<h1 style= color:white ;position:absolute auto>업로드 되었습니다.</h1>";
echo"<meta http-equiv= ... '3;url=list.php'>";
?>

