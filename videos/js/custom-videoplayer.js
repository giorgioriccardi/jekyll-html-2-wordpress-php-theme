// Loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Video Player
var player;
var videoId;
var $nav = document.getElementsByClassName("video-navigation")[0];
var $progress = document.getElementsByClassName("progress")[0];
var $progressBar = document.getElementsByClassName("progress-bar")[0];
var $currentTime = document.getElementsByClassName("current-time")[0];
var $totalTime = document.getElementsByClassName("total-time")[0];
var cursorX;
var isMouseDown = false;
var isDragging = true;
var playing = false;
document.onmousedown = function() { isMouseDown = true };
document.onmouseup = function() { isMouseDown = false; isDragging = false };
document.onmousemove = function(e){
    cursorX = e.pageX;
    isDragging = true;
}
// Making Minutes and Seconds pretty :)
function pad(n) {
    return (n < 10) ? ("0" + n) : n;
}
function transformToMinutes(e) {
  var minutes = parseInt(Math.floor(e / 60));
  var seconds = parseInt(e - minutes * 60);
  return minutes+':'+pad(seconds)
}

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    playerVars: {
      showinfo: 0,
      controls: 0
    },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}

var updateProgress = setInterval(function() { videoProgress() }, 1000);

function onPlayerReady(e) {
  updateProgress;
}

function onPlayerStateChange(e) {
  if (e.data == YT.PlayerState.PLAYING) {
    $nav.className = 'playing';

    // Set How many minutes in total for the video
    $totalTime.innerHTML = transformToMinutes(e.target.getDuration());
  }
  if (e.data == YT.PlayerState.PAUSED) {
    $nav.className = '';
  }
  if (e.data == YT.PlayerState.CUED) {
    $nav.className = '';
    $progressBar.style.width = '0%';
    $totalTime.innerHTML = '0:00'
  }
}

function videoProgress() {
  currentWidth = 100 * (player.getCurrentTime() - player.getDuration()) / player.getDuration() + 100;

  $progressBar.style.width = currentWidth + '%';
  //Set current time for the video
  $currentTime.innerHTML = transformToMinutes(player.getCurrentTime());
}

function setNewVideoDuration(e) {
  var newBarPosition = 100 * (cursorX - $progress.scrollWidth) / $progress.scrollWidth + 100;
  var newTime = (newBarPosition / 100) * player.getDuration();

  if(isMouseDown) {
    playing = true;
    clearInterval(updateProgress);
    $progressBar.style.width = newBarPosition + '%';
  }
  if(!isMouseDown && !isDragging && playing) {
    playing = false;
    player.seekTo(newTime, true);
    updateProgress  = setInterval(function() { videoProgress() }, 1000);
  }
}

function togglePlayVideo(e) {
  playing = !playing;

  if(playing) {
    player.pauseVideo();
  }

  if(!playing) {
    player.playVideo();
  }
}


