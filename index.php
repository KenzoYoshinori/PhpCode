<?php

/**
 * Class which sets and gets person's data
 */
class person {
  protected $id;
  protected $name;
  protected $secondName;
  protected $birthDate;
  protected $sex;
  protected $address;

  /**
   * Method __construct used to pass and submit the parameters. More optimized than "setData function".
   * @param $id
   * @param $name
   * @param $secondName
   * @param $birthDate
   * @param $sex
   * @param $address
   */
  public function __construct($id, $name, $secondName, $birthDate, $sex, $address){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $this->id = $id;
      $this->name = $name;
      $this->secondName = $secondName;
      $this->birthDate = $birthDate;
      $this->sex = $sex;
      $this->address = $address;
    }
  }

  /**
   * Method for getting Data through echo
   * @return mixed
   */
  public function getData() {
    echo $this->id;
    echo $this->name;
    echo $this->secondName;
    echo $this->birthDate;
    echo $this->sex;
    echo $this->address;
  }
}

/**
 * Extended class which sets and gets Student's data with few more parameters
 */
class student extends person{
  private $spec;
  private $course;
  private $group;

  /**
   * Method __construct used to pass and submit the parameters. More optimized than "setData function".
   * @param $id
   * @param $name
   * @param $secondName
   * @param $birthDate
   * @param $sex
   * @param $address
   * @param $spec
   * @param $course
   * @param $group
   */
  public function __construct($id, $name, $secondName, $birthDate, $sex, $address, $spec, $course, $group) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $this->id = $id;
      $this->name = $name;
      $this->secondName = $secondName;
      $this->birthDate = $birthDate;
      $this->sex = $sex;
      $this->address = $address;
      $this->spec = $spec;
      $this->course = $course;
      $this->group = $group;
    }
  }

  /**
   * Method for getting Data through echo
   * @return mixed
   */
  public function getData() {
    echo $this->id;
    echo $this->name;
    echo $this->secondName;
    echo $this->birthDate;
    echo $this->sex;
    echo $this->address;
    echo $this->spec;
    echo $this->course;
    echo $this->group;
  }
}

/**
 * Extended class which sets and gets Developer's data with few more parameters
 */
class developer extends person {
  private $tech;
  private $exp;
  private $rate;

  /**
   * Method __construct used to pass and submit the parameters. More optimized than "setData function".
   * @param $id
   * @param $name
   * @param $secondName
   * @param $birthDate
   * @param $sex
   * @param $address
   * @param $tech
   * @param $exp
   * @param $rate
   */
  public function __construct($id, $name, $secondName, $birthDate, $sex, $address, $tech, $exp, $rate) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $this->id = $id;
      $this->name = $name;
      $this->secondName = $secondName;
      $this->birthDate = $birthDate;
      $this->sex = $sex;
      $this->address = $address;
      $this->tech = $tech;
      $this->exp = $exp;
      $this->rate = $rate;
    }
  }

  /**
   * Method for getting Data through echo
   * @return mixed
   */
  public function getData() {
    echo $this->id;
    echo $this->name;
    echo $this->secondName;
    echo $this->birthDate;
    echo $this->sex;
    echo $this->address;
    echo $this->tech;
    echo $this->exp;
    echo $this->rate;
  }
}

//Instantiating a new class
$obj = new developer($_POST["id"], $_POST["name"], $_POST["secondName"], $_POST["birthDate"], $_POST["sex"], $_POST["address"], $_POST["speciality"], $_POST["course"], $_POST["group"], $_POST["technology"], $_POST["exp"], $_POST["rate"]);
//Getting submitted data
$obj->getData();
?>
<html>
<body>

<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    ID: <input type = "text" name = "id" />
    Name: <input type = "text" name = "name" />
    Second Name: <input type = "text" name = "secondName" />
    BirthDate: <input type = "text" name = "birthDate" />
    Sex: <input type = "text" name = "sex" />
    Address: <input type = "text" name = "address" />
    (If student) Spec: <input type = "text" name = "speciality" />
    (If student) Course: <input type = "text" name = "course" />
    (If student) Group: <input type = "text" name = "group" />
    (If developer) Technology: <input type = "text" name = "technology" />
    (If developer) Experience: <input type = "text" name = "exp" />
    (If developer) Rate: <input type = "text" name = "rate" />
    <input type = "submit" />
</form>

</body>
</html>