<?php
class parent_class{
   public $name="harry";
   
   public function parentdata(){
    echo "The name of parent is $this->name <br>";
   }
}
 class child_class extends parent_class{
    public $age=30;
    public function fulldata(){
        echo "The name of parent is $this->name and the age of parent is $this->age .";
    }
     public function parentdata(){
    echo "function overriding... <br>";
   }
 }
 $o=new child_class();
 $o->parentdata("red");
 $o->fulldata();
?>