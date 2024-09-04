<?php
// MULTIPLE INHERITANCE...
interface email_data
{
    public function email();
}
interface password_data
{
    public function password();
}
class last implements email_data, password_data
{
    public function email()
    {
        echo  "Gourvijay977@gamil.com ";
    }
    public function password()
    {
        echo  " VIjay87987";
    }
}
$obj = new last();
$obj->email();
$obj->password();

//MULTILEVEL INHERITANCE...

class A
{
    var $a = 2;
    public function Adata()
    {
        return $this->a;
    }
}
class B extends A
{
    public $b = 10;
    public function B_data()
    {
        return $this->b;;
    }
}
class C extends B
{
    public $c = 5;
    public function add()
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        echo $a + $b + $c;
    }
}
$obj = new C();
$obj->add();
