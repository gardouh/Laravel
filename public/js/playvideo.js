function vidplay() {
    var video = document.getElementById("Video1");
    var button = document.getElementById("play");
    if (video.paused) {
        video.play();
        add();
        button.textContent = "||";
    } else {
        video.pause();
        pause();
        diff();
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