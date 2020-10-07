<?php
class Ticket{
  private $id;
  private $poster_id;
  private $subject;
  private $description;
  private $status;
  private $type;
  private $date;
  private $deleted;

  public function __construct($data){
    $this->hydrate($data);
  }

    /**
     * @param $data
     */
  private function hydrate($data){
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
    /**
     * @return mixed
     */
  public function getId(){
    return $this->id;
  }

    /**
     * @return mixed
     */
  public function getPoster_id(){
    return $this->poster_id;
  }

    /**
     * @return mixed
     */
  public function getSubject(){
    return $this->subject;
  }

    /**
     * @return mixed
     */
  public function getDescription(){
    return $this->description;
  }

    /**
     * @return mixed
     */
  public function getStatus(){
    return $this->status;
  }

    /**
     * @return mixed
     */
  public function getType(){
    return $this->type;
  }

    /**
     * @return mixed
     */
  public function getDate(){
    return $this->date;
  }

    /**
     * @return mixed
     */
  public function getDeleted(){
    return $this->deleted;
  }

  /*
  *Setter
  */
    /**
     * @param $id
     */
  public function setId($id){
    $this->id = $id;
  }

    /**
     * @param $poster_id
     */
  public function setPoster_id($poster_id){
    $this->poster_id = $poster_id;
  }

    /**
     * @param $subject
     */
  public function setSubject($subject){
    $this->subject = $subject;
  }

    /**
     * @param $description
     */
  public function setDescription($description){
    $this->description = $description;
  }

    /**
     * @param $status
     */
  public function setStatus($status){
    $this->status = $status;
  }

    /**
     * @param $date
     */
  public function setDate($date){
    $this->date = $date;
  }

    /**
     * @param $deleted
     */
  public function setDeleted($deleted){
    $this->deleted = $deleted;
  }
}
