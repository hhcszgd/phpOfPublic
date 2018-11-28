<!DOCTYPE html>
<html>
<body>

<h5>My first PHP page</h5>

<?php
echo "Hello World!<br>";
?>


///function
<?php
/**
 * @param string $ please input your name
 */
function func_Name( $your_name)
{
    echo ("your name is $your_name <br>" );
    return "value for return <br>";
};
$result = func_name("john");

echo  $result;
?>

<?php

/**
 * @param $name string
 * @param $age  int
 * @param int $gentle int
 */
function testPara($name , $age , $gentle = 2){
    $sex = "";
    if ($gentle == "1") {
        $sex = "boy";
    }else{
        $sex = "girl";
    }
    echo("my name is $name , I'm $age year old, I'm a $sex <br>");
}
testPara("John" , 15 , 1);
testPara("Lisa" , 11 );
?>

///class and method
<?php

class Car{
    /**
     * Car constructor. 构造方法
     */
    function __construct()
    {
        $this->attribute1 = "meme";
    }
    function __get($name)
    {
        return $name;
        // TODO: Implement __get() method.
    }

    /*析构方法*/
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Car instance is destroyed";

    }

    public$attribute1 = "haha";

    public $attribute2 = "hehe";
    function action(){
        echo "perform action<br>";
    }
}
$car = new Car();
$car::action();
$car->attribute1 = "bugly";
echo "<br>";
echo ($car->attribute1);
echo ($car->attribute2);
//echo ("nmmmm");
?>

///class and extends
<?php
class  A {
    function action(){
        echo ("print out class A ");
    }
}
class B  extends A{//继承
    function actionB(){
        echo ("print out class B ");
    }
}
class C  extends A{//重载
    function action(){
        echo ("print out class C ");
    }
}
$b = new B();
$b->action();
$b->actionB();
$c = new C();
$c->action();
?>



</body>
</html>
