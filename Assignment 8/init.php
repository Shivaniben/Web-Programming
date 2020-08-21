
<!--I have used wamp server and phpMyADmin mariaDB for this assignment-->
<!--All the things are created successfully , you can check this by running code one by one-->

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
echo "Connected successfully";


 //Create database
$sql = "CREATE DATABASE items_DB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}



 $conn->select_db("items_DB");


 //sql to create table
$sql = "CREATE TABLE Items (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(40) ,
    type VARCHAR(40) ,
    make VARCHAR(40) ,
    model VARCHAR(40) ,
    brand VARCHAR(40) ,
    description VARCHAR(60) 

    
     )";
    
     if ($conn->query($sql) === TRUE) {
       echo "Table Items created successfully";
     } else {
       echo "Error creating table: " . $conn->error;
     }

     //alter auto increment
 mysqli_query($conn,"ALTER TABLE Items AUTO_INCREMENT = 100");


//    // create items
    $input_items = array();
    $input_items[] = ["Koba(2WD)"	,"SUV"	,"2020",	"CH-R"	,"Toyota",	"1.2L PULP CVT AUTO"];
    $input_items[] = ["Acsent Sport(hybrid)",	"Sedan",	"2019",	"Corrola","	Toyota"	,"1.8L Hyb/ULP CVT AUTO "];
    $input_items[] = ["102z SL500",	"Convertible",	"2016" ,	"SL-Class", 	"Mercedes-Benz",	"4.7L PULP 7SP AUTO"];
    $input_items[] = ["103 Comfortline  TDI340" , "People mover",	"2017" ,	"Caravelle",	"Volkswagen",	"2.0L Diesel 7SP AUTO"];
    $input_items[] = ["Sportback Quattro",	"Hatchback",	"2018",	"RS3","	Audi","2.5L PULP 7SP AUTO"];
    $input_items[] = ["iMax(base)",	"People mover" ,"2017	","iMax",	"Hyundai",	"2.5L Diesel 6SP MAN"];
    $input_items[] = ["Ambiente",	"SUV",	"2020",	"Ecosport",	"Ford",	"1.5L ULP 6SP AUTO"];
    $input_items[] = ["Fastback 2.3 GTDI"	,"Coupe",	"2016",	"Mustang",	"Ford",	"2.3L ULP 6SP AUTO"];
    $input_items[] = ["N-Sport",	"SUV",	"2019",	"Quasqai",	"Nissan",	"2.0L ULP CVT AUTO" ];
    $input_items[] = ["Nismo",	"Coupe",	"2018",	"GT-R",	"Nissan",	"3.8L PULP 6SP DUAL-CLUTCH AUTO  "];
    $input_items[]= ["I8 Hybrid",	"Convertible",	"2020"	,"iSeries"	,"BMW",	"1.5L ULP 6SP AUTO"];
    $input_items[] = ["X1 Sdrive 18D",	"SUV",	"2016",	"X Models",	"BMW",	"2.0L Diesel 8SP AUTO"];


        

 $add_items = $conn->prepare("INSERT INTO Items(name, type, make, model, brand, description) VALUES (?, ?, ?, ?, ?, ?)");

 $add_items->bind_param("ssssss", $name, $type, $make, $model, $brand, $description );

 foreach($input_items as $item){
   $name= $item[0];
   $type=$item[1];
   $make=$item[2];
   $model=$item[3];
   $brand=$item[4];
   $description=$item[5];
  
   $add_items->execute();

 }
$add_items->close();

 ?>
 <!--This code consist of the code idea taken from  StackOverflow and code provided by prof Hassan.-->
  
