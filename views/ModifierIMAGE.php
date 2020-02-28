<?PHP
include "../entites/client.php";
include "Clients.php";



$client=new Client($_POST['image_upload_file']);

$client1=new Clients();
$client1->modifierImage($client);

	

//*/

?>