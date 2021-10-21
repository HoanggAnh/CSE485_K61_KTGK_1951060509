<?php
     include 'header.php';
?>
<body>
    <main>
        <h1 style="margin-top: 50px; margin-left: 80px">Thông tin chi tiết</h1>
        <a href="add.php" class="btn" style="margin-top: 20px; margin-left:80px; margin-bottom: 20px"><i class="fas fa-user-plus"></i> Thêm tên thuốc</a>

        <table class="table table-striped" style="margin-top: 20px; margin-left:80px; max-width: 88%; background-color: lavender ">
            <thead>
                <tr>
                    <th scope="col">Mã thuốc</th>
                    <th scope="col">Tên thuốc</th>
                    <th scope="col">Loại thuốc</th>
                    <th scope="col">Mã vạch</th>
                    <th scope="col">Liều lượng</th>
                    <th scope="col">Mã</th>
                    <th scope="col">Giá nhập</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Trạng thái Hạn sử dụng</th>
                    <th scope="col">Công ty</th>
                    <th scope="col">Ngày sản xuất</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Nơi sản xuất</th>
                    <th scope="col">Số lượng</th>
                </tr>
            </thead>
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                // Quy trình 4 bước
                // Bước 01: Đã tạo sẵn, gọi lại thôi
                include 'config.php';
                // Bước 02: Thực hiện TRUY VẤN
                $sql = "SELECT * FROM drugs";
                $result = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result
                // Bước 03: Phân tích và xử lý kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
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
                        echo '<td><a href="edit.php?id=' . $row['id'] . '"><i class="fas fa-user-edit"></i></a></td>';
                        echo '<td><a href="process-delete.php?id=' . $row['id'] . '"><i class="fas fa-user-times"></i></a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

   