<?php

/**
 * Class which sets and gets person's data
 */
class person {
  private $id = null;
  private $name = null;
  private $secondName = null;
  private $birthDate = null;
  private $sex = null;
  private $address = null;
  public function setData() {
    if($_POST["id"] || $_POST["name"] || $_POST["secondName"]|| $_POST["birthDate"] || $_POST["sex"] || $_POST["address"] ) {
//    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
//      die ("invalid name and name should be alpha");
//    }
      $this -> $id = $_POST['id'];
      $this -> $name = $_POST['name'];
      $this -> $secondName = $_POST['secondName'];
      $this -> $birthDate = $_POST['birthDate'];
      $this -> $sex = $_POST['sex'];
      $this -> $address = $_POST['address'];
    }
    return $this -> id;
    return $this -> name;
    return $this -> secondName;
    return $this -> birthDate;
    return $this -> sex;
    return $this -> address;
  }
  public function getData() {
    echo $this -> id;
    echo $this -> $name = $_POST['name'];
    echo $this -> $secondName = $_POST['secondName'];
    echo $this -> $birthDate = $_POST['birthDate'];
    echo $this -> $sex = $_POST['sex'];
    echo $this -> $address = $_POST['address'];
  }
}
$obj = new person();

?>
<html>
<body>

<form action = "<?php $obj -> setData() ?>" method = "POST">
    ID: <input type = "text" name = "id" />
    Name: <input type = "text" name = "name" />
    Second Name: <input type = "text" name = "secondName" />
    BirthDate: <input type = "text" name = "birthDate" />
    Sex: <input type = "text" name = "sex" />
    Address: <input type = "text" name = "address" />
    <input type = "submit" />
</form>

</body>
</html>