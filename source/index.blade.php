---
extends: _layouts.master
title: Home
---
@section('content')

<hr class="featurette-divider">

<div class="row featurette intro" id="introfeat">
    <div class="col-sm-7">
        <h2 class="featurette-heading"> What is it?</h2>
        <p class="lead"> <a href="https://www.ipv6forum.com">The IPv6 Forum </a> IPv6 Ready Logo Program is a conformance and interoperability testing program intended to increase user confidence by demonstrating that IPv6 is available now and is ready to be used. </p>
    </div>
    <div class="col-sm-5">
        <img class="featurette-image img-fluid mx-auto d-block" width="150" src="/imgs/IPv6_ready_logo_phase2-8bit.png" alt="IPv6 Ready Logo">
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-sm-7 order-last">
        <h2 class="featurette-heading">Our Mission</h2>
        <p class="lead">The IPv6 Ready Logo Committee mission is to define the test specifications for IPv6 conformance and interoperability testing, to provide access to self-test tools and to deliver the IPv6 Ready Logo. The Key objectives and benefits of the IPv6 Ready Logo Program are to:</p>
        <ul>
            <li>
                Verify protocol implementation and validate interoperability of IPv6 products.
            </li>
            <li>
                Provide access to free self-testing tools.
            </li>
            <li>
                Provide IPv6 Ready Logo testing laboratories across the globe dedicated to provide testing assistance or services.
            </li>
        </ul>
    </div>
    <div class="col-sm-5 order-first">
        <i class="fas fa-globe img-fluid mx-auto d-block" style="font-size:17vw"></i>
    </div>
</div>

<div class="mastfoot">
    <div class="inner text-center d-flex justify-content-center">
        <a class="btn btn-light btn-lg" id="scroll_dbtn" href="#introfeat" rel="" role="button">
            <i class="fas fa-arrow-down"></i>
        </a>
    </div>
</div>
@endsection
