<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link href="{{ URL::asset('../css/forms.css') }}" rel="stylesheet"/>

</head>
<body>

<div class="mainContainer">
  <main>
    <div class="banners">
      <h2> Form </h2>
      <p>It is imperative that student do not breach the terms of their visa by working more than 15 hours per week during term time.</p>
    </div>
    <section class="twoColumn">
      <div class="input-form" style="margin-bottom: 50px;">
        <form action="thankyou.php" method="post">
          <div>
             <!-- <label for="stdentNumber">Student Number</label> -->
            <input type="text" name="studentNumber" id="studentNumber" class="workout-input" placeholder="Student number or Payroll number" required />
          </div>
          <div>
            <!-- <label for="firstname">First name</label> -->
            <input type="text" name="firstname" id="firstname" class="workout-input" placeholder="First Name"/>
          </div>
          <div>
            <!-- <label for="surname">Surname</label> -->
            <input type="text" name="surname" id="surname" class="workout-input" placeholder="Surname"/>
          </div>
          <div>
            <!-- <label for="JobTitle">Job title</label> -->
            <input type="text" name="jobTitle" id="jobTitle" class="workout-input" placeholder="Job Title" required />
          </div>
          <div>
            <!-- <label for="PostNumber">Post number</label> -->
            <input type="text" name="postNumber" id="postNumber" class="workout-input" placeholder="Post Number" required />
          </div>
         <div>
           <!-- <label for="CostNumber">Cost number</label> -->
           <input type="text" name="costNumber" id="costNumber" class="workout-input" placeholder="Cost Number" required />
          </div>
         <div>
           <!-- <label for="PayRate">PayRate</label> -->
           <input type="text" name="payRate" id="payRate" class="workout-input" placeholder="Pay Rate" required />
          </div>
         <div>
          <!-- <label for="hours">Hours</label> -->
          <input type="text" name="hours" id="hours" class="workout-input" placeholder="Hours" required />
        </div>
       <div>
        <!-- <label for="Dateworked">Date worked</label> -->
        <input type="text" name="dateWorked" id="dateWorked" class="workout-input" placeholder="Date worked" required />
      </div>
     <div>
      <!-- <label for="LineManager">Line Manager</label> -->
      <input type="text" name="lineManager" id="lineManager" class="workout-input" placeholder="Line Manager" required />
    </div>
   <div>
    <!-- <label for="SubmitedOn">Submited on</label> -->
    <input type="text" name="submitedOn" id="submitedOn" class="workout-input" placeholder="Submited on" required />
  </div>
 <div>
  
          

            <button class="btn btn-2" type="submit" value="Send" class="sendButton">Submit</button>
         </div>
        </form>
        </div>
<div class="sideBar">
        <h3>How to find us:</h3>
        <p> Sheffield, South Yorkshire, UK</p>
        <p>Tel:(44) 22445050</p>
        <p>Email: info@campusJob.com</p>
        <br>
        </div>
      </section>
  </main>
</div>

</body>
</html>
