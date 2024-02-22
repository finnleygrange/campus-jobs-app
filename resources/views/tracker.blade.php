<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tracker</title>
   
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
      cursor: pointer;
    }

    .modify-mode {
      background-color: #FFFF00;
    }

    .expired-date {
      color: red;
    }
  </style>
  <script>
    let isModifyMode = false;
    let selectedColumn = null;

    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('fileInput').addEventListener('change', handleFile);
      document.getElementById('downloadButton').addEventListener('click', downloadTable);
      document.getElementById('modifyButton').addEventListener('click', toggleModifyMode);
      document.getElementById('checkVisaButton').addEventListener('click', checkVisaExpiry);

      // Attach input event listeners to each cell in the table for dynamic checking
      const cells = document.querySelectorAll('#myTable td');
      cells.forEach(cell => {
        cell.addEventListener('input', function() {
          if (isModifyMode && selectedColumn !== null) {
            modifyCell(this); // Pass the input cell to the modifyCell function
          }
        });
      });

      // Check data automatically on load
      checkVisaExpiry();
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
      data.forEach(rowData => {
        const tr = document.createElement('tr');

        rowData.forEach(cellData => {
          const td = document.createElement('td');
          td.textContent = cellData;
          tr.appendChild(td);
        });

        table.appendChild(tr);
      });

      // Reattach input event listeners after populating the table
      const cells = document.querySelectorAll('#myTable td');
      cells.forEach(cell => {
        cell.addEventListener('input', function() {
          if (isModifyMode && selectedColumn !== null) {
            modifyCell(this); // Pass the input cell to the modifyCell function
          }
        });
      });

      // Check visa expiry automatically after populating the table
      checkVisaExpiry();
    }

    function toggleModifyMode() {
      isModifyMode = !isModifyMode;

      // Remove the 'modify-mode' class from all cells
      const cells = document.querySelectorAll('#myTable td');
      cells.forEach(cell => {
        cell.classList.remove('modify-mode');
      });

      // Reset selectedColumn
      selectedColumn = null;

      // Add the 'modify-mode' class to cells in the selected column
      if (isModifyMode && selectedColumn !== null) {
        const columnCells = document.querySelectorAll(`#myTable td:nth-child(${selectedColumn + 1})`);
        columnCells.forEach(cell => {
          cell.classList.add('modify-mode');
        });
      }
    }

    function modifyCell(inputCell) {
      // Update the cell with the new value
      const newValue = inputCell.textContent.trim();
      inputCell.textContent = newValue;

      // Check visa expiry for the modified value
      checkSingleVisaExpiry(inputCell);
    }

    function checkVisaExpiry() {
      const cells = document.querySelectorAll('#myTable td');

      cells.forEach(cell => {
        checkSingleVisaExpiry(cell);
      });
    }

    function checkSingleVisaExpiry(cell) {
      const cellContent = cell.textContent.trim();

      // Regular expression to match date formats (MM/DD/YYYY)
      const dateRegex = /^(\d{1,2}\/\d{1,2}\/\d{4})|(\d{4}-\d{1,2}-\d{1,2})$/;

      if (dateRegex.test(cellContent)) {
        const currentDate = new Date();
        const cellDate = new Date(cellContent);

        if (cellDate < currentDate) {
          // Cell content represents an expired visa date
          cell.classList.add('expired-date');
        } else {
          // Cell content represents a valid visa date
          cell.classList.remove('expired-date');
        }
      } else {
        // Cell content is not a valid date format, remove any existing class
        cell.classList.remove('expired-date');
      }
    }

    function downloadTable() {
      const table = document.getElementById('myTable');
      const ws = XLSX.utils.table_to_sheet(table);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
      XLSX.writeFile(wb, 'table_data.xlsx');
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
                  <button id="downloadButton">Download Table</button>
                  <button id="modifyButton">Modify</button>
                
                <table id="myTable">
                <!-- Table will be populated here -->
                </table>
            <br></br>
                  <input type="file" id="fileInput" />
</div>
</div>
</div>

</body>
</html>
