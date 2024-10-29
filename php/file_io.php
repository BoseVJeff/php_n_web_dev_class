<?php
$filename="test.txt";
$file=fopen($filename,"r");
if($file) {
    echo "File opened successfully";
    // echo fread($file,10);
    echo "<br>File size:" . filesize($filename);
    // fwrite($file,"Writing to file!");
    echo "<br>".str_replace("\n","<br>",fread($file,filesize($filename)));
    fclose($file);
} else {
    echo "Error opening file!";
}
$newfilename="del.txt";
$newfile=fopen($newfilename,"w");
if(!$newfile) {
    echo "Error writing file!";
} else {
    fwrite($newfile,"Sample Content");
    fclose($newfile);
    unlink($newfilename);
    echo "Deleted file!";
}
?>