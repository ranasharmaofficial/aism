<div id="CallBack" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;
        </button>
        <h4 class="modal-title">Modal Header
        </h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close
        </button>
      </div>
    </div>
  </div>
</div>    

<div class="modal fade bd-example-request" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="margin-top:80px">
    <div class="modal-content front-mod">
      <div class="abs">
        <div>        
          <button type="button" class="close pl-2" data-dismiss="modal" aria-label="Close" style="float:left">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding:0;">

          <div class="call-back">
            <div class="col-6 mx-auto" style="margin-top:250px; color:#fff">
              <p>Top Counselling Sessions By NEOSTYLUS</p>
              <ul>
                <li>Group Counselling in your city</li>
                <li>Daily Online counselling (Webinar)</li>
                <li>Personal Counselling in 14 cities</li>
                <li>Tele-counselling from 9 AM to 9 PM</li>
                <li>Live Chat Support</li>
              </ul>
              <p>Get connected with us and get honest advise and guaranteed admission!</p>  
            </div>

            <div class="col-6 mx-auto">
              <div class="card my-4">
                <div class="card-header para text-center bg-primary text-light">
                  <h5>Want Help With Admissions ?</h5>
                  <p>Leave us your details and we will contact you</p>
                </div>
                <div class="card-body">
                  <form method="post" action="<?=base_url('contact_us/req_insert')?>" autocomplete="off">
                    <input type="text" name="name" required class="form-control" placeholder="Name">
                    <input type="text" name="email" required class="form-control" placeholder="Email">
                    <input type="text" name="whatsApp" required class="form-control" maxlength="10" placeholder="WhatsApp Number">
                    <input type="text" name="city" required class="form-control" placeholder="City">
                    <input type="text" name="courses" required class="form-control" placeholder="Courses">
                      <!-- <select class="form-control">
                        <option>Select Program Type</option>
                        <option>MBBS in Abroad</option>
                        <option>MBBS in Germany</option>
                        <option>MBBS in USA</option>                  
                        <option>Study in Germany</option>
                      </select> -->
                      <button type="submit" class="btn btn-block btn-success">SUBMIT</button> 
                    </form>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>      
      </div>
    </div>
  </div> 

  <div class="clearfix"></div>

  <div class="parent-consulation">
    <div class="modal fade bd-example-schedule " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="margin-top:50px">
        <div class="modal-content">      
          <div class="modal-body" style="padding:0;">

            <div class="col-12">
              <div class="card padding-card">            
               <div class="card-body text-center">
                 <h4 class="text-light">REQUEST A CONSULTATION</h4>
                 <form method="POST" action="<?=base_url('contact_us/cons_insert')?>" autocomplete="off" class="pt-2">
                   <div class="col-12">
                     <input type="text" required name="f_name" class="form-control" pattern="[a-zA-Z ]{2,100}" title="*Please Enter only character!!" placeholder="First Name">  
                   </div>
                   <div class="col-12">
                     <input type="text" required name="l_name" pattern="[a-zA-Z ]{2,100}" title="*Please Enter only character!!" class="form-control" placeholder="Last Name"> 
                   </div>
                   <div class="col-12">
                     <input type="email" required name="email" class="form-control" placeholder="Email Address"> 
                   </div>
                   <div class="col-8">
                    <input type="text" required name="phone" maxlength="10" pattern="[0-9]{10}" title="*Please Enter Valid Phone No.!!" class="form-control" placeholder="Phone Number">
                    <div class="col-4">
                      <input type="text" required name="zip" maxlength="6" pattern="[0-9]{6}" title="*Please Enter Valid Zip Code!!" class="form-control" placeholder="Zip Code">
                    </div>                              
                  </div>
                  <div class="text-left">
                    <p>What type of consultation would you prefer?</p>
                    <input type="radio" name="prefer" value="Virtual"><label class="pl-1 pr-5">Virtual</label>
                    <input type="radio" name="prefer" value="In-Home"><label class="pl-1 pr-5">In-Home</label>
                  </div>  
                  <button type="submit" class="btn btn-block text-light py-1" style="background-color: #f18f3b">REQUEST A CONSULTATION</button> 
                </form>
                <p style="font-size: 10px;
                text-align: justify;
                padding-top: 20px;" class="instruction-consul">I'd like to learn more about Renewal by Andersen Windows. Please contact me at the phone number I listed above to schedule a convenient day and time for an in-home price quote. I am submitting this form so you can contact me and keep me informed about your products, services and when they go on sale. I understanding that I do not need to submit this form to schedule an In-home.</p>
              </div>

            </div>
          </div>
        </div>      
      </div>
    </div>
  </div>
</div>