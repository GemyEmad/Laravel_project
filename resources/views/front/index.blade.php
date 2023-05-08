@extends('front.layouts.app')

@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Joyful Treats<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{asset('assets/front/img/hero-img.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>Our Story</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{asset('assets/front/img/about.jpg')}} )"  alt="" data-aos="zoom-out" data-aos-delay="300">
            <div class="call-us position-absolute">
              <p>+201284667004</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="ful" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Our story goes back to 1810 during the independence revolution in Mexico city, when Abuelita Maria invented the Churro recipe back at her home in Mexico,
              </p>

              <ul>
                <li><i class="bi bi-check2-all"></i> she started making Churros for all the neighbours in her village as they had no access to fresh bakery at this time.</li>
                <li><i class="bi bi-check2-all"></i>  Since then, Churros have become a delicious Mexican tradition.</li>
                <li><i class="bi bi-check2-all"></i> Her son “Jose” the one referred to as our “Senor Churro” was the one selling Churros for the whole village, with the help of his donkey “Dando”.</li>
              </ul>
              <p>
                One day while Jose was selling his pastry, he came across a beautiful girl named “Morena” who was singing with an angelic voice to her sheep. Jose was so mesmerized with her voice and the girl herself that he named the Churros after the breed of sheep called “Navejo-Churro” which have horns that look like his fried pastry…
              A few months later Jose and Morena were blissfully wed and were blessed with a handsome son, whom they named Miguel and a beautiful daughter Fernanda . With the help of his beautiful family “Senor Churro” managed to establish his amazing recipe which was passed along the generations down to our time…
              Whilst the tastes may have changed over the years, one thing remained the same, our mouth-watering secret ingredient.

              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('assets/front/img/about-2.jpg')}}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose Yummy?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <!-- <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> -->
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section =======
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>< End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div> End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div> End Stats Item

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div> End Stats Item

        </div>

      </div>
    </section> End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Señor Churro Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-Churros">
              <h4>Churros</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Soft_Serve">
              <h4>Soft Serve</h4>

            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Sauces_Additions">
              <h4>Sauces & Additions</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Treats">
              <h4>Treats</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Savory">
              <h4>Savory</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Extras">
              <h4>Extras</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Cold_Drinks">
              <h4>Cold Drinks</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Hot_Drinks">
              <h4>Hot Drinks</h4>
            </a>
          </li><!-- End tab nav item -->


        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-Churros">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Churros</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Churro/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Churro/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>REGULAR CHURROS</h4>
                <p class="ingredients">
                  (Our classic Abuela`s recipe)
                </p>
                <p>With one sauce cup of dulce de leche or srawberry</p>
                <p class="price">
                  LE 65
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Churro/menu-item-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Churro/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>STUFFED CHURRO BITES</h4>
                <p class="ingredients">
                  6 Churro bites stuffed with sauce of your choice
                </p>
                <p class="price">
                  LE 65
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Churro/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Churro/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>GIANT CHURRO</h4>
                <p class="ingredients">
                  (Cause SIZE dose matter)
                </p>
                <p>with one sauce cup of your choice</p>
                <p class="price">
                  LE 50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Churro/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Churro/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>STUFFED CHURRO</h4>
                <p class="ingredients">
                  Hand-filled with our
                </p>
                <p>mouthwatering sauce</p>
                <p class="price">
                  LE 55
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/churro/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/churro/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>LA FAMILIA CHURRO BAG</h4>
                <p class="ingredients">
                  (Cause Sharing Ts Caring-12 churros)
                </p>
                <p class="price">
                  LE 105
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Churro/menu-item-6.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Churro/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CHURRO BITES CON NUTELLA SHOT</h4>
                <p class="ingredients">
                  6 Churro bites & Nutella Shot
                </p>
                <p class="price">
                  LE 100
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Churro/menu-item-7.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Churro/menu-item-7.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CHURRO CON QUESO</h4>
                <p class="ingredients">
                  6 Churro bites stuffed with
                </p>
                <p>Mexican Cheese And Jalapeno mix</p>
                <p class="price">
                  LE 100
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-Soft_Serve">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Soft Serve</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/soft serve/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/soft serve/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>SOFT ICECREAM CUP</h4>
                <p class="ingredients">
                  (Home-made soft serve made)
                </p>
                <p>With Fresh cream</p>
                <p class="price">
                  LE 55
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/soft serve/menu-item-2 .png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/soft serve/menu-item-2 .png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>SOFT ICECREAM CONE</h4>
                <p class="ingredients">
                  (Home-made soft serve made)
                </p>
                <p>With Fresh cream</p>
                <p class="price">
                  LE 40
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/soft serve/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/soft serve/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CHURRO CREAM</h4>
                <p class="ingredients">
                  A true Mexican delight made with
                  </p>
                  <p>our loop Churro & Vanilla soft serve</p>
                <p class="price">
                  LE 75
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/soft serve/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/soft serve/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>LOTUS SUNDAE</h4>
                <p class="ingredients">
                  Soft vanilla ice cream
                </p>
                <P>with lotus biscuit and lotus butter</P>
                <p class="price">
                  LE 80
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/soft serve/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/soft serve/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>OREO SUNDAE</h4>
                <p class="ingredients">
                  Soft vanilla ice cream
                </p>
                <p>with Oreo cookies and dark chocolate sauce</p>
                <p class="price">
                  LE 65
                </p>
              </div><!-- Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>Menu Item -->

            </div>
          </div><!-- End Churros Menu Content -->

          <div class="tab-pane fade" id="menu-Sauces_Additions">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Sauces & Additions</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/sauces/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/sauces/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Strawberry</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 18
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/sauces/menu-item-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/sauces/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Dulce de leche</h4>
                <p class="ingredients">
                  (Our signature dip)
                </p>
                <p class="price">
                  LE 18
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/sauces/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/sauces/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Nutella Dip</h4>
                <p class="ingredients">
                  (Our signature dip)
                </p>
                <p class="price">
                  LE 30
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/sauces/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/sauces/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Chocolate</h4>
                <p class="ingredients">
                  (Our signature dip)
                </p>
                <p class="price">
                  LE 20
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/sauces/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/sauces/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Lotus</h4>
                <p class="ingredients">
                  (Our signature dip)
                </p>
                <p class="price">
                  LE 35
                </p>
              </div><!-- Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>Menu Item -->

            </div>
          </div><!-- End Sauces & Additions Menu Content -->

          <div class="tab-pane fade" id="menu-Treats">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Treats</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/treats/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/treats/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>NUTELLA SHOT</h4>
                <p class="ingredients">
                  Nutella
                </p>
                <p class="price">
                 LE 40
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/treats/Untitled-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/treats/Untitled-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CANDY APPLE</h4>
                <p class="ingredients">
                  APPLE
                </p>
                <p class="price">
                 LE 40
                </p>
              </div><!-- Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div>Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div>Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>Menu Item -->

            </div>
          </div><!-- End Treats Menu Content -->

          <div class="tab-pane fade" id="menu-Savory">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>SAVORY</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>TORNADO POTATO</h4>
                <p class="ingredients">
                  Our classic fresh potatoes coated with a mexican spice
                </p>

                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>STRIPS ON STICKS</h4>
                <p class="ingredients">
                  Chicken Strips
                </p>
                <p class="price">
                  LE 95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CHEDDAR JALAPEÑO STICKS</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 75
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CENTRALPARK HOTDOGS</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 55
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CENTRALPARK HOTDOGS MEAL</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 85
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-6.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>CORN DOG</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 70
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-7.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-7.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>SEÑOR NACHOS</h4>
                <p class="ingredients">
                  Crunchy corn tortilla chips served with
                </p>
                <p>tomato salsa</p>
                <p>or Mexican cheese dip</p>
                <p class="price">
                  LE 50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Savory/menu-item-8.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Savory/menu-item-8.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>SEÑOR MEAL</h4>
                <p class="ingredients">
                  Chicken strips+1 Tornado Potato
                </p>
                <p>Add a drink to the meal</p>
                <p class="price">
                  LE 120
                </p>
                <!-- <p class="price">
                  LE +10
                </p> -->
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Savory Menu Content -->


          <div class="tab-pane fade" id="menu-Extras">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Extras</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Extra/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Extra/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Mexican salsa</h4>
                <p class="ingredients">
                  <!-- Lorem, deren, trataro, filede, nerada -->
                </p>
                <p class="price">
                  LE 18
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Extra/menu-item-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Extra/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Mexican cheese sauce</h4>
                <p class="ingredients">
                  <!-- Lorem, deren, trataro, filede, nerada -->
                </p>
                <p class="price">
                 LE 20
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Extra/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Extra/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Mexican cheese jalapeño</h4>
                <p class="ingredients">
                  <!-- Lorem, deren, trataro, filede, nerada -->
                </p>
                <p class="price">
                  LE 25
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Extra/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Extra/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Sirracha sauce</h4>
                <p class="ingredients">
                  <!-- Lorem, deren, trataro, filede, nerada -->
                </p>
                <p class="price">
                  LE 25
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Extra/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Extra/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Sweet chili</h4>
                <p class="ingredients">
                  <!-- Lorem, deren, trataro, filede, nerada -->
                </p>
                <p class="price">
                  LE 25
                </p>
              </div><!-- Menu Item -->

              <!-- <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>Menu Item -->

            </div>
          </div><!-- End Extras Menu Content -->

          <div class="tab-pane fade" id="menu-Cold_Drinks">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Cold Drinks</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Exotic granita</h4>
                <p class="ingredients">
                  Blueberry/Pinacolada/Raspberry
                </p>
                <p class="price">
                  LE 40
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Orange juice</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 55
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Mango smoothie</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 55
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Strawberry smoothie</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Guava smoothie</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-6.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Watermelon smoothie</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->


              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-7.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-7.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Piña colada smoothie</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 60
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-8.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-8.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Oreo frappe</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 65
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-9.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-9.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Dulce de leche frappe</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 65
                </p>
              </div><!-- Menu Item -->
              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-10.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-10.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Iced latte</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-11.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-11.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Red Bull madness</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 80
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-12.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-12.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Red Bull</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-13.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-13.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Soda</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 15
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Cold/menu-item-14.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Cold/menu-item-14.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Water</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 10
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Cold Drinks Menu Content -->

          <div class="tab-pane fade" id="menu-Hot_Drinks">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Hot Drinks</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-1.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Espresso single</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 30
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-2.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Espresso double</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 35
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-3.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Cappucino</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-4.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Latte</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-5.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Mocha</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 45
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-6.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Americano</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 40
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-7.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-7.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Tea</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 25
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-8.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-8.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Flavored tea</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 25
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-9.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-9.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Hot chocolate/+ marshmallow</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 40/+8
                </p>
              </div><!-- Menu Item -->
              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-10.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-10.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Turkish coffee single</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 25
                </p>
              </div><!-- Menu Item -->
              <div class="col-lg-4 menu-item">
                <a href="{{asset('assets/front/img/menu/Hot/menu-item-11.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-11.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Turkish coffee double</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  LE 35
                </p>
              </div><!-- Menu Item -->

            </div><!-- Menu Item -->
            <div class="col-lg-4 menu-item">
              <a href="{{asset('assets/front/img/menu/Hot/menu-item-12.png')}}" class="glightbox"><img src="{{asset('assets/front/img/menu/Hot/menu-item-12.png')}}" class="menu-img img-fluid" alt=""></a>
              <h4>Coffe Flavor</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                LE 12
              </p>
            </div><!-- Menu Item -->


            </div>
          </div><!-- End Hot Drinks Menu Content -->



        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Offers Section ======= -->
    <section id="offers" class="offers">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Offers</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide offers-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/front/img/offers/offer-1.jpg')}})">
              <h3>MEAL</h3>
              <div class="price align-self-start">LE 85</div>
              <p class="description">
                <!-- Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas. -->
              </p>
            </div><!-- End offers item -->

            <div class="swiper-slide offers-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/front/img/offers/offer-2.jpg')}})">
              <h3>Birthday Meals</h3>
              <div class="price align-self-start">LE 85 / LE 120</div>
              <p class="description">
                <!-- In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur. -->
              </p>
            </div><!-- End offers item -->

            <!-- <div class="swiper-slide offers-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p> -->
            </div><!-- End offers item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End offers``` Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Thanks ... there's very nice staff 🥰
                        chef Michelle Saaed is the best 💯❤️‍🔥 he's very helpful and professional

                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Peter hany</h3>
                      <h4>Faculty of Arts Helwan University</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt=""> -->
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Great taste, great quality, very polite staff.
                        Highly recommended 👌🏻.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Monia Madkour</h3>
                      <h4>Assistant CEO - Treasury & Corporate Banking</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt=""> -->
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tasty
                        High quality
                        Reasonable prices
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ashraf Peskales</h3>
                      <h4>Consultant</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt=""> -->
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Thank u Mariam Barsoom for the best Churros in town and best Earl Grey tea I’ve had in a long time🙏🙏.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Eman Moawad</h3>
                      <h4>Faculty of Medicine Cairo University</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <!-- <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt=""> -->
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/front/img/events-1.jpg')}})">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/front/img/events-2.jpg')}})">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/front/img/events-3.jpg')}})">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= staff Section ======= -->
    <section id="staff" class="staff section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>staff</h2>
          <p>Our <span>Proffesional</span> staff</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="staff-member">
              <div class="member-img">
                <img src="{{asset('assets/front/img/chefs/chefs-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End staff Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="staff-member">
              <div class="member-img">
                <img src="{{asset('assets/front/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="staff-member">
              <div class="member-img">
                <img src="{{asset('assets/front/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div><!-- End staff Member -->

        </div>

      </div>
    </section><!-- End staff Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-1.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-1.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-2.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-2.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-3.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-4.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-4.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-5.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-5.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-6.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-6.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-7.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-7.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('assets/front/img/gallery/gallery-8.jpg')}}"><img src="{{asset('assets/front/img/gallery/gallery-8.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Branches Section ======= -->














    <!-- ======= End Branches Section ======= -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          {{-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.794376181727!2d30.99619848504198!3d30.042756481882915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585b872990c7d7%3A0xd5c811ae23aa085d!2sZed%20Park%20-%20Gate%204!5e0!3m2!1sar!2seg!4v1678283111245!5m2!1sar!2seg" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="{{route('front.contact.store')}}" method="post" role="form" class="php-email-form p-3 p-md-4">
        @csrf
        @method("post")
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control " id="name" placeholder="Your Name" required value="{{old("name")}}">
              {{-- @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror --}}
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" required value="{{old("email")}}">
            </div>
          </div>
          {{-- <div class="col-xl-6 form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div> --}}
          <div class="col-xl-6 form-group">
            <input type="text" class="form-control " name="phone" id="phone" placeholder="phone" required value="{{old("phone")}}">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

@if(session()->has('error'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    {{ session()->get('error') }}
    </div>
</div>
@endif

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->




@endsection

