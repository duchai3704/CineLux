<!-- Page Preloader -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="login_form.php">Đăng nhập</a>
        </div>
    </div>
    
    <div id="mobile-menu-wrap"></div>
    
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <!-- Có thể thêm thông tin liên hệ hoặc tin tức nhỏ ở đây -->
                </div>
                <?php
                include_once "Database.php";
                if (isset($_SESSION['uname'])) {
                    $uname = $_SESSION['uname'];
                    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$uname'");
                
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $avatar = ($row['image'] == '') ? 'image/img_avatar.png' : 'admin/image/' . $row['image'];
                        $user_id = $row['id'];
                        ?>
                        <div class="col-lg-6 col-md-5">
                            <div class="header__top__right">
                                <div class="header__top__links">
                                    <!-- Nhấn vào avatar sẽ chuyển sang user.php với id của user -->
                                    <a href="user.php?id=<?php echo $user_id; ?>">
                                        <img src="<?php echo $avatar; ?>" alt="Avatar" class="avatar">
                                    </a>
                                    <span>Xin chào <?php echo $_SESSION['uname']; ?></span>
                                    <a href="logout.php">Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="login_form.php">Đăng nhập</a>
                                <a href="register_form.php">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                <?php  
                }
                ?>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="./index.php"><img src="img/logo.png" alt="Logo"></a>
                </div> 
            </div>
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            ?>
            <div class="col-lg-9 col-md-9">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>"><a href="./index.php">Trang chủ</a></li>
                        <li class="<?php echo ($currentPage == 'allmovie.php') ? 'active' : ''; ?>"><a href="allmovie.php">Tất cả phim</a></li>
                        <li class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>"><a href="about.php">Về chúng tôi</a></li>
                        <li class="<?php echo ($currentPage == 'feedback.php') ? 'active' : ''; ?>"><a href="./feedback.php">Phản hồi</a></li>
                        <li class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>"><a href="./contact.php">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>

            <style>
            .header__menu ul { list-style: none; margin: 0; padding: 0; display: flex; gap: 18px; }
            .header__menu a { color: inherit; text-decoration: none; padding: 6px 2px; display: inline-block; transition: color .18s ease, transform .12s ease; }
            .header__menu li.active > a {
                border-bottom: 3px solid #ff6b6b;
                padding-bottom: 4px;
                color: #ff6b6b;
            }
            .header__menu a:active { transform: translateY(1px); }
            .header__menu a:hover { color: #ff6b6b; }
            @media(max-width: 767px) {
                .header__menu ul { flex-direction: column; gap: 10px; }
            }
            </style>
            
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
