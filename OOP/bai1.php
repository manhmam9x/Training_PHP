<?php
class ExerciseString {
    public $check1;
    public $check2;

    public function readFile(){
        $file1 = 'file1.txt';
        $file2 = 'file2.txt';
        $readfile1 = readfile($file1) or exit('không tồn tại file');
        $readfile2 = readfile($file2) or exit('không tồn tại file');
        return $readfile1 && $readfile2 ;

    }

    public function checkValidString(){

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

