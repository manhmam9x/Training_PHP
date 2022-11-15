<!DOCTYPE html>
<html>
<body>
<?php
$n = '';
if (isset ($_POST ['n'])) {
    $n = $_POST ['n'];
    function checkValidString($n)
    {
        $array = explode(' ', $n);
        if (in_array('book', $array)) {
            echo 'chuỗi hợp lệ';
        } elseif (in_array('restaurant', $array)) {
            echo 'chuỗi hợp lệ';
        } else {
            echo 'chuỗi không hợp lệ ';
        }
    }
    echo checkValidString($n);
}
?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập S:</td>
            <td><input type="text" name="n" value="<?= $n ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Phân tích"></td>
        </tr>
    </table>
</form>
</body>
</html>
