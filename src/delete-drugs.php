<?php
include 'header.php';
include('config.php');
?>
  
<div class="container">
<div class="main">
<div class="wrapper">
    <br>
        <h1>Xóa danh mục thuốc</h1>
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
                        <input type="mathuoc" name="mathuoc" placeholder="Mời nhập Mã Thuốc">
                    </td>
                </tr>
<br>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Xóa Thuốc" class="btn-secondary">
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