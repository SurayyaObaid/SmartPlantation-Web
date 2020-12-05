<?php
  include ('adminheaders.php');
   
?>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 120px;
  margin-left: 40px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}


</style>
<body style="padding-top:100px;">
 <table id="customers">
      <tr>
        <th>Plant_ID</th>
        <th>Botanical_name</th>
        <th>Local_name</th>
        <th>Flowering Time</th>
        <th>Family</th>
        <th>Known Hazards</th>
        <th>Habitat</th>
        <th>Soil</th>
        <th>Sunlight</th>
        <th>Water</th>
        <th>Temperature</th>
        <th>Pollution   </th>
        <th>Price</th>
        <th>Delete</th>
      </tr>
      <?php
       $servername = "localhost";
       $user ="stigpk_Timetable_Generator";
       $pass = "[x5?uxt[GPT*";
       $dbname = "stigpk_timetable_generator";
       $database = new mysqli($servername, $user, $pass, $dbname);
       $query = mysqli_query($database,"SELECT * from plant"); // SQL Query
        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
        {
          "<tr>";
            Print '<td align="center">'. $row['Plant_ID'] . "</td>";
            Print '<td align="center">'. $row['Botanical_name'] . "</td>";
            Print '<td align="center">'. $row['Local_name']. "</td>";
            Print '<td align="center">'. $row['Flowering_time']. "</td>";
            Print '<td align="center">'. $row['family']. "</td>";
            Print '<td align="center">'. $row['Known_hazards']. "</td>";
            Print '<td align="center">'. $row['Habitat']. "</td>";
            Print '<td align="center">'. $row['Soil']. "</td>";
            Print '<td align="center">'. $row['Sunlight']. "</td>";
            Print '<td align="center">'. $row['Water']. "</td>";
            Print '<td align="center">'. $row['Temperature']. "</td>";
            Print '<td align="center">'. $row['pollution_removal_per_year_in_grams']. "</td>";    
            Print '<td align="center">'. $row['price(PKR)']. "</td>";
            Print '<td align="center">
            <a href="#" class="btn btn-success m-2" onclick="myFunction('.$row['Plant_ID'].')">Delete</a>
            </td>';
          Print "</tr>";
        }
      ?>
    </table>
   <a class="btn js-scroll-trigger" style="background-color: #008000; color: #fff; width: 800px; margin-left: 300px; margin-top: 50px;" href="add_plants.php">Add Plants</a> 
     <script>
      function myFunction(Plant_ID)
      {
      var r=confirm("Are you sure you want to delete this record?");
      if (r==true)
        {
          window.location.assign("deleteproduct.php? Plant_ID=" + Plant_ID);
        }
      }
    </script>
  </body>
  </html> 