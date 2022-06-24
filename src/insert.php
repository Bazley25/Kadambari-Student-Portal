<?php
session_start();
// if(!isset($_SESSION['login'])){
// header("location:login.php");
// }
include("header.php");

include("db.php");
$sql= "SELECT *FROM students";
$result = mysqli_query($conn,$sql);
?>

<section id="information" class="form bg-info">
  <div class="container ">
      <div class="row">
          <div class="col-md-12">
             <h2 class="mt-2 text-center text-white">Registration Form </h2>
<!-- Message part Start -->
             <div class="">
               <?php if(isset($_SESSION['error'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Sorry!</strong> Your Information is Not Save.
            </div>
          <?php }?>
  <!-- photo format****************************************** -->
          <?php if(isset($_SESSION['errorpic'])) { ?>
             <div class="alert alert-denger mt-3" role="alert">
              <strong>Warning!</strong> Please Upload JPG Format Of Picture.
            </div>
          <?php }?>
  <!-- *******************************************************************-->
          <?php if(isset($_SESSION['errorpicsize'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Warning!</strong> Please Upload 300 <span>&times;</span> 300 Pixels Size!.
            </div>
          <?php }?>
<!-- ******************************************************* -->
          <?php if(isset($_SESSION['student_mass'])) { ?>
             <div class="alert alert-success mt-3" role="alert">
              <strong>Sorry!</strong> You have already Submit Your Information!!
            </div>
          <?php }?>

             </div>
             <!-- Message part end -->
              <form action="store.php" method="POST" onsubmit="return valid()" class="bg-secondary text-white" enctype="multipart/form-data">
                <fieldset class="border p-4">
                  <legend style="color:white ">
                    Fill Up The Form Bellow!
                  </legend>
                <div class="form-group">
                <label for="name">Name <span class="text-white">(According To SSC Registration)</span> <span class="text-denger">*</span></label>
                <input type="text" class="form-control"  name="name" id="name"  placeholder="Enter Your Name According To SSC Registration">
              <p class="input_sms text-warning" id="name_error" ></p>

            </div>
            <div class="form-group">
                <label for="father_name">Father's Name <span class="text-white">(According To SSC Registration)</span> <span class="text-denger">*</span></label>
                <input type="text" class="form-control"  name="father_name" id="father_name" placeholder="Enter Your Father's Name According To SSC Registration">
                <p class="input_sms text-warning" id="father_name_error"></p>
            </div>
            <div class="form-group">
                <label for="mother_name">Mother's Name <span class="text-white">(According To SSC Registration)</span> <span class="text-denger">*</span></label>
                <input type="text" class="form-control"  name="mother_name" id="mother_name" placeholder="Enter Your Mother's Name According To SSC Registration">
                <p class="input_sms text-warning" id="mother_name_error"></p>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="text-white">(Optional)</span></label>
                <input type="email" class="form-control"  name="email" id="email" placeholder="Enter Your Email Address">
                <p class="input_sms text-warning" id="email_error"></p>
            </div>

            <div class="form-group  m-o clearfix">
              <div class="form-group col-md-4 float-left ml-0 pl-0">
                  <label for="dob">Date Of Birth<span class="text-denger">*</span></label>
                  <input type="date"  class="form-control"  name="dob" id="dob" value="<?php echo date('Y-m-d')?>">
                  <p class="input_sms text-warning d-inline" id="dob_error"></p>
              </div>
              <div class="form-group col-md-4 float-left ml-0 pl-0">
                  <label for="exam">SSC Eaxm Year <span class="text-denger">*</span></label>
                  <input type="text" class="form-control"  name="exam" id="exam" placeholder="Enter Your SSC Exam Year">
                  <p class="input_sms text-warning d-inline" id="exam_error"></p>
              </div>
              <div class="form-group col-md-4 float-left mr-0 pr-0">
                  <label for="last_edu">Last Education Level <span class="text-denger">*</span></label>
                  <input type="text" class="form-control"  name="last_edu" id="last_edu" placeholder="Enter Your Last Education Level">
                  <p class="input_sms text-warning" id="last_edu_error"></p>
              </div>
            </div>

            <div class="form-group m-0 clearfix">
              <div class="form-group col-md-4 float-left ml-0 pl-0 village">
                  <label for="village">Enter Your Village Nmae <span class="text-denger">*</span></label>
                  <input type="text" class="form-control"  name="village" id="village" placeholder="Enter Your Village Name">
                  <p class="input_sms text-warning" id="village_error" ></p>

              </div>
              <div class="form-group col-md-4 float-left ml-0 pl-0 mobile">

                  <label for="mobile">Enter Your Mobile Number <span class="text-denger">*</span></label>
                  <input type="number_format" class="form-control"  name="mobile" id="mobile" placeholder="Enter Your 11 Digits Mobile Number">
                  <p class="input_sms text-warning" id="mobile_error" style=".error_number{color:red;}"></p>

              </div>
              <div class="form-group col-md-4 float-left mr-0 pr-0 blood">
                  <label for="blood">Select Your Blood Group <span class="text-denger">*</span></label>
                  <select id="blood" name="blood" class="form-control" >
                    <option value="" selected>Select One</option>
                    <option value="A+">A+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                  <p class="input_sms text-warning" id="blood_error"></p>
              </div>
            </div>


<!--  Start Payment section -->
        <div class="form-group  m-o clearfix">
              <div class="form-group col-md-4 float-left ml-0 pl-0">
                  <label for="bkash">Bkash Mobile Number <span class="text-denger">*</span></label>
                  <input type="number_format" class="form-control"  name="bkash" id="bkash" placeholder="Enter Your Bkash Number ">
                  <p class="input_sms text-warning d-inline" id="bkash_error"></p>
              </div>
              <div class="form-group col-md-4 float-left ml-0 pl-0">
                  <label for="taka">Amount <span class="text-denger">*</span></label>
                  <input type="number_format" class="form-control"  name="taka" id="taka" placeholder="Enter Amount Of Taka ">
                  <p class="input_sms text-warning d-inline" id="taka_error"></p>
              </div>
              <div class="form-group col-md-4 float-left mr-0 pr-0">
                  <label for="trxid">Bkash Tranjection ID <span class="text-denger">*</span></label>
                  <input type="text" class="form-control"  name="trxid" id="trxid" placeholder="Enter Bkash Transection ID">
                  <p class="input_sms text-warning" id="trxid_error"></p>
              </div>
            </div>
        
<!--  End Payment section -->

              <!-- gender part start -->
                              <section class="gender">
                                    <div class="form-group  m-o ">
                                      <div class="col-form-label col-sm-2 pt-0">Select Gender <span class="text-denger">*</span></div>
                                      <div class="col-sm-10">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio"  name="gender" id="male"  value="Male" >
                                          <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio"  name="gender" id="female" value="Female">
                                          <label class="form-check-label" for="female">Female </label>
                                          <p class="input_sms text-warning" id="gender_error"></p>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
              <!-- Gender Part End -->
              <!-- photo Part start -->
            <section class="photo">
                <div class="row">
                    <div class="form-group col-md-8">
                <label for="image">Photo <span class="text-denger">*</span> <span style="color:white;">[Photo Sholud be JPG Format And 300<span>&times;</span>300 Pixels and not more than 100KB]</span></label><br>
                <label for="imagepreview">Image Preview</label>
                <img id="preimge" width="100" height="100" class="p-1">
                <script type="text/javascript">
                  function loadfile(event) {
                    var output = document.getElementById('preimge');
                    output.src=URL.createObjectURL(event.target.files[0]);
                  }
                </script>
                <input type="file" class="form-control"  name="image" id="image" onchange="loadfile(event)">

                <p class="input_sms text-warning" id="photo_error"></p>
            </div>
                </div>
            </section>
            <!-- photo Part End -->
                <!-- Start Button section-->
                <div class="btn ">
                    <div class="row">
                        <div class="col-lg-12 ">
                          <button type="submit" class="btn btn-outline-primary text-black btn-light btn-lg m-3 p-2"><i class="fa fa-paper-plane" aria-hidden="true"> Submit</i></button>
                        </div>
                    </div>
                </div>
                <!--End Button section-->
              </fieldset>
              </form>
          </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
 ?>

  <!-- Form Validation Start -->
    <script type="text/javascript">

        function valid(){
            var name=document.getElementById('name');
            var father=document.getElementById('father_name');
            var mother=document.getElementById('mother_name');
            var email=document.getElementById('email');
            var dob=document.getElementById('dob');
            var exam=document.getElementById('exam');
            var last_edu=document.getElementById('last_edu');
            var village=document.getElementById('village');
            var mobile=document.getElementById('mobile');
            var blood=document.getElementById('blood');
            var bkash=document.getElementById('bkash');
            var taka=document.getElementById('taka');
            var trxid=document.getElementById('trxid');

            // **** gender part Start *************************************
            var radios = document.getElementsByName("gender");
            var valid = false;
            var i = 0;
            while (!valid && i < radios.length) {
                if (radios[i].checked) valid = true;
                i++;
            }
            // image part
            var image=document.getElementById('image');

            // regular expresion

            // var mailRegex = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
            var mail_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var regex = /^[A-Za-z\s]{4,20}$/;
            var village_regex = /^[A-Za-z\s]{4,20}$/;
            var regex_mobile = /(^(01){1}[3456789]{1}(\d){8})$/;
            var regex_traxid = /^[A-Z0-9\s]{10}$/;


            if(name.value==''){
                document.getElementById('name_error').innerHTML="**Please Enter Your Name!**";
                name.focus();
                return false;
            }

            // if(name.value.length<4){
            //     document.getElementById('name_error').innerHTML="** Write more than 4 charactes**";
            //     name.focus();
            //     return false;
            // }

            if(!isNaN(name.value)){
                document.getElementById('name_error').innerHTML="** Only Alphabets is allowed !**";
                name.focus();
                return false;
            }
            if(regex.test(name.value) === false) {
           document.getElementById('name_error').innerHTML="** Please enter a valid Name, minimum 4  & maximum 20 Characters **";
           name.focus();
           return false;
          }
            else {
              document.getElementById('name_error').innerHTML="";
            }

            if(father_name.value==''){
                document.getElementById('father_name_error').innerHTML="**Please Enter Your father Name!**";
                father_name.focus();
                return false;
            }

            if(!isNaN(father_name.value)){
                document.getElementById('father_name_error').innerHTML="** Only Alphabets is allowed !**";
                father_name.focus();
                return false;
            }
            if(regex.test(father_name.value) === false) {
           document.getElementById('father_name_error').innerHTML="** Please enter a valid Name, minimum 4  & maximum 20 Characters **";
           father_name.focus();
           return false;
       }
        else {
            document.getElementById('father_name_error').innerHTML="";
          }

            if(mother_name.value==''){
              document.getElementById('mother_name_error').innerHTML="**Please Enter Your Mother Name!**";
                mother_name.focus();
                return false;
            }
            if(!isNaN(mother_name.value)){
                document.getElementById('mother_name_error').innerHTML="** Only Alphabets is allowed !**";
                mother_name.focus();
                return false;
            }
            if(regex.test(mother_name.value) === false) {
           document.getElementById('mother_name_error').innerHTML="** Please enter valid Name, minimum 4 & maximum 20 Characters**";
           mother_name.focus();
           return false;
       } else {
              document.getElementById('mother_name_error').innerHTML="";
            }

            if(email.value == ''){
              document.getElementById('email_error').innerHTML=" Please Enter Your Email address !";
                email.focus();
                return false;
            }

            if(email.value.indexOf('@') <=0 ){
              document.getElementById('email_error').innerHTML=" ** Please Enter Valid Email ! ** ";
                email.focus();
                return false;
            }

            if(email.value.charAt(email.value.length-4)!='.' && email.value.charAt(email.value.length-3)!='.'){
              document.getElementById('email_error').innerHTML=" ** Please Enter Valid Email ! ** ";
                email.focus();
              return false;
            }

            if(mail_regex.test(email.value) === false){
              document.getElementById('email_error').innerHTML=" ** Please Enter Valid Email ! ** ";
                email.focus();
                return false;
            }
            else {
              document.getElementById('email_error').innerHTML="";
            }

// Birthday
              function toTimestamp(strDate){
              var datum = Date.parse(strDate);
              return datum/1000;
              }

            var dob = document.getElementById('dob');
                var todayYear = new Date().getFullYear(); // Always use FullYear!!
              var cutOff14 = new Date(); // should be a Date
              cutOff14.setFullYear(todayYear - 14); // ...
              var cutOff80 = new Date();
              cutOff80.setFullYear(todayYear - 80);

              let currentDate = toTimestamp(cutOff14.toISOString().split('T')[0]);
              let lastDate = toTimestamp(cutOff80.toISOString().split('T')[0]);

                if(dob.value == ""){
                  dob_error.innerHTML=" Please Enter your Birthday";
                  return false;
                }

               if (toTimestamp(dob.value) >= currentDate) {
                dob_error.innerHTML = "Your Age Should be At least more than 14 Years Old";
                  return false;
              }
               if (toTimestamp(dob.value) <= lastDate) {
              dob_error.innerHTML = "Your Age Should be At least less than 80 Years Old";
                return false;
            }
                else {
                  dob_error.innerHTML="";
                }


            if(exam.value==''){
              document.getElementById('exam_error').innerHTML="** Please Enter Your SSC Exam Year! **";
                exam.focus();
                return false;
            }
            if(isNaN(exam.value)){
                document.getElementById('exam_error').innerHTML="** Please Enter Numeric Values Only**";
                exam.focus();
                return false;
            }
          if (exam.value.length != 4) {
            document.getElementById('exam_error').innerHTML=" Year is not Valid. Please check";
            return false;
          }
          var current_year=new Date().getFullYear();
            if((exam.value < 1969) || (exam.value > current_year)){
            document.getElementById('exam_error').innerHTML="Year should be in range from 1969 to Current year";
            return false;
          }else {
              document.getElementById('exam_error').innerHTML="";
            }

            if(last_edu.value==''){
              document.getElementById('last_edu_error').innerHTML="** Please Enter Your Last Education Level! **";
                last_edu.focus();
                return false;
            }
            if(!isNaN(last_edu.value)){
                document.getElementById('last_edu_error').innerHTML="** Only Alphabets is allowed !**";
                last_edu.focus();
                return false;
            }
                if(regex.test(last_edu.value) === false) {
               document.getElementById('last_edu_error').innerHTML="** Please Enter Valid Information, minimum 4  & maximum 20 Characters **";
               last_edu.focus();
               return false;
           }else {
              document.getElementById('last_edu_error').innerHTML="";
            }

            if(village.value==''){
              document.getElementById('village_error').innerHTML="** Please Enter Your Village Name ! **";
                village.focus();
                return false;
            }

            if(!isNaN(village.value)){
                document.getElementById('village_error').innerHTML="** Only Alphabets is allowed !**";
                village.focus();
                return false;
            }
            if(village_regex.test(village.value) === false) {
            document.getElementById('village_error').innerHTML="** Please enter a valid Name, minimum 4  & maximum 20 Characters **";
            village.focus();
            return false;
            }
            else {
              document.getElementById('village_error').innerHTML="";
            }

            if(mobile.value==''){
              document.getElementById('mobile_error').innerHTML="** Please Enter Your Mobile Number ! **";
                mobile.focus();
                return false;
            }

            if(regex_mobile.test(mobile.value) === false){
              document.getElementById('mobile_error').innerHTML="** Please Enter a Valid Mobile Number ! **";
                mobile.focus();
                return false;
            }else{
              document.getElementById('mobile_error').innerHTML="";
            }


            if(blood.value==''){
              document.getElementById('blood_error').innerHTML="** Please Enter Blood Group! **";
                blood.focus();
                return false;
            }else{
              document.getElementById('blood_error').innerHTML="";
            }

            if(bkash.value==''){
                document.getElementById('bkash_error').innerHTML="** Please Enter Bkash Number! **";
                bkash.focus();
                return false;
            }
            if(regex_mobile.test(bkash.value) === false){
              document.getElementById('bkash_error').innerHTML="** Please Enter a Valid Bkash Number ! **";
                bkash.focus();
                return false;
            }

            else{
              document.getElementById('bkash_error').innerHTML="";
            }

            if(taka.value==''){
                document.getElementById('taka_error').innerHTML="** Please Enter Amount Of Taka! **";

                taka.focus();
                return false;
            }else{
              document.getElementById('taka_error').innerHTML="";
            }


            if(trxid.value==''){
                document.getElementById('trxid_error').innerHTML="** Please Enter Bkash Tranjection ID! **";

                trxid.focus();
                return false;
            }
            if(regex_traxid.test(trxid.value) === false) {
           document.getElementById('trxid_error').innerHTML="** Invalid Transection ID **";
           trxid.focus();
           return false;
          }
            else{
              document.getElementById('trxid_error').innerHTML="";
            }

          if (!valid){
            document.getElementById('gender_error').innerHTML="** Please Select Your Gender! **";
          return valid;
        }else{
          document.getElementById('gender_error').innerHTML="";
        }

            if(image.value==''){
              document.getElementById('photo_error').innerHTML="Please Upload Your Photo 300<span>&times;</span>300 Pixels! And File Format must be JPG And Not more than 100 KB";
                image.focus();
                return false;
            }else{
              document.getElementById('photo_error').innerHTML="";
            }

            }
    </script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>

    <!-- Form Validation end -->
</body>
</html>
<?php unset($_SESSION['error']);?>
<?php unset($_SESSION['errorpic']);?>
<?php unset($_SESSION['errorpicsize']);?>
<?php unset($_SESSION['student_mass']);?>
