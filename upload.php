<?php
$uploaddir = '../upload/temp';
$file = $uploaddir . basename($_FILES['uploadfile']['name']);
$ext = substr($_FILES['uploadfile']['name'], strpos($_FILES['uploadfile']['name'], '.'),
    strlen($_FILES['uploadfile']['name'])-1);
$filetypes = array('.jpg', '.gif', '.bmp', '.png', '.jpeg', '.JPG', '.GIF', '.BMP', '.PNG', '.JPEG');
if(!in_array($ext, $filetypes)){
    echo "<p>Nepravelnuy format</p>";
}
else{
    move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {
        echo $_FILES['uploadfile']['name'];
    }
    else {
        echo 0;
    }
}