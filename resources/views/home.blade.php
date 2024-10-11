

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="img/max1.jpg">
  <title>MAXMEDIA - IT Development</title>


  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">



  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/templatemo-digimedia-v3.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.css') }}">

</head>

<body>




  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <div class="logo">
              <img src="img/qr1.png" height="75px">
            </div>

            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#blog">Product</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li>
              <li class="scroll-to-section">
                <div class="border-first-button"><a href="#contact">Address</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>

          </nav>
        </div>
      </div>
    </div>
  </header>

  <img src="img/wa1.jpg" style="width:100%">
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>MAXMEDIA</h6>
                    <h2>Maximum your internet connection</h2>
                    <p>PT. Bangsawan Cyberindo adalah perusahaan yang bergerak dalam jasa teknologi informasi.
                      Perusahaan ini lahir pada tahun 2000, didirikan pada awalnya hanya beberapa kumpulan assisten
                      laboratorium komputer Universitas Budi Luhur. Namun pada perkembangannya, perusahaan ini kemudian
                      mulai melangkah untuk terjun ke dalam dunia Reseach and development khususnya pada software.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Address</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="img/tower3.png">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="img/a.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Apa itu <em>MAXMEDIA</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>Maximum Media (MAXMEDIA) adalah Penyedia Jasa Internet dan IT Development, dengan pengalaman kami di
                  dunia IT kami memberikan layanan dedicated internet untuk Anda pengguna jasa internet.</p>
                <p>Pelayanan kami dapat digunakan untuk keperluan kantor, industri, lembaga pendidikan, game center,
                  cafe maupun instanssi pemerintahan. Kami mempunyai link backbone langsung ke gedung Cyber atau
                  Indonesia Data Center (IDC) sehingga kami dapat memberikan layanan yang baik dan stabil.</p>
                <P>Dengan dukungan support 24 Jam sehari serta layanan online melalui No WA yang tertera pada website
                  kami. team kami selalu siap menjaga koneksi internet di tempat Anda.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>What Our <em>Provides</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                  @foreach ($services as $service)
                        <div>
                          <div class="thumb">
                          <span class="icon"><img src="{{ asset('storage/' . $service->icon) }}" alt=""></span>
                          {{ $service->name }}
                          </div>
                        </div>
                        @endforeach

                  </div>
                </div>
                
                <div class="col-lg-12">
                  <ul class="nacc">
                  @foreach ($services as $service)
                        <li class="">
                          <div>
                            <div class="thumb">
                              <div class="row">
                                <div class="col-lg-6 align-self-center">
                                  <div class="left-text">
                                  <h4>{{ $service->name }}</h4>
                                  <p>{{ $service->deskripsi }}</p>
                                  </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                  <div class="right-image">
                                  <img src="{{ asset('storage/' . $service->image) }}" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div id="blog" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>PRODUCT</h6>
            <h4>Our <em>Menu</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                  @foreach ($products as $product) 
                        <div>
                          <div class="thumb">
                          <span class="icon"><img src="{{ asset('storage/' . $product->icon) }}" alt=""></span>
                          {{ $product->name }}
                          </div>
                        </div>
                        @endforeach   

                  </div>
                </div>
                
                <div class="col-lg-12">
                  <ul class="nacc">
                  @foreach ($products as $product)
                        <li class="">
                          <div>
                            <div class="thumb">
                              <div class="row">
                                <div class="col-lg-6 align-self-center">
                                  <div class="left-text">
                                  <h4>{{ $product->name }}</h4>
                                  <p>{{ $product->description }}</p>
                                  </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                  <div class="right-image">
                                  <img src="{{ asset('storage/' . $product->image) }}" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="https://wa.me/6287890324370" class="whatsapp-button" target="_blank">
    <i class="fa fa-whatsapp"></i>
  </a>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
        
            <form id="contact" action="https://api.web3forms.com/submit" method="POST">
              <input type="hidden" name="access_key" value="dac43101-fa31-4d1c-b5b9-cd28fda2d7b7">
              <div class="row">
                <div class="col-lg-12">
                  <div class="contact-dec">
                  </div>
                </div>
                <div class="col-lg-5">
                  <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                      marginheight="0" marginwidth="0"
                      src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=pt%20bangsawan%20cyberindo+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps systems</a></iframe></div>
                </div>
                <div class="col-lg-7">
                  <div class="fill-form">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="img/phone-icon.png" alt="">
                            <a href="#">(021) 7300-056</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="img/email-icon.png" alt="">
                            <a href="#">info@maxmedia.co.id</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="info-post">
                          <div class="icon">
                            <img src="img/location-icon.png" alt="">
                            <a href="#">Komplek Pinang Griya</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                          <input type="text" name="email" id="email" placeholder="Your Email" required="">
                        </fieldset>
                        <fieldset>
                          <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <textarea name="message" type="text" class="form-control" id="message" placeholder="Message"
                            required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                        </fieldset>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 MAXMEDIA

          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/animation.js') }}"></script>
  <script src="{{ asset('js/imagesloaded.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>