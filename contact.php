<?php 
include 'header.php';
 ?>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

<div class="carousel-item active" style="background: url(images/06.jpg); background-repeat: no-repeat; background-size:100% 100%;">
            <div class="carousel-container">
              <div class="carousel-content">
               <h2 style="color: white;" class="animate__animated fanimate__adeInDown  animate__fadeInUp">CONTACT<span> US</span></h2>
              </div>
            </div>
          </div>
    </div>
  </section>          

  <section id="contact" class="contact" >
      <div class="container">

        <div class="row">
          <div class="col-lg-5">
            <div class="info-box mb-4" style="all : unset;">
            
              <i class="bx bx-map" style="margin-left: 45%;"></i>
                 <h3 style="text-align: center;">Our Address</h3>
                 <p style="text-align: center;">A108 Adam Street, New York, NY 535022</p>   
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4" style="all : unset;">
              <i class="bx bx-envelope" style="margin-left: 40%;"></i>
              <h3 style="text-align: center;">Email Us</h3>
              <p style="text-align: center;">contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4" style="all : unset;">
              <i class="bx bx-phone-call" style="margin-left: 40%;"></i>
              <h3 style="text-align: center;">Call Us</h3>
              <p style="text-align: center;">+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" style="margin-top: 10px;">

          <!-- <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div> -->

          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-rule="phone" data-msg="Please enter a valid phone Number" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="text" name="companyname" class="form-control" id="companyname" placeholder="Company Name" data-rule="minlen:4"/>
                  <div class="validate"></div>
                </div>
                
              </div>




              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>
        <div class="col-lg-12 " style="margin-top: 5%;">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
      </div>
        

    </section>



<?php 
include 'footer.php';
 ?>