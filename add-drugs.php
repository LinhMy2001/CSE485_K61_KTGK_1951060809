<?php
include 'header.php';
include('config.php');
?>
  
<div class="container">
<div class="main">
<div class="wrapper">
        <h1>Thêm Thuốc Mới</h1>
        <br><br>

        <!-- <?php 
            if(isset($_GET['id']))
            {
                $id=$_GET['selling_price'];
            }
        ?> -->

        <form action="" method="POST">
        
            <table class="tbl-30">
                <tr>
                    <td>Mã Thuốc: </td>
                    <td>
                        <input type="mathuoc" name="mathuoc" placeholder="Mã Thuốc">
                    </td>
                </tr>
                <tr>
                    <td>Tên Thuốc</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập tên thuốc">
                    </td>
                </tr>
                <tr>
                    <td>Loại Thuốc</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập Loại thuôc">
                    </td>
                </tr>
                <tr>
                    <td>Mã vạch</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập Mã vạch">
                    </td>
                </tr>
                <tr>
                    <td>Liều lượng</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập Liều lượng">
                    </td>
                </tr>
                <tr>
                    <td>Mã</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập mã">
                    </td>
                </tr>
                <tr>
                    <td>Gía nhập</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập giá nhập">
                    </td>
                </tr>
                <tr>
                    <td>Gía bán</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập giá bán">
                    </td>
                </tr>
                <tr>
                    <td>Trạng thái</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập trạng thái">
                    </td>
                </tr>
                <tr>
                    <td>Công ty</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập công ty">
                    </td>
                </tr>
                <tr>
                    <td>Ngày Sản Xuất</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập ngày sản xuất">
                    </td>
                </tr>
                <tr>
                    <td>Ngày hết hạn</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập ngày hết hạn">
                    </td>
                </tr>
                <tr>
                    <td>Nơi sản xuất</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập Nơi sản xuất">
                    </td>
                </tr>
                <tr>
                    <td>Số Lượng</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mời nhập số lượng">
                    </td>
                </tr>
<br>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Thêm Thuốc vào hệ thống" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>



</div>
</div>

<?php
include 'footer.php';
?>