
	<div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
					<img src="{{asset('img/sherlog.png')}}">
				</div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="suscribe-text text-center">
                        <h3>Welcome to our eBusiness company</h3>
                        <a class="sus-btn" href="#">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<footer>
			<div class="footer-area-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="copyright text-center">
								<p><span>Copyright © 2018. Human Albumin . All Rights Reserved.</span><a href="#">Terms & Condition</a><a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('lib/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/parallax/parallax.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/appear/jquery.appear.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $('.collapse').on('shown.bs.collapse', function() {
            $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hidden.bs.collapse', function() {
            $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    </script>
    