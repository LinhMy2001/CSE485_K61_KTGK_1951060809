<?php
include 'header.php';
include('config.php');
?>
<!-- Tên thuốc, Loại thuốc, Mã vạch, Liều lượng, Mã, Giá nhập, Giá bán,
Trạng thái Hạn sử dụng, Công ty, Ngày sản xuất, Ngày hết hạn, Nơi sản xuất, Số
lượng. -->
<h1 class="bg-warning">Quan Lý Thuốc</h1>
<main>
    <!-- Quy trình 4 bước -->:
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã Thuốc</th>
                <th scope="col">Tên Thuốc</th>
                <th scope="col">Loại thuốc</th>
                <th scope="col">Mã vạch</th>
                <th scope="col">Liều lượng</th>
                <th scope="col">Mã</th>
                <th scope="col"> Giá nhập</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Trạng thái Hạn sử dụng</th>
                <th scope="col">Công ty </th>
                <th scope="col">Ngày sản xuất</th>
                <th scope="col">Ngày hết hạn</th>
                <th scope="col">Nơi sản xuất</th>
                <th scope="col"> Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            <?php
            // Quy trình 4 bước
            // Bước 01: Đã tạo sẵn, gọi lại thôi
            // Bước 01; Kết nối tới CSDL:
        define('HOST','localhost');
        define('USER','root');
        const PASS  = '';
        const DB    = 'quanlyduocpham'; 
        $conn = mysqli_connect(HOST,USER, PASS,DB);
        if(!$conn){
            die('Không thể kết nối');
        }

            // Bước 02: Thực hiện TRUY VẤN
            $sql = "SELECT id, name, type, barcode, dose, code, cost_price, selling_price,
                    expiry, company_name, production_date, expiration_date, place, quantity FROM db_drugs
                    ";
            $res = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result
            // Bước 03: Phân tích và xử lý kết quả
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    echo '<tr>';
                    // echo '<th scope="row">' . $row['emp_id'] . '</th>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['type'] . '</td>';
                    echo '<td>' . $row['barcode'] . '</td>';
                    echo '<td>' . $row['dose'] . '</td>';
                    echo '<td>' . $row['code'] . '</td>';
                    echo '<td>' . $row['cost_price'] . '</td>';
                    echo '<td>' . $row['selling_price'] . '</td>';
                    echo '<td>' . $row['expiry'] . '</td>';
                    echo '<td>' . $row['company_name'] . '</td>';
                    echo '<td>' . $row['production_date'] . '</td>';
                    echo '<td>' . $row['expiration_date'] . '</td>';
                    echo '<td>' . $row['place'] . '</td>';
                    echo '<td>' . $row['quantity'] . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</main>

<?php
include 'footer.php';
?>