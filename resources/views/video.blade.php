<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
<center>
<video id="Video1" width="320" height="240" >
    //  Replace these with your own video files.
    <source src="movie.mp4" type="video/mp4" />
    <source src="demo.ogv" type="video/ogg" />
    HTML5 Video is required for this example.
    <a href="demo.mp4">Download the video</a> file.
</video>

<div id="buttonbar">
    <button id="restart" onclick="restart();">[]</button>
    <button id="rew" onclick="skip(-10)">&lt;&lt;</button>
    <button id="play" onclick="vidplay();">&gt;</button>
    <button id="fastFwd" onclick="skip(10)">&gt;&gt;</button>
</div>
</center>

<div id="aaa"></div>
</body>
<script>
    function goToURL() {
        location.href = '/add';

    }
</script>
<script type="text/javascript">

    function vidplay() {
        var video = document.getElementById("Video1");
        var button = document.getElementById("play");
        if (video.paused) {
            video.play();
            add();
            button.textContent = "||";
        } else {
            video.pause();
            button.textContent = ">";
        }
    }

    function restart() {
        var video = document.getElementById("Video1");
        video.currentTime = 0;
    }

    function skip(value) {
        var video = document.getElementById("Video1");
        video.currentTime += value;
    }
</script>



<script>
    function add() {
        $("#aaa").html('<object data="/add">');

    }


</script>

</html>


