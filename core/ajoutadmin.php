<?PHP
include "../entites/client.php";
include "Clients.php";

 if( isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first_name'])  && isset($_POST['last_name'])  && isset($_POST['mobile_no'])  && isset($_POST['gender']) && isset($_POST['address']) ){
  
$client=new Client($_POST['username'],$_POST['email'],$_POST['password'],$_POST['first_name'],$_POST['last_name'],$_POST['dateofbirth'],'' ,$_POST['mobile_no'], 
	$_POST['gender'], $_POST['address'],'0');

$mail=$_POST['email'];
	$client1=new Clients();
$client1->ajouteADMIN($client);

	}
	    ?>
      <script language="javascript">
      	 alert('NEW ADMIN WAS ADDED ');
window.location.href="../views/back/table_Client.php";


</script>
<?PHP 

//*/

?>