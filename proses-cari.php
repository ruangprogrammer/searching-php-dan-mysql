<?php
include "koneksi.php";
$name = $_POST['name']; //get the nama value from form
$q = "SELECT * from student where student_name like '%$name%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
$total_row = mysql_num_rows($result);
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='#42b549'>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
</tr>";
if($total_row == 0){
echo "
	<tr>
	   <td colspan='3'>--Data tidak ditemukan--</td>
	</tr>
";
}
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>" . $data['student_id'] . "</td>
<td>" . $data['student_name'] . "</td>
<td>" . $data['student_address'] . "</td>
</tr>";
}
echo "</table>";
?>