<?PHP
include "../entites/client.php";
include "Clients.php";



$client=new Client($_POST['myImage']);

$client1=new Clients();
$client1->modifierImage($client);

header('Location: ../views/page profil.php');	

//*/

?>