<?php
  include "connection.php";
  $id=$_SESSION['user'];
  $fetch_user="SELECT * FROM user WHERE id='$id'";
  $fetch_result = mysqli_query($conn, $fetch_user);
  $fetch_row = mysqli_fetch_array($fetch_result, MYSQLI_ASSOC);

  if(isset($_POST['add_income'])){
    $inc_amt = $_POST['income'];
    $inc_desc = $_POST['in_desc'];

    $income_insert = "INSERT INTO tbl_income where ";
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
    <style>
.row {
  margin-left:-5px;
  margin-right:-5px;
  margin-top:100px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

td {
  text-align: left;
  padding: 16px;
}
th{
    padding: 16px;
}


/* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
    </style>
</head>
<body class="w3-black">
    <!-- Navbar (sit on top) -->
<div class="w3-top w3-margin-top">
    <div class="w3-bar w3-black w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-hover-black w3-wide">
          &nbsp;&nbsp;<img src="logo.png" alt="" width="120px">
      </a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#" class="w3-bar-item w3-button w3-hover-black w3-hover-text-new"><i class="fa fa-home"></i>&nbsp; Home</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-black w3-hover-text-new"><i class="fa fa-user"></i>&nbsp; Log Out &nbsp;&nbsp;</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  
  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">Log Out</a>
  </nav>

  <div class="row w3-container">
    <div class="column">
      <table>
        <tr style="background-color: #f8a614;color:black;text-align: center;">
          <th colspan="3">Income</th>
        </tr>

        <tr>
          <td style="width:15%;text-align: right;">1500</td>
          <td style="width:5%;">-</td>
          <td>Salary</td>
        </tr>
        <tr>
            <td colspan="3">
                <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-white w3-round-large w3-right">Add Income</button>
                    <div id="id02" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container w3-orange">
                              <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                              <h3><b>Add Income</b></h3>
                              <form action="" method="post">
                                <div class="w3-row w3-margin-bottom">
                                    <div class="w3-third w3-container">
                                        <label><b>Amount</b></label>
                                        <input type="number" name="income" class="w3-input w3-round-large" placeholder="Enter your Expense">
                                    </div>
                                    <div class="w3-third w3-container">
                                        <label><b>Description</b></label>
                                        <input type="text" name="in_desc" class="w3-input 3-round-large" placeholder="Add description in max. 30 letters">
                                    </div>
                                    <div class="w3-third w3-container">
                                        <br>
                                        <input type="button" name="add_income" value="Add Income" class="w3-black w3-button w3-round-large">
                                    </div>
                                </div>
                                
                                
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
            </td>
        </tr>
      </table>
    </div>
    <div class="column">
        <table>
            <tr style="background-color: #f8a614;color:black;text-align: center;">
              <th colspan="3">Expense</th>
            </tr>
    
            <tr>
              <td style="width:15%;text-align: right;">1500</td>
              <td style="width:5%;">-</td>
              <td>Salary</td>
            </tr>
            <tr>
                <td colspan="3">
                    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-round-large w3-right">Add Expense</button>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container w3-orange">
                              <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                              <h3><b>Add Expense</b></h3>
                              <form action="" method="post">
                                <div class="w3-row w3-margin-bottom">
                                    <div class="w3-third w3-container">
                                        <label><b>Amount</b></label>
                                        <input type="number" name="expense" class="w3-input w3-round-large" placeholder="Enter your Expense">
                                    </div>
                                    <div class="w3-third w3-container">
                                        <label><b>Description</b></label>
                                        <input type="text" name="desc" class="w3-input 3-round-large" placeholder="Add description in max. 30 letters">
                                    </div>
                                    <div class="w3-third w3-container">
                                        <br>
                                        <input type="button" value="Add Expense" name="add_expense" class="w3-black w3-button w3-round-large">
                                    </div>
                                </div>
                                
                                
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </td>
            </tr>
          </table>
          
    </div>
  </div>
</body>

<script>


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");
    
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }
    
    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
    </script>
</html>