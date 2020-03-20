@extends('templates.main')
@section('title') Data Covid-19 @endsection
@section('script')

<script>
     $.ajax({
    url: "https://coronavirus-19-api.herokuapp.com/countries/indonesia",
    type: "get",
    dataType: "json",
    success: function (result) {
        console.log(result["country"])
    }
});

</script>
<script>
     $.ajax({
    url: "https://coronavirus-19-api.herokuapp.com/countries/indonesia",
    type: "get",
    dataType: "json",
    success: function (result) {
        console.log(result["country"])
        Morris.Bar({
        element: 'myfirstchart',
        data: [
            {x: 'Positif', z: result["cases"]},
            {x: 'Sembuh', z: result["recovered"]},
            {x: 'Meninggal', z: result["deaths"]},

        ],
        xkey: 'x',
        ykeys: ['y', 'z', 'a'],
        labels: ['Y', 'Z', 'A']
        }).on('click', function(i, row){
        console.log(i, row);
        });
    }
});


</script>

@endsection

@section('content')

<?php
    function curl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $headers   = array();
        $headers[] = 'Authority: api.kawalcorona.com';
        $headers[] = 'Pragma: no-cache';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Upgrade-Insecure-Requests: 1';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36';
        $headers[] = 'Sec-Fetch-Mode: navigate';
        $headers[] = 'Sec-Fetch-User: ?1';
        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8,application/signed-exchange;v=b3';
        $headers[] = 'Sec-Fetch-Site: none';
        $headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $exec = curl_exec($ch);
        return $exec;
        curl_close($ch);
    }
        $api    = "https://coronavirus-19-api.herokuapp.com/all";
        $njiir  = curl($api);
        $json   = json_decode($njiir, true);

        $api1    = "https://coronavirus-19-api.herokuapp.com/countries/indonesia";
        $njiir1  = curl($api1);
        $indo    = json_decode($njiir1, true);

        $api2    = "https://coronavirus-19-api.herokuapp.com/countries";
        $njiir2  = curl($api2);
        $all     = json_decode($njiir2, true);
