<?PHP
include "../entites/client.php";
include "Clients.php";
session_start ();  

if( isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['location']) ){

$client=new Client($_POST['uname'],$_POST['email'],$_POST['mobile'],$_POST['location']);

  $_SESSION['l']=$_POST['email'];
  $_SESSION['p']=$_SESSION['p'];
      ?>
      <script language="javascript">
      	 alert('your data has been updated. thank you !');
setTimeout(myFunction, 0)

function myFunction() {
	 location.replace("../views/page profil.php")

}


</script>
<?PHP 

            $client1=new Clients();
$client1->modifierClient($client,$_SESSION['ID']);

        }
        else{ 
            echo "Failed";
        }


 
    
//*/

?>