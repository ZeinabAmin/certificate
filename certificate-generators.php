<?php 

function getStudentData(string $student): array
{
    $array_of_student = explode(",", $student); //str to arr
    return $array_of_student;
}
function getCourseName(string $course): string
{
    return "course" . $course;
}
function fileCreate(string $file_name)
{
    return fopen($file_name, "w");;
}
function getContent(string $source): string
{
    return file_get_contents($source);
}
function putContent($content, $file, $content_key, $content_value)
{
    $new_content=str_replace($content_key,$content_value, $content);
    fwrite($file, $new_content);
}
function generate($content, $course_name, $student)
{
    foreach ($student as $st) {
        $newfile = filecreate($st . ".html");



        putcontent($content, $newfile, ['name', 'course'], [$st, $course_name]);
    }
}
function bootstrap($file, $student, $course)
{
    $content = getContent($file);
    $student = getStudentData($student);
    $coursename = getCourseName($course);
    generate($content, $coursename, $student);
}


?>

