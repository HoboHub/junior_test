<?php
class Item
{
  private int $id;
  private string $name;
  private int $status;
  private bool $changed;
  
  public function __construct(string $name, int $status, bool $changed)
  {
    $this->id = $id;
    $this->name = $name;
    $this->status = $status;
    $this->changed = $changed;
  }
 
  private function init()
  {
    // $name = $mysql->query("SELECT `name` FROM `objects`")->fetch_assoc();
    // $status = $mysql->query("SELECT `status` FROM `objects`")->fetch_assoc();
    $this->name = $name;
    $this->status = $status;
  }
 
  public function __get($key)
  {
    return $this->key = $key
  }

  public function __set($key, $value) 
  {
    $this->$key = $value;
  }

  public function save() 
  {
    //code..
  }
}
?>