?>

    <div class="templateux-cover" style="background-image: url(images/slider-1.jpg); !important height: 100px;">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-lg-6 text-center order-lg-2">
            {{-- <a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="templateux-block-play"><span class="ion-ios-play"></span></a> --}}
          </div>
          <div class="col-lg-6 order-lg-1">
            <h1 class="heading mb-3" data-aos="fade-up">Kawal Corona.</h1>
            <p class="lead mb-5" data-aos="fade-up"  data-aos-delay="100">Coronavirus Global & Indonesia Live Data.</p>
            {{-- <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary py-3 px-4">Free Download</a></p> --}}
          </div>

        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 templateux-overlap">
            <div class="row">
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                <div class="media block-icon-1 d-block text-left">
                    <a href="https://www.unicef.org/indonesia/id/coronavirus" style="text-decoration:none;">
                        <div class="icon mb-3"><span class="ion-ios-lightbulb-outline"></span></div>
                        <div class="media-body">
                          <h3 class="h5 mb-4">Unicef Indonesia</h3>
                          <p>Novel coronavirus (COVID-19): Hal-hal yang perlu Anda ketahui</p>
                        </div>
                    </a>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="700">
                <div class="media block-icon-1 d-block text-left">
                    <a href="https://infeksiemerging.kemkes.go.id/" style="text-decoration:none;">
                        <div class="icon mb-3"><span class="ion-ios-home-outline"></span></div>
                        <div class="media-body">
                          <h3 class="h5 mb-4">Kementerian Kesehatan</h3>
                          <p>Media Informasi Resmi Penyakit Infeksi Emerging.</p>
                        </div>
                    </a>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="800">
                <div class="media block-icon-1 d-block text-left">
                    <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona" style="text-decoration:none;">
                        <div class="icon mb-3"><span class="ion-ios-medical-outline"></span></div>
                        <div class="media-body">
                          <h3 class="h5 mb-4">Kompas</h3>
                          <p>Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona.</p>
                        </div>
                    </a>
                </div> <!-- .block-icon-1 -->
              </div>
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="800">
                <div class="media block-icon-1 d-block text-left">
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" style="text-decoration:none;">
                        <div class="icon mb-3"><span class="ion-ios-infinite-outline"></span></div>
                        <div class="media-body">
                          <h3 class="h5 mb-4">WHO</h3>
                          <p>Coronavirus Disease (COVID-19) Advice for The Public.</p>
                        </div>
                    </a>
                </div> <!-- .block-icon-1 -->
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> <!-- .templateux-section -->



    <div class="templateux-section bg-primary" id="templateux-counter-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 block-heading-wrap" data-aos="fade-up">
                  <h2 class="heading mb-2 text-center" style="color: #fff"><b>Informasi Global Covid-19</b></h2>
                  <h6 class="heading mb-5 text-center">Last Update at : {{date("Y-m-d h:i:s a")}}</h6>
                </div>
              </div> <!-- .row -->
          <div class="row">
            <div class="col-md">
              <div class="templateux-counter text-center">
                <span class="templateux-number" data-number="{{$json['cases']}}">0</span>
                <span class="templateux-label"><b>Total Positif</b></span>
              </div>
            </div>
            <div class="col-md">
              <div class="templateux-counter text-center">
                <span class="templateux-number" data-number="{{$json['recovered']}}">0</span>
                <span class="templateux-label"><b>Total Sembuh</b></span>
              </div>
            </div>
            <div class="col-md">
              <div class="templateux-counter text-center">
                <span class="templateux-number" data-number="{{$json['deaths']}}">0</span>
                <span class="templateux-label"><b>Total Meninggal</b></span>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div> <!-- .templateux-section -->

    <div class="templateux-section">
      <div class="container">
        {{-- <div class="row justify-content-center">
          <div class="col-md-12 block-heading-wrap" data-aos="fade-up">
            <h2 class="heading mb-5 text-center">Good Design is a Good Start</h2>
          </div>
        </div> <!-- .row --> --}}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
            <div class="card overflow-hidden bg-white work-progress">
                <div class="card-header">
                    <h3 class="card-title">Statistik Kasus Coronavirus di Indonesia</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-lg-12">
                            {{-- <div class="chart" id="myfirstchart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="582" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.21875" y="261.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,261.5H557" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="202.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,202.375H557" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="143.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,143.25H557" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="84.125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,84.125H557" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,25H557" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="466.1282275212637" y="274" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="245.86949422843256" y="274" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.75)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="none" stroke="#3c8dbc" d="M61.71875,229.97455C75.56014580801944,229.64345,103.24293742405833,231.97001875,117.08433323207777,228.65015C130.92572904009722,225.33028124999998,158.60852065613608,204.88545396174862,172.44991646415554,203.41559999999998C186.14086231774,201.96172271174862,213.52275402490886,219.76070625,227.21369987849332,216.95522499999998C240.90464573207777,214.14974374999997,268.2865374392467,183.76925099043714,281.9774832928311,180.97175C295.81887910085055,178.14350724043715,323.5016707168894,191.51078124999998,337.34306652490886,194.45225C351.1844623329283,197.39371875,378.8672539489672,218.47825915300547,392.70864975698663,204.5035C406.39959561057105,190.68064040300547,433.78148731774,91.98184685773481,447.47243317132444,83.261775C461.0129290704739,74.63752810773481,488.0939208687728,125.41786751373624,501.63441676792223,135.12622499999998C515.4758125759416,145.05032376373623,543.1586041919805,155.12525625,557,161.79160000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="229.97455" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="117.08433323207777" cy="228.65015" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="172.44991646415554" cy="203.41559999999998" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="227.21369987849332" cy="216.95522499999998" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="281.9774832928311" cy="180.97175" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="337.34306652490886" cy="194.45225" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="392.70864975698663" cy="204.5035" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="447.47243317132444" cy="83.261775" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="501.63441676792223" cy="135.12622499999998" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="557" cy="161.79160000000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div> --}}
                            <div id="myfirstchart" style="width:'my-auto'"></div>
                        </div>
                    </div>

                    <div class="row mt-6">
                        <div class="col text-center">
                            <h5 class="font-weight-normal mt-2">POSITIF</h5>
                            <h3 class="text-xxl mb-1 social-content  number-font"> {{$indo['cases']}} </h3>
                            <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal mt-2">SEMBUH</h5>
                            <h3 class="text-xxl mb-1 social-content danger number-font"> {{$indo['recovered']}} </h3>
                            <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal mt-2">MENINGGAL</h5>
                            <h3 class="text-xxl mb-1 social-content  number-font"> {{$indo['deaths']}} </h3>
                            <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
                        </div>
                        <div class="chart-wrapper">
                        <canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden="" height="85" width="0" style="display: block; width: 0px; height: 85px;"></canvas>
                    </div>
                    </div>
                </br>
                    <div class="row mt-6">
                        <div class="col text-center">
                        <a href="https://kawalcovid19.blob.core.windows.net/viz/statistik_harian.html" class="btn btn-sm btn-primary px-3">Lihat Statistik Harian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div> <!-- .container -->

      <div class="container mt-5">
        {{-- <div class="row justify-content-center">
          <div class="col-md-12 block-heading-wrap" data-aos="fade-up">
            <h2 class="heading mt-3 mb-3 text-center">Good Design is a Good Start</h2>
          </div>
        </div> <!-- .row --> --}}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
            <div class="card overflow-hidden bg-white work-progress">
                <div class="card-header">
                    <h3 class="card-title">Statistik Kasus Coronavirus di Dunia</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive service">
                        <table class="table table-bordered table-hover mb-0 text-nowrap ">
                            <thead>
                                <tr>
                                    <th class="atasbro">Negara</th>
                                    <th class="atasbro">Positif</th>
                                    <th class="atasbro">Sembuh</th>
                                    <th class="atasbro">Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all as $all)
                                <tr>
                                    <td>{{$all['country']}}</td>
                                    <td>{{$all['cases']}}</td>
                                    <td>{{$all['recovered']}}</td>
                                    <td>{{$all['deaths']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .templateux-section -->

@endsection
