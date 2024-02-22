<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tracker</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    table, th, td {
      border: 1px solid black;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('fileInput').addEventListener('change', handleFile);
      document.getElementById('modifyButton').addEventListener('click', modifyData);
      document.getElementById('downloadButton').addEventListener('click', downloadTable);
    });

    function handleFile(event) {
      const file = event.target.files[0];

      if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
          const data = new Uint8Array(e.target.result);
          const workbook = XLSX.read(data, { type: 'array' });
          const sheet = workbook.Sheets[workbook.SheetNames[0]];
          const tableData = XLSX.utils.sheet_to_json(sheet, { header: 1 });

          populateTable(tableData);
        };

        reader.readAsArrayBuffer(file);
      }
    }

    function populateTable(data) {
      const table = document.getElementById('myTable');

      // Clear existing table content
      table.innerHTML = '';

      // Iterate through rows and cells and populate the table
      data.forEach(row => {
        const tr = document.createElement('tr');

        row.forEach(cellData => {
          const td = document.createElement('td');
          td.textContent = cellData;
          tr.appendChild(td);
        });

        table.appendChild(tr);
      });
    }

    function modifyData() {
      // Get the table and the specific cell you want to modify
      var table = document.getElementById('myTable');
      var cell = table.rows[1].cells[1]; // Example: modifying the second cell of the second row

      // Prompt the user for a new value
      var newValue = prompt('Enter a new value:');

      // Update the cell with the new value
      if (newValue !== null) {
        cell.textContent = newValue;
      }
    }

    function downloadTable() {
      const table = document.getElementById('myTable');
      const ws = XLSX.utils.table_to_sheet(table);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
      XLSX.writeFile(wb, 'spredsheet.xlsx');
    }
  </script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Something</h1>
            <p>a interface for that tracker spred sheet</p> 
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                  <h2>Tracker</h2>
                  <button id="modifyButton">Edit</button>
                  <button id="downloadButton">Download</button>
                  <br></br>
                 <table id="myTable">
                 <!-- Table will be populated here -->
                 </table>

                 <input type="file" id="fileInput" />
            </div>
        </div>
    </div>
</body>
</html>
