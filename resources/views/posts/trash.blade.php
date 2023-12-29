@extends('layout.app')
@section('content')
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="overlay-image position-absolute top-0 bottom-0 start-0 end-0"
                    style="background-image:url(/img/ship-owner.png)">
                </div>

                <header class="position-relative vh-100 w-100 overflow-hidden">
                    <div class="intro px-4 d-flex flex-column gap-3 align-items-md-center position-relative">
                        <h4 class="fw-bold" style="color: #88D2FD;">PT.WIRATRANS SAMUDERA</h4>
                        <h1 class="fw-bold text-md-center text-capitalize px-5" style="font-size: 60px">Ship Owner & ship
                            management</h1>
                        <p class="text-md-center" style="width: 543px; line-height: 37.517px;"><i>Shipping knowledge
                                combined
                                with our experienced management team works around the clock to maintain smooth operation of
                                your fleets including; Port Preparation, Route Planning, and Voyage Monitoring</i></p>
                        <div class="d-flex gap-md-5 gap-2 justify-content-md-center">
                            <button type="button"
                                class="border-0 btn-orange rounded-pill py-2 px-4 py-md-3 px-md-5 text-uppercase">Request</button>
                            <button type="button"
                                class="border-0 btn-white rounded-pill py-2 px-4 py-md-3 px-md-4 text-uppercase">Ask
                                Question?</button>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
    {{-- main content --}}
    <main id="ships" class="py-5 px-0 container-fluid d-flex flex-column gap-5" style="background : #000418">

        <div class="service-so container-lg d-flex flex-column gap-4 align-items-start text-start text-white">
            {{-- tug & barge section --}}
            <div class="d-flex align-items-center justify-center gap-3 mb-1">
                <h1 class="text-capitalize">Tug & Barge</h1>
            </div>
            <p class="desc-section fw-medium fs-5">PT. WIRATRANS SAMUDERA also provides other services as
                independent services or integrate services detailed as follows:
                Ship management services including technical management, crew management, procurement
                management,Pre-purchased Inspection, New-building Supervision, Dry-docking Project Management and
                Budgeting</p>

            {{-- Card --}}
            <div class="overflow-auto container-lg d-flex justify-content-center">
                <div class="d-flex flex-column flex-md-row gap-lg-5 gap-md-4 gap-3 p-lg-5">
                    <div class="card-box rounded overflow-hidden bg-light text-dark">
                        <div class="card-hero overflow-hidden">
                            <div class="card-cap w-100 h-100" style="background-image: url(/img/about.png)"></div>
                        </div>
                        <div class="card-body p-3">
                            <h2 class="text-center fw-bold text-capitalize ">
                                Tugboat</h2>
                            <p class="lh-lg">We provides high quality barging services for transporting Coal in bulk
                                and other dry bulk materials, We owned sets of tug and Managing tugs in various Engine
                                capacity from 1400 HP to 3200 HP.
                                We strive to enable our clients to focus on their business goals through our solid
                                performance,
                                quick responses, and best service.</p>
                        </div>
                    </div>
                    <div class="card-box rounded overflow-hidden bg-light text-dark">
                        <div class="card-hero overflow-hidden">
                            <div class="card-cap w-100 h-100" style="background-image: url(/img/barge.png)"></div>
                        </div>
                        <div class="card-body p-3">
                            <h2 class="text-center fw-bold text-capitalize ">
                                Barge</h2>
                            <p class="lh-lg">We also owned sets of barge and Managing barges in various size from 300 feet
                                to
                                330 feet
                                with respective transport capacity of 7,000 MT to 10,000 MT.
                                Our diverse fleet composition enables us to deliver an integrated marine logistics solution.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Shipping Management --}}
            <div class="m-4 py-5">
                <div class="about d-flex gap-4 py-3 align-items-center" style="color: white">
                    <div class="d-none d-lg-block w-75">
                        <img src="/img/ship-owner3.png" alt="tug & barge" style="width: 100%">
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div class="flex-grow-1 ms-3 d-flex gap-3">
                            <i class="fa fs-1 fa-globe fw-bold"></i>
                            <div class="">
                                <h3 class="fw-bold text-capitalize">Extra Wide Coverage</h3>
                                <p class="fw-semibold"> South East Asian country is our destination along over 20 years
                                    transporting dry bulk cargo and we are the expert on it,
                                    Call Us anytime you need.</p>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3 d-flex gap-3">
                            <i class="fa fa-wrench fw-bold fs-1"></i>
                            <div class="">
                                <h3 class="fw-bold text-capitalize">Regularly Maintenance</h3>
                                <p class="fw-semibold"> Regularly maintenance is the key Our Fleet always ready for
                                    Operation to serve you,
                                    because On time delivery is our priority.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about d-flex gap-4 py-3 align-items-center" style="color: white">
                    <div class="d-flex flex-column gap-3">
                        <div class="flex-grow-1 ms-3 d-flex gap-3">
                            <i class="fa fa-phone fw-bold fs-1"></i>
                            <div class="">
                                <h3 class="fw-bold text-capitalize">24/7 Support</h3>
                                <p class="fw-semibold"> Highly skilled agency team which standby 24/7 to
                                    monitoring your fleet operation.
                                    its our commitment to perform the best for customer.</p>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3 d-flex gap-3">
                            <i class="fa fa-users fw-bold fs-2"></i>
                            <div class="">
                                <h3 class="fw-bold text-capitalize">World-Class Crew</h3>
                                <p class="fw-semibold"> its our expertise to provide you a high skilled,
                                    high class crew and ocean going experienced to join on your fleet. </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block w-75">
                        <img src="/img/ship-owner2.png" alt="tug & barge" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.data')
