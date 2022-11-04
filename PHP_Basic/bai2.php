<!DOCTYPE html>
<html>
<body>
<?php
$n = '';
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
        function checkValidString($n){
            if ($n == 'file 1'){
               $file1 = 'file1.txt';
               $fp1 = fopen($file1, 'r') or exit('ko tim thay file');
               $content1 = fread($fp1,filesize($file1));
               $array = explode(' ', $content1);
               $result = substr_count($content1, ".");
               echo $content1;
               echo '<br> <br>';
                if (in_array('book', $array)){
                    echo 'File 1 có chuỗi hợp lệ. Chuỗi bao gồm '.$result.' câu';
                }elseif (in_array('restaurant', $array)){
                    echo 'File 1 có chuỗi hợp lệ. Chuỗi bao gồm '.$result.' câu';
                }else{
                    echo 'File 1 chuỗi không hợp lệ ';
                }
            }
            if ($n == 'file 2'){
                $file2 = 'file2.txt';
                $fp2 = fopen($file2, 'r') or exit('ko tim thay file');
                $content2 = fread($fp2,filesize($file2));
                $array = explode(' ', $content2);
                echo $content2;
                echo '<br> <br>';
                if (in_array('book', $array)){
                    echo 'File 2 có chuỗi hợp lệ. Chuỗi bao gồm '.$result.' câu';
                }elseif (in_array('restaurant', $array)){
                    echo 'File 2 có chuỗi hợp lệ. Chuỗi bao gồm '.$result.' câu';
                }else{
                    echo 'File 2 chuỗi không hợp lệ ';
                }
            }
        }


    echo checkValidString($n);
}

?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập S:</td>
            <td><input type="text" name="n" value="<?=$n?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Phân tích"></td>
        </tr>
    </table>
</form>
