@extends('layout')

@section('contenido')

  <div class="container-fluid">
		<div class="row text-center">
			<div class="col-xs-12 ab_entrance text-center">
					<h2 class="en-text">Here at Re:Serve</h2>
					<p>We like to focus on <span>you</span>, because of that we offer a service that's both trustworthy and pleasing.</p>
					
			</div>
		</div>
  </div>

  <section class="presentation">
  	<div class="container">
  		<div class="row">
  			<div class="col-12 col-md-6">
  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi molestias consequuntur incidunt, ab accusantium numquam, temporibus. Deserunt consectetur fugit nam rem doloribus temporibus repellendus, ut fugiat sit molestiae id omnis.</p>
  			</div>
  			<div class="col-12 col-md-6">
  				<img src="{{asset('img/chef.jpg')}}" alt="" class="img-fluid">
  			</div>
  		</div>
  		<div class="row text-center investors">
  			<div class="col-12">
				<h3>Our Investors</h3>
				<hr class="style-seven">
  			</div>
  			<div class="col-6 col-md-3">
  				<img src="{{asset('img/Amusing-Company-Logos.png')}}" alt="" class="img-fluid">
  			</div>
  			<div class="col-6 col-md-3">
  				<img src="{{asset('img/logo-ex-1.png')}}" alt="" class="img-fluid">
  			</div>
  			<div class="col-6 col-md-3">
  				<img src="{{asset('img/logo-investor-human@2x.png')}}" alt="" class="img-fluid">
  			</div>
  			<div class="col-6 col-md-3">
  				<img src="{{asset('img/logo-investor-sherpa@2x.png')}}" alt="" class="img-fluid">
  			</div>
  		</div>
  	</div>
  </section>
  	<div class="container-fluid testimony">
  		<div class="row text-center">
  			<div class="col-12">
  				<h3>Investor Testimonies</h3>
  				<hr class="style-seven">
  			</div>
  			<div class="col-12 col-md-6">
  				<blockquote class="blockquote">
  				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
  				</blockquote>
  			</div>
  			<div class="col-12 col-md-6">
  				<blockquote class="blockquote">
  				  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  				  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
  				</blockquote>
  			</div>
  		</div>
  	</div>

@stop