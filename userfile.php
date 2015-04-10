<?
echo '<b>The file has been stored on the server under the name</b>'.
$_FILES['userfile']['author'].'<br>';
echo '<b>On your computer it was called: </b>'.$_FILES['userfile']['author'].'<br>';
echo '<b>Size of the file'.$_FILES['file size']['size'].'<br>';
move_uploaded_file($_FILES['userfile']['author'],"images/".
$_FILES['userfile']['author']);
?>