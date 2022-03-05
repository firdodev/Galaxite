<?php 
    class Login{

        private $error = "";

        public function evaluate($data){
            $email = addslashes($data['email']);
            $password = addslashes($data['password']);

            $query = "select * from users where email = '$email' limit 1 ";

            $DB = new Database();
            $result = $DB->read($query);

            if($result){

                $row = $result[0];


                if($password == $row['password']){
                    // Create session data
                    $_SESSION['galaxite_userid'] = $row['userid'];
                }else{
                    $error .= "Wrong Password or Email <br>";
                }
            }else{
                $error .= "No such email was found<br>";
            }

            return $error;
            
        }
    }

?>
