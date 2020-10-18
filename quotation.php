<?php 
include 'header.php';
 ?>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

<div class="carousel-item active" style="background: url(images/06.jpg); background-repeat: no-repeat; background-size:100% 100%;">
            <div class="carousel-container">
              <div class="carousel-content">
               <h2 style="color: white;" class="animate__animated fanimate__adeInDown  animate__fadeInUp">GET<span> YOUR QUOTATION</span></h2>
              </div>
            </div>
          </div>
    </div>
  </section>          

  <section id="contact" class="contact" >
      <div class="container">

        <!-- <div class="row">
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
 -->
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
                  <input type="text" name="companyname" class="form-control" id="companyname" placeholder="Company Name" data-rule="minlen:4"/>
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" data-rule="phone" data-msg="Please enter a valid phone Number" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="location" class="form-control" id="location" placeholder="Location" data-rule="minlen:3" data-msg="Enter valid Location"/>
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                    <input placeholder="Requested Training Date" class="form-control" type="text" onfocus="(this.type='date')" id="req_date">  
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="emptrain" class="form-control" id="emptrain" placeholder="HOW MANY EMPLOYEES YOU WOULD WANT TO TRAIN" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="exp_train" id="exp_train" placeholder="HOW MANY OF THEM ARE EXPERIENCED FORKLIFT OPERATORS" />
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

      </div>
    </section><!-- End Contact Section -->
  <!-- <section id="" class="section">
      <div class="container">
        <form  method="POST" action="https://formsubmit.co/helpdesk@swshr.ca" enctype="multipart/form-data">
          <div class="form-group">
            <div class="row">
              
              <div class="col-md-6">
                <label for="name" class="mb-2 mr-sm-2">NAME</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="" name="name"   required>
              </div>
              <div class="col-md-6">
                <label for="phone" class="mb-2 mr-sm-2">PHONE</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="phone" placeholder="" name="phone" required>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              
              <div class="col-md-6">
                <label for="email" class="mb-2 mr-sm-2">EMAIL</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="email" placeholder="" name="email"  required>
              </div>
              <div class="col-md-6">
                <label for="company" class="mb-2 mr-sm-2">COMPANY  </label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="company" placeholder="" name="company"   required>
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="row">
            
              <div class="col-md-6">
                <label for="location" class="mb-2 mr-sm-2">LOCATION</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="location" placeholder="" name="location" required>
              </div>
              <div class="col-md-6">
                <label for="level" class="mb-2 mr-sm-2">REQUESTED TRAINING DATE</label>
                 <input type="date" class="form-control mb-2 mr-sm-2" id="date" placeholder="" name="date" required>
              </div>
             
            </div>
          </div>
          <div class="form-group">
            <div class="row">
            
              <div class="col-md-6">
                <label for="employees" class="mb-2 mr-sm-2">HOW MANY EMPLOYEES YOU WOULD WANT TO TRAIN?</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="employees" placeholder=""  required>
              </div>
              <div class="col-md-6">
                <label for="experienced" class="mb-2 mr-sm-2">HOW MANY OF THEM ARE EXPERIENCED FORKLIFT OPERATORS?</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="experienced" placeholder=""  required>
              </div>
              
            </div>
          </div>
          
          <div class="row">
             <div class="col-md-4"></div>
            <div class="col-md-4">
            <div class="join-team text-center">
              <div class="contact-btn text-center">
                <input class="btn btn-default btn-main" type="submit" value="Send Message" name="submit" >
              </div>
            </div>
            </div>
             <div class="col-md-4"></div>
          </div>
        
    
      
      </form>
     
      
      
    </div>
  </section> -->
<?php 
include 'footer.php';
 ?>