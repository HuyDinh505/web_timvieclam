<?php
function connectdb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doanchuyennghanh";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; // Loại bỏ dòng này trong môi trường sản xuất
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null; // Trả về null nếu kết nối thất bại
    }
    return $conn; // Trả về đối tượng kết nối
}
?>
