<?php
echo("Hello PHP!!<hr>");
print("Bahaa Hayajneh<br>");

$name="Bahaa\"";
$age=22;
echo($name.$age);
echo(substr($name,1,3));
$text="Bahaa Hayajneh<br>";
$str2=str_replace("a","c",$text);
//echo($str2);
/*
line 1

line2
*/
//Date
$date1=date("D/M/Y");
print($date1."<br>");

$date2=date('d/m/Y',strtotime('26-2-2021'));


date_default_timezone_set("egypt");
$date3=date("d/m/y h:i:s");
print($date3."<br>");
//Array
$names=array("Bahaa","Alaa","Ali");
print($names[0]."<br>");

$names2=array("a"=>"Bahaa","b"=>"Alaa","c"=>"Ali");
print("The Value Of Index b is  : ".$names2["b"]."<br>");


//condition if 
$num1=10;
$num2=20;
if($num1>$num2)
{
    print(" num1 " ."Is greater than nmu2"."<br>");
}
else
{
    print("num1 Is less than nmu2" ."<br>");
}

//switch
$num5=10;
switch($num5)
{
    case 1:

    print("One"."<br>");
    break;
    case 2:
    case 3: 
        print("Two and three"."<br>");
        break;
    default:
    print("Other");
    break;

}
//for loop
$arr1=array(101,-2,30,430,51);
$max=-999;
for($i=0;$i<count($arr1);$i++)
{
    if($arr1[$i]>$max)
    {
        $max=$arr1[$i];
    }


 
}
print("<h2>".$max."</h2>"."<br>");


//foreach
$arr2=array(10,20,30,40,50);
foreach($arr2 as $i)
{
print("<h3>".$i."</h3>");


}

//While Loop
$counter=10;
while($counter>=0)
{
print("<h3>".$counter."</h3>");
$counter-=1;

}

//function
function f1()
{
print("Hello f1");
print("Hello f1");

}

f1();
//Global variable &7server
$v1=10;
function f2()
{

$var10=$GLOBALS['v1'];
print('The v1 is  :  '.$var10);
$GLOBALS['v10']=100;
print($_SERVER['PHP_SELF']);//Place project
}

f2();
//Method
if($_SERVER['REQUEST_METHOD']=='POST')
{
print($_POST['name']);


}

//Security
$x= strip_tags($_POST['name']);





?>
