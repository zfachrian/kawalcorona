<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zfachrian | @yield('title') &mdash; Situs Data Realtime COVID-19</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
    <style type="text/css">
    .morris-hover.morris-default-style {
      display: none !important;
    }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>
  <body>

  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">


    <header class="templateux-navbar dark" role="banner">

      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-3 templateux-logo">
            <a href="https://id.linkedin.com/in/zfachrian" class="animsition-link"><b>Zfachrian</b></a>
          </div>
          <nav class="col-9 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
                <a href="/" class="animsition-link">Home</a>
              </li>
              <li><a href="/hotline" class="animsition-link">Hotline Corona</a></li>
              <li><a href="/about" class="animsition-link">About</a></li>
              <li><a href="/KebijakandanPrivasi" class="animsition-link">Kebijakan dan Privasi</a></li>
            </ul> <!-- .templateux-menu -->

          </nav> <!-- .site-nav -->


        </div> <!-- .row -->
      </div> <!-- .container -->
    </header> <!-- .templateux-navba -->

    @yield('content')

    <footer class="templateux-footer bg-light">
        <div class="container">

          <div class="row mb-5">
            <div class="col-md-4 pr-md-5">
              <div class="block-footer-widget">
                <h3>About</h3>
                <p>Kawal Corona untuk mengurai derasnya informasi seputar COVID-19.</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="row">

                <div class="col-md-4">
                  <div class="block-footer-widget">
                    <h3>Information</h3>
                    <ul class="list-unstyled">
                      <li><a href="/faq">FAQ</a></li>
                      <li><a href="https://kawalcovid19.blob.core.windows.net/viz/statistik_harian.html">Statistic</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="block-footer-widget">
                    <h3>About Us</h3>
                    <ul class="list-unstyled">
                      <li><a href="/about">About Us</a></li>
                      <li><a href="/KebijakandanPrivasi">Kebijakan dan Privasi</a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="block-footer-widget">
                    <h3>Connect With Me</h3>
                    <ul class="list-unstyled block-social">
                        <li><a href="https://id.linkedin.com/in/zfachrian" class="p-1"><span class="icon-linkedin-square"></span></a></li>
                        <li><a href="https://www.instagram.com/zfachrian/" class="p-1"><span class="icon-instagram"></span></a></li>
                        <li><a href="https://twitter.com/fachrian_9" class="p-1"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://github.com/zfachrian" class="p-1"><span class="icon-github"></span></a></li>
                      </ul>
                  </div>
                </div>
              </div> <!-- .row -->

            </div>
          </div> <!-- .row -->

          <div class="row pt-5 text-left">
            <div class="col-md-12 text-left"><p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p></div>
          </div> <!-- .row -->

        </div>
      </footer> <!-- .templateux-footer -->


     </div> <!-- .js-animsition -->


    <script src="{{asset('js/scripts-all.js')}}"></script>
    <script src="{{asset('js/main.j')}}s"></script>
    @yield('script')
    </body>
  </html>
