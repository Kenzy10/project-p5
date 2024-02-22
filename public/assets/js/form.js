document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('myVideo');
    var markSuccessBtn = document.getElementById('markSuccessBtn');
    var successMessage = document.getElementById('successMessage');
  
    // Event listener for marking video as success
    markSuccessBtn.addEventListener('click', function() {
      // Set video as success
      videoSuccess();
    });
  
    // Event listener for tracking video progress
    video.addEventListener('timeupdate', function() {
      // If video reaches end, set video as success
      if (video.currentTime === video.duration) {
        videoSuccess();
      }
    });
  
    function videoSuccess() {
      // Hide video player and show success message
      document.getElementById('videoPlayer').style.display = 'none';
      successMessage.style.display = 'block';
    }
  });