<?php
//error_reporting(0);
function get_latest(){
require('connect.php');
$sql="SELECT id FROM users ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        return $row["id"];
    }
} else {
    return 0;
}
}
function get_data(){
require('connect.php');
$sql1="SELECT * FROM miraroad";
$sql2="SELECT * FROM goregaon";
$res1=mysqli_query($conn,$sql1);
$obj;
if (mysqli_num_rows($res1) > 0) {
    while($row = mysqli_fetch_assoc($res1)) {
		$id=$row['id'];		
		$name=$row['firstname'].' '.$row['lastname'];
		$contact=$row['contact'];
		$loc='Mira Road';
		$x->name=$name;
		$x->contact=$contact;
		$x->location=$loc;
		
		$x=json_encode($x);
		$obj->$id=$x;
    }
}
$res2=mysqli_query($conn,$sql2);

if (mysqli_num_rows($res2) > 0) {
    while($row2 = mysqli_fetch_assoc($res2)) {
		$id2=$row2['id'];
		$name2=$row2['firstname'].' '.$row2['lastname'];
		$contact2=$row2['contact'];
		$loc2='Goregaon';
		
		$y->name=$name2;
		$y->contact=$contact2;
		$y->location=$loc2;
		
		$y=json_encode($y);
		$obj->$id2=$y;
    }
}
$obj=json_encode($obj);
echo $obj;
}
get_data();

?>
<!--
<script>
var x='<?php get_data(); ?>';
/*for(i=0;i<100;i++){
x=x.replace('"}"', '"}');
x=x.replace('"{','{');
}
x=x.replace(/\\/g,'');*/
console.log((x));

</script>