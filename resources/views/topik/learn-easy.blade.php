<!-- <button class="button" onclick="toggleFullscreen()">Go Fullscreen</button>
<iframe id="myIframe" src="https://app.nearpod.com/?pin=Z4GY5&he=true" frameborder="0" allowfullscreen=""
  allow="accelerometer *; ambient-light-sensor *; autoplay *; camera *; clipboard-read *; clipboard-write *; encrypted-media *; fullscreen *; geolocation *; gyroscope *; magnetometer *; microphone *; midi *; payment *; picture-in-picture *; screen-wake-lock *; speaker *; sync-xhr *; usb *; web-share *; vibrate *; vr *"
  style="width: 100%; height: 500px;"
  class="mb-5">
</iframe> -->
<h4>Deskripsi :</h4>
<p>
Anda akan menyimak rekaman audio dan mengerjakan latihan tentang basa-basi untuk bertanya kabar tetangga.
</p>

<p>
Simakan ini memuat percakapan dua orang, yaitu Andi dan Pak Tris. Andi (30 tahun) sedang mencuci mobil. Dia menyapa Pak Tris (55 tahun) saat beliau lewat di depan rumahnya.  
Anda akan menyimak rekaman audio dan mengerjakan latihan tentang basa-basi untuk bertanya kabar seseorang pada tingkat dasar.
</p>

<p>
Simakan ini memuat percakapan dua orang, yaitu Pak Tris (55 tahun) dan Andi (30 tahun). Mereka adalah saudara jauh. Andi mengunjungi rumah Pak Tris untuk bersilaturahmi.
</p>

<h4>Kosakata target:</h4>
<p>Apa kabar?</p>
<br>
<h4>Youtube link (tautan)</h4>
<a href="#">Link</a>
<br>
<button class="button">
  Mark as done
</button>
<!-- baru -->
<!-- <iframe width="600" height="514" src="https://app.nearpod.com/?pin=Z4GY5&he=true" frameborder="0" allowfullscreen="" allow="accelerometer *; ambient-light-sensor *; autoplay *; camera *; clipboard-read *; clipboard-write *; encrypted-media *; fullscreen *; geolocation *; gyroscope *; magnetometer *; microphone *; midi *; payment *; picture-in-picture *; screen-wake-lock *; speaker *; sync-xhr *; usb *; web-share *; vibrate *; vr *"></iframe> -->
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