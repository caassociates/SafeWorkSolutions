
    
<?php
  include 'header.php';
?>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

     
        <div  class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(images/Warehouses-1170x0-c-center.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h1 class="animate__animated animate__fadeInDown" style="color:#ffda6b;">Schedule A Call </h1>
               
              </div>
            </div>
          </div>
 
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

<main id="main">
<section id="contact" class="contact"  >
    <div class="container">
          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="border-radius:11px;">
            <div class="form-group">
            <div class="row">
                
              <div class="col-md-6">
                <label for="name" class="mb-2 mr-sm-2">NAME</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
              </div>
                
                <div class="col-md-6">
                 <label for="name" class="mb-2 mr-sm-2">Select a Date</label>
                 <input type="date" class="form-control mb-2 mr-sm-2" id="date" placeholder="" name="date" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
              
              <div class="col-md-6">
                <label for="phone" class="mb-2 mr-sm-2">PHONE</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="phone" placeholder="(000)-000-0000" name="phone" required>
              </div>

              <div class="col-md-6">
                <label for="time_to_call" class="mb-2 mr-sm-2">BEST TIME TO CALL  </label>
                <select id = "time_to_call" name="time_to_call" class="form-control mb-2 mr-sm-2"  required>
                    <option  selected="">Select a time</option>
                    <option>Morning</option><option>Early Afternoon</option>
                    <option>Late Afternoon</option>
                  </select>
              </div>
             
            </div>

          <div class="form-group">
            <div class="row">
             
              <div class="col-md-6">
                <label for="email" class="mb-2 mr-sm-2">EMAIL</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="email" placeholder="abc@gmail.com" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="call_take_time" class="mb-2 mr-sm-2">I EXPECT THE CALL TO TAKE</label>
                <select id = "call_take_time" name="call_take_time" class="form-control mb-2 mr-sm-2" required>
                    <option  selected="">--</option>
                    <option>Less Than 10 Minutes</option><option>10-15 Minutes</option>
                    <option>20-30 Minutes</option>
                  </select>
              </div>
            
            </div>
          </div>

          <div class="form-group">
            <div class="row">
             
             <div class="col-md-6">
                <label for="subject" class="mb-2 mr-sm-2">SUBJECT  </label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="subject" placeholder="" name="subject" required>
              </div>
              
              
            </div>
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
</section>
</main>


<?php 
    include 'footer.php';
?>
