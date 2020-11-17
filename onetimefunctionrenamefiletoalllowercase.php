<?php
$files = glob("images/*.png");
foreach($files as $png){
    echo $png, "\n";
	
	
if (file_exists($png)){
$pnglowercase = strtolower($png);
//echo $png, "\n";

$renamed= rename($png, $pnglowercase);

if ($renamed)
{
echo "The file has been successfully renamed";
}
else
{
echo "The file has not been successfully renamed";
}
}
else
{
echo "The original file that you want to rename doesn't exist";
}


}
?>