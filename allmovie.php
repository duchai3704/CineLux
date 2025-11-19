<?php 
session_start();
//index.php

include('database_connection.php');

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All movie page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="  text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0f3460 0%, #16213e 50%, #533483 100%);
            min-height: 100vh;
            font-family: 'Nunito Sans', sans-serif;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(118, 75, 162, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
            position: relative;
            z-index: 1;
            animation: slideInUp 0.7s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .col-md-3 {
            animation: slideInLeft 0.7s ease-out 0.2s backwards;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .list-group {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .list-group::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(102, 126, 234, 0.1) 50%, transparent 70%);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .list-group:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 70px rgba(102, 126, 234, 0.4);
        }

        .list-group h3 {
            font-size: 1.3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 18px;
            position: relative;
            padding-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 1;
        }

        .list-group h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
            box-shadow: 0 0 15px rgba(102, 126, 234, 0.5);
        }

        .list-group-item {
            background: #f8f9ff;
            border: 2px solid #e8eaf6;
            padding: 14px 16px;
            margin-bottom: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        .list-group-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.2), transparent);
            transition: left 0.5s ease;
            z-index: 0;
        }

        .list-group-item:hover::after {
            left: 100%;
        }

        .list-group-item:hover {
            background: linear-gradient(135deg, #f0f8ff 0%, #e8f4ff 100%);
            border-color: #667eea;
            transform: translateX(12px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.25);
        }

        .list-group-item label {
            margin: 0;
            font-weight: 600;
            color: #555;
            cursor: pointer;
            font-size: 0.98rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .list-group-item:hover label {
            color: #667eea;
            font-weight: 700;
        }

        .list-group-item input[type="checkbox"] {
            margin-right: 10px;
            cursor: pointer;
            accent-color: #667eea;
            width: 20px;
            height: 20px;
            transition: all 0.3s ease;
        }

        .list-group-item input[type="checkbox"]:hover {
            transform: scale(1.25) rotate(180deg);
        }

        .col-md-9 {
            animation: slideInRight 0.7s ease-out 0.2s backwards;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .filter_data {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        #loading {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            font-size: 1.2rem;
            color: white;
            font-weight: 700;
            grid-column: 1 / -1;
            flex-direction: column;
        }

        #loading::before {
            content: '';
            display: block;
            width: 50px;
            height: 50px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.5);
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @media (max-width: 1200px) {
            .filter_data {
                grid-template-columns: repeat(3, 1fr);
                gap: 18px;
            }
        }

        @media (max-width: 992px) {
            .filter_data {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }
        }

        @media (max-width: 768px) {
            .col-md-3 {
                margin-bottom: 40px;
            }

            .filter_data {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .list-group {
                padding: 20px;
            }

            .list-group h3 {
                font-size: 1.1rem;
            }

            .list-group-item {
                padding: 12px 14px;
            }
        }

        @media (max-width: 576px) {
            .filter_data {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .list-group {
                padding: 18px;
            }
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body>

    <?php 
    include("header.php");
    ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	
            <div class="col-md-3">                				
				
				<div class="list-group">
					<h3>categroy</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(categroy) FROM add_movie WHERE status = '1' ORDER BY categroy DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector categroy" value="<?php echo $row['categroy']; ?>" > <?php echo $row['categroy']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
				
				<div class="list-group">
					<h3> language</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(language) FROM add_movie WHERE status = '1' ORDER BY language DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector language" value="<?php echo $row['language']; ?>"  > <?php echo $row['language']; ?></label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
    <?php

    include("footer.php");
    ?>
<style>

</style>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
  
    <script src="js/main.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    
<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var directer = get_filter('directer');
        var categroy = get_filter('categroy');
        var language = get_filter('language');
        $.ajax({
            url:"allmovie_fetch.php",
            method:"POST",
            data:{action:action, directer:directer, categroy:categroy, language:language},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#show_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#show_show').html(ui.values[0] + ' - ' + ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>

</html>
