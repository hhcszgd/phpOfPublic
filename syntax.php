<!--<!DOCTYPE html>--><!--<html>--><!--<body>--><!----><!--<h5>My first PHP page</h5>--><?phpecho "Hello World!<br>";?>///function<?php/** * @param string $ please input your name */function func_Name( $your_name){    echo ("your name is $your_name <br>" );    return "value for return <br>";};$result = func_name("john");echo  $result;?><?php/** * @param $name string * @param $age  int * @param int $gentle int */function testPara($name , $age , $gentle = 2){    $sex = "";    if ($gentle == "1") {        $sex = "boy";    }else{        $sex = "girl";    }    echo("my name is $name , I'm $age year old, I'm a $sex <br>");}testPara("John" , 15 , 1);testPara("Lisa" , 11 );?>///class and method<?phpclass Car{    /**     * Car constructor. 构造方法     */    function __construct()    {        $this->attribute1 = "meme";    }    function __get($name)    {        return $name;        // TODO: Implement __get() method.    }    /*析构方法*///    function __destruct()//    {//        // TODO: Implement __destruct() method.//        echo "Car instance is destroyed";////    }    public$attribute1 = "haha";    public $attribute2 = "hehe";    function action(){        echo "perform action<br>";    }}$car = new Car();$car::action();$car->attribute1 = "bugly";echo "<br>";echo ($car->attribute1);echo ($car->attribute2);//echo ("nmmmm");?><?php/* class and extends*/class  A {    public $attribute1 = "helloA" ;//    final $attribute2 = "helloA2" ;//属性不能被final修饰    function action(){        echo ("print out class A  , attribute is : " . $this->attribute1 . "<br/>");    }    final function actionStatic(){        echo ("print out class A  , attribute is : " . $this->attribute1 . "<br/>");    }}class B  extends A{//继承    public $attribute1 = "helloB" ;    function actionB(){        echo ("print out class B , attribute is :  " . $this->attribute1 . "<br/>");    }}class C  extends A{//重载    public $attribute1 = "helloC" ;    function action(){        echo "<br/><br/><br/>";        parent::action();        echo("print out class C  , attribute is : ".$this->attribute1 . "<br/>");    }}class D  extends A{//重载//    function actionStatic(){ //父类有final修饰 不能重写//        echo ("print out class A  , attribute is : " . $this->attribute1 . "<br/>");//    }    /**     *     */    function funcD(){        echo  "D";    }}$b = new B();$b->action();$b->actionB();$c = new C();$c->action();//print out class A , attribute is : helloB//print out class B , attribute is : helloB//print out class A , attribute is : helloC//print out class C , attribute is : helloC?><?php//抽象类 (功能类似于接口)abstract class AbstractA {    abstract function action1();}class AExtendsAbstractA extends AbstractA{    /**     *     */    function action1()    {        echo ("I am a method from AbstractA <br/>");    }}$abstractaaa = new  AExtendsAbstractA();$abstractaaa->action1();?><?php//接口 (swift中的协议 , oc中的分类)interface Displayable{    function display(); // 没有实现,只有声明}interface Runable{    function run(); // 没有实现,只有声明}class WebPage implements Displayable ,Runable {//实现多继承    function display()    {       echo "yeah , I can display <br/>";    }    function run()    {        echo "yeah , I can run <br/>";    }    function wantToInstanceOfDisplayable(Displayable$canDisplayInstance){        echo "good job <br/>";    }}$instance = new  WebPage();$instance->display();$instance->run();$result = $instance instanceof Displayable;//判断$instance对象是不是Displayable 类或者Displayable 子类的对象 , 或者是否遵守Displayable协议echo $result . "<br/>";//$instance->wantToInstanceOfDisplayable($result);//报错 , 必须穿Displayable的自类$instance->wantToInstanceOfDisplayable($instance);//$bb = new  WebPage();if ($bb instanceof Displayable){    $instance->wantToInstanceOfDisplayable($bb);}else{    echo "类型不匹配";}?><?php// 类属性 和 类方法class MyClass{    const classAttribute = "class attribute";    static function action(){        echo "this is a class-method <br/>";    }}echo MyClass::classAttribute . "<br/>";MyClass::action();?><?php// function __autoload($name)  此方法是一个当前单独的函数 , 系统会在 创建一个不存在的类实例时  ,调用这个方法 , 并传递这个不存在的类名function __autoload($name){    echo "invoke a invalid class :" . $name;}//$aaaaa = new BBBB();//系统会自动调用__autoload函数?><?phpclass TestCallMethod{/// 魔术方法 __call()    function inCase1($obj){        echo $obj . "ooo"  . "<br/>";    }    function inCase2($arr){        if ($arr[0] ){            echo   "this paramete is a array , first element is :" . $arr[0] . "<br/>";        }else if ($arr["key1"] ){            echo "this paramete is a dictionary , value of key \"key1\"  is :" . $arr["key1"] . "<br/>";        }    }    function inCase3($els){        echo $els . "<br/>";    }    function __call($method , $para){        if($method == "display"){            if (is_object($para[0])){                $this->inCase1($para[0]);            }else if (is_array($para[0])){                $this->inCase2($para[0]);            }else{                $this->inCase3($para[0]);//                echo "嘻嘻嘻嘻嘻<br/>";//                echo $para[0] . "<br/>";            }        }else if($method == "someMethodElse"){            if (is_object($para[0])){                $this->inCase1($para[0]);            }else if (is_array($para[0])){                $this->inCase2($para[0]);            }else{                $this->inCase3($para[0]);//                echo "嘻嘻嘻嘻嘻<br/>";//                echo $para[0] . "<br/>";            }        }    }}$sssssss = new TestCallMethod();$sssssss->noExistsMethos();//php中 调用一个不存在的方法 , 不会产生任何效果 , 代码继续往下执行$sssssss->display("cccccc");$sssssss->display(array("element1","element2"));$sssssss->display(array("key1"=>"cccccc"));echo "xjiufoa<br/>";?><?php// 魔术方法 cloneclass CC{    public $para1="classCC" ;    function ss(){    }    function __clone()    {        $this->para1 = "xxxooo"; // 改变的事副本的属性 ,    }}$cccc = new  CC();$copyOfCCCC = clone$cccc;echo $cccc->para1 . "<br/>"; // classCCecho $copyOfCCCC->para1 . "<br/>"; // xxxoooecho $cccc->para1 . "<br/>";// classCC?><?phpclass TTT{    public $attribute1 = "attribute value 1";    public $attribute2 = "attribute value 2";    public $attribute3 = "attribute value 3";    public $attribute4 = "attribute value 4";    public $attribute5 = "attribute value 5";}$t = new  TTT();foreach ($t  as $attributeValue) {/// 迭代器 , 取出一个对象 所有的属性的值    echo $attributeValue . "<br/>";}class Object implements IteratorAggregate{    public $data = array();    function __construct($in)    {        $this->data=$in;    }    function getIterator()    {        // TODO: Implement getIterator() method.        return new ObjectIterator($this);    }}class ObjectIterator implements iterator{    private $obj;    private $count;    private $currentIndex;    function __construct($obj)    {        $this->obj = $obj;        $this->count = count($this->obj->data);    }    /**     * Return the current element     * @link http://php.net/manual/en/iterator.current.php     * @return mixed Can return any type.     * @since 5.0.0     */    public function current()    {        // TODO: Implement current() method.        return $this->obj->data[$this->currentIndex];    }    /**     * Move forward to next element     * @link http://php.net/manual/en/iterator.next.php     * @return void Any returned value is ignored.     * @since 5.0.0     */    public function next()    {        // TODO: Implement next() method.        $this->currentIndex++;    }    /**     * Return the key of the current element     * @link http://php.net/manual/en/iterator.key.php     * @return mixed scalar on success, or null on failure.     * @since 5.0.0     */    public function key()    {        // TODO: Implement key() method.        return $this->currentIndex;    }    /**     * Checks if current position is valid     * @link http://php.net/manual/en/iterator.valid.php     * @return boolean The return value will be casted to boolean and then evaluated.     * Returns true on success or false on failure.     * @since 5.0.0     */    public function valid()    {        // TODO: Implement valid() method.        return $this->currentIndex<$this->count;    }    /**     * Rewind the Iterator to the first element     * @link http://php.net/manual/en/iterator.rewind.php     * @return void Any returned value is ignored.     * @since 5.0.0     */    public function rewind()    {        // TODO: Implement rewind() method.        $this->currentIndex=0;    }}$myObject = new Object(array(2,4,6,8,10));$myIterator = $myObject->getIterator();for ($myIterator->rewind() ; $myIterator->valid() ; $myIterator->next()){    $key = $myIterator->key();    $value = $myIterator->current();    echo $key . "=>" . $value . "<br/>";}?><?php// 简化版迭代器类class MyObjectIterator implements iterator{    private $arr;    private $count;    private $currentIndex;    function __construct(array$arr)    {        $this->arr = $arr;        $this->count = count($this->arr);    }    /**     * Return the current element     * @link http://php.net/manual/en/iterator.current.php     * @return mixed Can return any type.     * @since 5.0.0     */    public function current()    {        // TODO: Implement current() method.        return $this->arr[$this->currentIndex];    }    /**     * Move forward to next element     * @link http://php.net/manual/en/iterator.next.php     * @return void Any returned value is ignored.     * @since 5.0.0     */    public function next()    {        // TODO: Implement next() method.        $this->currentIndex++;    }    /**     * Return the key of the current element     * @link http://php.net/manual/en/iterator.key.php     * @return mixed scalar on success, or null on failure.     * @since 5.0.0     */    public function key()    {        // TODO: Implement key() method.        return $this->currentIndex;    }    /**     * Checks if current position is valid     * @link http://php.net/manual/en/iterator.valid.php     * @return boolean The return value will be casted to boolean and then evaluated.     * Returns true on success or false on failure.     * @since 5.0.0     */    public function valid()    {        // TODO: Implement valid() method.        return $this->currentIndex<$this->count;    }    /**     * Rewind the Iterator to the first element     * @link http://php.net/manual/en/iterator.rewind.php     * @return void Any returned value is ignored.     * @since 5.0.0     */    public function rewind()    {        // TODO: Implement rewind() method.        $this->currentIndex=0;    }}echo  "<br/>";$arrToBeIteratored = array(1,2,3,4,5,6,7,8,9);$myIterator = new MyObjectIterator($arrToBeIteratored);for ($myIterator->rewind() ; $myIterator->valid() ; $myIterator->next()){    $key = $myIterator->key();    $value = $myIterator->current();    echo $key . "=>" . $value . "<br/>";}?><!--</body>--><!--</html>-->