<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TumbasKuy</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Masuk Akun</div>
        <div class="title signup">Daftar Akun</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Masuk</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
                    <?php 
              if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                  echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                  echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                  echo "Anda harus login untuk mengakses halaman admin";
                }
              }
              ?>
          <form action="cek_login.php" class="login" method="post">
            <pre></pre>
            <div class="field">
              <input type="text" placeholder="Masukan Email " name="email" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" name="password" required />
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Masuk Akun" />
            </div>
            <div class="signup-link">
              Belum punya akun? <a href="">Daftar sekarang</a>
            </div>
          </form>
          <form action="simpan-registrasi.php" class="signup" method="post" onsubmit="submitForm(event)" id="signupForm">
            <div class="field">
              <input type="text" placeholder="Masukan Nama" name="nama" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Masukan Email" name="email" required />
            </div>
            <div class="field">
        <input type="password" placeholder="Masukan Password" name="password" id="password" required />
    </div>
    <div class="field">
        <input type="password" placeholder="Ulangi password" name="re_password" id="re_password" required />
    </div>
    <div class="field">
              <input type="level" placeholder="level 'user'" name="level" required />
            </div>
    <div class="field btn">
        <div class="btn-layer"></div>
        <input type="submit" value="Daftar Akun" />
    </div>
            <div class="signup-link">
              Sudah punya akun? <a href="">Masuk</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="login.js"></script>
<script>
        // Alert setelah registrasi
        function submitForm(event) {
        event.preventDefault(); // Mencegah form melakukan submit secara default
    
        const form = document.getElementById("signupForm");
        const password = document.getElementById("password").value;
        const rePassword = document.getElementById("re_password").value;
    
        // Lakukan validasi untuk memastikan password sesuai
        if (password !== rePassword) {
            alert("Password tidak cocok. Harap masukkan password yang sama.");
            return;
        }
    
        // Buat objek FormData untuk mengirim data form ke server
        const formData = new FormData(form);
    
        // Kirim data ke server menggunakan AJAX
        fetch(form.action, {
            method: form.method,
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Tampilkan pesan alert jika pendaftaran berhasil
            alert("Registrasi berhasil. Akun telah dibuat.");
            window.location.href = 'login.php'; // Ganti login.php dengan halaman login Anda
        })
        .catch(error => {
            // Tampilkan pesan alert jika terjadi kesalahan pada server
            alert("Terjadi kesalahan saat melakukan pendaftaran. Silakan coba lagi.");
        });
    }

</script>
</html>
