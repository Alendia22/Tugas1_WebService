<?php
$data =file_get_contents("https://ojk-invest-api.vercel.app/api/illegals");
$data_ojk=json_decode($data);
//echo "<pre>"; print_r($data_ojk);
$table = "<h1>Data-data Perusahaan OJK</h1>";
$table .= "<table border=1>
           <tr><td>No</td>
		       <td>Nama PT</td>
		       <td>Alamat</td>
		       <td>Telephone</td>
		       <td>Tipe</td>
		       <td>Web</td></tr>";
for($i=0;$i<count($data_ojk->data->illegals);$i++) {
		 $id=$i+1;
		 $table .= "<tr>
					<td>{$data_ojk->data->illegals[$i]->id}</td>
					<td>{$data_ojk->data->illegals[$i]->name}</td>
					<td>{$data_ojk->data->illegals[$i]->address}</td>
					<td>{$data_ojk->data->illegals[$i]->number[0]}</td>
					<td>{$data_ojk->data->illegals[$i]->type}</td>
					<td>{$data_ojk->data->illegals[$i]->urls[0]}</td>
					</tr>";
//NAMA=ALENDIA
//NIM =12201792
					
}
$table .= "</table>";
echo $table;
?>

