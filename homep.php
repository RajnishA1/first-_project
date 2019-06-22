<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="homepage1.css">
	<title></title>
</head>
<body>

 <img src="image1.jpeg" alt="rajnsih">



<?php
//this is the class for game
class game{
	const BR ="<br>";
	
	var $name;
	 var $price;
	 var $photo;
	
	public function printgame(){
		echo $this->name.self::BR;
		echo $this->price.self::BR;
		echo "<img src='{$this->photo}'>".self::BR;
	}
}
// game detail2 
$game= new game;
$game->name='rj';
$game->price=20.5;
$game->printgame();
//game detail 2
$game= new game;
$game->name="manish";
$game->price= 'RS 230';
$game->photo='image1.jpeg';
// calling funvtion 
$game->printgame();

// class for student
class student{
	const BR ="<br>";
 var $name;
 var $class;
 var $fee;
 function getdata($sname,$sclass,$sfee){
 	$this->name=$sname;
 	$this->class=$sclass;
 	$this->fee=$sfee;
 }
  function showstudentname(){
  	echo $this->name.self::BR;
  

  }
  function showstudentclass(){
  		echo $this->class.self::BR;
  	
  }
  function showstudentfee(){
  	echo $this->fee.self::BR;
  }

}
$Rajnish = new student;
$Rajnish->getdata('Rajnish','10th','Rs 1800');
$manish =new student;
$manish->getdata('manish','10th','Rs 1800');
?>

<table>
	<tr>
		<td>Name</td>
		<td>Class</td>
		<td>Fee</td>
	</tr>
	<tr>
	
		<td><?php $Rajnish->showstudentname();?></td>
		<td><?php $Rajnish->showstudentclass();?></td>	
		<td><?php $Rajnish->showstudentfee();?></td>	
	</tr>
		<tr>
			<td><?php $manish->showstudentname();?></td>
		<td><?php $manish->showstudentclass();?></td>	
		<td><?php $manish->showstudentfee();?></td>	
	</tr>


</table>
	<form action="studentf.php">
		<button>getstudentdetail</button>
</body>
</html>