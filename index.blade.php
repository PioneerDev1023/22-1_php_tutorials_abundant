@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="slide">
        <div class="container slide-area">
            <div class="slide-img col col-lg-6 col-md-12 col-sm-12 col-12">
                <img class="slide-image" src="{{ asset('images/large/Landing/landing-slide.png') }}" alt="slide image">
            </div>
            <div class="slide-text col-lg-6 col-md-12 col-sm-12 col-12">
                <h3 class="fredoka slide-title1">Welcome To </h3>
                <h1 class="fredoka slide-title2">Auto Guru Your Car</h1>
                <h3 class="fredoka slide-title3">Ownership Partner</h3>
                <p>Buying, Maintaining, Repairing or Selling your vehicle?<br/>We’re here to help! </p>
                <button class="arrow-btn">Learn More
                    <!-- <img class="arrow-img" src="./assets/images/small/Landing/arrow-right.png" alt="arrow-right image"> -->
                </button>
            </div>
        </div>
    </section>  
    <section class="service">
        <div class="container">
            <p class="ser-index">AutoGuru Service</p>
            <h3 class="ser-title fredoka">OUR SERVICES</h3>
            <div class="service-cards">
                <a href="repair-one.html" class="col-md-4 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <p class="card-num">01</p>
                            <img class="ser-img repair-img" src="{{ asset('images/small/Landing/Diagnostics and Repair.svg') }}" alt="repair image">
                            <h4 class="fredoka">Repair</h4>
                        </div>
                    </div>
                </a>
                <a href="transport.html" class="col-md-4 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <p class="card-num">02</p>
                            <img class="ser-img transport-img" src="{{ asset('images/small/Landing/Transport.svg') }}" alt="transport image">
                            <h4 class="fredoka">Transport</h4>
                        </div>
                    </div>
                </a>
                <a href="purchase.html" class="col-md-4 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <p class="card-num">03</p>
                            <img class="ser-img tyre-img" src="{{ asset('images/small/Landing/Pre Purchase Inspections.png') }}" alt="tyres image">
                            <h4 class="fredoka">Pre Purchase Inspections</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>   
    <section class="howto">
        <div class="container howto-area">
            <div class="howto-img col-lg-6 col-md-12 col-12">
                <img class="howto-image" src="{{ asset('images/large/Landing/howto.png') }}" alt="howto image">
            </div>
            <div class="howto-text col-lg-6 col-md-12 col-12">
                <h3 class="fredoka howto-title">The Effortless Way To a Fair Price on Car Cost </h3>
                <div class="howto-card">
                    <div><img src="{{ asset('images/small/Landing/Choose your repair service.svg') }}" alt="service image"></div>
                    <div class="howto-cardtext">
                        <p class="fredoka howto-subtitle">Choose Your Repair or Service</p>
                        <p class="howto-detail">Select your car, tell us what service or repair is needed.</p>
                    </div>
                </div>
                <div class="howto-card">
                    <div><img src="{{ asset('images/small/Landing/Location.png') }}" alt="service image"></div>
                    <div class="howto-cardtext">
                        <p class="fredoka howto-subtitle">Pick Your Location, Date & Time</p>
                        <p class="howto-detail">Let us know where you are and When you’d like the service or repair carried out. </p>
                    </div>
                </div>
                <div class="howto-card">
                    <div><img src="{{ asset('images/small/Landing/Sit Back.svg') }}" alt="service image"></div>
                    <div class="howto-cardtext">
                        <p class="fredoka howto-subtitle">Sit Back and Relax!</p>
                        <p class="howto-detail">Carry on with your day, we will compare price from garages in your area allowing you to make an informed decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>          
    <section class="help">
        <div class="container">
            <h3 class="help-title">How AutoGuru Works</h3>
            <div class="help-cards">
                <div class="help-card col-md-4 col-sm-12 col-12">
                    <div class="help-card-content">
                        <h2 class="help-num">01</h2>
                        <p class="help-subtitle h-subtitle1">Enter your reg number and details.</p>
                        <p>Your details help garages provide accurate quotes</p>
                    </div>
                </div>
                <div class="help-card col-md-4 col-sm-12 col-12">
                    <div class="help-card-content">
                        <h2 class="help-num">02</h2>
                        <p class="help-subtitle">Allow us to compile quotes from garages local to you.</p>
                        <p>Tree were appear female life you'll, a moving appear one fruit bearing blessed a thing and gathered.</p>
                    </div>
                </div>
                <div class="help-card col-md-4 col-sm-12 col-12">
                    <div class="help-card-content">
                        <h2 class="help-num">03</h2>
                        <p class="help-subtitle">Simply select your preferred garage, choose an available date & book in.</p>
                        <p>Multiply let darkness likeness he he cattle itself waters sixth whose gathered had all them gathered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="about">
        <div class="container about-body">
            <div class="about-content col-md-6 col-sm-12 col-12">
                <h3 class="fredoka about-title">WE ARE A PROFESSIONAL AUTO REPAIR</h3>
                <p class="about-text">
                    Autoguru takes the pain out of car ownership by allowing drivers to compare and book all their cars needs in one location.<br/><br/>
                    We offer services in the full life cycle of car ownership from financing, maintenance, NCT failure to selling and trading up. We can help you find the right service, at the right price.<br/></br>
                    Save time and money with Autoguru.
                </p>
            </div>
            <div class="about-cards col-md-6 col-sm-12 col-12">
                <div>
                    <div class="about-card">
                        <div class="about-img"><img class="about-cardimg" src="{{ asset('images/small/Landing/Easy.svg') }}" alt="about image"></div>
                        <div class="about-cardbody">
                            <h5 class="fredoka">Easy</h5>
                            <p class="about-cardtext">Meeting at your specified Time / Location</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="about-card">
                        <div class="about-img"><img class="about-cardimg" src="{{ asset('images/small/Landing/Reliable.svg') }}" alt="about image"></div>
                        <div class="about-cardbody">
                            <h5 class="fredoka">Reliable</h5>
                            <p class="about-cardtext">Multi-Point Inspection Qualified Mechanic</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="about-card">
                        <div class="about-img"><img class="about-cardimg" src="{{ asset('images/small/Landing/Safe.svg') }}" alt="about image"></div>
                        <div class="about-cardbody">
                            <h5 class="fredoka">Safe</h5>
                            <p class="about-cardtext">Trusted Advice Customer Rated Mechanics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <section class="people">
        <div class="container people-content">
            <div class="people-cards col-md-4 col-sm-12 col-12">
                <div class="people-card">
                    <div class="pcard-stars">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                    </div>
                    <p class="pcard-title">Lorem ipsum dolor!</p>
                    <p class="pcard-text">“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliqu yam erat, sed diam voluptua.”</p>
                    <div class="people-info">
                        <img src="{{ asset('images/small/Landing/people1.png') }}" alt="people image">
                        <div class="pinfo">
                            <p class="pinfo-name">Jennifer Taylor</p>
                            <p class="pinfo-country">USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="people-cards col-md-4 col-sm-12 col-12">
                <div class="people-card">
                    <div class="pcard-stars">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                    </div>
                    <p class="pcard-title">Lorem ipsum dolor!</p>
                    <p class="pcard-text">“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliqu yam erat, sed diam voluptua.”</p>
                    <div class="people-info">
                        <img src="{{ asset('images/small/Landing/people2.png') }}" alt="people image">
                        <div class="pinfo">
                            <p class="pinfo-name">Amanda Ponds</p>
                            <p class="pinfo-country">USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="people-cards col-md-4 col-sm-12 col-12">
                <div class="people-card">
                    <div class="pcard-stars">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                        <img src="{{ asset('images/small/Landing/star.png') }}" alt="star image">
                    </div>
                    <p class="pcard-title">Lorem ipsum dolor!</p>
                    <p class="pcard-text">“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliqu yam erat, sed diam voluptua.”</p>
                    <div class="people-info">
                        <img src="{{ asset('images/small/Landing/people3.png') }}" alt="people image" style="width: 64px; border-radius: 50%;">
                        <div class="pinfo">
                            <p class="pinfo-name">John Steoro</p>
                            <p class="pinfo-country">USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection                                                                                                    
