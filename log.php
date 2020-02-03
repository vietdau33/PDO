<?php

class Logger{

    private $nameFile = '';

    public function __construct(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->nameFile = date("d_m_Y") . '.txt';
    }

    public function write($string){
        $preString = date("H:m:s") . ' ';
        $file = fopen(__DIR__ . "\\log\\" . $this->nameFile, "a+");
        fwrite($file, PHP_EOL);
        fwrite($file, $preString . $string);
        fclose($file);
        return true;
    }
}