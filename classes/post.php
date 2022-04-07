<?php 


    class Post{


        //Variables
        private $error = "";


        public function create_post($userid, $data){
            if(!empty($data['post'])){
                $post = addslashes($data['post']);
                // $id = $_SESSION['galaxite_userid']; //Saves the id of the user who is posting
            
                $postid = $this->create_postid();
                $query = "insert into posts (postid, userid, post) values ('$postid','$userid','$post')";
                
                $DB = new Database();
                $DB->save($query);
            }else{
                $this->error = "Post is empty! <br>";
            }
            return $this->error;
        }

        //Get all posts
        public function get_posts($id){
            //This will select every post from the database and it will order it by postid in ascending order
            $query = "select * from posts where userid = '$id' order by id desc limit 10"; 

            $DB = new Database();
            $result = $DB->read($query);

            if($result){
                return $result;
            }else{
                return false;
            }   
        }

        //Create id of the post that is being created
        private function create_postid(){

            $length = rand(4,19);
            $number = "";
            for ($i = 0; $i < $length; $i++) { 
                
                $new_rand = rand(0,9);

                $number = $number . $new_rand;
            }

            return $number;
        }
    }


?>