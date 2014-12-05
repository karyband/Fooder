<?php
        $connect=mysqli_connect("localhost","kbandatw_kbanda","KarinaNelson_210","kbandatw_users");
//This will check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo "<script>console.log('1')</script>";

        $search_string= mysqli_real_escape_string($connect, $_POST['cuisineType']);


$query = "SELECT * FROM restaurants WHERE cuisinetype = '$search_string'";
        $result = mysqli_query($connect, $query);

//echo "<script>console.log('2')</script>";
$get_rows = mysqli_num_rows($result);


if($get_rows>=1){
echo "<script>console.log('yes')</script>";

        while($row=mysqli_fetch_array($result)){
        echo "<li><a href=''>".$row['img']."<div><span>".$row['description']."</span></div></a></li>";;
        }

}






mysqli_close($connect);
?>