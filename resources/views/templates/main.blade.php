<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zfachrian | @yield('title') &mdash; Situs Data Realtime COVID-19</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
              {{-- <li>
                <a href="services.html" class="animsition-link">Services</a>
                <ul>
                  <li><a href="#">Service 1</a></li>
                  <li><a href="#">Service 2</a></li>
                  <li>
                    <a href="#">Service 3</a>
                    <ul>
                      <li><a href="#">Service 1</a></li>
                      <li><a href="#">Service 2</a></li>
                      <li>
                        <a href="#">Service 3</a>
                        <ul>
                          <li><a href="#">Service 1</a></li>
                          <li><a href="#">Service 2</a></li>
                          <li><a href="#">Service 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li> --}}
              <li><a href="/contact" class="animsition-link">Contact</a></li>
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
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="row">
                <div class="col-md-3">
                  <div class="block-footer-widget">
                    <h3>Learn More</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">How it works?</a></li>
                      <li><a href="#">Useful Tools</a></li>
                      <li><a href="#">Pricing</a></li>
                      <li><a href="#">Sitemap</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="block-footer-widget">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Help Desk</a></li>
                      <li><a href="#">Knowledgebase</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="block-footer-widget">
                    <h3>About Us</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Careers</a></li>
                      <li><a href="#">Terms of Service</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="block-footer-widget">
                    <a href="#" class="btn btn-primary mb-3">Download for free</a>
                    <p>Connect With Us</p>
                    <ul class="list-unstyled block-social">
                      <li><a href="#" class="p-1"><span class="icon-facebook-square"></span></a></li>
                      <li><a href="#" class="p-1"><span class="icon-twitter"></span></a></li>
                      <li><a href="#" class="p-1"><span class="icon-github"></span></a></li>
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
