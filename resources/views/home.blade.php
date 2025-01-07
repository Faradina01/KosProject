@extends('layouts.kos')

  <!-- billboard start  -->
  <section id="billboard">
    <div class="container ">
      <div class="row flex-lg-row-reverse align-items-center ">

        <div class="col-lg-6">
          <img src="/kos/images/billboard.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
            height="500" loading="lazy">
        </div>

        <div class="col-lg-6">
          <h1 class=" text-capitalize  lh-1 my-3">Perfect way to buy and sell a home</h1>
          <p class="lead">Diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
            pellentesque. Ac, gravida in eget non amet eget purus non.</p>
          <nav class="navbar navbar-expand-lg billboard-nav">
            <div class="container billboard-search p-0">

              <div class="row billboard-row">
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Purpose">
                    <option selected>Purpose</option>
                    <option value="1">Buy</option>
                    <option value="2">Rent</option>
                    <option value="3">Sell</option>
                    <option value="4">Something else here</option>

                  </select>
                </div>
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Location">
                    <option selected>Location</option>
                    <option value="1">Texas</option>
                    <option value="2">Miami</option>
                    <option value="3">Chicago</option>
                    <option value="4">New York</option>
                    <option value="5">Something else here</option>
                  </select>
                </div>
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Type">
                    <option selected>Type</option>
                    <option value="1">House</option>
                    <option value="2">Appartment</option>
                    <option value="3">Villa</option>
                    <option value="4">Loft</option>
                    <option value="5">Bungalow</option>
                    <option value="3">Something else here</option>
                  </select>
                </div>

                <div class="col-lg-3 billboard-btn">
                  <button type="submit" class="btn btn-primary btn-lg billboard-search">Search</button>
                </div>
              </div>


            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature start  -->
  <section id="feature">
    <div class="container py-5">
      <div class="row">
        <div class="section-header align-center mb-5">
          <h2 class=" text-capitalize m-0">Featured In</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-between">
        <div class="col-md-2 ">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="/kos/images/logo1.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="/kos/images/logo2.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="/kos/images/logo3.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="/kos/images/logo4.png"></div>
        </div>
        <div class="col-md-2">
          <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
              alt="image" src="/kos/images/logo6.png"></div>
        </div>


      </div>
    </div>
  </section>

  <!-- Residence start  -->
  <section id="residence">
    <div class="container  my-5 py-5">
      <h2 class="text-capitalize m-0 py-lg-5">Popular Residence</h2>

      <div class="swiper-button-next residence-swiper-next  residence-arrow"></div>
      <div class="swiper-button-prev residence-swiper-prev residence-arrow"></div>

      <div class="swiper residence-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item15.png" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item16.png" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item17.png" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item1.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item2.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item3.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <a href="index.html"><img src="/kos/images/item4.jpg" class="card-img-top" alt="image"></a>
              <div class="card-body p-0">
                <a href="index.html">
                  <h5 class="card-title pt-4">Aliva Priva Jalvin</h5>
                </a>
                <p class="card-text">1087 Pin Oak Drive, Clinton, USA</p>

                <div class="card-text">
                  <ul class="d-flex">
                    <li class="residence-list"> <img src="/kos/images/bed.png" alt="image"> 4 bed</li>
                    <li class="residence-list"> <img src="/kos/images/bath.png" alt="image"> 2 bath</li>
                    <li class="residence-list"> <img src="/kos/images/square.png" alt="image"> 1203 Sqft.</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>

        </div>




      </div>

      <div class="residence-btn">
        <a href="index.html" class="btn btn-primary btn-lg my-5">View All Properties</a>
      </div>

    </div>
  </section>

  <!--About us start  -->
  <section id="about-us">
    <div class="container">
      <div class="row py-lg-5">

        <h2 class="text-capitalize text-center m-0 py-lg-5">Why to choose us</h2>

        <div class="text-center col-lg-4">
          <img src="/kos/images/search.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes" width="140"
            height="140" loading="lazy">
          <h4 class="fw-normal mt-5 ">Easy to find</h4>
          <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium amet
            facilisis.</p>
        </div>

        <div class="text-center col-lg-4">
          <img src="/kos/images/price.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes" width="140"
            height="140" loading="lazy">
          <h4 class="fw-normal mt-5">Affordable Prices</h4>
          <p>Urna, massa aliqua dui pellentesque. Ac, gravida in. Diam vitae, nec mattis lectus quam pretium amet
            facilisis.</p>
        </div>

        <div class="text-center col-lg-4">
          <img src="/kos/images/time.png" class="bd-placeholder-img rounded-circle" alt="Bootstrap Themes" width="140"
            height="140" loading="lazy">
          <h4 class="fw-normal mt-5 ">Quickly Process</h4>
          <p>Ac, gravida in diam vitae, nec mattis lectus quam pretium amet facilisis. Urna, massa aliqua dui
            pellentesque. </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial start  -->
  <section id="testimonial">
    <div class="container my-5">



      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="/kos/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta quam a fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="/kos/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta quam a fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="/kos/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">Massa semper non rutrum orci facilisi sit. Lectus porta quam a fringilla
                  eget viverra sem. Vulputate massa hendrerit turpis gravida tempor, porttitor.</p>

                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Elena Pravo</p>
                    <p class="">Ceo, Upstate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>

        <div class=" testimonial-swiper-button col-md-3 position-absolute">
          <div class="swiper-button-prev testimonial-arrow"></div>
          <div class="arrow-divider"> | </div>
          <div class="swiper-button-next testimonial-arrow"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- Help start  -->
  <section id="help" class="py-5"
    style="background: linear-gradient(270deg, #1A242F 0.01%, rgba(26, 36, 47, 0.00) 100%);">
    <div class="container-lg my-5">

      <div class="row d-flex justify-content-between align-items-center">

        <div class="col-md-6">
          <div class="image-holder d-flex">
            <img src="/kos/images/group.png" class="img-fluid" alt="Bootstrap Themes" loading="lazy">
          </div>
        </div>

        <div class="col-md-6">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <h2 class="text-capitalize">We help people to find homes</h2>
            <p>Mauris orci donec blandit maecenas. Orci lorem purus porttitor massa consectetur. Neque, vestibulum sed
              varius magna et at. Eu, adipiscing morbi augue justo. Nibh laoreet volutpat quis velit. Blandit aliquam
              donec sed morbi congue eget lorem viverra porta id lobortis.</p>
            <a href="index.html" class="btn btn-primary btn-lg">Get In Touch</a>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- Lets start  -->
  <section id="start">
    <div class="container my-5 py-5">
      <div class="row featurette py-lg-5 ">
        <div class="col-md-5 order-md-1 d-flex">
          <h1 class="text-capitalize  lh-1 mb-3">Let’s simply begin with rentiz.</h1>
        </div>
        <div class="col-md-7 order-md-2">
          <div class="text-content ps-md-5 mt-4 mt-md-0">
            <p class="py-lg-2">Neque, vestibulum sed varius magna et at. Eu, adipiscing morbi augue justo. Nibh
              laoreet volutpat quis velit. Blandit aliquam donec sed morbi congue eget lorem viverra porta id
              lobortis.</p>
            <a href="index.html" class="btn btn-primary btn-lg px-4 me-md-2">Get
              Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

