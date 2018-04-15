<?php
error_reporting(0);

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);
$a=1;
$obj2->$a=$myJSON;

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);
$a=2;
$obj2->$a=$myJSON;

$myJSON2= json_encode($obj2);
echo $myJSON2;

/*$a=1;
$b->name='anay';
$b->addr='Mira Road';
$myJSON = json_encode($b);

$obj->a1=$myJSON;

$myJSON2 = json_encode($obj);

echo $myJSON2;
*/
?>
<script>
var x='<?php echo $myJSON2; ?>';
for(i=0;i<100;i++){
x=x.replace('"}"', '"}');
x=x.replace('"{','{');
}
console.log(JSON.parse(x));
</script>