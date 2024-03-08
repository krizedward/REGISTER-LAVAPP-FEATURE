<!-- <button class="button" onclick="toggleFullscreen()">Go Fullscreen</button>
<iframe id="myIframe" src="https://www.youtube.com/embed/IY4x85zqoJM" frameborder="0" allowfullscreen=""
  allow="accelerometer *; ambient-light-sensor *; autoplay *; camera *; clipboard-read *; clipboard-write *; encrypted-media *; fullscreen *; geolocation *; gyroscope *; magnetometer *; microphone *; midi *; payment *; picture-in-picture *; screen-wake-lock *; speaker *; sync-xhr *; usb *; web-share *; vibrate *; vr *"
  style="width: 100%; height: 500px;"
  class="mb-5">
</iframe> -->
<h4>Prosedur</h4>
<ol>
  <li>Dengarkan Video</li>
</ol>
<button class="button" onclick="toggleFullscreen()">Go Fullscreen</button>
<iframe id="myIframe" src="https://app.nearpod.com/?pin=Z4GY5&he=true" frameborder="0" allowfullscreen=""
  allow="accelerometer *; ambient-light-sensor *; autoplay *; camera *; clipboard-read *; clipboard-write *; encrypted-media *; fullscreen *; geolocation *; gyroscope *; magnetometer *; microphone *; midi *; payment *; picture-in-picture *; screen-wake-lock *; speaker *; sync-xhr *; usb *; web-share *; vibrate *; vr *"
  style="width: 100%; height: 500px;"
  class="mb-5">
</iframe>

<button class="button">
  Mark as done
</button>

<style>
.button {
  margin-bottom: 1rem;
}
</style>

<script>
function toggleFullscreen() {
  var elem = document.getElementById("myIframe");

  if (!document.fullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
      elem.msRequestFullscreen();
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.mozCancelFullScreen) { /* Firefox */
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE/Edge */
      document.msExitFullscreen();
    }
  }
}
</script>