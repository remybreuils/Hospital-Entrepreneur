<?php
$images = scandir(dirname(__FILE__));
$ignore = Array(".", "..", "otherfiletoignore");
foreach($images as $curimg){
if(!in_array($curimg, $ignore)) {
echo "<img src='$curimg' /><br>\n";
};
} 
?>