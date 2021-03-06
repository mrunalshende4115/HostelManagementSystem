<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body {
  margin: auto;
  background:#dddddd;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}
input select {
    width: 75%;
    padding: 12px ;
    margin: 8px 0;
    
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #F6AA93 none repeat scroll 0% 0%;
  color: rgb(255, 255, 255);
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:left
}

form {
  border-radius: 5px;
  max-width:700px;
  width:100%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
}

h1 {
  text-align:center; 
  color: #666;
  text-shadow: 1px 1px 0px #FFF;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #B8B8B8;
  margin-bottom: 15px;
  width: 75%;
  height: 40px;
  float: left;
  padding: 0px 15px;
}

a {
  text-decoration:inherit
}

textarea {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #B8B8B8;
  margin: 0;
  width: 75%;
  height: 130px; 
  float: left;
  padding: 0px 15px;
}

.form-group {
  overflow: hidden;
  clear: both;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px;
}

.bouton-contact{
  background-color: #81BDA4;
  color: #FFF;
  text-align: center;
  width: 100%;
  border:0;
  padding: 17px 25px;
  border-radius: 0px 0px 5px 5px;
  cursor: pointer;
  margin-top: 40px;
  font-size: 18px;
}

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
  width:49.5%;
  float:right;
  box-sizing: border-box;
  padding: 0px 0px 0px 15px;
}

.validation {
  display:none;
  margin: 0 0 10px;
  font-weight:400;
  font-size:13px;
  color: #DE5959;
}

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}
</style>
</head>
<body>
    <h1>Personal Details</h1>
   <div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> <i class="fa fa-heart"></i> For Pccoe Girls Hostel </p></a></div>
  
  <form action="reg.php" method="POST">
      <h1>You should Fill This Form Before Login to Hostel Website.Fill It Only Once.</h1>
      
    <div class="contentform">
      <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


      <div class="leftcontact">
        <div class="form-group">
              <p>First name<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="fName" id="fName"  required>
                <div class="validation"></div>
       </div> 
            <div class="form-group">
              <p>Middle Name<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="mName" id="mName" required>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Surname <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
        <input type="text" name="lName" id="lName" required>
                <div class="validation"></div>
      </div>
      <div class="form-group">
      <p>Date of Birth <span>*</span></p> 
      <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="Date" name="dateofbirth" id="dateofbirth" required>
                <div class="validation"></div>
      </div>
      <div class="form-group">
      <p>E-mail <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" required>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>Course <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
       <input type="Course" name="Course" id="Course" required>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Academic Year <span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="year" id="year" required>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Department <span>*</span></p>
      <span class="icon-case"><i class="fa fa-map-marker"></i></span>
        <input type="text" name="department" id="department" required>
                <div class="validation"></div>
      </div>  



  </div>

  <div class="rightcontact">  
     <div class="form-group">
      <p>Date of Addmission <span>*</span></p> 
      <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="Date" name="date" id="date" required>
                <div class="validation"></div>
      </div>
      <div class="form-group">
      <p>Student contact Number <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building-o"></i></span>
        <input type="text" name="scontact" id="scontact" maxlength=10  minlength=10  required>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>parent contact Number <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" name="pcontact" id="pcontact" maxlength=10  minlength=10  required>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>guardian contact Number<span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="gcontact" id="gcontact" maxlength=10  minlength=10 required>
                <div class="validation"></div>
      </div>

     
    
      <div class="form-group">
      <p>Permanent Address<span>*</span></p>
      <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="paddress" rows="14" required></textarea>
                <div class="validation"></div>
      </div> 
      <div class="form-group">
      <p>Username<span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="username" id="username" required>
                <div class="validation"></div>
      </div>
       <div class="form-group">
      <p>Passward<span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="password" name="passward" id="passward"  maxlength=10 minlength=4 required>
                <div class="validation"  ></div>
      </div>

     
       
  </div>
  </div>
<button type="submit" name="add"  class="bouton-contact">Submit</button>
  
</form> 

  
</body>
</html>

 