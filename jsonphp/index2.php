<?php
$json1 = '["h\u00e0 n\u1ed9i","h\u1ed3 ch\u00ed minh","\u0111\u00e0 n\u1eb5ng"]';
$json2 = '{"name":"nguy\u1ec5n v\u0103n an","age":"21","location":"h\u00e0 n\u1ed9i"}';

/*
 * để chuyển đổi chuỗi json thành mảng hoặc đối tượng sang php
 * sd hàm json_decode()*/
$covert1 = json_decode($json1);
echo "<pre>";
print_r($covert1);
echo "</pre>";
/*kq:
Array
(
    [0] => hà nội
    [1] => hồ chí minh
    [2] => đà nẵng
)*/

$covert2 = json_decode($json2);
echo "<pre>";
print_r($covert2);
echo "</pre>";
/*
 * kq:
 * stdClass Object
(
    [name] => nguyễn văn an
    [age] => 21
    [location] => hà nội
)*/
