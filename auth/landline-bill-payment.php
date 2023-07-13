 <?php session_start();
 include_once 'session/session.php';
 include_once 'session/authorize.php';
 include_once 'hashcode/hashcode.php';
 include_once 'cookies/landline.php';
 $amount=$_SESSION['Amount'];
 $operator=$_SESSION['Operator'];
 $promocode=$_SESSION['Promocode'];
 $number=$_SESSION['No'];
 if(isset($_POST['Proceed'])) {
     $_SESSION['start']=time();
     $_SESSION['landline-bill-payment']=$_SESSION['start'] + (1 * 60);
     header('location:https://payflipwallet.com/payments/bill/landline');
 }
 
 $opname=array("AIRTEL LANDLINE"=>"AIRTELLANDLINE", "BSNL LANDLINE"=>"BSNLLANDLINE");
 if($promocode) {
     $discount='<p>Promocode :</p> <p style="margin-top:-30px;float:right;"><span style="color:#fff;background:darkorange;border-radius:4px;border:1px solid darkorange;padding:2px 4px 2px">'.$promocode.'</span></p>';
 }
 
 ?>