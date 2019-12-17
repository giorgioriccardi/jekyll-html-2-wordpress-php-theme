var player;
var cursorX;
var isMouseDown = false;
var isDragging = false;
var progress = document.getElementsByClassName("progress")[0];
var progressBar = document.getElementsByClassName("progress-bar")[0];
var updateProgress = setInterval(function() { videoProgress() }, 1000);

document.onmousedown = function() { isMouseDown = true };
document.onmouseup = function() { isMouseDown = false; isDragging = false };
document.onmousemove = function(e){
    cursorX = e.pageX;
    isDragging = true;
}

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    events: {
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  updateProgress;
}

function videoProgress() {
  currentWidth = 100 * (player.getCurrentTime() - player.getDuration()) / player.getDuration() + 100;

  progressBar.style.width = currentWidth + '%';
}

function setNewDuration(e) {
  var newBarPosition = 100 * (cursorX - progress.scrollWidth) / progress.scrollWidth + 100;
  var newTime = (newBarPosition / 100) * player.getDuration();

  if(isMouseDown) {
    clearInterval(updateProgress);
    progressBar.style.width = newBarPosition + '%';
  }
  if(!isMouseDown && !isDragging) {
    player.seekTo(newTime, true);
    updateProgress  = setInterval(function() { videoProgress() }, 1000);
  }
}

function pauseVideo() {
 player.pauseVideo() 
}


