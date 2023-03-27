var videos = document.querySelectorAll('.slider-container video');
var currentVideoIndex = 0;
var intervalId = null;

function playNextVideo() {
  var currentVideo = videos[currentVideoIndex];
  currentVideo.pause();
  currentVideo.classList.remove('active');
  currentVideoIndex = (currentVideoIndex + 1) % videos.length;
  var nextVideo = videos[currentVideoIndex];
  nextVideo.currentTime = 0;
  nextVideo.play();
  nextVideo.classList.add('active');
}

function startSlider() {
  intervalId = setInterval(playNextVideo, 5000);
}

function stopSlider() {
  clearInterval(intervalId);
}

function handleSliderInteraction() {
  stopSlider();
  startSlider();
}

videos[currentVideoIndex].play();

startSlider();

document.querySelector('.slider-container').addEventListener('mousedown', handleSliderInteraction);
document.querySelector('.slider-container').addEventListener('touchstart', handleSliderInteraction);
