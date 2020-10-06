<?php 
include 'header.php';
 ?>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

<div class="carousel-item active" style="background: url(images/Warehouses-1170x0-c-center.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
               <h2 style="color: white;" class="animate__animated fanimate__adeInDown  animate__fadeInUp">GET<span> YOUR QUOTATION</span></h2>
              </div>
            </div>
          </div>
    </div>
  </section>          
  <section id="" class="section">
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
  </section>
<?php 
include 'footer.php';
 ?>