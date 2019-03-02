<?php
include "../koneksi/koneksi.php";

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'id_kurir',
    1 => 'nama_kurir', 
	2 => 'username_kurir',
	3 => 'alamat',
    4 => 'no_hp_kurir'
);

// getting total number records without any search
$sql4 = "SELECT id_kurir, nama_kurir, username_kurir, alamat, no_hp_kurir";
$sql.=" FROM tb_kurir";
$query=mysqli_query($db, $sql4) or die("ajax-grid-data.php: get Kurir");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql4 = "SELECT id_kurir, nama_kurir, username_kurir, alamat, no_hp_kurir";
	$sql.=" FROM tb_kurir";
	$sql.=" WHERE id_kurir LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR nama_kurir LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR username_kurir LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR alamat LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR no_hp_kurir LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($db, $sql4) or die("ajax-grid-data.php: get Kurir");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($db, $sql4) or die("ajax-grid-data.php: get Kurir"); // again run query with limit
	
} else {	

	$sql4 = "SELECT id_kurir, nama_kurir, username_kurir, alamat, no_hp_kurir";
	$sql.=" FROM tb_kurir";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql4) or die("ajax-grid-data.php: get Kurir");   
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $data["id_kurir"];
    $nestedData[] = $data["nama_kurir"];
	$nestedData[] = $data["username_kurir"];
	$nestedData[] = $data["tanggal_lahir_kurir"];
    $nestedData[] = $data["alamat"];
    $nestedData[] = $data["no_hp_kurir"];
    $nestedData[] = '<td style="text-align:center;">
          		<a href=orderankurir.php?id_kurir='.$data['id_kurir'].'>Lihat Orderan</a></td>
          		<td style="text-align:center;">
          		<a href=detail-kurir.php?id_kurir='.$data['id_kurir'].'>Detail &nbsp|</a>
          		<a href=editkurir.php?id_kurir='.$data['id_kurir'].'>|&nbsp Ubah</a></td>;		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
