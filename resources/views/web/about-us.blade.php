@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
	<div class="about-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clinical-text">
						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about" class="about area-padding">
        <div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img src="{{asset('img/about/about-doctr.jpg')}}">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="section-headline">
						<h2>Lorem ipsum dolor sit amet</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						Excepteur sint occaecat cupidatat non proident.cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proidentcillum dolore eu fugiat nulla.</p>
						<a class="read-btn" href="#">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection