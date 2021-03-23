<?php
$url= "http://localhost://referal/login.php";
function security($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if(isset($_POST["register_user"])){
    require_once('config.php');
    if(!empty($_POST['user_name']) && !empty($_POST['user_email'])){
        $db=getDB();

         $user_name = security($_POST["user_name"]);
         $user_email = security($_POST["user_email"]);
         // $user_password= $_POST["user_password"];
         $user_check = $db->prepare('SELECT * FROM users WHERE user_name=:username and user_email=:user_email');
         $user_login_name = $user_name;
         //$user_login_password = md5($user_password);
         $user_check->bindValue(':username', $user_login_name, PDO::PARAM_STR);
         $user_check->bindValue(':user_email', $user_email, PDO::PARAM_STR);
         $user_check->execute();
         $row_user_check = $user_check->fetch();
       
         if($row_user_check['id']==true){
       
          echo "<div class='alert alert-danger'>This User Already Exist</div>";
            return false;         
         }else{
           echo "";
         }

         $user_password = md5(security($_POST["user_password"]));
         $user_role='2';
        $insert_user=$db->prepare("INSERT INTO users
         (user_name,
        user_email,
        user_password,
        user_role
        ) VALUES (:user_name,:user_email,:user_password,:user_role)");
        $insert_user->execute(array(
            ":user_name"=>$user_name,
            ":user_email" => $user_email,
            ":user_password" => $user_password,
            ":user_role" => $user_role
        ));
            echo "1";
    }
    //header('location:login.php');
}



if(isset($_POST['login']))
{
    $db=getDB();
if((!empty($_POST['username'])) && (!empty($_POST['password'])))
{	

	//INSERT VALUEBLE
	$user_name=$_POST['username'];
	$user_password=$_POST['password'];
	$user_check = $db->prepare('SELECT * FROM users WHERE user_email=:username and user_password=:password');
	$user_login_name = $user_name;
	$user_login_password = md5($user_password);
	$user_check->bindValue(':username', $user_login_name, PDO::PARAM_STR);
	$user_check->bindValue(':password', $user_login_password, PDO::PARAM_STR);
	$user_check->execute();
	$row_user_check = $user_check->fetch();
  
	if($row_user_check['id']==true){
  
		//INSERT SESSION INFO
		$_SESSION['member_id']=$row_user_check['id'];
		$_SESSION['member_username']=$row_user_check['user_name'];
		$_SESSION['loggin_attempt']='0';
		$_SESSION['logged_in'] = true; //set you've logged in
		$_SESSION['last_activity'] = time(); //your last activity was now, having logged in.
		$_SESSION['expire_time'] = 3*60*60; //expire time in seconds: three hours (you must change this)
    //echo "<h1 class='123'>".$row_user_check['id']."</h1>";
    /*
		//INSERT LOGIN DETAIL
		$USER_LOGIN_ID=$row_user_check['user_id'];
		$USER_LOGIN_IP=$_SERVER['REMOTE_ADDR'];
		$statement = $db->prepare("INSERT INTO user_logins(login_user,login_ip) VALUES (:user, :ip)");
		$statement->execute(array("user" => $USER_LOGIN_ID,"ip" => $USER_LOGIN_IP));
		//END INSERT LOGIN DETAIL
		*/
		header('location:index.php');
    
	}else{
  
		$_SESSION['loggin_attempt']='1';
   
    }	
}

} 

if(isset($_GET['logout'])){
  if($_GET['logout']==true){
    session_destroy();
    header('location:index.php');
  }
}
function getReferal($id){
    $db=getDB();
    $counter=0;
    $select_referals=$db->prepare("SELECT * FROM referals WHERE referal_owner=:this_user LIMIT 10");
    $select_referals->bindValue(":this_user",$id,PDO::PARAM_INT);
    $select_referals->execute();
    while($referals=$select_referals->fetch()){
      $counter++;
      $name=$referals['name'];
      $email=$referals['email'];
      $orderid=$referals['orderid'];
      $cash=$referals['cash'];
      $date=$referals['date'];
      echo "
      <tr>
          <td>$counter</td>
          <td>$name</td>
          <td>$email</td>
          <td>$orderid</td>
          <td>$cash</td>
          <td>$date</td>
      </tr>";


    }
    
}
function getUsers(){
  $db=getDB();
  $select_users = $db->prepare('SELECT id,referal_number,user_name FROM users');
  $select_users->execute();
  while($users=$select_users->fetch()){
    $id=$users["id"];
    $referal=$users["referal_number"];
    $user_name=$users["user_name"];
    echo "<option value='$id-$referal'>$user_name</option>";
  }
}

function getCount($id){
  $db=getDB();
  $select_count = $db->prepare('SELECT count(1) FROM referals where referal_owner=:id');
  $select_count->bindValue(":id",$id,PDO::PARAM_INT);
  $select_count->execute();
  $count=$select_count->fetchColumn();
  return $count;
  }

  function getCash($id){
    $db=getDB();
    $select_count = $db->prepare('SELECT sum(percent) as cashcount FROM referals where referal_owner=:id');
    $select_count->bindValue(":id",$id,PDO::PARAM_INT);
    $select_count->execute();
    $count=$select_count->fetch(PDO::FETCH_ASSOC);
    $cash = round($count["cashcount"], 2);
    return $cash;
    }
function getreferalCode($id){
  $db=getDB();
  $select_referal = $db->prepare('SELECT referal_number FROM users where id=:id');
  $select_referal->bindValue(":id",$id,PDO::PARAM_INT);
  $select_referal->execute();
  $referals=$select_referal->fetch();
  $referal=$referals["referal_number"];
  return $referal;  
  }


if(isset($_POST["add_referal"])){
  $db=getDB();
  $referal = $_POST["referal_number"];
  $email = $_POST["email"];
  $name = $_POST["name"];
  $date = $_POST["date"];
  $paypal = $_POST["paypal_number"];
  $password = md5($_POST["password"]);
  $role = 1;

  
      $statement = $db->prepare('INSERT INTO users (user_name,user_email,date,user_password,user_role,referal_number,paypal_number)
      VALUES(:name,:email,:date,:password,:role,:referal,:paypal)');
      $statement->execute(array(":name" => $name,":email"=>$email,":date"=>$date,":password"=>$password,":role"=>$role,":referal"=>$referal,":paypal"=>$paypal));

        
}
    if(isset($_POST["user_referal"])){
    if(!empty($_POST["referal_owner"])){
      $owner = explode("-", $_POST["referal_owner"]);
      $referal_user_id = $owner[0];
      $name = $_POST["name2"];
      $email = $_POST["email2"];
      $date = $_POST["date2"];
      $cash = $_POST["cash"];
      $orderid= $_POST["orderid"];
	  $percent = ($cash*20)/100;
    $db=getDB();
    $insert_referal=$db->prepare("INSERT INTO referals (referal_owner,name,email,orderid,cash,percent,date) VALUES (:referal_user_id,:name,:email,:orderid,:cash,:percent,:date)");
    $insert_referal->execute(array(
      ":referal_user_id" =>$referal_user_id,
      ":name" => $name ,
      ":email"=>$email,
      ":orderid" => $orderid ,
      ":cash"=>$cash,
	   ":percent"=>$percent,
      ":date"=>$date
    ));
  
  }
}
?>