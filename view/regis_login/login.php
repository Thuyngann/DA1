
<div class="page">
    <div class="container">
        <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                echo "Xin chào ".$user;
            }
            else {  
        ?>
        <h2>Đăng Nhập</h2>
        <form action="index.php?act=dangnhap" method="POST">
            <div class="form-group">
                <label for="">Tên Đăng Nhập:</label>
                <input type="text" name="user" required>
            </div>
            <div class="form-group">
                <label for="">Mật Khẩu:</label>
                <input type="password" name="pass" required>
            </div>
            <div class="form-group">
                <input class="int_sbm" name="dangnhap" type="submit" value="Đăng Nhập"></input>
            </div>
            <div class="form-group">
                <p>Chưa có tài khoản? <a href="index.php">Quay về trang chủ <a href="index.php?act=dangky">Đăng ký
                            ngay</a></p>
            </div>

        </form>
        <?php
    
       }
        if (isset($thongbao)) {
            echo $thongbao;
        }
        ?>
    </div>
</div>