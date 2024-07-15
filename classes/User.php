<?php
include 'Database.php'; //introduce files eachother
// Inheritance, Inherit :代襲？
class User extends Database {


    public function register($first_name, $last_name, $username, $password){
        // add security to the password
        // iamHandsome123 = #q231asdas13nfks$IKh
        $password = password_hash($password, PASSWORD_DEFAULT);
        // save the data to users table
        $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";
        if($this->conn->query($sql)){
            header('location:../views/login.php');
            exit;
        }else{
            die('Something went wrong! Please try again later!'.$this->conn->error);
        }

    }

    public function login($username, $password){
        // Command to find a user
        $sql = "SELECT * FROM users WHERE username = '$username'";
        // Executing the command
        if($result = $this->conn->query($sql)){
            //Found
            if($result->num_rows == 1){
                $user = $result->fetch_assoc();
                if(password_verify($password, $user['password'])){
                    session_start();

                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['full_name'] = $user['first_name'].''.$user['last_name'];
                    header('location:../views/dashboard.php');

                }else{
                    header('location:../views/login.php');
                    exit;
                }
            }else{
            //Not Found
                header('location:../views/login.php');
                exit;
            }
        }else{
            die('Something went wrong! Plese try again later!' . $this->conn->error);
        }

    }
    public function getAllUsers(){
        $sql = "select * from users";
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Something went wrong! please try again!'.$this->conn->error);
        }
    }

    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id = $id";
        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Something went wrong! Plese try again later!' . $this->conn->error);
        }
    }

    public function updateUser($id, $username, $firstname, $lastname){
        $sql =  "UPDATE users SET first_name = '$firstname', last_name = '$lastname' username = '$username' WHERE id = $id";
        if($this->conn->query($sql)){
            header('location:../views/dashboard.php');
            exit;
        } else {
            die('Something went wrong! Please try again later!' .$this->conn->error);
        }
    }

    public function deleteUser($user_id){
        $sql = "DELETE FROM users WHERE id = $user_id";

        if($this->conn->query($sql)){
            session_destroy(); //delete.phpの中にstartがあるのでここでは不要
            header('location:../views/dashboard.php');
            exit;
        } else {
            die('Something went wrong! Please try again later! ' . $this->conn->error);
        }
    }
}