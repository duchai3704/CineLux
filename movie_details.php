<?php
session_start();
include_once 'Database.php';
$id = $_GET['pass'];
$result = mysqli_query($conn,"SELECT * FROM add_movie WHERE id = '".$id."'");
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Trang chi tiết phim trực tuyến">
<meta name="keywords" content="phim, chi tiết phim, đặt vé, rạp chiếu phim">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $row['movie_name'];?> - Chi tiết phim</title>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/fonts-googleapis.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #aboutUs {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }

    #aboutUs::before {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        top: -100px;
        right: -100px;
    }

    #aboutUs::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        bottom: -50px;
        left: -50px;
    }

    .feature.design {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        z-index: 2;
        margin-bottom: 40px;
    }

    .feature.design:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
    }

    .feature.design .col-lg-5 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .resize-detail {
        border-radius: 15px;
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.3);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        object-fit: cover;
        height: 400px;
    }

    .resize-detail:hover {
        transform: scale(1.05);
        box-shadow: 0 20px 50px rgba(102, 126, 234, 0.5);
    }

    .col-lg-7 {
        position: relative;
        z-index: 1;
    }

    .table {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .table-dark {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .table thead th {
        font-weight: 700;
        border: none;
        padding: 20px;
        font-size: 1.1rem;
    }

    .table tbody td {
        padding: 15px 20px;
        border: none;
        border-bottom: 1px solid #e9ecef;
        font-size: 0.95rem;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .table tbody tr:hover {
        background: #f8f9ff;
        transition: background 0.3s ease;
    }

    .table tbody td:first-child {
        font-weight: 600;
        color: #667eea;
        width: 30%;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
        color: white;
    }

    .btn-outline-primary {
        color: #667eea;
        border: 2px solid #667eea;
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        background: white;
    }

    .btn-outline-primary:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-color: transparent;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
    }

    .tiem-link {
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        border-left: 4px solid #667eea;
        padding: 25px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .tiem-link:hover {
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.15);
        transform: translateX(5px);
    }

    .tiem-link h4 {
        color: #667eea;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .description {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
        transition: all 0.4s ease;
    }

    .description:hover {
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    .description h4 {
        color: #667eea;
        font-weight: 700;
        margin-bottom: 20px;
        font-size: 1.3rem;
        position: relative;
        padding-bottom: 15px;
    }

    .description h4::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 2px;
    }

    .description p {
        color: #555;
        line-height: 1.8;
        font-size: 1rem;
    }

    .modal-content {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    .modal-dialog.modal-lg {
        max-width: 800px;
    }

    @media (max-width: 768px) {
        .feature.design {
            padding: 30px 20px;
        }

        .feature.design .col-lg-5,
        .feature.design .col-lg-7 {
            margin-bottom: 30px;
        }

        .resize-detail {
            height: 300px;
        }

        .description {
            padding: 25px 20px;
        }

        .tiem-link {
            padding: 20px;
        }
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .feature.design {
        animation: fadeInUp 0.8s ease-out;
    }

    .description {
        animation: fadeInUp 1s ease-out 0.3s backwards;
    }
</style>
</head>
<body>
<?php include("header.php"); ?>

<section id="aboutUs">
  <div class="container">
<?php
$result = mysqli_query($conn,"SELECT * FROM add_movie WHERE id = '".$id."'");
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
?>
    <div class="row feature design">
        <div class="col-lg-5">
            <img src="admin/image/<?php echo $row['image']; ?>" class="resize-detail" alt="<?php echo $row['movie_name'];?>" width="100%">
        </div>
        <div class="col-lg-7">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Chi tiết phim</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Tên phim</td><td><?php echo $row['movie_name'];?></td></tr>
                    <tr><td>Ngày ra mắt</td><td><?php echo $row['release_date'];?></td></tr>
                    <tr><td>Đạo diễn</td><td><?php echo $row['directer'];?></td></tr>
                    <tr><td>Thể loại</td><td><?php echo $row['categroy'];?></td></tr>
                    <tr><td>Ngôn ngữ</td><td><?php echo $row['language'];?></td></tr>
                    <tr>
                        <td>Trailer</td>
                        <td>
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#trailer_modal<?php echo $row['id'];?>">Xem Trailer</a>
                            <div class="modal fade" id="trailer_modal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <embed style="width:100%; height:500px;" src="<?php echo $row['you_tube_link'];?>"></embed>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <?php if($row['action']== "running"){ ?>
            <div class="tiem-link mt-3">
                <h4>Đặt vé xem phim:</h4><br>
                <?php 
                $time = $row['show'];
                $movie = $row['movie_name'];
                $set_time = explode(",", $time);
                $res = mysqli_query($conn,"SELECT * FROM theater_show");
                if (mysqli_num_rows($res) > 0) {
                    while($show = mysqli_fetch_array($res)) {
                        if(in_array($show['show'],$set_time)){
                            echo '<a href="seatbooking.php?movie='.$movie.'&time='.$show['show'].'" class="btn btn-outline-primary me-2 mb-2">'.$show['show'].'</a>';
                        }
                    }
                }
                ?>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="description mt-4">
        <h4>Mô tả phim</h4>
        <p>
            <?php echo $row['decription'] ? $row['decription'] : 'Chưa có mô tả cho phim này.'; ?>
        </p>
    </div>
<?php
    }
}
?>
  </div>
</section>

<?php include("footer.php"); ?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>