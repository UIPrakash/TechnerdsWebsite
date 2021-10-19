<footer id="footer">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-3 col-lg-4 col-xl-4 footer1">
                <h1>
                  Industries 
                </h1>
                <ul>
                  <li><a href="../industries/healthcare.php">  Healthcare</a></li>
                  <li><a href="../industries/bfs.php">  BFSI</a></li>
                  <li><a href="../industries/wireless.php">  Wireless & Communication</a></li>
                  <li><a href="../industries/e-learning.php">  E-learning</a></li>
                </ul>

                <h1 class="mt-5">
                  Services
                </h1>
                <ul>
                  <li><a href="../services/application-development.php">  Application Development</a></li>
                  <li><a href="../services/software-product-development.php">  Software product Development</a></li>
                  <li><a href="../services/Q-A-Testing.php">  QA Testing</a></li>
                  <li><a href="../services/mobility.php">  Mobility</a></li>
                  <li><a href="../services/application-maintanance.php">  Application Maintenance</a></li>
                  <li><a href="../services/technical-support.php">  Technical & product Support</a></li>
                  <li><a href="../services/erp-solutions.php">  ERP Solutions</a></li>
                </ul>
              </div>
              <div class="col-12 col-md-3 col-lg-4 col-xl-4 footer2">
                <img class="footerLogo" src="../images/logo.svg">
                <div class="socialIcon">
                    <a href="https://www.facebook.com/TechnerdsSolutions-952264308292683/?modal=admin_todo_tour" target="_blank"><img  src="../images/fb.png"></a> 
                    <a href="https://twitter.com/Thiruma93830782" target="_blank"><img  src="../images/twitte.png"></a> 
                    <a href="https://www.linkedin.com/company/technerdssolutions/" target="_blank"><img  src="../images/in.png"></a> 
                </div>
                <h1>
                  US OFFICE
                </h1>
                <ul>
                  <li class="mb-2"><img src="../images/ic_map.svg"> 4241 Valley Forge PI, Eagan, MN 55123</li>
                  <li class="mb-2"><img src="../images/ic_mail.svg"> hr@technerdssolutions.com</li>
                  <li class="mb-2"><img src="../images/Ic_call.svg"> (612)-605-3893</li>
                
                </ul>

                <h1>
                  INDIA OFFICE
                </h1>
                <ul class="india"> 
                  <li class="mb-2"><img src="../images/ic_map.svg"> <span>
                    415, Second Floor <br>
                    200 Feet Radial road, 
                    Kovilambakkam <br>
                    Chennai, Tamil Nadu, India - 600117
                  </span></li>
                 
                
                </ul>
              </div>

              
              <div class="col-12 col-md-3 col-lg-4 col-xl-4 ">
                <div class="formContainer">
                  <h1>
                    WANT TO START A PROJECT?
                  </h1>
                  <p>
                    It’s simple
                  </p>
                  <form action="contact_process.php" method="POST" onsubmit="return validate()">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input name="c_name" id="c_name" required type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input name="c_email" id="c_email" required type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="companyName">Company Name</label>
                      <input name="c_companyname" required id="c_companyname" type="text" class="form-control" id="companyName">
                    </div>
                    <div class="form-group">
                      <label for="number">Phone Number</label>
                      <input name="c_mobile" required id="c_mobile" type="number" class="form-control" id="number">
                    </div>
                    <div class="form-group">
                      <label for="description">Project Description</label>
                      <textarea name="c_message" required id="c_message" class="form-control" rows="3"></textarea>
                    </div>
                    <!-- <input type="submit" class="btn btn-primary btn-lg btn-block" value="send" disabled="disabled" id="sendBtn" /> -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="sendBtn">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        
        </footer>
        <div class="copyrights">Copyright &#9400; 2021 TechNerds Solutions. All Rights Reserved</div>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js"></script>
        <!-- <script>AOS.init();function validate(){if(grecaptcha.getResponse()==""){alert("Please check captcha");return false}else{return true}} function enableBtn(){document.getElementById("sendBtn").disabled=false;}</script> -->
        
