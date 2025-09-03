
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - eBusiness Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../../berdon/assets/img/favicon.png" rel="icon">
  <link href="../../../berdon/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../berdon/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../berdon/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../berdon/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../berdon/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../../berdon/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../../berdon/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Updated: Jun 23 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="../../../berdon/assets/img/logo.webp" alt=""> -->
        <h1 class="sitename"><span>NextGen</span>eBusiness</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Dashboard</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
   

      
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Strategic Solutions for Business Growth</h2>
              <p>"Strategy without tactics is the slowest route to victory. Tactics without strategy is the noise before defeat."</p>
              <div class="hero-btns">
                <a href="#contact" class="btn btn-primary">Get a Free Consultation</a>
                <a href="#services" class="btn btn-outline">Our Services</a>
              </div>
              <div class="hero-stats">
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>Years Experience</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                  <p>Clients Worldwide</p>
                </div>
                <div class="stat-item">
                  <h3><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></span>%</h3>
                  <p>Success Rate</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="../../../berdon/assets/img/image.jpeg" alt="image" alt="Consulting Services" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div data-aos="fade-up" data-aos-delay="100">

        <div class="clients-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 6000,
              "autoplay": {
                "delay": 1,
                "disableOnInteraction": false
              },
              "centeredSlides": true,
              "slideToClickedSlide": true,
              "slidesPerView": "auto",
              "spaceBetween": 40,
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "640": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 4,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 40
                }
              }
            }
          </script>

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Empowering your business with growth-focused strategies.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title">Empowering Growth, Driving Success</h2>
            <p class="about-description">At NextGen eBusiness, we provide strategic solutions to help businesses grow, innovate, and lead. From market expansion to operational efficiency, we turn challenges into opportunities—driving sustainable success at every stage..</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Professional and Corporate</li>
                  <li><i class="bi bi-check-circle-fill"></i> Casual and Friendly</li>
                  <li><i class="bi bi-check-circle-fill"></i> Startup-Focused</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Tech-Savvy / Innovative</li>
                  <li><i class="bi bi-check-circle-fill"></i> Mission-Driven</li>
                  <li><i class="bi bi-check-circle-fill"></i> Marketing and Client-Centered</li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                    <img src="../../../berdon/assets/img/image5.jpg" alt="image5"  alt="CEO Profile" class="profile-image">
                    <div>
                      <h4 class="profile-name">Jessa Berdon</h4>
                      <p class="profile-position">CEO &amp;Senior Developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number">+63 0956-2456-789</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="../../../berdon/assets/img/about/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="../../../berdon/assets/img/about/about-square-1.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
             
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="stats-hero row align-items-center mb-5">
          <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
            <h3 class="headline mb-3">Transforming Data Into Impactful Insights</h3>
            <p class="lead">Making Data Work for You</p>
          </div>
          <div class="col-lg-5 text-lg-end text-center" data-aos="zoom-in" data-aos-delay="300">
            <div class="stats-rating d-inline-flex align-items-center py-3 px-4 shadow-sm">
              <img src="../../../berdon/assets/img/about/about-1.webp" class="img-fluid stats-rating-img me-3" alt="User Group" width="64" height="48">
              <div>
                <div class="rating-score d-flex align-items-center mb-1">
                  <span class="fs-5 fw-semibold me-2">4.8/5</span>
                  <span class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                  </span>
                </div>
                <div class="user-feedback small">Based on 70+ unique user reviews</div>
              </div>
            </div>
          </div>
        </div>

        <div class="stats-counters row gy-4 justify-content-center">
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1.5" class="purecounter"></span>K+
              </div>
              <small class="label">Active Clients</small>
            </article>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1.5" class="purecounter"></span>K+
              </div>
              <small class="label">Analytics Projects</small>
            </article>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="97" data-purecounter-duration="1.5" class="purecounter"></span>%
              </div>
              <small class="label">Automation Success</small>
            </article>
          </div>
          <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
            <article class="stats-counter-card">
              <div class="counter-value mb-1">
                <span data-purecounter-start="0" data-purecounter-end="99.96" data-purecounter-duration="1.5" class="purecounter"></span>%
              </div>
              <small class="label">Cloud Reliability</small>
            </article>
          </div>
        </div><!-- End stats counters -->

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>"Quality in a service or product is not what you put into it. It is what the client or customer gets out of it."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article class="service-item">
              
              </span>
              <h3>
                <a href="service-details.html">
                  Strategic Planning  <span>Consulting</span>
                </a>
              </h3>
              <p>
                 Crafting custom strategies that align with your business goals.
              </p>
              <a href="service-details.html" class="card-action rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <article class="service-item">
              
              </span>
              <h3>
                <a href="service-details.html">
                  Market Analysis  <span> Expansion</span>
                </a>
              </h3>
              <p>
                new opportunities and expanding your reach.
              </p>
              <a href="service-details.html" class="card-action rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article class="service-item">
              
              </span>
              <h3>
                <a href="service-details.html">
                  Digital<span>Transformation</span>
                </a>
              </h3>
              <p>
                Leveraging technology to optimize operations and enhance customer experience.
              </p>
              <a href="service-details.html" class="card-action rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <article class="service-item">
              
              </span>
              <h3>
                <a href="service-details.html">
                  Operational  <span> Efficiency:</span>
                </a>
              </h3>
              <p>
                Streamlining processes to reduce costs and increase productivity.
              </p>
              <a href="service-details.html" class="card-action rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article class="service-item">
              
              <h3>
                <a href="service-details.html">
                  Customer <span> Experience Management</span>
                </a>
              </h3>
              <p>
                 Building loyalty through personalized and exceptional service.
              </p>
              <a href="service-details.html" class="card-action rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </article>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <article class="service-item">
              <h3>
                <a href="service-details.html">
                   <span>Data-Driven Insights</span>
                </a>
              </h3>
              <p>
                Using analytics to inform smart, actionable decisions.
              </p>
              <a href="service-details.html" class="card-action rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-right"></i>
              </a>
            </article>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-6 col-xl-3">
            <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
              <div class="card-header">
                <div class="icon-box">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>"Focused Work and Productivity"</h4>
              </div>
              <div class="card-body">
                <p>A professional engaged in focused work, combining digital tools with traditional note-taking to enhance productivity and organization.</p>
                <div class="feature-image">
                  <img src="../../../berdon/assets/img/services/services-1.webp" alt="Security Services" class="img-fluid">
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="btn-explore">
                  Explore Service
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
            </div>
          </div><!-- /Service Card -->

          <div class="col-lg-6 col-xl-3">
            <div class="service-card featured" data-aos="zoom-in" data-aos-delay="200">
              <div class="card-header">
                <div class="icon-box">
                  <i class="bi bi-cpu"></i>
                </div>
                <h4>"Collaborative Learning and Innovation"</h4>
              </div>
              <div class="card-body">
                <p>A friendly customer support agent engaging with clients, demonstrating professionalism and a positive attitude while using modern communication tools.</p>
                <div class="feature-image">
                  <img src="../../../berdon/assets/img/services/services-2.webp" alt="Technology Solutions" class="img-fluid">
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="btn-explore">
                  Explore Service
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
            </div>
          </div><!-- /Service Card -->

          <div class="col-lg-6 col-xl-3">
            <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
              <div class="card-header">
                <div class="icon-box">
                  <i class="bi bi-rocket-takeoff"></i>
                </div>
                <h4>"Collaborative Innovation in Action"</h4>
              </div>
              <div class="card-body">
                <p>A group of professionals engaged in a productive and collaborative meeting, fostering creativity and teamwork.</p>
                <div class="feature-image">
                  <img src="../../../berdon/assets/img/services/services-3.webp" alt="Innovation Services" class="img-fluid">
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="btn-explore">
                  Explore Service
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
            </div>
          </div><!-- /Service Card -->

          <div class="col-lg-6 col-xl-3">
            <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
              <div class="card-header">
                <div class="icon-box">
                  <i class="bi bi-puzzle"></i>
                </div>
                <h4>"Customer Support Excellence"</h4>
              </div>
              <div class="card-body">
                <p>A friendly customer support agent engaging with clients, demonstrating professionalism and a positive attitude while using modern communication tools.</p>
                <div class="feature-image">
                  <img src="../../../berdon/assets/img/services/services-4.webp" alt="Strategic Planning" class="img-fluid">
                </div>
              </div>
              <div class="card-footer">
                <a href="#" class="btn-explore">
                  Explore Service
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
            </div>
          </div><!-- /Service Card -->

        </div>
      </div>
    </section><!-- /Alt Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>"Our revolutionary digital solutions leverage cutting-edge technology, scalable systems, and data-driven strategies to optimize business performance and drive growth."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="features-intro">
              <h2>Revolutionary Digital Solutions</h2>
              <p>"Our digital solutions use the latest technology, are easy to scale, and help improve business efficiency with data insights and smooth integration."</p>
              <div class="highlights-grid">
                <div class="highlight-item">
                  <div class="highlight-number">99.9%</div>
                  <div class="highlight-text">Uptime Guarantee</div>
                </div>
                <div class="highlight-item">
                  <div class="highlight-number">24/7</div>
                  <div class="highlight-text">Expert Support</div>
                </div>
                <div class="highlight-item">
                  <div class="highlight-number">500+</div>
                  <div class="highlight-text">Satisfied Clients</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="featured-image-container">
              <img src="../../../berdon/assets/img/features/features-3.webp" alt="Digital Solutions" class="img-fluid">
              <div class="floating-badge">
                <i class="bi bi-award"></i>
                <span>Industry Leader</span>
              </div>
            </div>
          </div>
        </div>

        <div class="features-grid">
          <div class="row g-4">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="feature-box text-center">
                <div class="feature-icon-wrapper">
                  <i class="bi bi-lightning-charge"></i>
                </div>
                <h4>Lightning Performance</h4>
                <p>"Enjoy ultra-fast speeds with our optimized infrastructure and advanced technology."</p>
                <div class="progress-indicator">
                  <div class="progress-bar" style="width: 95%;"></div>
                </div>
                <span class="progress-label">95% Efficiency</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="feature-box text-center">
                <div class="feature-icon-wrapper">
                  <i class="bi bi-shield-shaded"></i>
                </div>
                <h4>Advanced Security</h4>
                <p>"Our multi-layered security protocols guarantee your data is fully protected against modern cyber threats."</p>
                <div class="progress-indicator">
                  <div class="progress-bar" style="width: 100%;"></div>
                </div>
                <span class="progress-label">100% Secure</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="feature-box text-center">
                <div class="feature-icon-wrapper">
                  <i class="bi bi-layers"></i>
                </div>
                <h4>Seamless Integration</h4>
                <p>"Easily connect your existing systems with our flexible and scalable integration platform, offering 88% compatibility."</p>
                <div class="progress-indicator">
                  <div class="progress-bar" style="width: 88%;"></div>
                </div>
                <span class="progress-label">88% Compatibility</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="feature-box text-center">
                <div class="feature-icon-wrapper">
                  <i class="bi bi-graph-up"></i>
                </div>
                <h4>Smart Analytics</h4>
                <p>"Unlock valuable insights with advanced data analysis and real-time reporting, ensuring 92% accuracy."</p>
                <div class="progress-indicator">
                  <div class="progress-bar" style="width: 92%;"></div>
                </div>
                <span class="progress-label">92% Accuracy</span>
              </div>
            </div>
          </div>
        </div>

        <div class="advanced-features-section" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-delay="200">
              <h3>Advanced Capabilities</h3>
              <p>Explore cutting-edge features built to enhance your operations, streamline processes, and position your business for sustained growth and success.</p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="advanced-feature-card">
                <div class="feature-header">
                  <div class="feature-number">01</div>
                  <div class="feature-status-badge enterprise">Enterprise</div>
                </div>
                <div class="feature-content">
                  <h5>Professional and Polished</h5>
                  <p>Streamline complex business processes with intelligent automation that adapts to your organizational needs.</p>
                  <ul class="feature-benefits">
                    <li><i class="bi bi-check-circle"></i> Process Optimization</li>
                    <li><i class="bi bi-check-circle"></i> Error Reduction</li>
                  </ul>
                </div>
                <div class="feature-icon-bg">
                  <i class="bi bi-diagram-3"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
              <div class="advanced-feature-card">
                <div class="feature-header">
                  <div class="feature-number">02</div>
                  <div class="feature-status-badge premium">Premium</div>
                </div>
                <div class="feature-content">
                  <h5>Real-time Collaboration</h5>
                  <p>Enable seamless teamwork with synchronized data sharing and instant communication across all platforms.</p>
                  <ul class="feature-benefits">
                    <li><i class="bi bi-check-circle"></i> Live Updates</li>
                    <li><i class="bi bi-check-circle"></i> Team Sync</li>
                  </ul>
                </div>
                <div class="feature-icon-bg">
                  <i class="bi bi-people"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="500">
              <div class="advanced-feature-card">
                <div class="feature-header">
                  <div class="feature-number">03</div>
                  <div class="feature-status-badge standard">Standard</div>
                </div>
                <div class="feature-content">
                  <h5>Predictive Intelligence</h5>
                  <p>Leverage machine learning algorithms to forecast trends and make data-driven strategic decisions.</p>
                  <ul class="feature-benefits">
                    <li><i class="bi bi-check-circle"></i> Trend Analysis</li>
                    <li><i class="bi bi-check-circle"></i> Risk Assessment</li>
                  </ul>
                </div>
                <div class="feature-icon-bg">
                  <i class="bi bi-cpu"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="600">
              <div class="advanced-feature-card">
                <div class="feature-header">
                  <div class="feature-number">04</div>
                  <div class="feature-status-badge coming-soon">Coming Soon</div>
                </div>
                <div class="feature-content">
                  <h5>Cloud Scalability</h5>
                  <p>Dynamic resource allocation ensures optimal performance during peak usage while maintaining cost efficiency.</p>
                  <ul class="feature-benefits">
                    <li><i class="bi bi-check-circle"></i> Auto Scaling</li>
                    <li><i class="bi bi-check-circle"></i> Cost Optimization</li>
                  </ul>
                </div>
                <div class="feature-icon-bg">
                  <i class="bi bi-cloud-arrow-up"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why Us</h2>
        <p>"Choose us for innovative solutions, expert support, and seamless integration to drive your business success."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="row gy-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-item">
                  <div class="card-number">01</div>
                  <h3> Why choose us over other providers?</h3>
                  <p>We offer tailored, innovative solutions backed by years of experience, ensuring that your business needs are met with precision and reliability.</p>
                </div>
              </div><!-- End Card Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-item">
                  <div class="card-number">02</div>
                  <h3>What sets us apart from the competition?</h3>
                  <p>Our focus on seamless integration, advanced technology, and customer-centric service ensures that we provide results that drive real business growth.</p>
                </div>
              </div><!-- End Card Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-item">
                  <div class="card-number">03</div>
                  <h3>Why is our approach better for your business?</h3>
                  <p>We prioritize your success by offering scalable, secure solutions designed to optimize efficiency and reduce errors, giving you a competitive edge.</p>
                </div>
              </div><!-- End Card Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-item">
                  <div class="card-number">04</div>
                  <h3>Why trust us with your project?</h3>
                  <p> Our team of experts delivers consistent, high-performance solutions with a strong commitment to your goals, providing ongoing support and ensuring long-term success.</p>
                </div>
              </div><!-- End Card Item -->

            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="300">
            <div class="image-wrapper">
              <img src="../../../berdon/assets/img/about/about-portrait-3.webp" alt="" class="img-fluid rounded-4">
            </div>
          </div>
        </div>

      </div>

     <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                "Here are some common questions our clients ask — and the answers you need to get started with NextGen eBusiness."
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>What is NextGen eBusiness?</span></h3>
                <div class="faq-content">
                  <p>NextGen eBusiness is a solutions-driven consultancy and service platform that helps businesses grow, innovate, and improve operations through strategic planning, digital tools, and expert guidance</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span> Who can benefit from your services?</span></h3>
                <div class="faq-content">
                  <p>We work with startups, small to medium-sized businesses, and even larger organizations looking to streamline their processes, expand their markets, or undergo digital transformation.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>What services do you offer?</span></h3>
                <div class="faq-content">
                  <p>Our core services include:

                    Business strategy development
                    
                    Digital transformation and automation
                    
                    Market expansion consulting
                    
                    Startup and product launch support
                    
                    Branding and business process optimization</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>Do you offer custom solutions?</span></h3>
                <div class="faq-content">
                  <p>Yes! Every business is unique, so we provide customized strategies and solutions tailored to your specific goals, challenges, and industry.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>How much do your services cost?</span></h3>
                <div class="faq-content">
                  <p>Pricing depends on the scope and complexity of your project. We offer flexible packages and transparent pricing. A detailed quote is provided after our initial consultation.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Meet the minds behind our success—driven experts committed to helping your business grow and lead.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../berdon/assets/img/image1.jpg" alt="image1" class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">CEO & Senior Developer</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jessa Berdon</h4>
                <p> Is a passionate Software Developer skilled in Java, Python, and JavaScript. With expertise in both front-end and back-end development, she specializes in building scalable applications, integrating APIs, and working with databases. Jessa is committed to continuous learning and delivering high-quality, efficient code.</p>
              </div>
            </div><!-- End Team Card -->
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../berdon/assets/img/image2.jpeg" alt="image2"  class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Creative Director</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Junerey Rubin</h4>
                <p>Is an innovative Creative Director with over [X] years of experience leading creative teams to deliver impactful design solutions. Specializing in brand strategy, digital design, and cross-channel campaigns, Junerey has a proven track record of transforming brands and crafting visually compelling stories that resonate with audiences.

                    He excels in guiding teams, driving creative vision, and ensuring high-quality project execution from concept to delivery.</p>
              </div>
            </div><!-- End Team Card -->
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../berdon/assets/img/image3.jpg" alt="image3"  class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Project Manager</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nina Baron</h4>
                <p>Is a results-driven Project Manager with a strong track record of successfully leading cross-functional teams to deliver projects on time and within budget. She excels in planning, resource management, and stakeholder communication, ensuring projects meet business goals and exceed client expectations.</p>
              </div>
            </div><!-- End Team Card -->
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="team-card">
              <div class="profile-image">
                <img src="../../../berdon/assets/img/image4.jpg" alt="image4"  class="img-fluid" alt="" loading="lazy">
                <div class="role-badge">Business Analyst</div>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jean Rubina</h4>
                <p>Is a detail-oriented Business Analyst with expertise in gathering and analyzing business requirements to drive efficient solutions. Skilled in data analysis, process optimization, and stakeholder communication, Jean helps organizations make informed decisions to enhance operational performance.</p>
              </div>
            </div><!-- End Team Card -->
          </div>

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>"Ready to grow your business? Contact us today and let’s build something great together."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>"Reach us through the details below—we’re ready to assist you anytime."</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>Carcar City Cebu </p>
                  <p>Can-asujan </p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+63 0989 5548 855</p>
                  <p>+63 0978 25444 541</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>berdonjessa4@gmail.com</p>
                  <p>berdonjesssa24@.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>
              <p>"We’d love to hear from you! Reach out and let’s start something amazing."</p>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">NextGen eBusiness</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Carcar City Cebu</p>
            <p>Can-asujan</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+63 0989 5548 855</span></p>
            <p><strong>Email:</strong> <span>berdonjesssa24@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Dashboard</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Strategic Planning  Consulting </a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"></a>Market Analysis & Expansion</li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"></a>Operational Efficiency</li>
            <li><i class="bi bi-chevron-right"></i> <a href="#"></a>Customer Experience Management</li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>"Follow us and be part of our journey to smarter business solutions!"</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">NextGen eBusiness</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Jessa Berdon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../berdon/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../berdon/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../berdon/assets/vendor/aos/aos.js"></script>
  <script src="../../../berdon/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../berdon/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../berdon/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../berdon/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../../berdon/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../../../berdon/assets/js/main.js"></script>

</body>

</html>