@endsection


{{-- maintenance --}}
@extends('layout.app')

@section('content')
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="overlay-image position-absolute top-0 bottom-0 start-0 end-0"
                    style="background-image:url(/img/repair-maintenance.png)">
                </div>

                <header class="position-relative vh-100 w-100 overflow-hidden">
                    <div class="intro px-4 d-flex flex-column gap-3 align-items-md-center position-relative">
                        <h4 class="fw-bold" style="color: #88D2FD;">PT.WIRATRANS SAMUDERA</h4>
                        <h1 class="fw-bold text-capitalize" style="font-size: 70px">Repair & Maintenance</h1>
                        <p class="text-md-center" style="width: 543px; line-height: 37.517px;"><i>Our
                                Professional Technical
                                Team headed by
                                Technical Manager with
                                engineers and mechanical devoting a full-integrated support services such as ship repairs,
                                docking pre / post planning vessel maintenance, and performance supervision.</i></p>
                        <div class="d-flex gap-md-5 gap-2 justify-content-md-center">
                            <button type="button"
                                class="border-0 btn-orange rounded-pill py-2 px-4 py-md-3 px-md-5 text-uppercase">Request</button>
                            <button type="button"
                                class="border-0 btn-white rounded-pill py-2 px-4 py-md-3 px-md-4 text-uppercase">Ask
                                Question?</button>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <main class="py-5 px-0 my-4 container-fluid d-flex flex-column gap-5">
        <div class="service-rm container-lg d-flex flex-column gap-4 align-items-start text-start">
            <h6 class="text-uppercase fw-bold" style="color: #044281; margin-bottom: -7px;">revolutionizing maintenance
                management</h6>
            <div class="p-2 d-flex align-items-center justify-center gap-3 mb-1" style="color: #044281">
                <h1 class="text-capitalize">empowering maintenance ship for peak performance</h1>
            </div>
            <p class="desc-section fw-medium fs-5">PT. WIRATRANS SAMUDERA provide one stop services and solution for
                shipping
                industries
                especially tugs and barges.
                we also provide supporting services such as Ship Agency, Crewing management, Procurement and supplies,
                and Ship repair and maintenance.</p>
            <div class="position-relative container-lg p-0 overflow-hidden">

                <div class="service-container">

                    <div class="slide-service">

                        <div class="item-service" style="background-image: url(/img/repair-maintenance.png);">
                            <div class="text d-flex align-items-end">
                                <div class="text-white p-2 px-3">
                                    <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                                    <h5 class="text-capitalize">repair & maintenance</h5>
                                </div>
                            </div>
                            <div class="content-service">
                                <div class="name text-capitalize">repair & maintenance</div>
                                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                                </div>
                                <button>See More</button>
                            </div>
                        </div>
                        <div class="item-service" style="background-image: url(/img/agency.jpeg);">
                            <div class="text d-flex align-items-end">
                                <div class="text-white p-2 px-3">
                                    <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                                    <h5 class="text-capitalize">agency</h5>
                                </div>
                            </div>
                            <div class="content-service">
                                <div class="name text-capitalize">agency</div>
                                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                                </div>
                                <button>See More</button>
                            </div>
                        </div>
                        <div class="item-service" style="background-image: url(/img/crewing.png);">
                            <div class="text d-flex align-items-end">
                                <div class="text-white p-2 px-3">
                                    <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                                    <h5 class="text-capitalize">crewing</h5>
                                </div>
                            </div>
                            <div class="content-service">
                                <div class="name text-capitalize">crewing</div>
                                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                                </div>
                                <button>See More</button>
                            </div>
                        </div>
                        <div class="item-service" style="background-image: url(/img/logistic.png);">
                            <div class="text d-flex align-items-end">
                                <div class="text-white p-2 px-3">
                                    <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                                    <h5 class="text-capitalize">logistic</h5>
                                </div>
                            </div>
                            <div class="content-service">
                                <div class="name text-capitalize">logistic</div>
                                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                                </div>
                                <button>See More</button>
                            </div>
                        </div>
                        <div class="item-service" style="background-image: url(/img/ship-owner.png);">
                            <div class="text d-flex align-items-end">
                                <div class="text-white p-2 px-3">
                                    <i class="fa-solid fs-3 mb-2 fa-screwdriver-wrench"></i>
                                    <h5 class="text-capitalize">ship owner & ship management</h5>
                                </div>
                            </div>
                            <div class="content-service">
                                <div class="name text-capitalize fs-2">ship owner & ship management</div>
                                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!
                                </div>
                                <button>See More</button>
                            </div>
                        </div>
                    </div>

                    <div class="button">
                        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>

                </div>

            </div>
        </div>
        <div class="service-rm container-lg d-flex flex-column gap-4 align-items-start text-start">
            <div class="p-2 mb-1" style="color: #044281">
                <h1 class="text-capitalize"><i class="fa-solid fa-screwdriver-wrench me-4"></i>services</h1>
            </div>
            <div class="container-lg border border-5 p-md-5 py-md-3 p-2 px-3">
                <ul class="m-0 p-0 h-100">
                    <table class="table table-borderless text-start mt-0" style="width: 100%">
                        <tr>
                            <td class="pe-0 bg-transparent py-1  text-white">
                                <li class="text-uppercase">comissioning</li>
                            </td>
                            <td class="bg-transparent py-1  text-white">
                                <li class="text-uppercase">overhaul</li>
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-0 bg-transparent py-1  text-white">
                                <li class="text-uppercase">maintenance interval</li>
                            </td>
                            <td class="bg-transparent py-1  text-white">
                                <li class="text-uppercase">gearbox and pumps</li>
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-0 bg-transparent py-1  text-white">
                                <li class="text-uppercase">trouble shooting</li>
                            </td>
                            <td class="bg-transparent py-1 text-white"></td>
                        </tr>
                    </table>
                </ul>
            </div>
        </div>
        {{-- always ready to serve you --}}
        @include('components.contactUs')
    </main>

    {{-- data  --}}
    @include('components.data')
@endsection


{{-- css --}}
