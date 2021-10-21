<?php
    include 'header.php';
    include 'config.php';
?>


<h2 class="text-center" style="margin:50px">Sửa thông tin </h2>
<form action="process-add.php" method="post">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Tên thuốc:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Loại thuốc:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>
            <div class="form-group row">
                <label for="barcode" class="col-sm-2 col-form-label">Mã vạch:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode" style=" margin-bottom: 10px; width: 80%" >
                </div>
            </div>
            <div class="form-group row">
                <label for="dose" class="col-sm-2 col-form-label">Liều Lượng:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dose" name="dose" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>

            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">Mã:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="code" name="code" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>
            <div class="form-group row">
                <label for="cost_price" class="col-sm-2 col-form-label">Giá nhập:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cost_price" name="cost_price" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>
            <div class="form-group row">
                <label for="selling_price" class="col-sm-2 col-form-label">Giá bán:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="selling_price" name="selling_price" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>
            <div class="form-group row">
                <label for="expiry" class="col-sm-2 col-form-label">Trạng thái hạn sử dụng:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="expiry" name="expiry" style=" margin-top: 10px; margin-bottom: 10px; width: 80%">
                </div>
            </div>
            <div class="form-group row">
                <label for="company_name" class="col-sm-2 col-form-label">Công ty:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="company_name" name="company_name" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>

            <div class="form-group row">
                <label for="production_date" class="col-sm-2 col-form-label">Ngày sản xuất:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="production_date" name="production_date" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>

            <div class="form-group row">
                <label for="expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="expiration_date" name="expiration_date" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>

            <div class="form-group row">
                <label for="place" class="col-sm-2 col-form-label">Nơi sản xuất:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="company_name" name="company_name" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>

            <div class="form-group row">
                <label for="quantity" class="col-sm-2 col-form-label">Số lượng:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="quantity" name="quantity" style=" margin-bottom: 10px; width: 80%">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success" style="width:80px; margin-left:40%">Lưu lại</button>
                </div>
            </div>
        </form>