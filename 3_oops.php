<html>
    <body>
       <?php
        class car{
          public $name;
          public $brand;
          public $model;
          
          public function set_data($name,$brand,$model){
            $this->name=$name;
            $this->brand=$brand;
            $this->model=$model;
          }
          public function getd_data(){
            return "This is a car name $this->name whose brnad name is $this->brand and its model is $this->model.";
          }
        }
    $obj=new car(); //IN JAVA AND C++ "car obj=new car()"...
    $obj->set_data("Alto","Maruti",2020);
    echo $obj->getd_data();

        ?> 
    </body>
</html>