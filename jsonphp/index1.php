<?php
//tạo mảng các thành phố
$phpArray = array("hà nội","hồ chí minh","đà nẵng");

class Student {
    // thuộc tính
    public $name;
    public $age;
    public $location;

    // hàm khởi tạo chạy ngay khi gọi
    public function __construct($name,$age,$location)
    {
        // gán tham số cho thuộc tính
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}
$an = new Student("nguyễn văn an","21","hà nội");

echo "<pre>";
print_r($phpArray);
echo "</pre>";
/*kq:
Array
(
    [0] => hà nội
    [1] => hồ chí minh
    [2] => đà nẵng
)*/

echo "<pre>";
print_r($an);
echo "</pre>";
/*
 * Student Object
(
    [name] => nguyễn văn an
    [age] => 21
    [location] => hà nội
)*/

/*
 * mã hóa mảng, đối tượng thành chuỗi json
 * json_encode()*/
$phpJson1 = json_encode($phpArray);
echo "<pre>";
print_r($phpJson1);
echo "</pre>";
/*
 * kq: ["h\u00e0 n\u1ed9i","h\u1ed3 ch\u00ed minh","\u0111\u00e0 n\u1eb5ng"]*/
$phpJson2 = json_encode($an);
echo "<pre>";
print_r($phpJson2);
echo "</pre>";
/*
 * kq:{"name":"nguy\u1ec5n v\u0103n an","age":"21","location":"h\u00e0 n\u1ed9i"}*/
