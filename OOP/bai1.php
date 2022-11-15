<?php
class ExerciseString {
    public $check1;
    public $check2;

    public function readFile(){
        $file1 = 'file1.txt';
        $file2 = 'file2.txt';
        $readfile1 = readfile($file1) or exit('không tồn tại file');
        $readfile2 = readfile($file2) or exit('không tồn tại file');
        return $readfile1 && $readfile2;
    }

    public function checkValidString(){
        $file1 = 'file1.txt';
        $fp1 = fopen($file1, 'r') or exit('ko tim thay file');
        $content1 = fread($fp1,filesize($file1));
        $array = explode(' ', $content1);
        if (in_array('book', $array)){
            echo 'File 1 có chuỗi hợp lệ.';
        }elseif (in_array('restaurant', $array)){
            echo 'File 1 có chuỗi hợp lệ.';
        }else{
            echo 'File 1 chuỗi không hợp lệ ';
        }
    }

    public function writeFile(){
        $filename='result_file .txt';
        $file= fopen($filename,'w') or exit('ko tim thay file');
        fwrite($file, 'Hello World');
        fclose($file);
    }
}

$object1 = new ExerciseString();
$object1->readFile();
$object1->checkValidString();
$object1->writeFile();

