<?php
trait mytrait {
   
    function trait(){

        echo "helloworld";
        
}


}
class person {

    public static $name = "dishant";
    public static $address = "nashik";

    static function show(){
    

        echo static::$name;
        echo "\n\n";
        echo static::$address;
    }
}

echo  "\n\n";

class employee extends person {
    use mytrait;
    static $name = "sharad";
    static $address = 'nagpur';

}

person::show();
employee::show();
$obj = new employee();
$obj-> trait();

?>

    










}
?>