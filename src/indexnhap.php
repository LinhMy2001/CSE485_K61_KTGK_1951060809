<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="row">
  </div>
  <div class="row" style="background-color: #ecf0f1; border-top: 1px solid black">
    <div class="row">
      <div class="col-md-12 chu">
        <h1>Quan Lý Danh mục Thuốc</h1>
      </div>
      <br>
      <br>
      <br>
      <div class="col-md-12">
        <a href="add-drugs.php">
        <button type="button" class="btn btn-primary" style="float: left; margin-left: 100px;">Thêm Thuốc mới vào danh mục</button>
        </a>
      </div>
    </div>
    <div class="row thuhai">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã Thuốc</th>
            <th scope="col">Tên Thuốc</th>
            <th scope="col">Loại Thuốc</th>
            <!-- <th scope="col">Handle</th> -->
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Thuốc ho</td>
            <td>Thảo dược</td>
            <td>
              <a href="change.php">
                <button type="button" class="btn btn-success btn-sm">Sửa Thuốc</button>
              </a>
              <button type="button" class="btn btn-danger btn-sm">Xóa Thuốc</button>
              <a href="index.php">xem chi tiết</a>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Thuốc dị ứng</td>
            <td>Thảo dược</td>
            <td>
              <a href="change.php">
                <button type="button" class="btn btn-success btn-sm">Sửa Thuốc</button>
              </a>
              <button type="button" class="btn btn-danger btn-sm">Xóa Thuốc</button>
              <a href="index.php">xem chi tiết</a>
            </td>
          </tr>

    </div>
    </tbody>
    </table>

  </div>
  </div>
  <div class="row cuoicung">
    <div class="col-md-12">
      <p>Design by Linh</p>
    </div>


    <!-- <h1>Hello, world!</h1> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>