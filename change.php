<?php
include 'header.php';
include('config.php');
?>
  
<div class="container">
<div class="main">
<div class="wrapper">
        <h1>Sửa Đổi Thuốc</h1>
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
                        <input type="mathuoc" name="mathuoc" placeholder="Mã Thuốc cũ">
                    </td>
                </tr>

                <tr>
                    <td>Mã Thuốc mới:</td>
                    <td>
                        <input type="mathuoc" name="mathuocmoi" placeholder="Mã Thuốc Mới">
                    </td>
                </tr>

                <tr>
                    <td>Gía bán mới: </td>
                    <td>
                        <input type="giaban" name="giabanmoi" placeholder="Gía bán mới">
                    </td>
                </tr>
<br>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Drugs" class="btn-secondary">
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