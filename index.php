<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Website - Easy Tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="media/logo.png" class="logo">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SPECIFICATION</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">CONNECT</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left-col">
                <h1>THE <br> REAL <br> SOUND</h1>
            </div>
            <div class="right-col"></div>
            <p>Click Here To Listen</p>
            <img src="media/play.png" id="icon">
    </div>

</div>

        <audio id="mySong"
            source src="media/Tukar-Jiwa.mp3">
        </audio>

<script>
    var mySong = document.getElementById("mySong");
    var icon = document.getElementById("icon");

    icon.onclick = function(){
        if(mySong.paused){
            mySong.play();
            icon.src = "media/pause.png";
        }else{
            mySong.pause();
            icon.src = "media/play.png"
        }
    }

</script>

</body>
</html>