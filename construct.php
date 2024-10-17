<?php
class Person
{
    public $name;
    public $major;
    public $year;

    //fungsinya untuk menyimpan dan mengirim data
    public function __construct($name, $major, $year)
    {
        $this->name = $name;
        $this->major = $major;
        $this->year = $year;
    }
    public function print(){
        echo 'Name : '.$this->name;
        echo 'Major : '.$this->major;
        echo 'Year : '.$this->year;
        

    }
}
//object
$gunuk = new Person('Gunwook', 'Science', '2023');
$wonu = new Person('Wonwoo', 'TI', '2020');

?>