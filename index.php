<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ptrik Bootstrap</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assests/vendors/css/glightbox.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  </head>
  <body>
  <!--START THE NAVBAR SECTION-->

  <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo1_result.png" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon d-block"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <button type="button" class="rounded-pill btn-rounded">+33 6625903**
            <span>
              <i class="fas fa-phone-alt"></i>
            </span>
          </button>
        </ul>
      </div>
    </div>
  </nav>

  <!-- START THE INTRO-SECTION-->

  <section id="Home" class="intro-section">
    <div class="container">
      <div class="row align-items-center text-white">
        <!--START THE CONTENT FOT THE INTRO-->
        <div class="col-md-6 intros">
          <h1 class="display-2">
            <span class="display-2--intro"> Hey!, I'm Hamza</span>
            <span class="display-2--description lh-lg"> I'm at your service for your nexte mission</span>
          </h1>
          <button type="button" class="rounded-pill btn-rounded">Get in touch
            <span>
              <i class="fas fa-arrow-right"></i>
            </span>
          </button>
        </div>
        <!--START THE CONTENT FOT THE VIDEO-->
        <div class="col-md-6 intros">
          <div class="video-box">
            <img src="images/coding.png" alt="video illustration" class="img-fluid">
            <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
              <span>
                <i class="fas fa-play-circle"></i>
              </span>
              <span class="border-animation border-animation--border-1"></span>
              <span class="border-animation border-animation--border-2"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,224C384,224,480,160,576,112C672,64,768,32,864,64C960,96,1056,192,1152,208C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>

  <!-- START THE COMPANIES-->

  <section id="companies" class="companies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Course and Training</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div>

    <!--START THE COURSES AND TRAINING CONTENT-->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-2">
          <div class="companies--logo-box shadow-sm">
            <img src="images/courses/thp.jpg" alt="course 1 logo" title="the hacking project">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="companies--logo-box shadow-sm">
            <img src="images/courses/mdn.png" alt="course 2 logo" title="Mozilla Developer Network">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="companies--logo-box shadow-sm">
            <img src="images/courses/OpenClassrooms.png" alt="course 3 logo" title="OpenClassrooms">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="companies--logo-box shadow-sm">
            <img src="images/courses/fcc.jpeg" alt="course 4 logo" title="FreeCodeCamp">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="companies--logo-box shadow-sm">
            <img src="images/courses/udemy.jpg" alt="course 5 logo" title="udemy">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="companies--logo-box shadow-sm">
            <img src="images/courses/yoytube.png" alt="course 6 logo" title="youtube">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--START THE SECTION 4 : OUR SERVIVES-->

  <section id="services" class="services">
    <div class="container">
      <div class="row text-center mt-0">
        <h1 class="display-3 fw-bold">Our Services</h1>
        <div class="heading-line mb-2"></div>
      </div>


    <!--START THE DESCRIPTION CONTENT-->

      <div class="row py-2 mt-5 mb-3">
        <div class="col-md-6 border-right">
          <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">Integration/development of your web sites, API integration
            and implimentation, and more other servives</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-white p-4 text-start">
          <p class="fw-light">We develop reponsive web-sites and web appliacations using a set of technologies such as:
            Ruby, Ruby on Rails, JavaScripte, PostgreSQL, HTML5, CSS3, Bootstrap, Git, Github, Heroku, JQuery.
            So feel free to contact us for your project</p>
          </div>
        </div>
      </div>
    </div>

    <!-- START THE CONTENT FOR SERVICES-->

    <div class="container">
      <!--web sites-->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-file-code"></div>
            <h3 class="display-3--title mt-1">Web sites and applications</h3>
            <p class="lh-lg">Get a new window to your customers and make more visibility by creationg a web site
            for your companie, shop or market </p>
            <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__pic">
            <img src="images/services/website.png" alt="web sites illustration" class="img-fluid" >
          </div>
        </div>
      </div>
      <!--API Integration-->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__pic">
            <img src="images/services/api.png" alt="Api Integration illustration" class="img-fluid" >
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-code"></div>
            <h3 class="display-3--title mt-1">API Integration</h3>
            <p class="lh-lg"></p>
            <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
      <!--MVP for your Start-up-->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-paper-plane"></div>
            <h3 class="display-3--title mt-1">Start-up MVP</h3>
            <p class="lh-lg"></p>
            <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__pic">
            <img src="images/services/mvp.png" alt="Start-up MVP illustration" class="img-fluid" >
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--START THE SECTION 5 -TESTIMONIALS-->

  <section id="testimonials" class="testimonials">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,202.7C384,203,480,245,576,266.7C672,288,768,288,864,250.7C960,213,1056,139,1152,128C1248,117,1344,171,1392,197.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="container">
      <div class="row text-center text-white">
        <h1 class="display-3 fw-bold">Testimonials</h1>
        <hr style="width: 100px; height: 3px;" class="mx-auto">
        <p class="lead pt-1">what our clients are saying</p>
      </div>


      <!--START THE CAROUSEL CONTENT-->

      <div class="row align-items-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!--carousel item-1-->
            <div class="carousel-item active">
              <!--testimonials_card-->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quibusdam porro quasi ducimus delectus maxime, nostrum molestiae est, ut, ipsum facilis.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!--client picture-->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-1.jpeg" alt="client-1 picture" class="rounded-circle img-fluid">
              </div>
              <!--client name & role-->
              <div class="testimonials__name">
                <h3>Leo Morra</h3>
                <p class="fw-light">CEO & founder</p>
              </div>
            </div>

            <!--carousel item-2-->
            <div class="carousel-item">
              <!--testimonials_card-->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quibusdam porro quasi ducimus delectus maxime, nostrum molestiae est, ut, ipsum facilis.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!--client picture-->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-2.jpeg" alt="client-2 picture" class="rounded-circle img-fluid">
              </div>
              <!--client name & role-->
              <div class="testimonials__name">
                <h3>Joy Marelle</h3>
                <p class="fw-light">Finance manager</p>
              </div>
            </div>

            <!--carousel item-3-->
            <div class="carousel-item">
              <!--testimonials_card-->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quibusdam porro quasi ducimus delectus maxime, nostrum molestiae est, ut, ipsum facilis.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!--client picture-->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-3.jpeg" alt="client-3 picture" class="rounded-circle img-fluid">
              </div>
              <!--client name & role-->
              <div class="testimonials__name">
                <h3>Claire Zawad</h3>
                <p class="fw-light">Global brand manager</p>
              </div>
            </div>

            <!--carousel item-4-->
            <div class="carousel-item">
              <!--testimonials_card-->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quibusdam porro quasi ducimus delectus maxime, nostrum molestiae est, ut, ipsum facilis.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!--client picture-->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-4.jpeg" alt="client-4 picture" class="rounded-circle img-fluid">
              </div>
              <!--client name & role-->
              <div class="testimonials__name">
                <h3>Arthur Kyn</h3>
                <p class="fw-light">CEO & founder</p>
              </div>
            </div>

            <!--carousel item-5-->
            <div class="carousel-item">
              <!--testimonials_card-->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quibusdam porro quasi ducimus delectus maxime, nostrum molestiae est, ut, ipsum facilis.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!--client picture-->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-5.jpeg" alt="client-5 picture" class="rounded-circle img-fluid">
              </div>
              <!--client name & role-->
              <div class="testimonials__name">
                <h3>Chaib Kali</h3>
                <p class="fw-light">Trading manager</p>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            </button>
            <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            </button>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,202.7C384,203,480,245,576,266.7C672,288,768,288,864,250.7C960,213,1056,139,1152,128C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>

  <!--START THE SECTION 6- THE FAQ-->


  <section id="faq" class="faq">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-uppercase">faq</h1>
        <div class="heading-line"></div>
        <p class="lead">frequently asked questions, get knowledge befere hand</p>
      </div>

      <!--ACCORDION CONTENT-->
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <!--FIRST ITEM-->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  adipisicing elit
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body</strong>: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>

            <!--SECOND ITEM-->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingTow">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTow" aria-expanded="false" aria-controls="collapseTow">
                  Enim nulla maiores velit
                </button>
              </h2>
              <div id="collapseTow" class="accordion-collapse collapse" aria-labelledby="headingTow" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body</strong>: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>

            <!--THIRD ITEM-->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Lorem, ipsum dolor
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body</strong>: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>

            <!--FOURTH ITEM-->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  sit amet consectetur
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the fourth item's accordion body</strong>: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>

  <!--START THE 7 SECTION- PORTFOLIO-->

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-capitalize">latest work</h1>
        <div class="heading-line mb-3"></div>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dicta perferendis eius.
        </p>
      </div>
      <!--FILTER BUTTONS-->
      <div class="row mt-4 mb-4 text-center">
        <div class="col-md-12">
          <button class="btn btn-outline-primary" type="button">ALL</button>
          <button class="btn btn-outline-primary" type="button">websites</button>
          <button class="btn btn-outline-primary" type="button">Applications</button>
          <button class="btn btn-outline-primary" type="button">Integration</button>
        </div>
      </div>

      <!--START THE PORTFOLIO ITEMS-->

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-1.jpg" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 1</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-2.jpg" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 2</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-3.jpg" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 3</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-4.jpg" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 4</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-5.jpg" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 5</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-6.png" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 6</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-7.jpeg" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 7</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-8.jpg" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 8</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/portfolio/portfolio-9.jpg" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>project name goes here 9</h4>
                <p>category project</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--START THE SECTION 8- GET STARTED-->

  <section id="contact" class="get-started">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
        <div class="heading-line mb-3"></div>
        <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad!</p>
      </div>

      <!--START THE CTA CONTENT-->
      <div class="row text-white">
        <div class="col-12 col-lg-6 gradient shadow p-3">
          <div class="cta-info w-100">
            <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
            <p class="lh-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nemo molestiae saepe. Iusto facilis laudantium autem, fuga dolorum unde a odio?</p>
            <h3 class="display-3--brief">what will be the next step?</h3>
            <ul class="cta-info__list">
              <li>Lorem, ipsum dolor.</li>
              <li>Sit amet consectetur.</li>
              <li>Adipisicing elit. Suscipit?</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white shadow p-3">
          <div class="form w-100 pb-2">
            <h4 class="display-3--title mb-5">start your project</h4>
            <form action="contactform.php" method="post" enctype="multipart/form-data" class="row">
              <div class="col-lg-6 col-md-6 mb-3">
                <input type="text" placeholder="First Name" id="inputFistName" class="form-control shadow form-control-lg" required>
              </div>
              <div class="col-lg-6 col-md-6 mb-3">
                <input type="text" placeholder="Last Name" id="inputLastName" class="form-control shadow form-control-lg" required>
              </div>
              <div class="col-lg-12 mb-3">
                <input type="email" placeholder="email address" id="inputEmail" class="form-control shadow form-control-lg" required>
              </div>
              <div class="col-lg-12 mb-3">
                <textarea name="message" placeholder="message" id="message" rows="8" class="form-control shadow form-control-lg" required></textarea>
              </div>
              <div class="text-center d-grid mt-1">
                <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3">Submit
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--START THE SECTION 9- THE FOOTER-->

  <footer class="footer">
    <div class="container">
      <div class="row">
        <!--Mobile number-->
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone"  viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            </svg>
          </div>
          <div class="contact-box__info">
            <a href="" class="contact-box__info--title">+33 06#2###3#8</a>
            <p class="contact-box__info--subtitle">Mon-Fri 9h-17h</p>
          </div>
        </div>
        <!--Email-->
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"  viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <rect x="3" y="5" width="18" height="14" rx="2" />
              <polyline points="3 7 12 13 21 7" />
            </svg>
          </div>
          <div class="contact-box__info">
            <a href="" class="contact-box__info--title">example@company.com</a>
            <p class="contact-box__info--subtitle">Online support</p>
          </div>
        </div>
        <!--Location-->
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin"  viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <circle cx="12" cy="11" r="3" />
              <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
            </svg>
          </div>
          <div class="contact-box__info">
            <a href="" class="contact-box__info--title">Paris, France</a>
            <p class="contact-box__info--subtitle">Paris 75000,</p>
          </div>
        </div>
      </div>
    </div>

    <!--Start the footer social media content-->

    <div class="footer-sm">
      <div class="container">
        <div class="row py-4 text-center text-white">
          <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            connect with us on social media
          </div>
          <div class="col-lg-7 col-md-6">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!--start the section for the company info-->

    <div class="container mt-5">
      <div class="row text-white justify-content-center mt-3 pb-3">
        <div class="col-12 col-lg-6 col-sm-6">
          <h5 class="text-capitalize fw-bold">company name</h5>
          <hr class="bg-white d-inline-block" style="width: 60px; height: 5px;">
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta possimus itaque deserunt?
          </p>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
          <h5 class="text-capitalize fw-bold">products</h5>
          <hr class="bg-white d-inline-block" style="width: 60px; height: 5px;">
          <ul class="list-inline company-list">
            <li><a href="#">Lorem, ipsum.</a></li>
            <li><a href="#">Lorem, ipsum.</a></li>
            <li><a href="#">Lorem, ipsum.</a></li>
            <li><a href="#">Lorem, ipsum.</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
          <h5 class="text-capitalize fw-bold">useful links</h5>
          <hr class="bg-white d-inline-block" style="width: 60px; height: 5px;">
          <ul class="list-inline text-capitalize company-list">
            <li><a href="#">your account.</a></li>
            <li><a href="#">become an affiliate.</a></li>
            <li><a href="#">create an account.</a></li>
            <li><a href="#">help.</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
          <h5 class="text-capitalize fw-bold">contact</h5>
          <hr class="bg-white d-inline-block" style="width: 60px; height: 5px;">
          <ul class="list-inline company-list">
            <li><a href="#">Lorem, ipsum.</a></li>
            <li><a href="#">Lorem, ipsum.</a></li>
            <li><a href="#">Lorem, ipsum.</a></li>
            <li><a href="#">Lorem, ipsum.</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--start the copyright info-->
    <div class="footer-bottom pt-5 pb-5">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-12">
            <div class="footer-bottom__copyright">
              &COPY; Copyright 2021 <a href="#">H.LAGOUNE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- back to top button-->

  <a href="#" class="shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
  </a>

  <script src="assets/vendors/js/glightbox.min.js"></script>
  <script type="text/javascript">
  const lightbox = GLightbox({
    'href': 'images/nas.mp4',
    'type': 'video',
    'source': 'local',
    'width': 900,
    'autoplayVideos': 'true',
  });
  </script>
  <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
