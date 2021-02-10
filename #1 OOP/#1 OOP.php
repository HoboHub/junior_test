<?php
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');

// класс Item не наследуется. В конструктор класса передается ID объекта.
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
 
  //Метод получает из таблицы objects данные name и status и заполняет их в свойства экземпляра
  private function init()
  {
    $name = $mysqli->query("SELECT `name` FROM `objects`")->fetch_assoc();
    $status = $mysqli->query("SELECT `status` FROM `objects`")->fetch_assoc();
    $this->name = $name;
    $this->status = $status;
  }
 
  //получение свойств объекта, используя magic method
  public function __get($key)
  {
    return $this->key = $key
  }

  public function __set($key, $value) 
  {
    $this->$key = $value;
  }

  //Метод сохраняет установленные значения name и status в случае, если свойства объекта были изменены
  public function save() 
  {
	$state = $mysqli->prepare("INSERT INTO `objects` VALUES (?,?)");

	$name = $_POST["name"];
	$status = $_POST["status"];
	$state->bind_param('ss', $name, $status);

	$state->execute();
	if ($state->affected_rows != 0) {
	    var_dump($name, $status);
	    echo 'Значение добавлено!';   
	};

	$state->close();
  }
}

$mysqli->close();
?>
