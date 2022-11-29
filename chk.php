<?php
// 절대경로 알아내기 
$file_path = realpath(__FILE__); //php파일의 절대 서버 경로

$file_name = basename(__FILE__); //php파일 이름

$path = str_replace(basename(__FILE__), '', $file_path); //php파일 이름을 뺀 절대 서버 경로

$root_path = $_SERVER['DOCUMENT_ROOT']; // 서버의 ROOT 경로

echo "php파일의 절대 서버 경로 : ".$file_path."<br>";
echo "php파일의 이름 : ".$file_name."<br>";
echo "php파일 이름을뺀 절대 서버 경로 : ".$path."<br>";
echo "서버의 ROOT: ".$root_path."<br>";

?>