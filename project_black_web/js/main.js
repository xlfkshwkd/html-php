var n=0;
 var image=document.getElementsByClassName('i2');
 setInterval(function()
 {
     if(n==5)
         n=0;
     else if(n==4){
        image[0].src='images/black1.jpg';
        n++;
     }
     else if(n==3){
        image[0].src='images/black2.jpg';
        n++;
     }
     else if(n==2){
        image[0].src='images/black3.jpg';
        n++;
     }
     else if(n==1){
        image[0].src='images/black4.jpg';
        n++;
     }
     else if(n==0){
        image[0].src='images/black5.png';
        n++;
     }
 }
    ,2000);
