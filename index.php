<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tumbas Kuy</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Tumbas<span>Kuy.</span></a>

      <div class="navbar-nav">
        <a href="#beranda">Beranda</a>
        <a href="#about">Tentang Kami</a>
        <a href="#produk">Produk</a>
        <a href="#tim">Tim Kami</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" class="cart" id="shopping-cart">
          <i data-feather="shopping-cart"></i>
          <p id="count">0</p></a
        >
        <a href="logout.php" class="cta">Logout</a>
        <a href="#" id="humburger-menu"> <i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar Akhir-->

    <!-- Banner -->
    <section class="hero" id="beranda">
      <main class="content">
        <h1>Mari Berbelanja Dengan <span>Bahagia</span></h1>
        <p>Kami menjual produk berkualitas tinggi dari berbagai kategori</p>
        <a href="produk.php" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Banner Akhir -->

    <!-- Tentang -->
    <section class="about" id="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa Harus Memilih Di Toko Kami</h3>
          <p>
            Selamat datang di Tumbas Kuy! Toko online terpercaya di mana Anda
            dapat menemukan koleksi fashion terbaru dan terkini untuk memenuhi
            kebutuhan fashion Anda. Kami berkomitmen untuk memberikan pengalaman
            berbelanja yang menyenangkan dan memuaskan bagi para pelanggan kami
            dengan menyediakan beragam produk fashion yang stylish dan up to
            date.
          </p>
          <p>
            Kami berkomitmen bahwa kepuasan dan kepercayaan Anda menjadi
            prioritas kami. Dengan layanan pelanggan yang responsif dan ramah,
            kami siap membantu menjawab pertanyaan Anda, memberikan saran
            fashion, atau menangani permintaan khusus Anda.
          </p>
        </div>
      </div>
    </section>
    <!-- Tentang Akhir -->

    <!-- Produk -->
    <section class="produk" id="produk">
      <h2><span>Produk</span> Kami</h2>
      <p>
        Memasuki waktu indonesia bagian self reward. Kami menjual berbagai
        produk kualitas terbaik!
      </p>

      <div class="row">
        <div class="produk-card">
          <img class="produk-card-img" src="img/produk.jpg" alt="Shirt" />
          <h3 class="produk-card-title">- Formal Suit -</h3>
          <p class="produk-card-price">IDR 150.000</p>
        </div>
        <div class="produk-card">
          <img class="produk-card-img" src="img/produk.jpg" alt="Shirt" />
          <h3 class="produk-card-title">- Plain T-shirt -</h3>
          <p class="produk-card-price">IDR 150.000</p>
        </div>
        <div class="produk-card">
          <img class="produk-card-img" src="img/produk.jpg" alt="Shirt" />
          <h3 class="produk-card-title">- Kacamata -</h3>
          <p class="produk-card-price">IDR 150.000</p>
        </div>
        <div class="produk-card">
          <img class="produk-card-img" src="img/produk.jpg" alt="Shirt" />
          <h3 class="produk-card-title">- Jaket Pria -</h3>
          <p class="produk-card-price">IDR 150.000</p>
        </div>
        <div class="produk-card">
          <img class="produk-card-img" src="img/produk.jpg" alt="Shirt" />
          <h3 class="produk-card-title">- Jam Tangan -</h3>
          <p class="produk-card-price">IDR 150.000</p>
        </div>
      </div>
      <a href="produk.php" class="cta">Selengkapnya</a>
    </section>
    <!-- Produk Akhir -->

    <!-- Team -->
    <section class="tim" id="tim">
      <h2><span>Tim</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus
        odio temporibus beatae itaque dolor voluptate.
      </p>
      <div class="row1">
        <!-- Column 1-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="" />
            </div>
            <h3>Nuno</h3>
            <p>Founder</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 2-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img
                src="https://media.licdn.com/dms/image/D5603AQE8ts_Rf-juIg/profile-displayphoto-shrink_800_800/0/1689873593511?e=1695254400&v=beta&t=qiDgv1Dcq-XjkWQf4TjFLyUORW4HCBlz1skFzsNd1Gs"
              />
            </div>
            <h3>Atika Mahmudah</h3>
            <p>Grapic Designer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.linkedin.com/in/atikamahmudah/">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- Column 3-->
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="" />
            </div>
            <h3>Gisel</h3>
            <p>Front End Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="" />
            </div>
            <h3>Wildan</h3>
            <p>Back End Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img
                src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/359781138_795711908870801_6476497662629426698_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHwRS6YBe1OAL7C5RupQPD2lkHdW22Mg_WWQd1bbYyD9dU0sx1R90TDyJMwimDNcxacq8IpwghDJT32q5BDtIoe&_nc_ohc=Un7yylK1olAAX_DzJ-7&_nc_ht=scontent.fjog3-1.fna&oh=00_AfDhbqix1A2Hl4ehGHxk-eyingMTpq5urk0B-8twt1zw5A&oe=64BF664B"
              />
            </div>
            <h3>Rizqi Zulqornain</h3>
            <p>FULLSTACK WEB Developer</p>
            <div class="icons">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team AKhir -->

    <!-- Testimoni -->
    <section class="testimoni" id="testimoni">
      <h2><span>Testimoni</span></h2>
      <div class="outerdiv">
        <div class="innerdiv">
          <!-- div1 -->
          <div class="div1 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img
                  src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/359781138_795711908870801_6476497662629426698_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHwRS6YBe1OAL7C5RupQPD2lkHdW22Mg_WWQd1bbYyD9dU0sx1R90TDyJMwimDNcxacq8IpwghDJT32q5BDtIoe&_nc_ohc=Un7yylK1olAAX_DzJ-7&_nc_ht=scontent.fjog3-1.fna&oh=00_AfDhbqix1A2Hl4ehGHxk-eyingMTpq5urk0B-8twt1zw5A&oe=64BF664B"
                  alt=""
                />
              </div>
              <div class="detbox">
                <p class="name">Rizqi Zulqornain</p>
                <p class="designation">Pelanggan Terbaik</p>
              </div>
            </div>
            <div class="review">
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eveniet, repellendus culpa ipsa accusantium aspernatur eum quos.
                At tempora ipsum vel?
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea,
                eius delectus in exercitationem vitae iste nostrum facilis
                recusandae saepe minima necessitatibus ratione natus maxime
                repudiandae. Reprehenderit, dolore! Quod vero voluptatibus
                dolore nostrum! Accusamus ratione repellat, doloremque est atque
                inventore expedita!
              </p>
            </div>
          </div>
          <!-- div2 -->
          <div class="div2 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img
                  src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/359781138_795711908870801_6476497662629426698_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHwRS6YBe1OAL7C5RupQPD2lkHdW22Mg_WWQd1bbYyD9dU0sx1R90TDyJMwimDNcxacq8IpwghDJT32q5BDtIoe&_nc_ohc=Un7yylK1olAAX_DzJ-7&_nc_ht=scontent.fjog3-1.fna&oh=00_AfDhbqix1A2Hl4ehGHxk-eyingMTpq5urk0B-8twt1zw5A&oe=64BF664B"
                  alt=""
                />
              </div>
              <div class="detbox">
                <p class="name">Rizqi Zulqornain</p>
                <p class="designation">Pelanggan Terbaik</p>
              </div>
            </div>
            <div class="review">
              <h4>Lorem ipsum dolor sit amet.</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
                dolorum dolores totam?
              </p>
            </div>
          </div>
          <!-- div3 -->
          <div class="div3 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img
                  src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/359781138_795711908870801_6476497662629426698_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHwRS6YBe1OAL7C5RupQPD2lkHdW22Mg_WWQd1bbYyD9dU0sx1R90TDyJMwimDNcxacq8IpwghDJT32q5BDtIoe&_nc_ohc=Un7yylK1olAAX_DzJ-7&_nc_ht=scontent.fjog3-1.fna&oh=00_AfDhbqix1A2Hl4ehGHxk-eyingMTpq5urk0B-8twt1zw5A&oe=64BF664B"
                  alt=""
                />
              </div>
              <div class="detbox">
                <p class="name dark">Rizqi Zulqornain</p>
                <p class="designation dark">Pelanggan Terbaik</p>
              </div>
            </div>
            <div class="review dark">
              <h4>Lorem ipsum dolor sit amet.</h4>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Doloremque architecto quis neque ex obcaecati doloribus
                similique iure. Libero expedita fugit eaque atque perspiciatis
                sapiente, quas, eius accusantium ratione nulla obcaecati
                temporibus rem laborum est ducimus explicabo fugiat harum
                aliquam? Distinctio.
              </p>
            </div>
          </div>
          <!-- div4 -->
          <div class="div4 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img
                  src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/359781138_795711908870801_6476497662629426698_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHwRS6YBe1OAL7C5RupQPD2lkHdW22Mg_WWQd1bbYyD9dU0sx1R90TDyJMwimDNcxacq8IpwghDJT32q5BDtIoe&_nc_ohc=Un7yylK1olAAX_DzJ-7&_nc_ht=scontent.fjog3-1.fna&oh=00_AfDhbqix1A2Hl4ehGHxk-eyingMTpq5urk0B-8twt1zw5A&oe=64BF664B"
                  alt=""
                />
              </div>
              <div class="detbox">
                <p class="name dark">Rizqi Zulqornain</p>
                <p class="designation dark">Pelanggan Terbaik</p>
              </div>
            </div>
            <div class="review dark">
              <h4>Lorem ipsum dolor sit amet.</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Pariatur ipsam repellat non optio aliquid placeat corrupti
                velit, dolorem nulla officiis.
              </p>
            </div>
          </div>
          <!-- div5 -->
          <div class="div5 eachdiv">
            <div class="userdetails">
              <div class="imgbox">
                <img
                  src="https://scontent.fjog3-1.fna.fbcdn.net/v/t39.30808-1/359781138_795711908870801_6476497662629426698_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeHwRS6YBe1OAL7C5RupQPD2lkHdW22Mg_WWQd1bbYyD9dU0sx1R90TDyJMwimDNcxacq8IpwghDJT32q5BDtIoe&_nc_ohc=Un7yylK1olAAX_DzJ-7&_nc_ht=scontent.fjog3-1.fna&oh=00_AfDhbqix1A2Hl4ehGHxk-eyingMTpq5urk0B-8twt1zw5A&oe=64BF664B"
                  alt=""
                />
              </div>
              <div class="detbox">
                <p class="name">Rizqi Zulqornain</p>
                <p class="designation">Pelanggan Terbaik</p>
              </div>
            </div>
            <div class="review">
              <h4>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est,
                molestiae numquam nisi officia voluptatum esse sint praesentium
                optio aspernatur placeat.
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Suscipit at, consectetur repudiandae doloremque odio nihil
                sapiente ipsum deleniti assumenda perspiciatis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni AKhir -->

    <!-- Kontak -->
    <section class="contact" id="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus
        odio temporibus beatae itaque dolor voluptate.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7248023199777!2d109.01628137328856!3d-7.712649976403355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6512bf1e8d045b%3A0x3198d942ee271d20!2sUniversitas%20Al-Irsyad%20Cilacap!5e0!3m2!1sid!2sid!4v1689994799003!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="simpan.php" method="post" id="myForm" onsubmit="return handleSubmit()">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Masukan nama"  name="nama" id="namaEror" required/>
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="email" placeholder="Masukan email" name="email" id="emailEror" required/>
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="Masukan No Hp" name="no_hp" id="noHpEror" required/>
          </div>
          <div class="input-group">
            <i data-feather="message-square"></i>
            <textarea
              name="pesan"
              id="pesanEror"
              cols="30"
              rows="2"
              placeholder="Masukan Pesan"
              required
            ></textarea>
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- Kontak AKhir -->

    <!-- Footer -->
    <footer>
      <div class="socials">
        <a href=""><i data-feather="instagram"></i></a>
        <a href=""><i data-feather="twitter"></i></a>
        <a href=""><i data-feather="facebook"></i></a>
      </div>

      <div class="credit">
        <p>Created by <span>TEAM</span> . &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer Akhir-->

    <!-- Feather Icon -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
    <script>
        function handleSubmit() {
            // Tampilkan alert setelah submit
            alert("Terima Kasih Kak!");
            return true; // Untuk melanjutkan submit form (kirimkan data ke server)
        }
    </script>
  </body>
</html>
