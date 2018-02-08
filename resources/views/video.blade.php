<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title></title>
</head>

<body>

<!--  Centrer le contenu  -->
    <div class="container" style="align-items: center">
        <center>
            <video id="Video1" width="400" height="320" >
                <!-- La fenétre du video  -->
                <source src="movie.mp4" type="video/mp4" />
                <a href="demo.mp4">Download the video</a> file.
            </video>
                <!-- La bar du media player  -->
            <div id="buttonbar">
                <button id="restart" onclick="restart();">[]</button>
                <button id="rew" onclick="skip(-10)">&lt;&lt;</button>
                <button id="play" onclick="vidplay();">&gt;</button>
                <button id="fastFwd" onclick="skip(10)">&gt;&gt;</button>
            </div>
        </center>
    </div>

 <!--  ici le lien /add s'exucute pour ajouter les données dans la base des données  -->
<div id="aaa"></div>

</body>

<!--  Appel de la bibliothèque jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--  Appel la fonction qui génere le media player  -->
<script type="text/javascript" src="js/playvideo.js"> </script>

<!--  Appel la fonction qui ajoute les données dans la base -->
<script type="text/javascript" src="js/add.js"></script>

</html>


