<?php
$host = 'dtubahamas.gov.bs';
$username = 'dtu_db_sysusr';
$password = 'k5sV$14i1';
$database = 'dtu_conference_oas';

$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}



$output= array();
$sql = "SELECT * FROM users2 ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'first_name',
	2 => 'middle_name',
	3 => 'last_name',
	4 => 'email',
    5 => 'nib',
	6 => 'system_roles',
	7 => 'password_reset',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE first_name like '%".$search_value."%'";
	$sql .= " OR middle_name like '%".$search_value."%'";
	$sql .= " OR last_name like '%".$search_value."%'";
    $sql .= " OR email like '%".$search_value."%'";
	$sql .= " OR nib like '%".$search_value."%'";
	
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['first_name'];
	$sub_array[] = $row['middle_name'];
	$sub_array[] = $row['last_name'];
$sub_array[] = $row['email'];
	$sub_array[] = $row['system_roles'];
	$sub_array[] = $row['password_reset'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
