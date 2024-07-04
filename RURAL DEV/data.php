<html>
    <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
    
  </head>
  

  <body class="bg-info" >
  
  <div class="container">
    <h1>REGISTER FORM</h1>
    <form action="#" method="POST">
    <label for="course" name="gname">Choose a Grievance:</label><br>
     <select id="grv">
     <option name="not selected">SELECT</option>
        <option name="garbage">GARBAGE</option>
        <option name="polution">POLUTION</option>
        <option name="pension">PENSION</option>
        <option name="ration">RATION</option>
        <option name="school">SCHOOL</option>
        <option name="hospital">HOSPITAL</option>
        <option name="library">LIBRARY</option>
        <option name="agriculture">AGRICULTURE</option>
        <option name="road & constuction">ROAD & CONSTRUCTION</option>
        
     </select><br><br>
          <label class="radio-inline"  required>
            <input type="radio" name="gender" value="male"  >Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="female">Female
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="other" >other
          </label>
          <div class="form-group"><br>
        <label for="fname">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="enter your  name"  name="name" required>
      </div>
      <div class="form-group">
        <label for="fname">Father's Name:</label>
        <input type="text" class="form-control" id="father name" placeholder="enter your father name" name="fname"  required>
      </div>
      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" class="form-control" id="contact" placeholder="Enter your contact no." name="contact"  required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"  required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label><br>
        <input type="text" class="form-control" id="address" placeholder="Enter your address"  name="address"  required>
      </div>
      <div class="form-group">
        <label for="address">Problem:</label><br>
        <textarea name="comment" rows="2" cols="160" placeholder=" enter your problem"  name ="problem"  required></textarea><br><br> 
     </div>
  
      <div class="checkbox">
        <label><input type="checkbox" name="remember"  required> Agree term & conditions</label>
      </div>
      <button type="submit" class="btn btn-primary" value="submit" name="submit" >Submit</button>
    </form>
  </div>
  </body>
  </html>
  


<?php
include ("connection.php");
?>
<?php
  if($_POST['submit'])
  {
    $gname   = $_POST['gname'];
    $gender  = $_POST['gender'];
    $name    = $_POST['name'];
    $fname   = $_POST['fname'];
    $contact = $_POST['contact'];
    $email   = $_POST['email'];
    $address = $_POST['address'];
    $problem = $_POST['problem'];

    $query = "INSERT INTO FORM VALUES('$gname','$gender','$name','$fname','$contact','$email','$address','$problem')";
   $data = mysqli_query($conn,$query);
   if($data)
   {
      echo "data inserted";
   } 
   else{
      echo "failed";
   }
  }
?>