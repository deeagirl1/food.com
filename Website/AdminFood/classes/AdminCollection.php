<?php
require_once('Admin.php');
require_once('Dbh.php');
?>

<?php
class AdminCollection extends Dbh
{  
   public function isValid($email, $password) 
   {
    if(isset($email) && isset($password))
    {
      $sql = 'SELECT ID, FIRSTNAME, LASTNAME, STREET, STREETNR, ZIPCODE, CITY, ACCESSLEVEL FROM user WHERE EMAIL = :email AND PASS = :pass';
      $sth = $this->conn->prepare($sql);
      $sth->execute([
          ':email' => $email,
          ':pass' => $password
         
      ]);

      if( $sth->rowCount() == 1 )
      {
         $result = $sth->fetch();
         if($result['ACCESSLEVEL'] == 2)
         {
         return new Admin($result['ID'],$email,$result['FIRSTNAME'],$result['LASTNAME'], $password);
         }
      }
      else {return null;}
    }
    else
    {
       return null;
    }
   } 
}
?>