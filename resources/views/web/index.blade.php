@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
   <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ asset('img/slider/slider1.png') }}" alt="" title="#slider-direction-1" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Better Health,<br> Brighter Future <br></h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn page-scroll" href="{{ url('spc-language') }}">Summary of Product Characteristics</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                             <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Lorem Ipsum is simply dummy <br> text of the printing and<br>typesetting industry. <br></h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">Try Human Albumin</a>
                                    <a class="ready-btn page-scroll" href="#about">Summary of Product Characteristics</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                             <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">Lorem Ipsum is simply dummy <br> text of the printing and<br>typesetting industry. <br></h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">Try Human Albumin</a>
                                    <a class="ready-btn page-scroll" href="#about">Summary of Product Characteristics</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <!-- single-well end-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <h2 class="sec-head">Better Health, Brighter Future</h2>
                            <P>
                                Takeda is a patient-focused, values-based, R&D-driven global biopharmaceutical company committed to bringing Better Health and a Brighter Future to people worldwide. Our passion and pursuit of potentially life-changing treatments for 
                                patients are deeply rooted in our distinguished 237-year history in Japan.<br> We are thrilled to be given a greater opportunity to make a signiﬁcant difference in even more people’s lives.
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About area -->
    <div id="patientNeeds">
        <div class="container">
            <h2 class="primeColr"><b>SERVING THE NEEDS OF OUR PATIENTS</h1></b></h2>
            <div class="row">
                <div class="col-md-6">
                    <h4><b>Takeda-ism</b></h4>
                    <p>
                        Our values serve as our guiding compass. Takeda-ism grounds us as we deliver on our role to serve the public by ensuring integrity in our every action for and on behalf of patients.
                    </p>
                </div>
                <div class="col-md-6 needImg">
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/integrity.png') }}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/fairness.png') }}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/honesty.png') }}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <img src="{{ asset('/img/home/perserverance.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">                    
                    <h4><b>Our Priorities</b></h4>
                    <p>
                        We make decisions and take action by focusing on our four priorities, in this order:
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="container prioriTies">
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>1</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">Put the patient at the center</p>
                        </div>
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>2</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">Build trust with society</p>
                        </div>
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>3</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">Reinforce our reputation</p>
                        </div>
                        <div class="col-md-1 priIcon">
                            <i class="fa fa-angle-right"></i>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 subPrioriTies">
                        <div class="col-md-1">
                            <h1>4</h1>
                        </div>
                        <div class="col-md-10">
                            <p class="primeColr">Develop the business</p>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="unwaverCommit" class="area-padding">
        <div class="container">
            <h2 class="primeColr"><b>AN UNWAVERING COMMITMENT TO INNOVATION </b></h2>
            <p>
                We aspire to bring our leadership in translating science into life-changing medicines to the next level, in our core focus areas:
            </p>
            <div class="row">
                <div class="container">
                    <div class="col-md-2 subUnwaverCommit">
                        <img src="{{ asset('/img/home/oncology.png') }}" alt="">
                        <p><span>Oncology</span></p>
                    </div>
                    <div class="col-md-2 subUnwaverCommit">
                        <img src="{{ asset('/img/home/gastroEnterology.png') }}" alt="">
                        <p><span>Gastro-Enterology</span></p>
                    </div>
                    <div class="col-md-2 subUnwaverCommit">
                        <img src="{{ asset('/img/home/neuroscience.png') }}" alt="">
                        <p><span>Neuroscience</span></p>
                    </div>
                    <div class="col-md-2 subUnwaverCommit">
                        <img src="{{ asset('/img/home/rareDieases.png') }}" alt="">
                        <p><span>Rare Dieases</span></p>
                    </div>
                    <div class="col-md-2 subUnwaverCommit">
                        <img src="{{ asset('/img/home/plasmaDerivedTherapies.png') }}" alt="">
                        <p><span>Plasma Derived Therapies</span></p>
                    </div>
                    <div class="col-md-2 subUnwaverCommit">
                        <img src="{{ asset('/img/home/vaccines.png') }}" alt="">
                        <p><span>Vaccines</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="primeColr"><b>Our team: </b></h2>
        <p>The Official registered Distributer for Baxter Human Albumin</p>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <p>Multipharma:</p>
                <p>Tel: 0224182931</p>
                <p>Fax: 024141320</p>
                <p>Hot Line:16300</p>
                <p>Email : <a> tender@multipharma-eg.com</a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <p>Bio Egypt:</p>
                <p>Tel: 0223624442 - 0223624441</p>
                <p>Email : <a>info@bioegypt.net </a></p>
            </div>
        </div>
        
    </div>
</div>
@endsection