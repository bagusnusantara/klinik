@extends('layouts.main')

@section('contents')

<!-- <div id="temps_div"></div>
<?= $lava->render('LineChart', 'Temps', 'temps_div') ?> -->

  <!-- Start top-category-widget Area -->


  			<!-- Start post-content Area -->
  			<section class="post-content-area">
  				<div class="container">
  					<div class="row">
  						<div class="col-lg-8 posts-list">

                <a class="posts-title"><h2>Selamat Datang di Klinik Graha Amani !!</h2></a>
  							<div class="single-post row">
  								<div class="col-lg-3 col-md-3 meta-details">
  									<ul class="tags">
  										<li>Data Pasien</li>
  									</ul>
  									<div class="user-details row">
  										<p class="user-name col-lg-12 col-md-12 col-6"><span class="lnr lnr-user"></span><a href="#"> : @foreach($user as $u){{ $u->name }} @endforeach</a></p>
  										<p class="date col-lg-12 col-md-12 col-6"><span class="lnr lnr-calendar-full"></span><a href="#"> : @foreach($user as $u){{ $u->tgl_lahir }} @endforeach</a> </p>
  										<p class="view col-lg-12 col-md-12 col-6"><span class="lnr lnr-users"></span><a href="#"> Anak ke : </a> </p>
                      <p class="view col-lg-12 col-md-12 col-6"><a href="#">Anak ke : </a> <span class="lnr lnr-users"></span></p>
      								<!-- <h4 class="view col-lg-12 col-md-12 col-6" style="background-color: #00cec9">Taksiran Persalinan</h4>
        							<center><h4 class="view col-lg-12 col-md-12 col-6">1 Desember 2019</h4></center> -->
                      <div class="view col-lg-12 col-md-12 col-6">
                      <div class="single-sidebar-widget tag-cloud-widget">
                        <h4 class="tagcloud-title" style="background-color: #FF0000">Usia Kehamilan</h4>
                        <ul>
                            <center><h4>1 Minggu</h4></center>
                        </ul>
                      </div>
                     </div>
                     <div class="view col-lg-12 col-md-12 col-6">
                     <div class="single-sidebar-widget tag-cloud-widget">
                       <h4 class="tagcloud-title" style="background-color: #FF0000">Usia Kehamilan</h4>
                       <ul>
                           <center><h4>1 Minggu</h4></center>
                       </ul>
                     </div>
                    </div>

  									</div>
  								</div>
  								<div class="col-lg-9 col-md-9">
                    <br>
  									<div class="feature-img">
  										<img class="img-fluid" src="{{asset('medical/img/pregnant.png')}}" alt="">
  									</div>
  									<p class="excert">
  									</p>
  								</div>
  							</div>

  						</div>
  						<div class="col-lg-4 sidebar-widgets">
  							<div class="widget-wrap">

  								<div class="single-sidebar-widget tag-cloud-widget">
  									<h4 class="tagcloud-title" style="background-color: #FF0000">Tanggal Periksa Selanjutnya</h4>
  									<ul>
    										<center><h2>1 Desember 2019</h2></center>
  									</ul>
  								</div>

                  <div class="single-sidebar-widget tag-cloud-widget">
  									<h4 class="tagcloud-title" style="background-color: #009c59">Resiko Kehamilan</h4>
  									<ul style="background-color: #FF0000 color:#FFF">
                        <center><h1>1</h1></center>
    										<center><h2>KRST</h2></center>
  									</ul>
  								</div>

  							</div>
  						</div>

  					</div>
  				</div>
  			</section>
  			<!-- End post-content Area -->


@stop
               
