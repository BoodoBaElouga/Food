<?php

abstract class DataTrafficWithDatabase{
  private static $connection;

  
  private static function setConnection(){
    self::$connection = new PDO("mysql:host=localhost;dbname=food;charset=utf8", "root", "");
    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_WARNING);
  }

    /**
     * @return mixed
     */
  protected function getConnection(){
    if(self::connection === null){
      self::setConnection();
    }
    return self::$connection;
  }

    /**
     * @param $username
     * @param $password
     * @return void
     */
    protected function checkLoginData($username, $password){
        if(self::$connection === null){
            $this->getConnection();
        }
        $request = self::$connection->prepare("SELECT * FROM users 
                                      WHERE username='$username' AND password='$password';");
        $request->execute();
        $data = $request->fetch(PDO::FETCH_ASSOC);
        while($data){
            $role = $data['role'];
            $name = $data['name'];
        }
        if($role === 'Administrator' ){
            session_status();
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("location: ../admin-page.php");
        }
        elseif ($role !== 'Administrator'){
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("location: ../index.php");
        }
        else{
            header("location: ../login.php");
        }
    }

    /**
     * @return array
     */
    public function getAllUser(){

        $data = [];
        return $data;
    }
}
