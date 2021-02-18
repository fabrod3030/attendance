<?php 
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
?>
    
    
   <h1 class="text-center">Registration for IT Conference </h1>

   <form method="get" action="success.php"> 
   <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname"  name="firstname">
    </div>

   <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname"  name="lastname">
    </div>

   <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="dob"  name="dob">
 </div>

 <div class="mb-3">
    <label for="speacialty" class="form-label">Area of Expertise</label>
    <select class="form-control" id="specialty">
    <option></option>
    <option>Database Admin</option>
    <option>Software Developer</option>
    <option>Web Administrator</option>
    
    
    </select>
    
 </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email"  name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="phone" name="phone" >
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>


  <div class="d-grid gap-2">
  <button type="submit" name="submit" class="btn btn-primary" type="button">Submit</button>
</div>


</form>
<br/>
<br/>
<?php require_once 'includes/footer.php'?>

    