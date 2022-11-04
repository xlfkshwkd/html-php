<?php
$fp =fopen("file.dat","r");
$str=fread($fp,filesize("file.dat"));
$arr=explode("\n",$str);
fclose($fp);
$fp=fopen("file.dat","w");
echo "
<style> .i1{color:white;background:black;height:100}
.i2{background:white;}
</style>
<table border=1 width=800>";
foreach($arr as $k=>$v){
	if($arr[$k]){
	if($k==$_GET[id]){
	$arr1=explode(":",$v);
	echo "<tr><th class=i1>작성자</th><th class=i2>{$arr1[0]}</th><th class=i1>제목</th><th class=i2>{$arr1[1]}</th><tr><tr style=height:500><th class=i1>메시지</th><th class=i2 colspan=3>{$arr1[2]}</th></tr>";
	$arr1[3]++;
	$str=implode(":",$arr1)."\n";
	}
	else $str=$arr[$k]."\n";
	fwrite($fp,$str);
	}
	}
fclose($fp);
?>

