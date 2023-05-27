<?php
class FileUtil{
    const MAX_LEN = 1024;
    public function readFile( string $fileName):string | int{
        $fileSize = filesize($fileName);
        if ($fileSize <= self::MAX_LEN){
            return "Successfully Read File \n";
        }else{
            return "Can't Read File \n";
        }
        return $fileSize;
    }
    public function writeFile(string $fileName):string | int{
        $content = file_get_contents($fileName);
        if ($content <= self::MAX_LEN){
            return "Successfully Write File \n";
        }else{
            return "Can't not Write File \n";
        }
        return $content;
    }

}
$testRead = new FileUtil();
echo $testRead->readFile("read.txt");
echo $testRead->writeFile("read.txt");