<style>
  .button {
    margin-bottom: 1rem;
  }

  .title h4 {
    border-bottom: 3px solid orange; /* Atur ketebalan dan warna border bawah */
    padding-bottom: 10px;
    font-style: normal;
    font-weight: 700;
    line-height: 30px;
    color: #1E1E1E;
  }

  p {
    font-style: normal;
    font-weight: 500;
    line-height: 30px;
  }

  .custom-badge {
    width: 150px;
    font-size: 18px;
    background: #d9d8da;
    color: black;
    text-align: center;
    border-radius: 10px;
    padding: 10px;
    margin-top:25px;
    font-weight: 700;
  }

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

  .link {
    text-decoration: none;
    font-size: 28px;
  }
</style>
<!-- css -->

<div id="materi">
  <div class="title">
    <h4>Deskripsi</h4>
  </div>
  
  <div class="card mt-4 mb-3">
    <div class="card-body">
      <p>
        Anda akan menyimak rekaman audio dan 
        mengerjakan latihan tentang basa-basi 
        untuk bertanya kabar tetangga.
      </p>
      <p>
        Simakan ini memuat percakapan dua orang, yaitu Andi dan Pak Tris. Andi (30 tahun) sedang mencuci mobil. Dia menyapa Pak Tris (55 tahun) saat beliau lewat di depan rumahnya.  
        Anda akan menyimak rekaman audio dan mengerjakan latihan tentang basa-basi untuk bertanya kabar seseorang pada tingkat dasar.
      </p>
      <p>
        Simakan ini memuat percakapan dua orang, yaitu Pak Tris (55 tahun) dan Andi (30 tahun). Mereka adalah saudara jauh. Andi mengunjungi rumah Pak Tris untuk bersilaturahmi.
      </p>
    </div>
    
  </div>
  
  <div class="title">
    <h4>Kosakata target</h4>
  </div>
  
  <div id="label" class="mb-3">
    <div class="custom-badge">Apa Kabar ?</div>
    <div class="custom-badge">Kata - Kata</div>
    <div class="custom-badge">Halo</div>
  </div>

  <div class="title mt-4">
    <h4>Youtube</h4>
  </div>

  <div id="link">
    <!-- <a class="link" href="https://www.youtube.com/" target="_blank">KLIK LINK</a> -->

    <iframe id="myIframe" src="https://www.youtube.com/embed/IY4x85zqoJM" frameborder="0" allowfullscreen=""
      allow="accelerometer *; ambient-light-sensor *; autoplay *; camera *; clipboard-read *; clipboard-write *; encrypted-media *; fullscreen *; geolocation *; gyroscope *; magnetometer *; microphone *; midi *; payment *; picture-in-picture *; screen-wake-lock *; speaker *; sync-xhr *; usb *; web-share *; vibrate *; vr *"
      style="width: 100%; height: 500px;"
      class="mb-5 mt-3">
    </iframe>
  </div>

  <button class="button-done" onclick="doneAlert()">
    Mark as done
  </button>

  <!-- <a href="#" class="btn btn-danger stretched-link" onclick="sweetAlert()">See Profile</a> -->
</div>
<!-- html -->

<script>
  function doneAlert() {
    Swal.fire({
      type: 'success',
      title: 'Done...',
    })
  }
</script>
<!-- script -->