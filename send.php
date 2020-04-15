<script type="text/javascript" src="start_js_learning.js"></script>

<?php

$title= "Сообщение";
include_once "header.php"; 
?>

<?php

function test_fun(){

	echo "Hello".'<br/>';
}

test_fun();

Class Insent {

private $color = "red";
private $wight = 134; 
private $hight = 145;

function __construct($fir, $sec){

	$this->Get_Color();
	echo "</br>";
	$this->Get_Name($fir, $sec);
	echo "</br>";
  } 

public function Get_Color(){

    echo $this->color;
  }

public function Get_Name($first, $second){

    echo $first + $second."</br>";
    if(!empty($_POST["name"])){
	  echo $_POST["name"];}
    else echo "Ничего не введенно";
  }

public function Set_Color($value){

    $this->color = $value;
  }

}

$fir = 123;
$sec = 233;
$class = new Insent($fir, $sec);

test_fun();

?>

<?php
include_once "footer.php";
?>