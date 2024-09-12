<?php

#1. Thêm dữ liệu vào bảng sử dụng PDO

    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
            VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";

    $stmt = $dbh->prepare($sql);
    $stmt->execute([
        ':full_names' => 'Do Quynh Trang',
        ':gender' => 'Female',
        ':contact_no' => '34700',
        ':email' => 'trangdq3107@gmail',
        ':city' => 'Hanoi',
        ':country' => 'Vietnam'
    ]);

    echo "Record successfully added!";

$dbh = null; // Đóng kết nối




#2. Cập nhật dữ liệu vào bảng sử dụng PDO


    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE my_contacts SET contact_no = :contact_no, email = :email WHERE id = :id";

    $stmt = $dbh->prepare($sql);
    $stmt->execute([
        ':contact_no' => '34743',
        ':email' => 'trangdq3107@gmail.com',
        ':id' => 1 
    ]);

    echo "Record successfully updated!";

$dbh = null; // Đóng kết nối




#3. Xóa dữ liệu ở bảng sử dụng PDO


    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM my_contacts WHERE id = :id";

    $stmt = $dbh->prepare($sql);
    $stmt->execute([':id' => 03]);

    echo "Record successfully deleted!";

$dbh = null; // Đóng kết nối




#4. Hiển thị dữ liệu sử dụng PDO


    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM my_contacts";
    $stmt = $dbh->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Full Names: " . $row['full_names'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Contact No: " . $row['contact_no'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        echo "Country: " . $row['country'] . "<br><br>";
    }

$dbh = null; // Đóng kết nối

?>
