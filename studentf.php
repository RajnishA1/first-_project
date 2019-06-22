<?php
class student{
	const BR='<br>';
var $name, $class,$fee;

function getdata($sname,$sclass,$sfee){
	$this->name=$sname;
	$this->class=$sclass;
	$this->fee=$sfee;
}
function showdata(){
	echo $this->name.self::BR;
	echo $this->class.self::BR;
	echo $this->fee;
}

}









class staff{
	const BR='<br>';
var $name, $class,$fee;

function getdatastaff($sname,$sclass,$sfee){
	$this->name=$sname;
	$this->class=$sclass;
	$this->fee=$sfee;
}
function showdatastaff(){
	echo $this->name.self::BR;
	echo $this->class.self::BR;
	echo $this->fee;
}

}


$satrohan = new staff;
$satrohan->getdatastaff('satrohan','10th','1800');
$satrohan->showdatastaff();




$rajnish = new student;
$rajnish->getdata('Rajnish','10th','1800');
$rajnish->showdata();










class teacher extends student
{
 	public $name;
	public $subject;
    public $fee;

    function getdatateacher($tname,$tsubject,$fee){
    	    $this->name=$tname;
    		$this->subject=$tsubject;
    	    $this->fee=$fee;


                         }
   public function __construct(){
   	echo $this->name;
                }
}

 $prakash = new teacher;
 $prakash->getdatateacher('prakash','english','15000');

$rajnish->showdata();



//9355375443
























?>