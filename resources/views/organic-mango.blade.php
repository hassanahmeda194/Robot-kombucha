@extends('layout.app')
@section('main_section')
  <style>
        #main-image {
            margin-bottom: -125px;
            width: 85%;
            transform: rotate(5deg);
        }
    </style>
    <!-- {{-- section 1 --}} -->
    <div class="position-relative text-white" style="background-color: #f2350a;">

        <div>
           @include('components.navbar')
        </div>
        <div class="container py-5 mt-5">
            <div class="row text-white align-items-center  ">
                <div class="col-lg-1 col-0"></div>
                <div class="col-lg-4 col-12 order-lg-1 order-2">
                    <img src="{{ asset('images/page-2-section-1.png') }}" alt="" class="img-fluid" id="main-image">
                </div>
                <div class="col-lg-6 col-12 order-lg-2 order-1">
                    <h1 style="font-size: 55px;" class="fw-bold text-uppercase">Organic Pineapple & Mango Kombucha</h1>
                    <h3>Product Information</h3>
                    <p>Our organic pineapple and mango kombucha is a delightful subtle fusion of delicious natural
                        tropical sweetness -
                        with no added sugar, offering a refreshing and unique drink experience. This wonderful flavor
                        combination brings
                        you the tangy essence of beautifully ripe pineapples with the familiar sharpness of tropical
                        mango. The natural
                        kombucha effervescence and sourness of this blend bring a true taste sensation which has to be
                        experienced. It
                        is a harmony made in heaven!</p>
                    <p>Imagine taking a sip and being greeted by the juicy, vibrant flavors of tropical paradise,
                        followed by the
                        tanginess and spice of the organic kombucha - flavors of cinnamon, nutmeg, rich pineapple, and
                        zesty fermented
                        kombucha - it's a match made for the gods.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="my-5 container py-5 ">
        <div class="row py-5">
            <div class="col-lg-5 col-12 text-center">
                <div class="position-relative" style="z-index: -1;">
                    <img src="{{ asset('/images/page-2-section-2-b.png') }}" alt=""
                        class="img-fluid position-absolute" style="left: 3%; width: 45%;">
                </div>
                <img src="{{ asset('/images/page-2-section-2.png') }}" alt="" class="img-fluid w-75"
                    style="z-index: 1;">
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1>Product Content</h1>
                    </div>
                    <div class="col-12 ms-4">
                        <div>
                            <h4>Organic Ingredients:</h4>
                            <p class="w-75">Our soft drink is crafted using only the finest organic ingredients,
                                ensuring that
                                every sip is filled with the pure
                                essence of nature.</p>
                        </div>
                        <div>
                            <h4>Real Fruit Flavor:</h4>
                            <p class="w-75">Experience the authentic taste of ripe pineapples and succulent mangoes in
                                every
                                bottle, thanks to our use of real fruit
                                extracts.</p>
                        </div>
                        <div>
                            <h4>Refreshing Blend:</h4>
                            <p class="w-75">The harmonious blend of pineapple and mango creates a refreshingly tropical
                                flavor
                                profile that tantalizes your taste
                                buds.</p>
                        </div>
                        <div>
                            <h4>No Artificial Additives:</h4>
                            <p class="w-75">We steer clear of artificial flavors, colors, and preservatives,
                                guaranteeing a
                                natural and wholesome beverage option.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5 rounded-3 " style="background-color: blanchedalmond;">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <h1>Product Content</h1>
            </div>
            <div class="col-lg-8 col-12 ps-4">
                <div>
                    <h4>Organic Ingredients:</h4>
                    <p class="w-75">Our soft drink is crafted using only the finest organic ingredients,
                        ensuring that
                        every sip is filled with the pure
                        essence of nature.</p>
                </div>
                <div>
                    <h4>Real Fruit Flavor:</h4>
                    <p class="w-75">Experience the authentic taste of ripe pineapples and succulent mangoes in
                        every
                        bottle, thanks to our use of real fruit
                        extracts.</p>
                </div>
                <div>
                    <h4>Refreshing Blend:</h4>
                    <p class="w-75">The harmonious blend of pineapple and mango creates a refreshingly tropical
                        flavor
                        profile that tantalizes your taste
                        buds.</p>
                </div>
                <div>
                    <h4>No Artificial Additives:</h4>
                    <p class="w-75">We steer clear of artificial flavors, colors, and preservatives,
                        guaranteeing a
                        natural and wholesome beverage option.</p>
                </div>

            </div>
            <div class="col-lg-4 col-12">
                <div class="position-relative d-none d-lg-block mt-lg-3 ">
                    <img src="{{ asset('/images/page-2-section-3b.png') }}" alt=""
                        class="img-fluid position-absolute"
                        style="z-index: 1; transform: rotate(-5deg) ; left: -25%; top: 0; width: 65%;">
                </div>
                <img src="{{ asset('/images/page-2-section-3a.png') }}" alt=""
                    class="img-fluid w-75 position-relative " style="z-index: 3; transform: rotate(12deg)">
            </div>
        </div>
    </div>
    <div class="my-5 text-center container">
        <h1 class="mb-4">Customer Satisfaction:</h1>
        <p class="w-75 mx-auto mb-3">We are committed to delivering the highest quality product that exceeds our
            customers' expectations. If for
            any reason
            you're not satisfied with your purchase, please reach out to us, and we'll make it right. Embrace the pure
            joy of
            organic flavors with our Organic Pineapple Mango Flavored soft drink—a beverage that not only quenches your
            thirst but
            also nourishes your body and soul. Cheers to a healthier, happier lifestyle!</p>
        <p class="w-75 mx-auto">Our top priority is ensuring that every customer is delighted with their purchase. We
            stand behind the
            quality of our
            Organic Pineapple Mango Flavored soft drink and are committed to exceeding your expectations. If, for any
            reason, you
            find yourself less than satisfied with your experience, please don't hesitate to reach out to us.</p>
    </div>
    <br>
    @include('components.news-letter')
@endsection
