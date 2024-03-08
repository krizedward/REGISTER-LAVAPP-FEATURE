<style>
  .button-done {
    width: 100%;
    font-size: 18px;
    background: #3a5c9e;
    color: white;
    text-align: center;
    border-radius: 10px;
    padding: 10px;
    margin-top:25px;
    font-weight: 700;
  }
</style>
<!-- style -->

<div id="latihan">
  <!-- <button class="button" onclick="toggleFullscreen()">Go Fullscreen</button> -->
  <iframe id="myIframe" src="https://app.nearpod.com/?pin=GC43X&he=true" frameborder="0" allowfullscreen=""
    allow="accelerometer; ambient-light-sensor; autoplay; camera; clipboard-read; clipboard-write; encrypted-media; fullscreen; geolocation; gyroscope; magnetometer; microphone; midi; payment; picture-in-picture; screen-wake-lock; speaker; sync-xhr; usb; web-share; vibrate; vr;"
    style="width: 100%; height: 500px;"
    >
  </iframe>

  <button class="button-done" onclick="doneAlert()">
    Mark as done
  </button>
</div>
<!-- html -->

<script>
function toggleFullscreen() {
  var elem = document.getElementById("myIframe");
  
  if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}
</script>
<!-- script -->
