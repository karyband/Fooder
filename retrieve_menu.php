<?php
        $connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo "<script>console.log('1')</script>";

        $search_string= mysqli_real_escape_string($connect, $_POST['name1']);


$query = "SELECT * FROM restaurants WHERE name = '$search_string'";
        $result = mysqli_query($connect, $query);

//echo "<script>console.log('2')</script>";
$get_rows = mysqli_num_rows($result);


if($get_rows>=1){
echo "<script>console.log('yes')</script>";

        while($row=mysqli_fetch_array($result)){
        $items = explode(",", $row['menu']);
        echo "<p id='menu_top'>".$row['img']." <span id='title'>".$row['name']." (".$row['description'].")</span><br>";
                echo "".$row['hours']."<br>".$row['address']."<br>".$row['phone']."</p>";
                //echo "<p style='clear:both' class='items'><br>Menu Here</p>";
                echo "<form name='menuform' method='post' onsubmit='submitorder()'><p style = 'clear:both' class = 'items'><br><hr><b>Menu Items</b></p>";
                foreach($items as &$item) {
                        echo "<p class='items'><input type='checkbox' name='food' id='$item' value='$item'><label>$item</label><br></p>";
                        }
                echo "<input type='submit' value='Submit'></form>";
                }

        }






        mysqli_close($connect);
        ?>