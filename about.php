<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <!-- Css Styles -->
    <meta charset="UTF-8">
    <meta name="description" content="Mẫu Website Đặt Vé Phim">
    <meta name="keywords" content="Đặt vé phim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Giới Thiệu</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            background: #0f0f1e;
        }

        /* Main Section */
        #aboutUs {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background Decorations */
        #aboutUs::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -200px;
            right: -200px;
            animation: float 6s ease-in-out infinite;
        }

        #aboutUs::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            bottom: -150px;
            left: -150px;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(30px); }
        }

        .heading {
            margin-bottom: 60px;
            position: relative;
            z-index: 2;
        }

        .heading h2 {
            font-size: 3.5rem;
            font-weight: 900;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            animation: slideInDown 0.8s ease-out;
        }

        .wel_line h3 {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 700;
            letter-spacing: 2px;
            animation: slideInUp 0.8s ease-out 0.2s backwards;
        }

        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Feature Row */
        .row.feature.design {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 25px;
            padding: 60px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
            animation: slideInUp 1s ease-out 0.4s backwards;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .row.feature.design:hover {
            transform: translateY(-15px);
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.4);
        }

        .area1.columns {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .area1 h5 {
            font-size: 1.4rem;
            font-weight: 800;
            color: #667eea;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .area1 p {
            font-size: 1rem;
            color: #555;
            line-height: 2;
            text-align: justify;
        }

        .area2.columns {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-media img {
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(102, 126, 234, 0.4);
            transition: all 0.4s ease;
            max-width: 100%;
            height: auto;
            filter: brightness(1.1);
        }

        .feature-media img:hover {
            transform: scale(1.08) rotateZ(-2deg);
            box-shadow: 0 25px 70px rgba(102, 126, 234, 0.6);
        }

        /* Capacity Section */
        .dvCapacity {
            background: linear-gradient(180deg, #0f0f1e 0%, #1a1a2e 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .dvCapacity::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            top: -200px;
            left: -200px;
        }

        .dvCapacity::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(118, 75, 162, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -200px;
            right: -200px;
        }

        .CapacityHead {
            font-size: 3rem;
            font-weight: 900;
            color: white;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            position: relative;
            z-index: 2;
        }

        .CapHorizon {
            width: 120px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
            margin: 30px auto;
            border-radius: 2px;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.5);
        }

        .PatronStruc {
            position: relative;
            z-index: 2;
        }

        .col-md-4 {
            margin-bottom: 40px;
            animation: fadeInScale 0.8s ease-out;
            animation-fill-mode: both;
        }

        .col-md-4:nth-child(1) { animation-delay: 0.2s; }
        .col-md-4:nth-child(2) { animation-delay: 0.4s; }
        .col-md-4:nth-child(3) { animation-delay: 0.6s; }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.8) translateY(30px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .dvPatron {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 280px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            margin-bottom: 0;
        }

        .dvPatron img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            filter: brightness(0.8) saturate(1.2);
        }

        .dvPatron::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.3) 0%, rgba(118, 75, 162, 0.3) 100%);
            transition: all 0.4s ease;
            opacity: 0;
        }

        .dvConetnt:hover .dvPatron img {
            transform: scale(1.15) rotateY(5deg);
            filter: brightness(1) saturate(1.4);
        }

        .dvPatConetnt {
            background: white;
            padding: 30px;
            border-radius: 0 0 20px 20px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .dvPatronDesc {
            text-align: center;
        }

        .dvPatronDescHead {
            font-size: 1.5rem;
            font-weight: 800;
            color: #667eea;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 15px;
        }

        .dvPatronDescHead::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .dvPatronDescText {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.8;
            text-align: center;
        }

        .col-md-4:nth-child(1) {
            perspective: 1000px;
        }

        .col-md-4:nth-child(1) .dvConetnt {
            cursor: pointer;
        }

        .col-md-4:hover .dvConetnt {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(102, 126, 234, 0.4);
        }

        /* Hover container effect */
        .col-md-4 {
            transition: all 0.4s ease;
        }

        .col-md-4:hover {
            transform: translateY(-10px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .heading h2 {
                font-size: 2.5rem;
            }

            .row.feature.design {
                padding: 40px 20px;
            }

            .area1, .area2 {
                margin-bottom: 30px;
            }

            .dvCapacity {
                padding: 60px 0;
            }

            .CapacityHead {
                font-size: 2rem;
            }

            .dvPatron {
                height: 200px;
            }
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
    
</head>
<body>
<?php
include("header.php");
?>

<section id="aboutUs">
  <div class="container">
    <div class="heading text-left"> 
      <!-- Heading -->
      <div>
      	<h2><u>Giới Thiệu Chúng Tôi</u></h2>
      </div>
      <div class="wel_line"><center><h3>CHÀO MỪNG ĐẾN INOX THEATER</h3></center></div>
    </div>
    <div class="row feature design">

      <div class="area1 columns left">
        
        <h5>INOX Theater là thương hiệu rạp chiếu phim được nhận diện rộng rãi nhất trong nước với các tiêu chuẩn cao về ‘Sang trọng’, ‘Dịch vụ’ & ‘Công nghệ’.</h5>
        <p>Hiện tại, hệ thống rạp chiếu có hơn 450 màn hình tại hơn 100 địa điểm, phủ rộng trên hơn 100 thành phố trên toàn quốc.  
        Điểm tiện lợi nhất khi sử dụng là sự đơn giản và dễ dàng để đặt vé trực tuyến. Xuất phát từ Chennai – nơi có truyền thống điện ảnh lâu đời, chúng tôi là một chuỗi rạp với niềm đam mê mang đến trải nghiệm và một niềm đam mê lớn hơn để chia sẻ với khách hàng.  
        Chúng tôi hiểu niềm vui khi xem những câu chuyện yêu thích sống động trên màn ảnh rộng, và tin rằng trách nhiệm của chúng tôi là nỗ lực hết sức để làm trải nghiệm này trở nên sống động nhất có thể!  
        Công ty đã góp phần đưa chỉnh sửa phi tuyến tính số hóa dựa trên máy tính vào Ấn Độ với Avid Technology, thay đổi ngành công nghiệp và cách thức biên tập phim và chương trình truyền hình Ấn Độ mãi mãi. Công ty sau đó mang âm thanh rạp chiếu số hóa đến Ấn Độ với DTS và giúp ngành điện ảnh Ấn Độ nhảy vọt một thế hệ từ âm thanh mono lên kỹ thuật số.  
        <br>
        Hệ thống phục vụ 24/7.  
        </p> 

      </div>
      <div class="area2 columns feature-media left">
        <img src="image/Online-Movie-Ticket-Booking-Banner-1-1280x720.jpg" alt="Banner đặt vé trực tuyến" width="100%">
      </div>
    </div>
  
  </div>
</section>

<div class="dvCapacity">

    <div class="CapacityHead">
        PHỤC VỤ HẠNH PHÚC
    </div>
    <div class="CapHorizon"></div>
    <div class="PatronStruc">
        <div class="row">

            <div class="col-md-4">
                <div class="dvPatron">
                    <img src="image/unnamed.jpg" class="resize" alt="Sang trọng" />
                </div>
                <div class="dvPatConetnt">
                    <div class="dvPatronDesc">
                        <div class="dvPatronDescHead">
                            Sang trọng
                        </div>
                        <div class="dvPatronDescText">
                           INOX Theater là chuỗi rạp chiếu hàng đầu tại Gujarat. Rạp chiếu cả phim Hindi và Anh, mang đến trải nghiệm điện ảnh cao cấp cho khách hàng.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dvPatron">
                    <img src="image/food_epicurious1-1-1d876222fa3d4f92.jpg" alt="Dịch vụ" />
                </div>
                <div class="dvPatConetnt">
                    <div class="dvPatronDesc">
                        <div class="dvPatronDescHead">
                            Dịch vụ
                        </div>
                        <div class="dvPatronDescText">
                            Bắp rang, nước lạnh, đồ ăn nhẹ và 'gia vị' trên màn hình. Chúng tôi cam kết mang đến trải nghiệm điện ảnh tuyệt vời với dịch vụ tận tâm.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dvPatron">
                    <img src="image/capacity-technology.jpg" class="resize" alt="Công nghệ" />
                </div>
                <div class="dvPatConetnt">
                    <div class="dvPatronDesc">
                        <div class="dvPatronDescHead">
                            Công nghệ
                        </div>
                        <div class="dvPatronDescText">
                            Dù là chiếu phim, âm thanh hay các định dạng rạp tiên tiến, đặt vé, check-in & đặt đồ ăn, chúng tôi sử dụng công nghệ tối ưu để nâng cao trải nghiệm của bạn.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?php
include("footer.php");
?>

<!-- Js Plugins -->
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
