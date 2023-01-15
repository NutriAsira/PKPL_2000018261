<!-- this was made by Habbatul Qolbi H -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="homepage_style/css_slider/slider240.css">
<link rel="stylesheet" href="homepage_style/homepage_style.css">
<link rel="stylesheet" href="homepage_style/homeColor.css">

<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="navi">
      <a href="index.php" style="border-bottom: 4px solid red;">Home</a>
      <a href="login.php">Login (Admin)</a>
      <a href="register.php">Register (Admin)</a>
      <a href="crud.php">Produk)</a>
</div>
<div class="header">
<div class="HeaderFont"><b>DigVice</b></div>
  <p>DigVice is place to sell many visual graphic art.</p>
</div>


<div class="row">
    <div class="column"style=" width: 50%;">
        <div class="galery">
        <div class="slider">
          <div class="slider-items">
              <div  class="item active">
                 <img src="gambarPoject/slide1.png" />
                 <div class="caption">
                    G4 with Blender
                 </div>
              </div>
              <div  class="item">
                 <img src="gambarPoject/scifi1.png" />
                 <div class="caption">
                    Star Rendered with Blender
                 </div>
              </div>
              <div  class="item">
                 <img src="gambarPoject/slide3.png" />
                   <div class="caption">
                      Scifi Theme with Blender
                   </div>
              </div>
          </div>

        <!-- slider controls -->
        <div class="left-slide"><</div>
        <div class="right-slide">></div>
        <!-- slider controls -->
        </div>
        <script src="js_slider/slider1.js"></script>
        </div>
  </div>
  
<div class="column" style=" width: 50%;">
    <div class="topnav" style="background-color: #555555;padding-left:5px;">
      <a id="pil1" style="cursor: pointer;" onclick="javascript:changeText1();">Apa Itu Digvice?</a>
      <a id="pil2" style="cursor: pointer;" onclick="javascript:changeText2();">Untuk Apa DigVice?</a>
      <a id="pil3" style="cursor: pointer;" onclick="javascript:changeText3();">Menggunakan DigVice?</a>
    </div>

    
    <div class="DigviceFont">
        <div style="padding-left: 40px;padding-right: 40px;padding-top: 50px;">
        <div style="height: 50%;">
            <h1 id="2">Selamat Datang di Website Kami</h1>
            <p align="justify" id="1">Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.</p>

                <!--Nav Red Underline by Habbatul Qolbi H -->
                <script>
                    var hitungx=0;
                    var hitungy=0;
                    var hitungz=0;
                    var hitung1=false;
                    var hitung2=false;
                    var hitung3=false;
                    function changeText1(){ 
                        var element = document.getElementById("1");
                        var element2 = document.getElementById("2");
                        var element3 = document.getElementById("pil1");
                        var pengecualian1 =document.getElementById("pil2");
                        var pengecualian2 =document.getElementById("pil3");
                        element.innerHTML = "DigVice adalah layanan tempat menjual berbagai Visual Digital Art. Beberapa seniman telah memilih website ini untuk menjadi galery tempat menampung karya mereka dan sekaligus menjadi tempat untuk menjual asset mereka. Dari mulai desain 2D hingga desain 3D bisa anda temukan pada website ini.";
                        element2.innerHTML= "Apa Itu DigVice?";
                        element3.style.borderBottom = "4px solid red";
                        pengecualian1.style.border="0px";
                        pengecualian2.style.border="0px";
                        hitungx++;
                        hitungy=0;
                        hitungz=0;
                        hitung1=true;
                        if(hitungx>=2 && hitung1==true){
                            element2.innerHTML="Selamat Datang di Website Kami";
                            element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
                            element3.style.borderBottom = "0px";
                            hitung1=false;hitungx=0;}

                    }

                    function changeText2(){
                        var element = document.getElementById("1");
                        var element2 = document.getElementById("2");
                        var element3 = document.getElementById("pil2");
                        var pengecualian1 =document.getElementById("pil1");
                        var pengecualian2 =document.getElementById("pil3");
                        element.innerHTML = "Digvice dibuat dalam rangka menyalurkan kreativitas para seniman digital. Sehingga mereka bisa menjual asset dan karya yang telah mereka ciptakan untuk dinikmati oleh penikmatnya, dan juga sebagai media untuk menjual karya-karya mereka.";
                        element2.innerHTML= "Untuk Apa DigVice Dibuat?";
                        element3.style.borderBottom = "4px solid red";
                        pengecualian1.style.border="0px";
                        pengecualian2.style.border="0px";
                        hitungy++;
                        hitungx=0;
                        hitungz=0;
                        hitung2=true;
                        if(hitungy>=2 && hitung2==true){
                            element2.innerHTML="Selamat Datang di Website Kami";
                            element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
                            element3.style.borderBottom = "0px";
                            hitung2=false;hitungy=0;}  
                     
                    }
                    function changeText3(){
                        var element = document.getElementById("1");
                        var element2 = document.getElementById("2");
                        var element3 = document.getElementById("pil3");
                        var pengecualian1 =document.getElementById("pil1");
                        var pengecualian2 =document.getElementById("pil2");
                        element.innerHTML = "asdasdasd asdasdasd asdasdasdas asdasdasdas asdasdasdasd asdasdasdasd asdasdasdasd asdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd asdasdasdasd.";
                        element2.innerHTML= "Oi Kiyomasaaa Nande Nande?";
                        element3.style.borderBottom = "4px solid red";
                        pengecualian1.style.border="0px";
                        pengecualian2.style.border="0px";                    
                        hitungz++;
                        hitungx=0;
                        hitungy=0;
                        hitung3=true;
                        if(hitungz>=2 && hitung3==true){
                            element2.innerHTML="Selamat Datang di Website Kami";
                            element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
                            element3.style.borderBottom = "0px";
                            hitung3=false;hitungz=0;}  
                    }
                </script> <!--Made by hq.han 240 -->
            </div>
        </div>
    </div>

        <div class="footerImg">

                      <div class="column">
                           <img src="gambarPoject/Alien t shirt.jpg" style="width: 220px;">
                     </div>                   
                      <div class="column" style="position: absolute;margin-left: 220px;">
                            <img src="gambarPoject/pertama.jpg" style=" width: 220px;">
                     </div>
                     <div class="column" style="position: absolute;margin-left: 440px;">
                            <img src="gambarPoject/pamer tengkorak.jpg" style="width: 220px;">
                     </div>
                      <div class="column" style="position: absolute;margin-left: 660px;background-color: gray;width: 300px;height: 275px;background-image:url('gambarPoject/klikk.png');">
                            <center><h1 style="margin-top: 100px;">Click For<br> More!!!</h1></center>
                     </div>

        </div>
                  
          
</div>

    <div class="footer">
             <h3 style="padding-top:30px;padding-bottom:30.4px;">Halaman ini dibuat oleh <a style="color:white;text-decoration:none;"href="https://www.instagram.com/hq.han/?hl=id">@Hq.han</a></h3>       
    </div>
</body>
</html>