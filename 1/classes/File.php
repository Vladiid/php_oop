<?php


//class File
//{
//
//    public $fp;   //указатель на открытие фала
//    public $file; //путь к файлу
//
//    public function __construct($file)
//    {
//        $this->file = $file; //путь к файлу
//        if (!is_writable($this->file)) {    //проверка существует ли файл и открыт ли он для записи
//            echo "Файл {$this->file} недоступен для записи";
//            exit;
//        }
//        $this->fp = fopen($this->file, 'a');    //отрытие файла для записи
//    }
//
//    public function __destruct()
//    {
//        fclose($this->fp);    //закрытие
//    }
//
//    public function write($text){
//        if (fwrite($this->fp, $text. PHP_EOL) === FALSE) {
//            echo "Не могу произвести запись в файл ($this->fp)";    //запись
//            exit;
//        }
//    }
//}

class File
{
    public $fp; //указатель на открытие фала
    public $file; //путь к файлу

    public function __construct($file)
    {
        $this->file = $file;
        if(!is_writable($this->file)){
            echo "Файл {$this->file} недоступен для записи";
            exit;
        }
        $this->fp=fopen($this->file, "a");

    }

    public function __destruct()
    {
        fclose($this->fp);

    }

    public function write($text)
    {
        if (fwrite($this->fp, $text.PHP_EOL) === FALSE) {
            echo "Не могу произвести запись в файл ($this->fp)";
            exit;
        }


    }

}