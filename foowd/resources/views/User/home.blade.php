  @extends('user.header')
  @section('content')
    @auth
      
      <div class="container marketing">

          <hr class="featurette-divider">

          @foreach ($list as $l)
          <div class="col-lg-4 menu-item">
                    <img
                      src="{{ asset ('storage/images/' .$l -> foto) }}"
                      class="menu-img img-fluid"
                      alt=""
                  />
                  <h4>Cream Soup</h4>
                  <p class="ingredients">KFC Indonesia</p>
                  <p class="price">Rp. 2.000</p>
                </div>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                <p><a class="btn btn-secondary" href="/checkout/{{$l -> id}}">Check Out &raquo;</a></p>

            <hr class="featurette-divider">
          @endforeach

      </div>
      <footer id="footer" class="footer">
        <div class="container">
          <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
              <i class="bi bi-geo-alt icon"></i>
              <div>
                <h4>Address</h4>
                <p>
                  Bojongsoang <br />
                  Bandung, BDG 14022 - IDN<br />
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
              <i class="bi bi-telephone icon"></i>
              <div>
                <h4>Customer Service</h4>
                <p>
                  <strong>Phone:</strong> +62 87832179458<br />
                  <strong>Email:</strong> foowd@gmail.com<br />
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
              <i class="bi bi-clock icon"></i>
              <div>
                <h4>Opening Hours</h4>
                <p>
                  <strong>Mon-Sun: 8AM</strong> - 23PM<br />
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Follow Us</h4>
              <div class="social-links d-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>foowd</span></strong
            >. All Rights Reserved
          </div>
        </div>
      </footer>
    @endauth
    @guest


    <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Tenth navbar example">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/"><img src="../Image/foowd.png" width = "100px" height=""  alt=""></a>
                
          
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href=#AboutUS>About Us</a>
                      <img src="" alt="">
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#Whats>What's Happening</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#Product>Menu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#>Contact Us</a>
                    </li>
                  </ul>
                </div>
                <a class="nav-link" href="/login"><button class="btn btn-book-a-table"  type="button">Log in / Sign Up</button></a>
              </div>
            </nav>        
      </header>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="ffff"/>
                <image href="/image/waste1.jpg" alt="" width="1920px" height="1080px" >
              </svg>
      
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Foodwaste</h1>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=" #ffff"/>
                <image href="/image/waste4.jpeg" alt="" width="1820px" height="788px">
              </svg>
      
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another Foodwaste</h1>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=" #ffff"/>
                <image href="/image/waste5.png" alt="" width="1920px" height="1080px"></svg>
      
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>We can reduce this</h1>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      
      
      <div class="container marketing">
          <hr class="featurette-divider">

          <div class="row featurette" id="AboutUs" >
          <div class="col-md-7">
              <h2 class="featurette-heading fw-normal lh-1">About Us</h2>
              <p class="lead"> Foowd merupakan layanan pemesanan makanan yang bertujuan
                untuk mengurangi food waste, dengan cara bekerja sama dengan
                beberapa restoran dan juga umkm dalam bidang fnb untuk menjual
                makanan sisa penjualan dengan harga murah agar tetap dapat
                dikonsumsi dan tidak dibuang secara percuma.</p>
          </div>
          <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#ffff"/>
                <image href="../Image/foowd.png" alt="" width="100%" height="100%">
              </svg>

          </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette" id = "Whats">
          <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading fw-normal lh-1">What's Happening Now</h2>
              <p class="lead">Sampah makanan (food waste & food loss) merupakan permasalahan
                global yang masih sulit teratasi hingga kini. Dalam
                pengertiannya, food waste merupakan makanan yang telah siap
                konsumsi oleh manusia namun dibuang begitu saja dan akhirnya
                menumpuk di tempat pembuangan akhir. Sementara, food loss
                merupakan sampah makanan yang berasal dari bahan pangan
                seperti sayuran, buah-buahan atau makanan yang masih mentah
                namun sudah tidak bisa diolah menjadi makanan dan akhirnya
                dibuang begitu saja.</p>
          </div>
          <div class="col-md-5 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#ffff"/>
                <image href="../Image/about-2.jpg" alt="" width="100%" height="100%">
              </svg>

          </div>
          </div>
          <hr class="featurette-divider">
          <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">
              <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="why-box">
                    <h3>Mengapa foowd?</h3>
                    <p>
                      Karena foowd turut bergerak dalam membantu mengurangi food
                      waste yang sangat sulit teratasi, dengan cara memberikan
                      platform bagi para masyarakat yang aware dan ingin turut
                      membantu menanggulangi masalah food waste ini. Dengan cara
                      yang mudah tentunya, yaitu dengan cara memesan makanan di
                      foowd kita bersama dapat membantu mengurangi jumlah food
                      waste yang terjadi di sekeliling kita.
                    </p>
                  </div>
                </div>

                <div class="col-lg-8 d-flex align-items-center">
                  <div class="row gy-4">
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                      <div
                        class="icon-box d-flex flex-column justify-content-center align-items-center"
                      >
                        <i class="bi bi-clipboard-data"></i>
                        <h4>Mengurangi angka food waste</h4>
                        <p>
                          Membeli makanan berarti ikut serta dalam membantu
                          mengatasi jumlah food waste yang ada di sekeliling kita.
                        </p>
                      </div>
                    </div>

    
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                      <div
                        class="icon-box d-flex flex-column justify-content-center align-items-center"
                      >
                        <i class="bi bi-gem"></i>
                        <h4>Turut membantu UMKM</h4>
                        <p>
                          Dengan membeli juga ikut membantu UMKM untuk menghabiskan
                          penjualan makanan mereka jika tidak terjual sesuai target.
                        </p>
                      </div>
                    </div>
    
                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                      <div
                        class="icon-box d-flex flex-column justify-content-center align-items-center"
                      >
                        <i class="bi bi-inboxes"></i>
                        <h4>Ikut berdonasi dengan foowd</h4>
                        <p>
                          Kalian juga bisa memberikan makanan yang kalian beli di
                          foowd kepada teman-teman kita yang lebih membutuhkan.
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <hr class="featurette-divider">

          <div class="row" id="Product">
            <h2 style="text-align: center;">Product</h2>
            <br><br><br><br>
              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#ffff"/>
                <image href="/image/nasgor.jpg" alt="" width="140px" height="140px"></svg></svg>
                <h2 class="fw-normal">Nasi Goreng</h2>
                <p>Nasi Goreng dari restoran terdekat yang pastinya menggunakan bahan bahan terbaik dan layak makan</p>
                
              </div>
              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#ffff"/>
                <image href="/image/bucket.png" alt="" width="140px" height="140px"></svg></svg>
                <h2 class="fw-normal">Ayam bucket</h2>
                <p>Ayam dalam bucket dari salah satu restoran fast food yang masih layak makan</p>
                
              </div>
              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#ffff"/>
                <image href="/image/udon.png" alt="" width="140px" height="140px"></svg></svg>
                <h2 class="fw-normal">Udon</h2>
                <p>Udon yang merupakan makanan khas negeri sakura yang tentunya enak dan layak makan</p>
                
              </div>
              <p align="right"><a href="/login" style="color: black">More...</a></p>
            </div>
            <hr class="featurette-divider">

      </div>
      <footer id="footer" class="footer">
        <div class="container">
          <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
              <i class="bi bi-geo-alt icon"></i>
              <div>
                <h4>Address</h4>
                <p>
                  Bojongsoang <br />
                  Bandung, BDG 14022 - IDN<br />
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
              <i class="bi bi-telephone icon"></i>
              <div>
                <h4>Customer Service</h4>
                <p>
                  <strong>Phone:</strong> +62 87832179458<br />
                  <strong>Email:</strong> foowd@gmail.com<br />
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
              <i class="bi bi-clock icon"></i>
              <div>
                <h4>Opening Hours</h4>
                <p>
                  <strong>Mon-Sun: 8AM</strong> - 23PM<br />
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Follow Us</h4>
              <div class="social-links d-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>foowd</span></strong
            >. All Rights Reserved
          </div>
        </div>
      </footer>
    </body>
  @endguest
  @endsection