@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="service">
        <div class="container">
            <h3 class="ser-title fredoka">DID YOU KNOW?</h3>
            <div class="service-cards">
                <a href="#" class="col-md-3 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <img class="ser-img nct-img" src="{{ asset('images/small/Landing/NCT.png') }}" alt="repair image">
                            <h4 class="know-subtitle fredoka">NCT</h4>
                            <p>
                                Our technicians will identify and explain any future costs to budget for based on their assessment of the vehicle such as timing belts and specific repairs.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-md-3 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <img class="ser-img diag-img" src="{{ asset('images/small/Landing/Pre Purchase Inspections.png') }}" alt="transport image">
                            <h4 class="know-subtitle fredoka">Diagnostics</h4>
                            <p>
                                Our technicians will identify and explain any future costs to budget for based on their assessment of the vehicle such as timing belts and specific repairs.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-md-3 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <img class="ser-img mile-img" src="{{ asset('images/small/Landing/Mileage.svg') }}" alt="tyres image">
                            <h4 class="know-subtitle fredoka">Mileage Discrepancies</h4>
                            <p>
                                Our technicians will identify and explain any future costs to budget for based on their assessment of the vehicle such as timing belts and specific repairs.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-md-3 col-sm-12 col-12">
                    <div class="ser-card">
                        <div class="service-card">
                            <img class="ser-img upcoming-img" src="{{ asset('images/small/Landing/Upcoming.svg') }}" alt="tyres image">
                            <h4 class="know-subtitle fredoka">Upcoming Costs</h4>
                            <p>
                                Our technicians will identify and explain any future costs to budget for based on their assessment of the vehicle such as timing belts and specific repairs.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>   
    <section class="img-bg-section">

    </section>
    <section class="booking">
        <div class="container">
            <form class="form col-lg-9 col-md-10 col-sm-12 col-12">
                <h3 class="fredoka book-title">Pre Purchase Inspections</h3>
                <div class="user-info">
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input class="form-control book-input" type="text" placeholder="Registraton Number *">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input class="form-control book-input" type="text" placeholder="Name *">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input class="form-control book-input" type="email" placeholder="Email *">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input class="form-control book-input" type="number" placeholder="Phone Number *">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input class="form-control book-input" type="text" placeholder="Garage Name *">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input class="form-control book-input" type="number" placeholder="Seller Phone Number *">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <input placeholder="Date" class="form-control book-input" type="text" onblur="(this.type='text')" onfocus="(this.type='date')" id="datepicker" data-date-days-of-week-disabled="0,6" min="2022-01-01" max="2025-12-31">
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <select class="form-control book-input form-select" aria-label="Location">
                            <option class="pur-option d-none" selected disabled>Location</option>
                            <option class="pur-option" value="1">A City</option>
                            <option class="pur-option" value="2">B City</option>
                            <option class="pur-option" value="3">C City</option>
                        </select>
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <select class="form-control book-input form-select" aria-label="preferred">
                            <option class="pur-option d-none" selected disabled>Select Preferred Time</option>
                            <option class="pur-option" value="am">Morning 9:30am - 11:30am</option>
                            <option class="pur-option" value="pm">Afternoon 12:30pm - 2:30pm</option>
                        </select>
                    </div>
                    <div class="book-box col-lg-6 col-md-12 col-12">
                        <select class="form-control book-input form-select" aria-label="Inspection">
                            <option class="pur-option d-none" selected disabled>Level of Inspection</option>
                            <option class="pur-option" value="1">Premium</option>
                            <option class="pur-option" value="2">Standard</option>
                        </select>
                    </div>
                    <div class="col-12 policy-area">
                        <div class="form-check policy-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Accept <span class="check-bold">Terms of use</span> and <span class="check-bold">privacy Policy</span>
                            </label>
                        </div>
                    </div>
                    
                    <button type="button" class="btn trans-btn">Submit</button>
                </div>
            </form>
        </div>
    </section>          
    <section class="help">
        <div class="container">
            <h3 class="help-title">How AutoGuru Works</h3>
            <div class="help-cards">
                <div class="help-card col-md-3 col-sm-12 col-12">
                    <div class="help-card-content">
                        <img class="help-img" src="{{ asset('images/small/purchase/service.png') }}">
                        <p>Tell us when and where you would like the vehicle inspected. We carry out inspections from trade and private sellers throughout Leinster.</p>
                    </div>
                </div>
                <div class="help-card col-md-3 col-sm-12 col-12">
                    <div class="help-card-content">
                        <img class="help-img" src="{{ asset('images/small/purchase/repair.png') }}">
                        <p>A mechanic will be assigned to your booking, the day before your booking the mechanic will make contact with you to introduce himself and confirm specifics.</p>
                    </div>
                </div>
                <div class="help-card col-md-3 col-sm-12 col-12">
                    <div class="help-card-content">
                        <img class="help-img" src="{{ asset('images/small/purchase/reg.png') }}">
                        <p>It's entirely upto the buyer if they would like to be present during the inspection. Reports will be emailed directly after completion along with a call to discuss any concerns.</p>
                    </div>
                </div>
                <div class="help-card col-md-3 col-sm-12 col-12">
                    <div class="help-card-content">
                        <img class="help-img" src="{{ asset('images/small/purchase/car.png') }}">
                        <p>Make an informed buying decision on your new vehicle!</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="about">
        <div class="container about-body">
            <div class="flevel-area col-md-6 col-sm-12 col-12">
                <div class="level-card col-7">
                    <p class="level-btn">STANDARD</p>
                    <h2 class="level-cost">€99</h2>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">88 Checks</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">1st & 2nd gear on Private Road, Car Park or Driveway*</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">Emailed Report</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">Photos on Report</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/close-circle.png') }}">
                        <p class="tick-text">Diagnostic Scan</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/close-circle.png') }}">
                        <p class="tick-text">Follow-up Call</p>
                    </div>
                </div>
            </div>
            <div class="plevel-area col-md-6 col-sm-12 col-12">
                <div class="level-card col-7">
                    <p class="level-btn">PREMIUM</p>
                    <h2 class="level-cost">€149</h2>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">100 Checks</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">5 km On Public Road</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">Emailed Report</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">Photos on Report</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">Diagnostic Scan</p>
                    </div>
                    <div class="check-row">
                        <img class="tick-img" src="{{ asset('images/small/purchase/tick-circle.png') }}">
                        <p class="tick-text">Follow-up Call</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const picker = document.getElementById('datepicker');
        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([6,0].includes(day)){
            e.preventDefault();
            this.value = '';
            alert('Weekends not allowed');
        }
        });
    </script>
@endsection