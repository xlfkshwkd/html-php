<?php
$arr=file("file.dat");
echo ("
<style>
a:link{color:black;}
a:visited{color:black;}
  a{text-decoration: none;}
</style>
<table border=3 width=800 bordercolor=black>
	<caption align=top><h1 style= font-size:20>재키 자유 게시판<h1> </caption>
	<tr style =color:white><th style=background-color:black;>번호</th><th style= width=300;background-color:black;>이름</th><th style= background-color:black;>제목</th><th style=background-color:black;>조회수</th></tr>");
foreach($arr as $k=>$str){
	if($arr[$k]){
	$i=$k+1;
	$arr1=explode(":",$str);
	echo "<tr style=background-color:white;bordercolor=black><th>{$i}</th>
		<th>{$arr1[0]}</th>
		<th><a href=show.php?id={$k}>{$arr1[1]}</a></th><th>{$arr1[3]}</th></tr>";
}
}
echo "</table>";
?>
<html><style>
  img{position: absolute; top:3.5%; left: 56%;}
</style>
<a href =form.html target =if><img src="글.png" width= 120 height =30></a>
</html>
  
