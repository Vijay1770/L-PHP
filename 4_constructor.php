<?PHP
class Tree
{
	function __construct()
	{
		echo "Its a Pre-defined Constructor of the class Tree";
	}


    function __destruct()
    {
        echo "<br> Destructor executed...";
    }
}

$obj= new Tree();
?>
