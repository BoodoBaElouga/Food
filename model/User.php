<?php

/**
 * Class User
 */
class User{
  private $id;
  private $role;
  private $name;
  private $username;
  private $password;
  private $email;
  private $adress;
  private $verified;
  private $deleted;

    /**
     * User constructor.
     * @param $data
     */
  public function __construct($data){
      $this->hydrate($data);
  }

    /**
     * @param $data
     */
  public function hydrate($data){
    extract($data, EXTR_OVERWRITE);
    foreach ($data as $key => $value) {
      $methodName ='set'.ucfirst(strtolower($key));
      if(method_exists($methodName)){
        $this->$methodName($value);
      }
    }
  }

  /*
  *Getter
  */

  public function getId(){
    return $this->id;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getName(){
    return $this->name;
  }

  public function getUsername(){
    return $this->username;
  }

  public function getRole(){
    return $this->role;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getAdress(){
    return $this->adress;
  }

  public function getVerified(){
    return $this->verified;
  }

  public function getDeleted(){
    return $this->deleted;
  }


  /*
  *Setter
  */

  public function setId($id){
    $this->id = $id;
  }

  public function setPassword($password){
    $this->$password = $password;
  }

  public function setUsername($username){
    $this->$username = $username;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setRole($role){
    $this->role = $role;
  }

  public function setVerified($verified){
    $this->verified = $verified;
  }

  public function setDeleted($deleted){
    $this->deleted = $deleted;
  }

  public function setAdress($adress){
    $this->adress = $adress;
  }
}
