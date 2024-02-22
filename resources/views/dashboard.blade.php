<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Work Tracker</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    form {
      margin-bottom: 20px;
    }

    #remaining-hours {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>Student Work Tracker</h1>

  <form id="work-form">
    <label for="weekly-hours">Enter Weekly Work Hours:</label>
    <input type="number" id="weekly-hours" name="weekly-hours" min="0" required>
    <button type="button" onclick="updateTracker()">Submit</button>
  </form>

  <div id="remaining-hours">Remaining Weekly Work Hours: 15</div>

  <script>
    function updateTracker() {
      // Get the entered hours
      var enteredHours = parseFloat(document.getElementById('weekly-hours').value) || 0;

      // Set the weekly limit
      var weeklyLimit = 15;

      // Calculate remaining hours
      var remainingHours = Math.max(weeklyLimit - enteredHours, 0);

      // Update the display
      document.getElementById('remaining-hours').innerText = "Remaining Weekly Work Hours: " + remainingHours;
    }
  </script>

</body>
</html>


