<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form</title>
<style>

/*form*/
input[type="submit"] {
    width: 40px;
}
.twoColumn{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0 10px;
}
.twoColumn .input-form{
    flex: 5;
    display: flex;
    flex-direction: column;
}
.twoColumn .input-form input{
    width: 80%;
    background: #e6e1e1;
    color: #000;
    outline: none;
    border: none;
    border-radius: 10px;
    padding: 5px 10px;
    height: 50px;
    margin-bottom: 15px;
}
.twoColumn .input-form select{
    width: 80%;
    background: #e6e1e1;
    color: #000;
    outline: none;
    border: none;
    border-radius: 10px;
    padding: 5px 10px;
    height: 50px;
    margin-bottom: 15px;
}
.input-form button{
    align-items: center;
    /* justify-items: center; */
}
.twoColumn .sideBar {
    flex: 3;
    width: 100%;
    text-align: justify;
    vertical-align: middle;
    color: #000000;
    font-size: 0.9rem;
    height: fit-content;
}
/*search button */
.btn1:hover{
  background-color: #900c3f; 
  color:white ; 
}
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}
/* card */
.card {
  background-color: #900c3f;
  color: white;
  padding: 20px;
  margin-top: 20px;
}
</style>


</head>
<body>
    <div class= "container">
         <div class= "row">
            <div class="col-md-12">

                 <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><h1>Something</h1></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"></span>
                        </button>

                  <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn1" type="submit">Search</button>
                  </form>
                 </nav>

            </div>
        </div>

      <div class = "row">
        <div class = "leftcolumn">
            <p> is the form from the timesheet spredsheet </p>
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
  

            <button class="btn1" type="submit" value="Send" class="sendButton">Submit</button>
         </div>
        </form>
        </div>

        <div class="card">
          <h3>How to find us:</h3>
           <p> Sheffield, South Yorkshire, UK</p>
           <p>Tel:(44) 22445050</p>
          <p>Email: info@campusJob.com</p>
        </div>
      

</section>

</div>

</body>
</html>

