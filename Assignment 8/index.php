
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" >
    <link rel="stylesheet" href="style.css" > 
    <style>

table, th, td {
  border: 1px solid black;
}
.purpose{
  color: maroon;
}

</style>
    <title> Menu Bar</title>
    <meta charset="utf-8">

    

    </head>
    <body>
        
    
           
          <div class="navbar">
            
            <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
            
            <div class="menu">
            
           <a href="#"><i class="fa fa-fw fa-search"></i> Product</a>
            
            <div class="submenu" >
                
                <a>Product 1</a>
                <a>Product 2</a>
                
            </div>
        </div>
        <div class="menu">
            <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
            <div class = "submenu">
               
                <a href="contact.html">Contact Us <i class=" flag-icon flag-icon-us"></i></a>
                <a href="contact.html">Contactez-nous <i class=" flag-icon flag-icon-fr"></i></a>
            
            </div>

        </div>
      
      
           <a href="aboutme.html"><i class="fa fa-fw fa-user"></i>About Me</a>

        
          </div>
         
          <div class="purpose">
            <h4><strong>This site giving clients the insights concerning various models of vehicles of an 
              alternate organization and give them best proposal with respect to purchasing vehicle based 
              on the brand they select .You can look through any brand of vehicle in the beneath given pursuit bar. 
              You can likewise send us your detail by submitting structure in the contact segment .</strong></h4>
          
</div>
        <div class="searchBox">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for car making brand's name starting with alphabets A-E..">
</div>
         
          <script>


window.onload = function() {
  var rows = document.querySelectorAll('tr:not(.header)');

  for (var i = 0; i < rows.length; i++) {
    rows[i].style.display = 'none';
  }
}

function myFunction() {
  var input, filter, table, tr, td, i;
 
  input = document.getElementById("myInput");

  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";

      }
    }
  }
  
   var rows = document.querySelectorAll('tr:not(.header)');
   
   if (input.value.length == 0) {
    for (var i = 0; i < rows.length; i++) {
      rows[i].style.display = 'none';
    }

}
}
</script>

<label id="Welcome"></label>
<script>
  var date = new Date();
  var hour = date.getHours();

  var message;

  if (hour >= 0 && hour < 6)
      message = 'Good morning, you must be an early bird!';
  else if (hour >= 6 && hour < 12)
      message = 'Good Morning';
  else if (hour >= 12 && hour < 18)
      message = 'Good Afternoon';
  else if (hour >= 18 && hour <= 23)
      message = 'Good Evening';
  document.getElementById('Welcome').innerHTML =
      '<b>' + message + '</b>';
          </script>
          
        



<?php

$servername = "localhost";
$username = "root";
$password = "Rick952692256911";

// Create connection
$conn = new mysqli($servername, $username, $password);

$conn->select_db("items_DB");


$sql= "SELECT * FROM items";
$item_list = $conn->query($sql);
$items = array();

if($item_list->num_rows > 0) {
  while($item = $item_list->fetch_assoc()){
    $items[] = $item;
  }
} else {
  die("No item found");
}
//$conn->close();

 ?>
 
 <table id="myTable" border="1">

 <thead>
 <tr class="header">
 <th>Item# </th>
 <th>Name</th>
 <th>Type</th>
 <th>Make</th>
<th>Model</th>
 <th>Brand</th>
<th>Description</th>
 </tr>
 </thead>
 <tbody>

 <?php
 foreach($items as $item){
   echo <<<END
   <tr>
   <td>{$item['id']}</td>
   <td>{$item['name']}</td>
   <td>{$item['type']}</td>
   <td>{$item['make']}</td>
   <td>{$item['model']}</td>
   <td>{$item['brand']}</td>
   <td>{$item['description']}</td>
</tr>

END;
 }
 ?>
 </tbody>
  </table>
 
        </body>
</html>


<!--This code consist some of the code idea taken from Internet(Stackoverflow) , code provided by prof Hassan, code provided by prof aleme.-->