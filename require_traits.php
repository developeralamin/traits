<?php 

 require 'traits.php';
 require 'traits2.php';
 require 'my_class.php';

 class Myclas extends Mycls{
 	use mesaage,message2;

   public function okks(){
   	 $this->msg2();
   }
 }

 $Obj= new Myclas();

 echo $Obj->ok();
 echo "</br>";
 echo $Obj->msg2();
 echo "</br>";
 echo $Obj->msg1();