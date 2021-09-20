<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FrontView</title>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans|Oswald:300'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="assets/images/favicon.png"/>
  </head>
  <body>
    <header class="main_h">
      <div class="row">
        <a class="logo" href="/">
          <i class="icon-size fa fa-laptop" aria-hidden="true"></i>
          FontView
        </a>
        <div class="mobile-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="h-reposition d-none d-md-block d-lg-block d-xl-block">
          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Our Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </nav>

        <nav class="d-block d-md-none d-lg-none d-xl-none">
          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Our Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </nav>
      </div> 
    </header>

    <div class="hero">
      <div class="hero-large d-none d-md-block d-lg-block d-xl-block">
        <h1><span>Welcome To:</span><br>FrontView</h1>
        <button type="button" class="btn-spacing btn btn-outline-primary btn-lg" onclick="location.href='#'">
          Signin
        </button>
        <button type="button" class="btn-spacing btn btn-primary btn-lg" onclick="location.href='#intro'">
          Get Started
        </button>

        <div class="mouse">
          <span></span>
        </div>
      </div>

      <div class="hero-small d-block d-md-none d-lg-none d-xl-none">
        <h1><span>Welcome To:</span><br>FrontView</h1>
        <button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='#'">
          Signin
        </button>
        <button type="button" class="btn btn-primary btn-sm" onclick="location.href='#intro'">
          Get Started
        </button>

        <div class="mouse">
          <span></span>
        </div>
      </div>
    </div>

    <div class="row content" id="#intro">
      <h1 class="sec01">Intoduction</h1>
      <p class="par01">
        At FrontView, we develop innovative & creative products & services that provide total communication & information solutions. Among a plethora of services, web design and development, tailor made applications, ERPs, CRMs, e-commerce solutions, business-to-business applications, business-to-client applications, managed hosting and internet portal management are few that we offer.
      </p>
    </div>

    <div class="row content" id="#about">
      <h1 class="sec01">About Us</h1>
      <p class="par01">
        We offer software solutions to clients around the globe. Those we've worked with bear testimony to the quality of our work. As a leader in technology exploring, FrontView is committed to exporting quality software worldwide. The general purpose of FrontView is to develop and promote advanced information technologies for multi-user operation.FrontView's business philosophy is to assure the highest quality product, total client satisfaction, timely delivery of solutions and the best quality/price ratio found in the industry. Our emphasis is on offering a high degree of product user friendliness through a positive, creative and focused company staff.
      </p>
    </div>

    <div class="row content" id="#service">
      <h1 class="sec01">Our Services</h1>
      <h6 class="sec01">
        Web Design & Development ||
        Native App Development ||
        Desktop/PC Software Development        
      </h6>
      <p class="par01">
        We specialize in building unique, responsive and robust websites. We help our clients with cross-platform native app solutions for their businesses. We also provide cross-platform and robust desktop apps for our customers 
      </p>
    </div>

    <div class="row bottom-content" id="#contact">
      <h1 class="sec01">Contact Us</h1>
      <p class="text-center"><i>Send us a message</i></p>
      <form>
        <div class="row">
          <div class="col-sm-5">
            <div class="mb-4">
              <input type="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="mb-4">
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="col-sm-7 mb-4">
            <textarea type="message" class="form-control" placeholder="Message" rows="3" cols="50"></textarea>
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send Message</button>
          </div>
        </div>
      </form>
    </div>

    <footer class="flex-rw">
      <ul class="footer-list-top">
        <li>
          <h4 class="footer-list-header">About Us</h4>
        </li>
        <li>
          <a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">
            <i class="fas fa-question-circle"></i>&nbsp
            What We Do
          </a>
        </li>
        <li>
          <a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">
            <i class="fa fa-binoculars"></i>&nbsp
            Case Studies
          </a>
        </li>
      </ul>
      <ul class="footer-list-top">
        <li>
          <h4 class="footer-list-header">Support</h4>
        </li>
        <li>
          <a href='#' class="generic-anchor footer-list-anchor">
            <i class="fas fa-tools"></i>&nbsp
            Settings
          </a>
        </li>
        <li>
          <a href='#' class="generic-anchor footer-list-anchor">
            <i class="fa fa-list"></i>&nbsp
            FAQs
          </a>
        </li>
      </ul>
      <ul class="footer-list-top">
        <li id='help'>
          <h4 class="footer-list-header">Our Contacts</h4>
        </li>
        <li>
          <a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">
            <i class="fa fa-phone"></i>&nbsp
            +000-123-456789
          </a>
        </li>
        <li>
          <a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">
            <i class="fa fa-envelope"></i>&nbsp
            frontviewtech4@gmail.com
          </a>
        </li>
      </ul>
      <section class="footer-social-section flex-rw">
        <span class="footer-social-overlap footer-social-connect">
          CONNECT <span class="footer-social-small">with</span> US
        </span>
        <span class="footer-social-overlap footer-social-icons-wrapper">
          <a href="#" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fab fa-facebook"></i></a>
          <a href="#" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fab fa-twitter"></i></a>
          <a href="#" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fab fa-instagram"></i></a>
          <a href="#" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fab fa-youtube"></i></a>
        </span>
      </section>
      <section class="footer-bottom-section flex-rw">
        <div class="footer-bottom-wrapper">   
          <i class="fa fa-copyright" role="copyright"></i>
          2021 Frontview
          <address class="footer-address" role="company address"> Located in Olympus Mons, Mars</address>
          <span class="footer-bottom-rights"> - All Rights Reserved.</span>
        </div>
        <div class="footer-bottom-wrapper">
          <a href="#" class="generic-anchor" rel="nofollow">Terms</a> | 
          <a href="#" class="generic-anchor" rel="nofollow">Privacy</a>
        </div>
      </section>
    </footer>

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html> 
