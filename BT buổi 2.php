<html>
<body>
<?php

$x = "Đây là bài tập b2";
$y = "b2";

//Cau 1:
echo strlen($x). "<br>";

//Cau 2:
echo str_word_count($x). "<br>";

//Cau 3:
echo strrev($x). "<br>";

//Cau 4:
echo strpos($x,$y). "<br>";

//Cau 5:
echo str_replace("b 2",$y,$x). "<br>";

//Cau 6:
echo strncmp($x,$y,2). "<br>";

//Cau 7:
echo strtoupper($x). "<br>";

//Cau 8: 
$X = "ĐÂY LÀ BÀI TẬP B2";
echo strtolower($X). "<br>";

//Cau 9:
echo ucwords($x). "<br>";

//Cau 10:
echo trim("   Đây là bài tập buổi 2    "). "<br>";

//Cau 11:
echo ltrim($x). "<br>";

//Cau 12:
echo rtrim($x). "<br>";

//Cau 13:
$c13 = "I love traveling";
$c13s1 = " ";
$array = explode($c13s1, $c13);
echo "Mảng phần tử sau khi tách:\n";
print_r($array);
echo "<br>";

//Cau 14:
$c14 = array("Đây là bài tập", "b 2");
echo implode(" ",$c14);
echo "<br>";

//Cau 15:
$c15 = "Đây là bài tập ";
$c15s1 = "b2";
echo str_pad($c15,strlen($c15) + strlen($c15s1), $c15s1, STR_PAD_RIGHT);
echo "<br>";

//Cau 16:
$c16 = "Đây là bài tập b2";
$c16s2 = "b2";

$c16s3 = strrchr($c16, $c16s2[0]);

// Kiểm tra xem phần cuối của haystack có bắt đầu bằng needle không
if ($c16s3 !== false && substr($c16s3, 0, strlen($c16s2)) === $c16s2) {
    echo "Chuỗi '$c16' kết thúc bằng '$c16s2'.";
} else {
    echo "Chuỗi '$c16' không kết thúc bằng '$c16s2'.";
};
echo "<br>";

//Cau 17:
$c17 = strstr($c16, $c16s2);

if ($c17 !== false) {
    echo "'$c16' có chứa '$c16s2'.";
} else {
    echo "'$c16' không chứa '$c16s2'";
};
echo "<br>";

//Cau 18:
echo preg_replace("/\W/", ",","#&#*btvnb2(%)@"). "<br>";

//Cau 19:
if (is_int(347743)==1)  {
    echo "347743 là số nguyên.";
} else { "347743 không phải là số nguyên."; 
};
echo "<br>";

//Cau 20:
$c20 = "trangdq3107@gmail.com";
if (filter_var($c20, FILTER_VALIDATE_EMAIL)) {
    echo "Địa chỉ email '$c20' là hợp lệ.";
} else { "Địa chỉ email '$c20' là không hợp lệ"; 
};
"<br>";

?>
</body>
</html>
