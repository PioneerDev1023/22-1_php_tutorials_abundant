@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/repair.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="repair">
        
        <form class="container rep-container" id="reg_form">
            {{ csrf_field() }}

            <div class="repair-section col-md-10 col-sm-12" id="first_section">
                <h3 class="rep-title fredoka">Maintenance & Repair Service</h3>
                <div class="repair-input">
                    <div class="rep-input col-md-6 col-sm-12 col-12">
                        <input class="form-control rep-in" id="reg_number" name="reg_number" placeholder="Registration Number *" autofocus>
                        <p class="error-one error d-none">Please input the registration number.</P>
                    </div>
                    <div class="rep-input col-md-6 col-sm-12 col-12">
                        <!-- <input class="form-control rep-in" placeholder="Location *"> -->
                        <select class="form-control rep-in form-select" id="sel_location" name="sel_location" aria-label="Location">
                            <option class="rep-option d-none" selected disabled>Location *</option>
                            <option class="rep-option" value="1">A City</option>
                            <option class="rep-option" value="2">B City</option>
                            <option class="rep-option" value="3">C City</option>
                        </select>
                        <p class="error-two error d-none">Please select a location.</P>
                    </div>
                </div>
                
                <p class="pop-title">Select service list below</p>
                <div class="service-list">
                    <div class="accordion" id="accordionExample">
                        <!-- Popular service adding -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                                    <img class="list-img" src="{{ asset('images/small/repair/belt.png') }}">
                                    <p class="accor-title">Timing Belts & Chains</p>
                                    <p class="check-counter check-count-one">0</p>
                                </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-one">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="one_box1" id="one_box1">
                                            <label class="form-check-label" for="one_box1">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box2">
                                            <label class="form-check-label" for="one_box2">
                                                Change engine oil
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box3">
                                            <label class="form-check-label" for="one_box3">
                                            Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box4">
                                            <label class="form-check-label" for="one_box4">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box5">
                                            <label class="form-check-label" for="one_box5">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box6">
                                            <label class="form-check-label" for="one_box6">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box7">
                                            <label class="form-check-label" for="one_box7">
                                                Look for leaks 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-one" type="checkbox" value="" name="" id="one_box8">
                                            <label class="form-check-label" for="one_box8">
                                                Change engine oil 
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                <img class="list-img" src="{{ asset('images/small/repair/brake.png') }}">
                                <p class="accor-title">Brakes</p>
                                <p class="check-counter check-count-two">0</p>
                            </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-two">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-two" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-two" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-two" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-two" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-two" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-two" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFifteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                                <img class="list-img" src="{{ asset('images/small/repair/clutch.png') }}">
                                <p class="accor-title">Clutch & Transmission</p>
                                <p class="check-counter check-count-three">0</p>
                            </button>
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                            <div class="accordion-side accordion-body">
                                <ul class="ps-5 col-12 accor-ul accordion-ul-three">
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-three" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Change engine oil 
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-three" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checking hydraulic fluid
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-three" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check on the cooling system
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-three" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Check spark plugs and wires
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-three" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check your belts
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-three" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Look for leaks
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSixteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                <img class="list-img" src="{{ asset('images/small/repair/Engine.png') }}">
                                <p class="accor-title">Engine Management Light</p>
                                <p class="check-counter check-count-four">0</p>
                            </button>
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                            <div class="accordion-side accordion-body">
                                <ul class="ps-5 col-12 accor-ul accordion-ul-four">
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-four" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Change engine oil 
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-four" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checking hydraulic fluid
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-four" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check on the cooling system
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-four" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Check spark plugs and wires
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-four" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check your belts
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-four" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Look for leaks
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <!-- Other service list -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img class="list-img" src="{{ asset('images/small/repair/suspension.png') }}">
                                <p class="accor-title">Suspension</p>
                                <p class="check-counter check-count-five">0</p>
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-side accordion-body">
                                <ul class="ps-5 col-12 accor-ul accordion-ul-five">
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-five" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Change engine oil 
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-five" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checking hydraulic fluid
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-five" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check on the cooling system
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-five" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Check spark plugs and wires
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-five" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Check your belts
                                        </label>
                                    </li>
                                    <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input class="form-check-input acc-five" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Look for leaks
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <img class="list-img" src="{{ asset('images/small/repair/engine-sm.png') }}">
                                    <p class="accor-title">Engine, Fuel & Turbo</p>
                                    <p class="check-counter check-count-six">0</p>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-six">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-six" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-six" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-six" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-six" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-six" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-six" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img class="list-img" src="{{ asset('images/small/repair/steering.png') }}">
                                    <p class="accor-title">Steering</p>
                                    <p class="check-counter check-count-seven">0</p>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-seven">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-seven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-seven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-seven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-seven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-seven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-seven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <img class="list-img" src="{{ asset('images/small/repair/diagnotics.png') }}">
                                    <p class="accor-title">General Diagnostics</p>
                                    <p class="check-counter check-count-eight">0</p>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-eight">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eight" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eight" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eight" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eight" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eight" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eight" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <img class="list-img" src="{{ asset('images/small/repair/ignition.png') }}">
                                    <p class="accor-title">Electrical & Ignition</p>
                                    <p class="check-counter check-count-nine">0</p>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-nine">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-nine" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-nine" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-nine" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-nine" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-nine" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-nine" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <img class="list-img" src="{{ asset('images/small/repair/heating.png') }}">
                                    <p class="accor-title">Heating</p>
                                    <p class="check-counter check-count-ten">0</p>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-ten">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-ten" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-ten" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-ten" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-ten" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-ten" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-ten" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <img class="list-img" src="{{ asset('images/small/repair/cooling.png') }}">
                                    <p class="accor-title">Cooling</p>
                                    <p class="check-counter check-count-eleven">0</p>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-eleven">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eleven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eleven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eleven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eleven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eleven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-eleven" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    <img class="list-img" src="{{ asset('images/small/repair/exhaust.png') }}">
                                    <p class="accor-title">Exhaust</p>
                                    <p class="check-counter check-count-twelve">0</p>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-twelve">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-twelve" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-twelve" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-twelve" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-twelve" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-twelve" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-twelve" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                    <img class="list-img" src="{{ asset('images/small/repair/ac diagnosis.png') }}">
                                    <p class="accor-title">A/C Diagnosis</p>
                                    <p class="check-counter check-count-thirteen">0</p>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-thirteen">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-thirteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-thirteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-thirteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-thirteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-thirteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-thirteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    <img class="list-img" src="{{ asset('images/small/repair/wipers.png') }}">
                                    <p class="accor-title">Wipers</p>
                                    <p class="check-counter check-count-fourteen">0</p>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-fourteen">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fourteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fourteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fourteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fourteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fourteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fourteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                    <img class="list-img" src="{{ asset('images/small/repair/windscreens.png') }}">
                                    <p class="accor-title">Windscreens</p>
                                    <p class="check-counter check-count-fifteen">0</p>
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-fifteen">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fifteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fifteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fifteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fifteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fifteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-fifteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                    <img class="list-img" src="{{ asset('images/small/repair/bodywork.png') }}">
                                    <p class="accor-title">Bodywork</p>
                                    <p class="check-counter check-count-sixteen">0</p>
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                <div class="accordion-side accordion-body">
                                    <ul class="ps-5 col-12 accor-ul accordion-ul-sixteen">
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-sixteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change engine oil 
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-sixteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checking hydraulic fluid
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-sixteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check on the cooling system
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-sixteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Check spark plugs and wires
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-sixteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check your belts
                                            </label>
                                        </li>
                                        <li class="form-check col-lg-6 col-md-12 col-sm-12 col-12">
                                            <input class="form-check-input acc-sixteen" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Look for leaks
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="next-button">
                    <button type="button" id="nextbtn" class="btn next-btn">Next</button>
                </div>
            </div>
            <div class="alert alert-danger print-error-msg">
                <ul></ul>
            </div>
            <div class="repair-section col-md-10 col-sm-12 d-none" id="second_section">
                <h3 class="rep-title fredoka">Maintenance & Repair Service</h3>
                <div class="repair-input">
                    <div class="rep-input col-md-6 col-sm-12 col-12">
                        <input type="text" class="form-control rep-in" name="first_name" id="first_name" placeholder="First Name">
                        <p class="error-three error-msg d-none">Please input your first name</P>
                    </div>
                    <div class="rep-input col-md-6 col-sm-12 col-12">
                        <input type="text" class="form-control rep-in" name="last_name" id="last_name" placeholder="Last Name">
                        <p class="error-four error-msg d-none">Please input your last name</P>
                    </div>
                    <div class="rep-input col-md-6 col-sm-12 col-12">
                        <input type="email" class="form-control rep-in" name="email" id="email" placeholder="Email *">
                        <p class="error-five error-msg d-none">Please input your email</P>
                    </div>
                    <div class="rep-input col-md-6 col-sm-12 col-12">
                        <input type="number" class="form-control rep-in" name="phone_number" id="phone_number" placeholder="Phone Number *">
                        <p class="error-six error-msg d-none">Please input your phone number.</P>
                    </div>
                </div>
                <div class="next-button">
                    <button type="button" id="backbtn" class="btn back-btn">Back</button>
                    <button type="submit" id="submitbtn" class="btn submit-btn">Submit</button>
                </div>
            </div>
        </form>
    </section>  
    <!-- <script src="{{ asset('js/validation.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/repair.js') }}"></script> -->
    <script>
        // const { isNull } = require("lodash");

        $(document).ready(function() {

        var checkbox_one = $('.acc-one:checked').length;
        if(checkbox_one=='0'){
            $('.check-count-one').addClass('d-none');
        }
        var checkbox_two = $('.acc-two:checked').length;
        if(checkbox_two=='0'){
            $('.check-count-two').addClass('d-none');
        }
        var checkbox_three = $('.acc-three:checked').length;
        if(checkbox_three=='0'){
            $('.check-count-three').addClass('d-none');
        }
        var checkbox_four = $('.acc-four:checked').length;
        if(checkbox_four=='0'){
            $('.check-count-four').addClass('d-none');
        }
        var checkbox_five = $('.acc-five:checked').length;
        if(checkbox_five=='0'){
            $('.check-count-five').addClass('d-none');
        }
        var checkbox_six = $('.acc-six:checked').length;
        if(checkbox_six=='0'){
            $('.check-count-six').addClass('d-none');
        }
        var checkbox_seven = $('.acc-seven:checked').length;
        if(checkbox_seven=='0'){
            $('.check-count-seven').addClass('d-none');
        }
        var checkbox_eight = $('.acc-eight:checked').length;
        if(checkbox_eight=='0'){
            $('.check-count-eight').addClass('d-none');
        }
        var checkbox_nine = $('.acc-nine:checked').length;
        if(checkbox_nine=='0'){
            $('.check-count-nine').addClass('d-none');
        }
        var checkbox_ten = $('.acc-ten:checked').length;
        if(checkbox_ten=='0'){
            $('.check-count-ten').addClass('d-none');
        }
        var checkbox_eleven = $('.acc-eleven:checked').length;
        if(checkbox_eleven=='0'){
            $('.check-count-eleven').addClass('d-none');
        }
        var checkbox_twelve = $('.acc-twelve:checked').length;
        if(checkbox_twelve=='0'){
            $('.check-count-twelve').addClass('d-none');
        }
        var checkbox_thirteen = $('.acc-thirteen:checked').length;
        if(checkbox_thirteen=='0'){
            $('.check-count-thirteen').addClass('d-none');
        }
        var checkbox_fourteen = $('.acc-fourteen:checked').length;
        if(checkbox_fourteen=='0'){
            $('.check-count-fourteen').addClass('d-none');
        }
        var checkbox_fifteen = $('.acc-fifteen:checked').length;
        if(checkbox_fifteen=='0'){
            $('.check-count-fifteen').addClass('d-none');
        }
        var checkbox_sixteen = $('.acc-sixteen:checked').length;
        if(checkbox_sixteen=='0'){
            $('.check-count-sixteen').addClass('d-none');
        }

        $(".form-check-input").change(function() {
            var checkbox_one = $('.acc-one:checked').length;
            if(checkbox_one == '0'){
                $('.check-count-one').addClass('d-none');
            } else {
                if(checkbox_one == '1')
                    $('.check-count-one').removeClass('d-none');
                $('.check-count-one').html(checkbox_one);
            }

            var checkbox_two = $('.acc-two:checked').length;
            if(checkbox_two == '0'){
                $('.check-count-two').addClass('d-none');
            } else {
                if(checkbox_two == '1')
                    $('.check-count-two').removeClass('d-none');
                $('.check-count-two').html(checkbox_two);
            }

            var checkbox_three = $('.acc-three:checked').length;
            if(checkbox_three == '0'){
                $('.check-count-three').addClass('d-none');
            } else {
                if(checkbox_three == '1')
                    $('.check-count-three').removeClass('d-none');
                $('.check-count-three').html(checkbox_three);
            }

            var checkbox_four = $('.acc-four:checked').length;
            if(checkbox_four == '0'){
                $('.check-count-four').addClass('d-none');
            } else {
                if(checkbox_four == '1')
                    $('.check-count-four').removeClass('d-none');
                $('.check-count-four').html(checkbox_four);
            }

            var checkbox_five = $('.acc-five:checked').length;
            if(checkbox_five == '0'){
                $('.check-count-five').addClass('d-none');
            } else {
                if(checkbox_five == '1')
                    $('.check-count-five').removeClass('d-none');
                $('.check-count-five').html(checkbox_five);
            }

            var checkbox_six = $('.acc-six:checked').length;
            if(checkbox_six == '0'){
                $('.check-count-six').addClass('d-none');
            } else {
                if(checkbox_six == '1')
                    $('.check-count-six').removeClass('d-none');
                $('.check-count-six').html(checkbox_six);
            }

            var checkbox_seven = $('.acc-seven:checked').length;
            if(checkbox_seven == '0'){
                $('.check-count-seven').addClass('d-none');
            } else {
                if(checkbox_seven == '1')
                    $('.check-count-seven').removeClass('d-none');
                $('.check-count-seven').html(checkbox_seven);
            }

            var checkbox_eight = $('.acc-eight:checked').length;
            if(checkbox_eight == '0'){
                $('.check-count-eight').addClass('d-none');
            } else {
                if(checkbox_eight == '1')
                    $('.check-count-eight').removeClass('d-none');
                $('.check-count-eight').html(checkbox_eight);
            }

            var checkbox_nine = $('.acc-nine:checked').length;
            if(checkbox_nine == '0'){
                $('.check-count-nine').addClass('d-none');
            } else {
                if(checkbox_nine == '1')
                    $('.check-count-nine').removeClass('d-none');
                $('.check-count-nine').html(checkbox_nine);
            }

            var checkbox_ten = $('.acc-ten:checked').length;
            if(checkbox_ten == '0'){
                $('.check-count-ten').addClass('d-none');
            } else {
                if(checkbox_ten == '1')
                    $('.check-count-ten').removeClass('d-none');
                $('.check-count-ten').html(checkbox_ten);
            }

            var checkbox_eleven = $('.acc-eleven:checked').length;
            if(checkbox_eleven == '0'){
                $('.check-count-eleven').addClass('d-none');
            } else {
                if(checkbox_eleven == '1')
                    $('.check-count-eleven').removeClass('d-none');
                $('.check-count-eleven').html(checkbox_eleven);
            }

            var checkbox_twelve = $('.acc-twelve:checked').length;
            if(checkbox_twelve == '0'){
                $('.check-count-twelve').addClass('d-none');
            } else {
                if(checkbox_twelve == '1')
                    $('.check-count-twelve').removeClass('d-none');
                $('.check-count-twelve').html(checkbox_twelve);
            }

            var checkbox_thirteen = $('.acc-thirteen:checked').length;
            if(checkbox_thirteen == '0'){
                $('.check-count-thirteen').addClass('d-none');
            } else {
                if(checkbox_thirteen == '1')
                    $('.check-count-thirteen').removeClass('d-none');
                $('.check-count-thirteen').html(checkbox_thirteen);
            }

            var checkbox_fourteen = $('.acc-fourteen:checked').length;
            if(checkbox_fourteen == '0'){
                $('.check-count-fourteen').addClass('d-none');
            } else {
                if(checkbox_fourteen == '1')
                    $('.check-count-fourteen').removeClass('d-none');
                $('.check-count-fourteen').html(checkbox_fourteen);
            }

            var checkbox_fifteen = $('.acc-fifteen:checked').length;
            if(checkbox_fifteen == '0'){
                $('.check-count-fifteen').addClass('d-none');
            } else {
                if(checkbox_fifteen == '1')
                    $('.check-count-fifteen').removeClass('d-none');
                $('.check-count-fifteen').html(checkbox_fifteen);
            }

            var checkbox_sixteen = $('.acc-sixteen:checked').length;
            if(checkbox_sixteen == '0'){
                $('.check-count-sixteen').addClass('d-none');
            } else {
                if(checkbox_sixteen == '1')
                    $('.check-count-sixteen').removeClass('d-none');
                $('.check-count-sixteen').html(checkbox_sixteen);
            }
        });

        $('#nextbtn').click(function() {
            var reg_number = $('#reg_number').val();
            var sel_location = $('#sel_location').val();
            if(reg_number == '' && sel_location == null){
                $('.error').removeClass('d-none');
                $( "#reg_number" ).focus();
            } 
            else if (reg_number == '') {
                $('.error-two').addClass('d-none');
                $('.error-one').removeClass('d-none');
                $( "#reg_number" ).focus();
            } else if (sel_location == null) {
                $('.error-one').addClass('d-none');
                $('.error-two').removeClass('d-none');
                $( "#sel_location" ).focus();
            } else {
                $('.error-one').addClass('d-none');
                $('.error-two').addClass('d-none');
                $('#second_section').removeClass('d-none');      
                $('#first_section').addClass('d-none');
                $( "#first_name" ).focus();
            }

        })

        $('#backbtn').click(function() {
            $('#first_section').removeClass('d-none');      
            $('#second_section').addClass('d-none');
        })

        $("#submitbtn").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var reg_number = $('#reg_number').val();
            var sel_location = $('#sel_location').val();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var email = $('#email').val();
            var phone_number = $('#phone_number').val();
            /* if(first_name == ''){
                $('.error-three').removeClass('d-none');
            } else if (first_name != '') {
                $('.error-three').addClass('d-none');
            }
            if(last_name == ''){
                $('.error-four').removeClass('d-none');
            } else if (last_name != ''){
                $('.error-four').addClass('d-none');
            }
            if(email == ''){
                $('.error-five').removeClass('d-none');
            } else if (email != '') {
                $('.error-five').addClass('d-none');
            }
            if(phone_number == ''){
                $('.error-six').removeClass('d-none');
            } else if (phone_number != '') {
                $('.error-six').addClass('d-none');
            } */

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $.ajax({
                type:'POST',
                url:"{{ route('repair.store') }}",
                data:{
                    _token:_token, 
                    reg_number:reg_number, 
                    sel_location:sel_location,
                    first_name:first_name,
                    last_name:last_name,
                    email:email, 
                    phone_number:phone_number
                },
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        location.reload();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }

            

        }); 

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
        });
    </script>
@endsection