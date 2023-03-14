<?php
// $newcontent=str_replace('name',$value,$content);
// $newcontent=str_replace('course',$course,$newcontent);



// $content = file_get_contents("cer.html");
// $student = explode(",", $_POST['username']);
// $course = $_POST['course'];
// foreach ($student as $value) {
//     $filename = $value . ".html";
//     $newfile = fopen($filename, "w");
//     $newcontent = str_replace(['name', 'course'], [$value, $course], $content);
//     fwrite($newfile, $newcontent);
// }




include "certificate-generators.php";

//get content

bootstrap("cer.html", $_POST['username'], $_POST['course']);
?>