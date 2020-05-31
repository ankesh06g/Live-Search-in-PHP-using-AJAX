<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "db1");
$sql = "SELECT * FROM employee WHERE first_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['first_name']."</td>
		          <td>".$row['last_name']."</td>
		          <td>".$row['city']."</td>
		          <td>".$row['salary']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>