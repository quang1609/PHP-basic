<?php
function checkValidString($str) 
{
    $val1 = strpos($str, 'book');
    $val2 = strpos($str, 'restaurant');
    if ($val1 > 0 && $val2 == false) {
        return true;
    } elseif ($val2 > 0 && $val1 == false) {
        return true;
    } else {
        return false;
    }
}

function checkResult($str) 
{
	if (checkValidString($str) === false) {
	    echo 'Chuỗi không hợp lệ!!';
    } else {
	    $sentence = substr_count($str, '.');
	    echo 'Chỗi hợp lệ. Chuỗi bao gồm ' . $sentence . ' câu';
    }
}

function checkFile($file) 
{
    if (file_exists($file)) {
    	$f = fopen($file, 'r');
    	$content = fread($f, filesize($file));
    	checkResult($content);
    } else {
    	echo 'Tệp không tồn tại!!';
    }
}

//Check File
checkFile('file1.txt');//Chuỗi hợp lệ và bao gồm 4 câu
echo '<br>';
checkFile('file2.txt');//Chuỗi không hợp lệ
