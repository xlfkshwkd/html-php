<?php 
$name =$_GET['id'];
$pw =$_GET['pw'];
?>
<html>
<head>
    <title>
        기말과제 메인페이지
    </title>
    <style>
        .d1{display:grid; grid-template-rows: 1fr 8fr 1fr; height:100%;}

        .i1{width: 12%; height: 7%; position: absolute; top:2.5%; left: 6%; border-radius: 10px;}
        .i2{position: absolute; top:13%; left: 30%;}
        .i3{position: absolute; top:15%; left: 78%;}
        .i4{position: absolute; top:37%; left: 78%;}
        .i5{position: absolute; top:59%; left: 78%;}
        .i6{position: absolute; top:81%; left: 78%;}
        

        .d2:nth-child(1){background: black;} 
        .d2:nth-child(3){background: black;}

        .d21{display:inline-block; color: white; margin-left: 23%; margin-top: 1.5%; font-size: 25; }
        .d22{display:inline-block; color: white; font-size: 25; margin-left: 5%; }
        .d23{display:inline-block; color: white; font-size: 25; margin-left: 5%; }
        .d24{display:inline-block; color: white; font-size: 17; position: absolute; top:4.5%; right:5%}
        .d25{display:inline-block; color: white; font-size: 17; position: absolute; top:4.5%; right:11%}

        .d21:hover a{color:rgb(238, 101, 10);}
        .d21:hover~.f1{left:0;}    
        .d22:hover a{color:rgb(238, 101, 10);}
        .d22:hover~.f2{left:0}
        .d23:hover a{color:rgb(238, 101, 10);}
        .d23:hover~.f3{left:0}
        .d24:hover a{color:rgb(238, 101, 10);}
        .d25:hover a{color:rgb(238, 101, 10);}
        .f1:hover{left:0;}
        .f2:hover{left:0}
        .f3:hover{left:0}

        .f1{width:99%; height:60%; background-color: black;
            position: absolute; left:-105%; margin: 0 0 0 0.5%;}
        .f2{width:99%; height:60%; background-color: black;
            position: absolute; left:-105%; margin: 0 0 0 0.5%;}  
        .f3{width:99%; height:60%; background-color: black;
            position: absolute; left:-105%; margin: 0 0 0 0.5%;}  
   
        a{text-decoration: none;}

        a:link{color:white; }
        a:visited{color: white;}

        .span1{margin-top: 100; margin-left:15% ; color:white;
        font-size: 20;}
        .span2{font-size: 20;}
        .span2:nth-child(1){ margin-top: 100; margin-left:15%; color:white; width: 200;}
        .span2:nth-child(2){ margin-top: 100; margin-left:15% ; color:white; width: 200;}
        .span2:nth-child(3){ margin-top: 100; margin-left:15% ; color:white; width: 200;}
        .span1:hover a{color:rgb(238, 101, 10);}
        .span2:hover a{color:rgb(238, 101, 10);}
        table{margin-left: 60%;  position: absolute; top:1%; right:8%}
           .black_overlay{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        border: 16px solid orange;
        background-color: white;
        z-index:1002;
        overflow: auto;
	color:black; 
    </style>

</head>
<body style="background-image:url(black1xnaud.jpg);
    background-repeat: no-repeat;
    background-position:top center;
    background-size: cover;">
    <div class=d1>
        <div class=d2>
            <div class=d21><a href=#>홈</a></div>
            <div class=d22><a href=#>캐릭터</a></div>
            <div class=d23><a href=black6.html>공략/루트</a></div>
            <div class=d23><a href=black4.html>게임소개</a></div>
            <div class=d24><a href=black4.html><?php echo $name?> 님 접속</a></div>
            <div class=d25></a></div>
            <div class=f1>
                <div class=span1><a href=black4.html>메인 내용</a>
               </div>
            </div>
            <div class=f2>
                <div class=span1><a href="black5.html">캐릭터 게시판</a></div>
                <div class=span1> <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">공지사항</a>
    <div id="light" class="white_content">패치노트 0.20.3 (2020. 12. 2).<br><br> 캐릭터<br>아드리아나<br>듀오 모드에서 주는 피해가 감소합니다. 92%--88%<br>키아라 낙인Q 데미지 , 뒤틀린 기도W의 쿨타임을 너프합니다.<br> <br>피오라 <br>팡뜨Q <br> 피격 범위가 늘어 납니다.<br>아따끄 꽁뽀제W 두번재 공격 피해 공격력계수를 너프합니다.<br><br>리 다이린
<br>레벨 당 체력 재생 0.09 → 0.07
<br><br>시스템 개선<br>LP시스템에서 등수 점수 비율이 줄어들면서, 전체 평균 획득 LP가 조금 줄어들었습니다. 플레이어 처치(솔로 모드) 또는 상대 팀 전멸(듀오 및 스쿼드 모드) 시 얻는 보너스 점수가 좀 더 추가됩니다.<br><br>버그 수정 <br>상자 열 때의 대사가 지나치게 자주 나오던 버그 수정
맹룡과강(쌍절곤 무기 스킬)이 충전 중에 마우스 커서 방향으로 인디케이터가 움직이는 버그 수정
실비아의 특정 효과음이 지직 거리는 문제 수정했습니다..
    <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">닫기</a></div>
    <div id="fade" class="black_overlay"></div></div>
                <div class=span1>
                   </div>
            </div>
          <a href="black.html"><img class= i1 src="log.jpg" ></a>
        </div>
        <div class=d2> 
           
             <img class= i2 src="black1.jpg" width= 500 height=300>
             <a href="https://www.playeternalreturn.com/ko/category/patch-notes-kr/" target="_blank"><img class= i3 src="patch.png" width= 300 height=150></a>
             <a href="https://www.youtube.com/watch?v=3pJepC-QPCM"  target="_blank"><img class= i4 src="thf.png" width= 300 height=150></a>
             <a href="https://www.youtube.com/watch?v=QQSId9Zu1HY&feature=youtu.be"  target="_blank"><img class= i5 src="mu.png" width= 300 height=150></a>
             <a href="https://steamcommunity.com/games/1049590/announcements/detail/2935744583748883519/?l=korean"  target="_blank"><img class= i6 src="stop.png" width= 300 height=150></a>
        </div>   
    </div>
  
 <script>
        var n=0;
        var image=document.getElementsByClassName('i2');
        setInterval(function()
        {
            if(n==5)
                n=0;
            if(n==4){
               image[0].src='black1.jpg';
               n++;
            }
            else if(n==3){
               image[0].src='black2.jpg';
               n++;
            }
            else if(n==2){
               image[0].src='black3.jpg';
               n++;
            }
            else if(n==1){
               image[0].src='black4.jpg';
               n++;
            }
            else if(n==0){
               image[0].src='black5.png';
               n++;
            }
        }
           ,2000);
    </script>
          
</body>
</html>
