<?php
 class ExerciseString
 {
    public $check1;
    public $check2;
    public function readFile($file) 
    {
        if (file_exists($file)) {
            $file1 = fopen($file, "r");
            $content = fread($file1, filesize($file));
            fclose($file1);
            return $content;
        } else {
            echo 'file không tồn tại <br>';
        }
    }

    public function checkValidString($str,$str1,$str2) 
    {
        $val1 = strpos($str, $str1);
        $val2 = strpos($str, $str2);
        if ($val1 !== false && $val2 === false) {
            return true;
        } elseif ($val2 !== false && $val1 === false) {
            return true;
        } else {
            return false;
        }
    }

    public function writeFile($file,$str) 
    {
        if (file_exists($file)) {
            $file1 = fopen($file, "w");
            fwrite($file1, $str);
            fclose($file1);
        } else {
            echo 'file không tồn tại';
        }
    }
 }

 //Bai4
 $object1 = new ExerciseString();

 //File1
 $content1 = $object1->readFile('file1.txt');
 $object1->check1 = $object1->checkValidString($content1, 'book', 'restaurant');//true

 //File2
 $content2 = $object1->readFile('file2.txt');
 $sentance = substr_count($content2, '.');
 $object1->check2 = $object1->checkValidString($content2, 'book', 'restaurant');//false

 //Check
 $checkFile1 = $object1->check1 == true ? 'File1 là chuỗi "Hợp lệ"' : 'check1 là chuỗi "Không hợp lệ"'; //File1 là chuỗi "Hợp lệ"
 $checkFile2 = $object1->check2 == true ? 'File2 là chuỗi "Hợp lệ".Chuỗi có '. $sentance . ' câu' : 'File2 là chuỗi "Không hợp lệ"'; //File2 là chuỗi "Không hợp lệ" 

 //Result
 $str =" $checkFile1 \n $checkFile2 ";
 $object1->writeFile('result.txt', $str);// File1 là chuỗi "Hợp lệ"  File2 là chuỗi "Không hợp lệ" 