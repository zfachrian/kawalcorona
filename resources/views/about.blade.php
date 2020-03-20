@extends('templates.main')
@section('title') About @endsection
@section('content')

    <div class="templateux-cover" style="background-image: url(images/slider-1.jpg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h6 data-aos="fade-up">About</h6>
            <h1 class="heading mb-3" data-aos="fade-up">Kawal Corona untuk mengurai derasnya informasi seputar COVID-19</h1>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-cover -->



    <div class="templateux-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 block-heading-wrap" data-aos="fade-up">
            <h2 class="heading mb-5 text-center">Author</h2>
          </div>
          <div class="row" data-aos="fade-up">
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-3 block-person-1">
                        <img src="https://media-exp1.licdn.com/dms/image/C5103AQH2Tfw8q8PoXA/profile-displayphoto-shrink_200_200/0?e=1590019200&v=beta&t=W1SRCSYSF3Jr34rMbcoNnGAjf2wBRS5g4I0GvUKg2PI" alt="Free template by TemplateUX" class="img-fluid">
                      </div>
                      <div class="col-md-7">
                        <h3 class="heading">Zuhad Achmad Fachrian</h3>
                        <p class="subheading">Web Developer</p>
                        <ul class="list-unstyled block-social">
                            <li><a href="https://id.linkedin.com/in/zfachrian" class="p-1"><span class="icon-linkedin-square"></span></a></li>
                            <li><a href="https://www.instagram.com/zfachrian/" class="p-1"><span class="icon-instagram"></span></a></li>
                            <li><a href="https://twitter.com/fachrian_9" class="p-1"><span class="icon-twitter"></span></a></li>
                            <li><a href="https://github.com/zfachrian" class="p-1"><span class="icon-github"></span></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                <p>"Hello! My name is Zuhad Achmad Fachrian my life motto is "Life without limit". I’m Graphic Designer and Web developer with 1 Years Experience. I live in Surabaya, Indonesia, but I worked and still working with people all around the world. Take your time, check my resume, see my skills, some of my work, my experience, and when you are ready drop me a message.“</p>
              </div>
            </div>
        </div> <!-- .row -->
      </div> <!-- .container -->

      <div class="container">
        <div class="row">
          <div class="col-md-12 block-heading-wrap" data-aos="fade-up">
            <h2 class="heading mb-5 text-center">Reference</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-loop"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Data Source (API)</h3>
                <p> https://kawalcorona.com </br>
                    https://coronavirus-19-api.herokuapp.com </br>
                    https://www.worldometers.info/coronavirus</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-infinite-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Information</h3>
                <p> www.unicef.org/indonesia/id/coronavirus </br>
                    covid19.kemkes.go.id
              </div>
            </div> <!-- .block-icon-1 -->
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="media block-icon-1 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-lightbulb-outline"></span></div>
              <div class="media-body">
                <h3 class="h5 mb-4">Statistic</h3>
                <p>https://kawalcovid19.id/</p>
              </div>
            </div> <!-- .block-icon-1 -->
          </div>

        </div>

      </div>
    </div> <!-- .templateux-section -->
@endsection
