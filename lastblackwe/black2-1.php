<?php
$name=$_GET['name'];
?> 
<html>
<head>
    <style>  body{background-image : url('blackthro.jpg');background-size:100% 100%;
    
        background-repeat : no-repeat; color:black;}
        div{margin:150 auto; width:700; font-family: 맑은 고딕;font-size:30px}
        .i1{width: 15%; height: 10%; position: absolute; top:3%; left: 43%; border-radius: 25px;}
        </style>
    
        
    </head>
    <body>
        <div>
            <a href="black.html"><img class= i1 src="log.jpg" ></a>
             <br><br><?php echo $name ?>님  <br>회원가입이 완료되었습니다.
            </div>
     </body>
</html>
