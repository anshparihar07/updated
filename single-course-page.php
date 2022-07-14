<?php

    $courseId = $_GET['course_id'];
    require_once './php/link.php';
    // include("./php/link.php");
    $url = $link.'/api/v1/single_course?course_id='.$courseId.'';

    $request_url = $url ;

    $curl = curl_init($request_url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl,CURLOPT_POST, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    
    "Content-Type: application/json"
    ]);

    $response = curl_exec($curl);
    curl_close($curl);

    // $obj = json_decode($response, true);

    $obj = json_decode($response, true);
    if($obj['status'] == "success"){
        // print_r( count($obj["data"]));
        // print_r( $obj["data"]["meta_desc"]);
        $meta_desc =  $obj["data"]["meta_desc"];
        $page_title =  $obj["data"]["page_title"];

        $checkout_page_title =  $obj["data"]["checkout_page_title"];
        $checkout_meta_desc =  $obj["data"]["checkout_meta_desc"];

        $name = $obj["data"]["course_name"];
        $desc = $obj["data"]["course_desc"];
        $duration = $obj["data"]["course_duration"];
        $enrolled = $obj["data"]["enrolled_students"];
        $ratings = $obj["data"]["mock_test"];
        $lect = $obj["data"]["course_lec"];
        $why_joins = $obj["data"]["why_joins"];
        $video = $obj["data"]["topics"];
        $faqs = $obj["faq"];
        $course_video_url = $obj["data"]["course_video_url"];
        $image = $obj["data"]["course_img"];
        $basePrice = $obj["data"]["course_base_price"];
        $salePrice = $obj["data"]["course_sale_price"];
        $what_u_get_heading = $obj['data']['what_u_get_with_course_heading'];
        $what_u_get_1 = $obj['data']['what_u_get_with_course_1'];
        $what_u_get_2 = $obj['data']['what_u_get_with_course_2'];
        $what_u_get_3 = $obj['data']['what_u_get_with_course_3'];
        $what_u_get_4 = $obj['data']['what_u_get_with_course_4'];

        $what_u_get_join_heading = $obj['data']['what_u_get_join_heading'];
        $exam_prep_heading = $obj['data']['exam_prep_heading'];

        $syllabus_section_heading = $obj['data']['syllabus_section_heading'];

    } else{
        header("Location: courses");
    }

                       
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-58CTTND');</script>
    <!-- End Google Tag Manager -->
        

        <!-- Enter a proper page title here -->
    <title><?=$page_title?></title>

    <!-- CSS to include bootstrap -->
    <link rel="preload stylesheet" href="css/bootstrap.min.css" as="style">
    <link rel="preload stylesheet" href="css/owl.carousel.css" as="style">
    <link rel="preload stylesheet" href="css/owl.theme.default.css" as="style">
    <link rel="preload stylesheet" href="css/aos.css" as="style">

    <!-- css to include style.css -->
    <link rel="preload stylesheet" href="css/style.css" as="style">
    <link rel="preload" href="./fonts/Poppins-Medium.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="./fonts/Poppins-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="<?=$meta_desc?>">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="<?=$page_title?>" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="https://lms.quadbtech.com/single-course-page" />

    <!-- Enter page description -->
    <meta property="og:description" content="<?=$meta_desc?>">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="https://partner.finstreet.in/meta-img.jpeg" />
    <meta property="og:image:secure_url" itemprop="image" content="https://partner.finstreet.in/meta-img.jpeg" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" />

    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="images/logo without text.png">

    <!-- for video streaming -->
    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />
    <link href="lib/videojs-resolution-switcher.css" rel="stylesheet">

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>

        body{
            position: relative;
        }

        /* fonts */
        .poppins-regular {
            font-family: Poppins Normal;
            src: url(./fonts/Poppins-Regular.ttf);
        }

        .poppins-medium {
            font-family: Poppins Medium;
            src: url(./fonts/Poppins-Medium.ttf);
        }

        .poppins-semibold {
            font-family: Poppins Normal;
            src: url(./fonts/Poppins-SemiBold.ttf);
            font-weight: 600;
        }

        a,
        a:hover {
            color: inherit;
            text-decoration: none;
        }

        /* course-details-container */
        .course-details-container {
            padding-top: 40px;
            padding-bottom: 40px;
            width: 100%;
            height: 950px;
            background: linear-gradient(to right,#FCA009, #FCB823);
        }

        .course-details {
            padding-top: 110px;
            text-align: center;
        }

        .course-title {
            font-size: 36px;
            color: #fff;
            /* font-weight: bold; */
        }

        .course-description {
            font-weight: normal!important;
            width: 689px;
            color: #fff;
            font-size: 22px;
            margin-top: 31px;
        }

        .course-stats {
            width: 760px;
            margin-top: 25px;
            margin-bottom: 20px;
            color: #fff;
        }

        .course-stats img {
            width: 24px;
            height: 24px;
        }

        /* course-video */
        .course-video {
            position: relative;
            width: 770px;
            min-height: 419px;
            margin-bottom: 65px;
            border-radius: 10px;
            box-shadow: 0 0 10px 5px (0 123 255 / 25%);
        }

        .thumbnail-d,
        .thumbnail-m {
            width: 100%;
            border-radius: 10px;
        }

        .pink-btn {
            color: white;
            padding: 13px 35px;
            background-color: #FCA009;
            font-family: Poppins Normal;
            src: url(./fonts/Poppins-Regular.ttf);
        }

        .course-video+.pink-btn {
            margin-top: 100px;
        }

        /* why-join-now-container */
        .why-join-now-container {
            padding: 80px 0;
            margin-top: 128px;
            margin-bottom: 60px;
            background: linear-gradient(to top right,#FCA009, #FCB823);
        }

        .why-join-now-title {
            color: #fff;
            text-align: center;
            font-size: 38px;
            margin-bottom: 60px;
        }

        .why-join-now-container .Enrol-box {
            margin: 20px 0 40px 0;
            text-align: center;
        }

        /* why-join-now-text */
        .why-join-now-text {
            width: 434px;
        }

        .why-join-now-text>h3 {
            color: #fff;
            font-size: 24px;
        }

        .why-join-now-text>h3 span {
            margin-right: 28px;
        }

        .why-join-now-text>p {
            color: #fff;
            padding-left: 60px;
            padding-right: 40px;
            margin: 20px 0px 52px 0px;
            font-size: 18px;
            text-align: justify;
            font-family: Poppins Normal;
            src: url(./fonts/Poppins-Regular.ttf);
        }

        /* why-join-now-right */
        .why-join-now-right {
            position: relative;
            width: 680px;
            height: 607px;
        }

        .pink-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -60%);
            content: '';
            width: 382px;
            height: 382px;
            border-radius: 50%;
            background-color: #FCA009;
        }

        /* photo-container */
        .some-text {
            position: absolute;
            top: 25px;
            left: 40px;
            width: 279px;
            padding: 23px;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        }

        .some-text>.image-style {
            width: 100%;
            height: 173px;
        }

        .some-text .text-with-img {
            margin-top: 15px;
            text-align: justify;
            font-family: Poppins Normal;
            src: url(./fonts/Poppins-Regular.ttf);
        }
        .photo-container>  img {
            width: 80%;
            position: absolute;
            top: 38%;
            left: 60%;
            transform: translate(-50%,-50%);
        }
        
        /* 
        .photo-container .image-style:nth-child(2) {
            top: 15px;
            right: 50px;
        }
        .photo-container .image-style:nth-child(3) {
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
        } */

        /* know-about */
        .know-about {
            position: relative;
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .know-about-img {
            position: absolute;
            top: 50%;
            right: 15px;
            box-shadow: 0 .5rem 3rem rgba(0,0,0,.2); 
            transform: translateY(-50%);
        }

        /* know-about-text */
        .know-about-text {
            width: 770px;
            height: 600px;
            padding-left: 60px;
            background-color: #2b333f;
        }

        .know-about-text .pink-btn {
            margin-top: 40px;
        }

        .know-about-text h2 {
            color: #fff;
            width: 65%;
            font-size: 38px;
            margin-bottom: 40px;
            font-family: Poppins Medium;
        }

        .know-about-text h3 {
            color: #fff;
            font-size: 20px;
            font-family: Poppins Medium;
        }

        .d-lg-block .know-about-text h3 {
            width: 65%;
        }

        .tick-icon {
            width: 30px;
            margin-right: 10px;
        }

        /* get-to-know-about */
        .get-to-know-about h1 {
            font-size: 38px;
        }

        .get-to-know-about>.pink-btn {
            margin-top: 45px;
        }

        .orange-btn {
            color: white;
            background-color: #F68C20;
        }

        /* demo-video-container */
        .demo-video-container {
            max-width: 725px;
            margin: 0 auto;
            margin-top: 40px;
        }

        /* demo-video */
        .demo-video {
            color: #fff;
            padding: 21px;
            margin-top: 31px;
            background: linear-gradient(45deg, #FCB823, #FCA009);
        }

        .demo-video>img {
            padding: 27px 24px;
            border-radius: 5px;
            background-color: #495057;
        }

        .demo-video-text {
            width: 75%;
            text-align: left;
        }

        .demo-video-text h4 {
            font-size: 22px;
            color:#fff;
            margin-bottom: 15px;
        }

        .demo-video-stats {
            width: 65%;
            font-size: 13px;
            display: flex;
            align-items: center;
        }

        .demo-video-stats img {
            max-width: 20px;
            max-height: 20px;
            margin: 0 8px 0 0;
            filter: brightness(0) invert(1);
        }

        /* meet-your-teacher */
        .meet-your-teachers {
            margin-top: 75px;
        }

        #meet-your-teachers #know,
        #teachers-d #know {
            display: none;
        }

        .meet-your-teacher button {
            height: auto;
        }

        #teachers-d .teachers-container {
            grid-template-columns: repeat(3, 1fr);
            grid-row-gap: 80px;
        }

        /* free-app */
        .free-app {
            width: 100%;
            position: relative;
            top: -85px;
            left: 50%;
            transform: translateX(-50%);
            padding: 30px 45px;
            border-radius: 5px;
            background-color: #FCB823;
            box-sizing: border-box;
        }

        .free-app h1 {
            color: white;
            margin-bottom: 0;
            font-size: 36px;
            max-width: 60%;
        }

        /* most-asked-questions */
        .most-asked-questions {
            margin-top: 50px;
        }

        .most-asked-questions h1 {
            font-size: 38px;
        }

        .most-asked-questions button {
            margin: 40px 0 55px 0;
        }

        /* accordion */
        #accordion {
            margin-top: 40px;
        }

        .panel-title a {
            color: #495057;
            font-size: 20px;
        }

        .panel-body {
            background-color: #EFEFF6;
            padding: 20px;
            font-size: 14px;
            text-align: justify;
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: #fff;
            border-color: #e4e5e7;
            padding: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .panel-default>.panel-heading a {
            display: block;
            padding: 18px;
        }

        .panel-default>.panel-heading a:after {
            font-size: 36px;
            content: "";
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: bolder;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: transform .25s linear;
            -webkit-transition: -webkit-transform .25s linear;
        }

        .panel-heading a[aria-expanded="true"] {
            background-color: #EFEFF6;
        }

        .panel-default>.panel-heading a[aria-expanded="true"]:after {
            content: "\2212";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .panel-default>.panel-heading a[aria-expanded="false"]:after {
            content: "\002b";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .sub-topic-name {
            color: #fff;
            width: 100%;
            padding: 10px 21px;
            border-radius: 0px;
            background-image: linear-gradient( 40deg, #303030 20%, #404040 51%, #606060 90% );
            border-bottom: 1px solid #fff;
        }

        .sub-topic-name:hover {
            color: black !important;
            /* background-color: rgb(0 0 0 / 10%); */
        }

        .video-demo.video-js {
            width: 725px;
            height: 409px;
            border-left: 0.5px solid black;
        }

        .demo-title {
            color: white;
            padding: 10px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(90deg, #FCB823, #FCA009);
        }

        .demo-title>h5 {
            margin-bottom: 0;
        }

        .close-demo {
            cursor: pointer;
        }

        .demo-popup {
            z-index: 11111;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .demo-popup>div {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
        }

        .down-arrow {
            transform: rotate(-180deg);
            transition-duration: 0.6s;
            -webkit-transform: rotate(-180deg);
            -webkit-transition-duration: 0.6s;
        }

        .up-arrow {
            transform: rotate(0deg);
            transition-duration: 0.6s;
            -webkit-transform: rotate(0deg);
            -webkit-transition-duration: 0.6s;
        }

        .collapse .chapter-name:last-child {
            border-bottom: none !important;
        }

        .navbar-bottom {
            z-index: 11111;
        }

        .nav-single-course button {
            color: white;
            text-decoration: none;
            border: 0;
            border-radius: 0;
        }

        #team section.mb-5{
            margin-bottom: 0!important;
        }

        .image-iframe {
            cursor: pointer;
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #19408905;
        }

        .course-video .play-btn {
            z-index: 1;
            position: absolute;
            top: 51.5%;
            left: 50.5%;
            width: 80px;
            height: 80px;
            transform: translate(-50%, -50%);
            background: url('icons/play-mini-fill.png') no-repeat white center;
            background-size: 50px;
            border-radius: 50%;
            box-shadow: 0 0 40px rgba(0, 0, 0, 1);
        }

        .onpage-loader-bg {
            background: linear-gradient(-45deg, rgba(0, 0, 0, 0.5), #ffffff, rgba(0, 0, 0, 0.5));
            background-size: 1000% 1000%;
            animation: gradient 1.5s linear infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 100% 50%;
            }

            50% {
                background-position: 50% 50%;
            }

            50.1% {
                background-position: 50% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @media (max-width: 991px) {

            .offers-and-deals{
                margin-top: 0!important;
            }

            .orange-btn {
                font-size: 15px;
            }

            .pink-btn {
                font-size: 14px;
                padding: 8px 15px;
            }

            .course-video {
                width: 100%;
            }

            .course-details-container {
                height: 795px;
            }

            .course-details {
                padding-top: 120px;
            }

            .course-title {
                font-size: 28px;
            }

            .course-description {
                font-weight: normal!important;
                width: 515px;
                color: #fff;
                margin-top: 10px;
                font-size: 18px;
                font-weight: 500;
            }

            .course-stats {
                width: 100%;
                margin-top: 25px;
                font-size: 14px;
            }

            .why-join-now-container {
                margin-top: 100px;
                margin-bottom: 40px;
            }

            .why-join-now-right {
                width: 100%;
                margin-top: 80px;
            }

            .why-join-now-text {
                width: 85%;
                margin: 0 auto;
            }

            .why-join-now-title {
                font-size: 28px;
                margin-bottom: 60px;
            }

            .why-join-now-text>h3 {
                font-size: 20px;
            }

            .why-join-now-text:nth-child(1) h3 span {
                margin-right: 34px;
            }

            .why-join-now-container .Enrol-box {
                width: 100%;
                margin: 0;
            }

            .know-about {
                height: 955px;
                position: unset;
                margin-top: 40px;
                margin-bottom: 0px;
                padding-bottom: 60px;
                background-color: #2b333f; 
            }

            .know-about-img {
                width: 100%;
                position: unset;
                top: unset;
                right: unset;
                transform: unset;
            }

            .know-about-img img {
                width: 100%;
            }

            .know-about-text {
                width: 100%;
                height: max-content;
                margin-top: 30px;
                background-color: transparent; 
            }

            .know-about-text .pink-btn {
                margin-top: 15px;
            }

            .know-about-text h2 {
                width: 100%;
                font-size: 28px;
                margin-bottom: 25px;
            }

            .know-about-text h3 {
                font-size: 18px;
            }

            .tick-icon {
                width: 23px;
                margin-right: 8px;
            }

            .why-join-now-text>p {
                font-size: 16px;
                padding-left: 55px;
                padding-right: 0px;
                margin: 15px 0px 30px 0px;
            }

            .get-to-know-about h1 {
                font-size: 28px;
                margin-top: 60px;
            }

            .demo-video-text h4 {
                font-size: 19px;
            }

            .demo-video-stats {
                font-size: 12px;
            }

            .demo-video-stats img {
                max-width: 14px;
                max-height: 14px;
                margin: 0 2px 0 8px;
            }

            .free-app {
                width: 100%;
                padding: 30px;
                top: 25px;
                flex-direction: column;
            }

            .free-app h1 {
                font-size: 28px;
                margin-bottom: 20px;
            }

            .most-asked-questions h1 {
                font-size: 28px;
            }

            .most-asked-questions button {
                margin-bottom: 0!important;
            }
        
            .panel-title a {
                font-size: 16px;
            }

            .panel-default>.panel-heading a:after {
                font-size: 30px;
            }

            #meet-your-teachers .container>div.mt-5.d-flex.justify-content-center {
                display: none !important;
            }

            #meet-your-teachers .container>.mt-3.text-center .mt-5:last-child .card-mob {
                margin-bottom: 50px;
            }
        }

        @media (max-width: 767px) {

            .course-video .play-btn{
                width: 50px;
                height: 50px;
                background-size: 32px;
            }

            .photo-container>  img{
                left: 50%;
            }

            .course-details-container {
                height: 715px;
            }

            .course-video+.pink-btn {
                margin-top: 40px;
            }

            .course-title {
                font-size: 24px;
            }

            .course-description {
                font-weight: normal!important;
                width: 90%;
                font-size: 16px;
            }

            .course-stats {
                width: 100%;
                margin-top: 20px;
                font-size: 12px;
            }

            .course-stats img {
                width: 18px;
                height: 18px;
            }

            .why-join-now-right {
                height: 480px;
            }

            .pink-circle {
                width: 330px;
                height: 330px;
            }

            .some-text {
                top: -25px;
                left: 35px;
                width: 245px;
                padding: 18px;
            }

            .some-text>.image-style {
                width: 100%;
                height: auto;
            }

            .photo-container>.image-style {
                width: 245px;
                height: auto;
                padding: 18px;
            }

            .photo-container .image-style:nth-child(2) {
                top: -20px;
                right: 45px;
            }

            .photo-container .image-style:nth-child(3) {
                bottom: 40px;
            }

            .know-about {
                height: 930px;
                padding-bottom: 40px;
            }

            .know-about-text .pink-btn {
                margin-top: 20px;
            }

            .free-app {
                width: 100%;
                flex-direction: column;
            }

            .free-app h1 {
                margin-bottom: 15px;
            }

            .most-asked-questions {
                padding: 0;
            }

            .panel-title a {
                font-size: 13px;
                display: flex !important;
                align-items: center;
                justify-content: space-between;
            }

            .panel-default>.panel-heading a {
                padding: 8px 20px;
            }

            .container {
                max-width: none;
                width: 100%;
            }

            #mobile-team .section2 .container {
                margin-top: 20px;
                margin-bottom: 40px;
            }

            #mobile-team .section2 .container .mt-5 {
                margin-top: 1.5rem !important;
            }

            .panel-default>.panel-heading a:after {
                font-size: 22px;
            }

            .demo-video {
                padding: 25px;
                margin-top: 15px;
                display: grid !important;
                grid-template-columns: repeat(4, 1fr);
                grid-row-gap: 10px;
            }

            .demo-video-text h4 {
                font-size: 14px;
                text-align: left;
            }

            .demo-video-text {
                grid-column: 2/5;
            }

            .demo-video-stats {
                width: 100%;
            }

            .demo-video-stats img {
                margin-left: 0;
            }

            .orange-btn {
                grid-column: 1/5;
            }

        }

        @media (max-width: 475px) {

            .checkout {
                width: 100%;
            }

            .btn-margin {
                margin: 0 auto !important;
                margin-top: 20px;
            }

            .sub-topic-name,
            .chapter-name {
                font-size: 14px;
                padding: 10px !important;

            }

            .demo-title {
                padding: 10px;
            }

            .demo-title>h5 {
                font-size: 16px;
                max-width: 285px;
            }

            .pink-btn,
            .orange-btn {
                width: 100%;
            }

            .course-details-container {
                height: 580px;
            }

            .course-details {
                padding-left: 0;
                padding-right: 0;
                padding-top: 100px;
            }

            .course-title {
                font-size: 18px;
            }

            .course-video {
                min-height: fit-content;
                margin-bottom: 0px;
            }

            .course-video+.pink-btn {
                margin-top: 40px;
            }

            .course-description {
                font-weight: normal!important;
                width: 100%;
                font-size: 14px;
            }

            .course-stats {
                margin-top: 15px;
                display: grid;
                justify-content: start;
                grid-template-columns: repeat(2, 1fr);
            }

            .course-stats div {
                width: 100%;
                margin-bottom: 5px;
            }

            .why-join-now-right {
                height: 300px;
                margin-top: 40px;
            }

            .why-join-now-text {
                width: 90%;
            }

            .why-join-now-text>h3 {
                font-size: 16px;
            }

            .why-join-now-text:nth-child(1) h3 span {
                margin-right: 20px;
            }

            .why-join-now-text>h3 span {
                margin-right: 13px;
            }

            .why-join-now-text>p {
                padding-left: 36px;
                margin: 10px 0px 30px 0px;
            }

            .why-join-now-title {
                font-size: 20px;
                margin-bottom: 30px;
            }

            .why-join-now-container {
                margin-top: 50px;
            }

            .pink-circle {
                width: 250px;
                height: 250px;
            }

            .some-text {
                left: 0px;
                width: 180px;
                padding: 10px;
                font-size: 14px;
                line-height: 18px;
            }

            .some-text>.image-style {
                width: 100%;
                height: auto;
            }

            .photo-container>.image-style {
                width: 180px;
                height: auto;
                padding: 10px;
            }

            .photo-container .image-style:nth-child(2) {
                right: 0px;
            }

            #mobile-team #mobile-team .section2 .container {
                margin-bottom: 40px;
            }

            h2 {
                font-size: 21px;
            }

            .know-about-text h2 {
                font-size: 21px;
            }

            .know-about-text h3 {
                font-size: 16px;
            }

            .know-about {
                height: fit-content;
                padding-top: 40px;
                margin-top: 0;
            }

            .know-about-text {
                /* text-align: center; */
                padding-left: 0;
            }

            .know-about-text .pink-btn {
                margin: 0 auto;
                margin-top: 20px;
            }

            .get-to-know-about h1 {
                font-size: 21px;
                margin-top: 50px;
                margin-bottom: 0;
            }

            .demo-video {
                padding: 20 px;
                margin-top: 15px;
                display: grid !important;
                grid-template-columns: 1fr;
            }

            .demo-video-text h4 {
                font-size: 16px;
                text-align: left;
            }

            .demo-video>img {
                grid-row: 1;
                grid-column: 1/4;
                margin: 0 auto;
            }

            .demo-video-text {
                width: 100%;
                grid-column: 1/4;
            }

            .demo-video-stats img {
                max-width: 14px;
                max-height: 14px;
                margin: 0;
            }

            .orange-btn {
                margin-top: 8px;
                margin-bottom: 15px;
                grid-column: 1/4;
            }

            #meet-your-teachers h1 {
                font-size: 21px;
                text-align: center;
                margin-top: 60px;
                margin-bottom: 75px;
            }

            .teachers-card .bottom h3 {
                font-size: 18px;
            }

            .teachers-card .bottom p {
                text-align: justify;
                font-size: 15px;
            }

            #meet-your-teachers .teachers-card {
                width: 100%;
                margin-bottom: 15px;
            }

            .most-asked-questions {
                margin-top: -20px;
            }

            .panel-body {
                font-size: 12px;
            }

            .free-app h1 {
                font-size: 21px;
                margin-top: 5px;
                max-width: 95%;
            }

            .free-app {
                width: 100%;
                padding: 25px 20px;
                border-radius: 0px;
            }

            .most-asked-questions h1 {
                font-size: 21px;
                padding: 0 20px;
            }

            #mobile-team h2 {
                font-size: 21px;
            }

            .demo-container {
                width: 90%;
            }

            .video-box {
                width: 98%;
            }

            .video-demo.video-js {
                width: 341px;
                height: 195px;
            }

            .sub-topics-container {
                min-width: 100%;
            }
        }

        @media (max-width: 411px) {
            .some-text {
                top: -15px;
                left: 25px;
                width: 145px;
                padding: 5px;
                font-size: 12px;
                line-height: 15px;
            }

            .photo-container>.image-style {
                width: 145px;
                padding: 5px;
            }

            .photo-container .image-style:nth-child(2) {
                top: -15px;
                right: 25px;
            }

            .pink-circle {
                width: 200px;
                height: 200px;
            }

            .why-join-now-container {
                padding: 40px 0;
            }

            .why-join-now-right {
                height: 248px;
                margin-top: 20px;
            }

            .why-join-now-text>p {
                font-size: 14px;
            }

            .some-text .text-with-img {
                text-align: left;
            }
            .why-join-now-title {
                padding: 0 10px;
            }

        }

        @media (max-width:361px) {
            .why-join-now-right {
                margin-top: 40px;
            }

            .teachers-card {
                margin-bottom: 0px;
            }

            .video-demo.video-js {
                height: 190px;
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58CTTND"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- loader-container -->
    <div class="loader-container">
    <div class="spinner-border text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
    </div>

    <div class="d-none d-lg-block">

        <!-- header -->
        <div class="header fixed-top"></div>


        <!---------- course-details-container ---------->
        <div class="container-fluid course-details-container" data-aos="fade-in">
            <div class="container d-flex flex-column align-items-center justify-content-center course-details">
                <!-- course-title -->
                <h1 id="course-title-d" class="course-title poppins-medium">

                </h1>
                <!-- course-description -->
                <h3 id="course-description-d" class="course-description poppins-semibold">

                </h3>
                <!-- course-stats -->
                <div class="course-stats d-flex justify-content-between">
                    <div class="poppins-regular">
                        <img src="icons/Layer 2.svg" alt="image">
                        <span id="course-duration-d"> </span>
                    </div>
                    <!-- <div class="poppins-regular">
                        <img src="icons/Star@2x.png" alt="image">
                        <span id="course-ratings-d"> </span>
                    </div> -->
                    <div class="poppins-regular">
                        <img src="icons/eye.png" alt="image">
                        <span id="course-views-d"> </span>
                    </div>
                    <!-- <div class="poppins-regular">
                        <img src="icons/play.png" alt="image">
                        <span id="course-lesson-d"> </span>
                    </div> -->
                </div>

                <!-- course-video -->
                <div class="course-video">
                    <img class="thumbnail-d" src="" alt="image">
                    <div class="play-btn"></div><div class="image-iframe"></div>
                </div>

                <!-- Enrol button -->
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>


        <!---------- get-to-know-about/demo video ---------->
        <div class="container mt-5 pt-4">
            <div class="get-to-know-about text-center">
                <h1 class="poppins-medium text-center pt-5" data-aos="slide-up"><?=$syllabus_section_heading?></h1>

                <!-- demo-video-container -->
                <div id="demo-video-d" class="demo-video-container mb-5">

                </div>

                <!-- Enrol button -->
                <a class="checkout" data-aos="slide-up" data-aos-delay="400">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>



        <!---------- know-about ---------->
        <div class="container know-about">
            <div class="know-about-text d-flex align-items-start justify-content-center flex-column">
                <!-- h2 -->
                <h2 class="what_u_get_heading" data-aos="slide-up">
                    <?= $what_u_get_heading ?>
                </h2>
                <!-- h3 -->
                <h3 data-aos="slide-up"><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_1?> </h3>
                <h3 data-aos="slide-up" data-aos-delay="500"><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_2?></h3>
                <h3 data-aos="slide-up" data-aos-delay="600"><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_3?></h3>
                <h3 data-aos="slide-up" data-aos-delay="700"><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_4?></h3>

                <!-- Enrol button -->
                <a class="checkout" data-aos="slide-up" data-aos-delay="1200">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span class="sale-price">6999</span>
                    </button>
                </a>
            </div>

            <div class="know-about-img">
                <img loading="lazy" src="icons/courses.png" alt="image 48" data-aos="fade-in">
            </div>
        </div>


        <!---------- meet-your-teacher ---------->
        <!-- <div class="meet-your-teachers">
            <div id="teachers-d">
            </div>
            <a class="checkout">
                <button class="btn pink-btn poppins-regular">
                    Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span class="sale-price">6999</span>
                </button>
            </a>
        </div> -->


        <!---------- what-students-say ---------->
        <div class="students-tweets"></div>


        <!---------- free-app ---------->
        <div class="container" data-aos="slide-up">
            <div class="free-app shadow-lg d-flex align-items-center justify-content-between">
                <h1 class="poppins-medium"><?=$exam_prep_heading?></h1>
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>

        <!---------- our team ---------->
        <div id="team" class="team d-flex justify-content-center"></div>

        
        <!-- offers and deals -->
        <div class="offers-deals"></div>


        <!---------- most-asked-questions ---------->
        <div class="container most-asked-questions">
            <!-- <h1 class="poppins-medium text-center" data-aos="slide-up">Our most frequently asked questions</h1> -->

            <!-- accordion -->
            <div id="faqs-d">
                <!-- faqs  -->
            </div>

            <!-- Enrol button -->
            <div class="text-center" data-aos="slide-up" data-aos-delay="800">
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>

        <!-- footer -->
        <div class="footer"></div>

    </div>

    <!-- mobile view -->
    <div class="d-lg-none position-relative">

        <!-- header -->
        <div class="header-mobile"></div>
        <div class="navbar-bottom fixed-bottom">
            <div class="nav-single-course-box d-none">
                <div class="nav-single-course d-flex align-items-center poppins-regular">
                    <button class="whatsapp btn d-flex align-items-center text-left"
                        onclick="window.location.href='https\:\/\/wa.me/917717303384/?text=Hello%2C%20I%20have%20a%20query%20regarding%20the%20course'">
                        <p>Have any Doubts? Feel Free to Contact us</p>
                        <img class="ml-2" src="./icons/white-whatsapp.png" alt="whatsapp">
                    </button>
                    <button class="btn checkout-btn add-to-cart d-flex align-items-center text-right">
                        <img class="mr-2" src="./icons/white-shopping-cart.png" alt="shopping-cart">
                        <p>Click Here to Enrol Now for Just Rs. <span class="sale-price">00.00</span></p>
                    </button>
                </div>
            </div>
            <div class="bottom-nav"></div>
        </div>


        <!---------- course-details-container ---------->
        <div class="container-fluid course-details-container">
            <div class="container d-flex flex-column align-items-center justify-content-center course-details p-0">
                <!-- course-title -->
                <h1 id="course-title-m" class="course-title poppins-medium mt-2 mb-4">

                </h1>

                <!-- course-video -->
                <div class="course-video">
                    <img class="thumbnail-m" src="" alt="image">
                    <div class="play-btn"></div><div class="image-iframe"></div>
                </div>
                <!-- course-description -->
                <h3 id="course-description-m" class="course-description poppins-semibold mt-4">

                </h3>
                <!-- course-stats -->
                <div class="course-stats">
                    <div class="poppins-regular">
                        <img src="icons/Layer 2.svg" alt="image">
                        <span id="course-duration-m"> </span>
                    </div>
                    <!-- <div class="poppins-regular">
                        <img src="icons/Star@2x.png" alt="image">
                        <span id="course-ratings-m"> </span>
                    </div> -->
                    <div class="poppins-regular">
                        <img src="icons/eye.png" alt="image">
                        <span id="course-views-m"> </span>
                    </div>
                    <!-- <div class="poppins-regular">
                        <img src="icons/play.png" alt="image">
                        <span id="course-lesson-m"> </span>
                    </div> -->
                </div>
                <!-- Enrol button -->
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>


        <!---------- get-to-know-about ---------->
        <div class="container">
            <div class="get-to-know-about text-center">
                <h1 class="poppins-medium text-center" data-aos="fade-up"><?=$syllabus_section_heading?></h1>

                <!-- demo-video-container -->
                <div id="demo-video-m" class="demo-video-container mb-5">

                </div>

                <!-- Enrol button -->
                <a class="checkout" data-aos="fade-up">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>


        <!---------- why-join-now-container ---------->


        <!---------- know-about ---------->
        <div class="container know-about d-flex flex-column-reverse" data-aos="fade-up">
            <div class="know-about-text d-flex align-items-start justify-content-center flex-column">
                <!-- h2 -->
                <h2 class="what_u_get_heading text-center">
                <?= $what_u_get_heading ?>
                </h2>
                <!-- h3 -->
                <h3><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_1?> </h3>
                <h3><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_2?></h3>
                <h3><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_3?></h3>
                <h3><img loading="lazy" class="tick-icon" src="icons/tick.png" alt="tick"> <?=$what_u_get_4?></h3>

                <!-- Enrol button -->
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span class="sale-price">6999</span>
                    </button>
                </a>
            </div>

            <div class="know-about-img">
                <img loading="lazy" src="icons/courses.png" alt="image 48">
            </div>
        </div>


        <!---------- meet-your-teacher ---------->
        <div id="meet-your-teachers"></div>
        <!-- Enrol button -->
        <!-- <div class="text-center my-5" style="padding: 0 15px;">
            Enrol button
            <a class="checkout">
                <button class="btn pink-btn poppins-regular">
                    Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span class="sale-price">6999</span>
                </button>
            </a>
        </div> -->


        <!---------- what-students-say ---------->
        <div class="mobile-students-tweets"></div>


        <!---------- free-app ---------->
        <div class="container" data-aos="fade-up">
            <div class="free-app d-flex align-items-center justify-content-between">
                <h1 class="poppins-medium text-center"><?=$exam_prep_heading?></h1>
                <!-- Enrol button -->
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>

        <!---------- our team ---------->
        <div id="mobile-team" class="team d-flex justify-content-center"></div>

        <!-- offers and deals -->
        <div class="mobile-offers-deals"></div>

        <!---------- most-asked-questions ---------->
        <div class="container most-asked-questions mb-5">
            <h1 class="poppins-medium text-center" data-aos="fade-up">Our most frequently asked questions</h1>

            <!-- accordion -->
            <div id="faqs-m" data-aos="fade-up">

            </div>

            <!-- Enrol button -->
            <div class="text-center" style="padding: 0 15px;">
                <a class="checkout">
                    <button class="btn pink-btn poppins-regular">
                        Enrol Now For Just Rs. <del class="base-price">299</del> Rs. <span
                            class="sale-price">6999</span>
                    </button>
                </a>
            </div>
        </div>


        <!-- mobile-footer -->
        <div class="mobile-footer"></div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js" crossorigin="anonymous"></script>
    <script src="js/main.js" crossorigin="anonymous"></script>
    <script src="js/aos.js" crossorigin="anonymous"></script>
    <script src="https://vjs.zencdn.net/7.7.5/video.js"></script>
    <script src="lib/videojs-resolution-switcher.js"></script>
    <!-- <script>
    videojs.options.flash.swf = "../node_modules/video.js/dist/video-js.swf"
    </script> -->

    <script>

        $(".header").load('template/header.html');
        $(".bottom-nav").load('template/test-nav-bottom.html');

        // Get viewport details
        let viewPort = $(window).width();
        var val = viewPort > 992 ? "d" : "m";
        let iframeHeight = viewPort > 992 ? 425 : viewPort > 380 ? 217 : 190;

        function iframe(embed) {
            const iframeHTML = `<div style="height: ${iframeHeight}px;" class="onpage-loader-bg loader-${embed}"></div><iframe class="iframe-${embed} d-none" width="100%" height="${iframeHeight}" src="https://www.youtube.com/embed/${embed}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;

            $(`.${embed}`).html(iframeHTML);

            $(`.iframe-${embed}`).on('load', () => {
                $(`.loader-${embed}`).hide();
                $(`.iframe-${embed}`).removeClass('d-none');
            });
        }

        $(document).ready(function () {
            AOS.init({
                // once: true,
                duration: 1500,
            });

            //get parameters from url
            var getParams = function (url) {
                var params = {};
                var parser = document.createElement('a');
                parser.href = url;
                var query = parser.search.substring(1);
                var vars = query.split('&');
                for (var i = 0; i < vars.length; i++) {
                    var pair = vars[i].split('=');
                    params[pair[0]] = decodeURIComponent(pair[1]);
                }
                return params;
            };

            // Get parameters from the current URL
            var params = getParams(window.location.href);
            // console.log(params);
            var ref_id = params.ref;
            var course_id = params.course_id;

            function getChapter(module_id) {
                console.log('module_id', module_id);
                $.ajax({
                    type: "POST",
                    url: "php/sub-topic.php",
                    dataType: "json",
                    data: {
                        id: module_id,
                    },
                    success: function (obj) {
                        if (obj.status == "success") {
                            let chapters = obj.data['chapters'];
                            // console.log(chapters);
                            chapters.forEach(chapter => {
                                // console.log(chapter.chapter_name);
                                // console.log(chapter.duration);
                                $(`#sub-topic-${module_id}`).html($(`#sub-topic-${module_id}`).html() + `<div class="chapter-name poppins-regular d-flex align-items-center justify-content-between border-bottom" style="padding: 10px 21px;"><p class="mb-0 text-left mr-4">${chapter.chapter_name}</p><p class="mb-0">${chapter.duration ? chapter.duration : ''}</p></div>`);

                                // close loader
                                $(`.onpage-loader-${module_id}`).addClass("d-none");
                            });
                        } 
                        else if (obj.status == "failure") {
                            alert("Something went wrong, please try later.");
                        }
                    },
                    error: function () {
                        // alert("Sorry, there is problem at our end! we are try to fix it!");
                    }
                });
            }


                        var name = "<?=$name?>";
                        var desc = "<?=$desc?>";
                        var duration = "<?=$duration?>";
                        var enrolled = "<?=$enrolled?>";
                        var ratings = "<?=$ratings?>";
                        var lect = "<?=$lect?>";
                        var course_video_url = "<?=$course_video_url?>";
                        var why_joins = <?=json_encode($why_joins)?>;
                        var video = <?=json_encode($video)?>;
                        var faqs = <?=json_encode($faqs)?>;
                        var image = "<?=$image?>";
                        // var image = check_image.endsWith('.png') ? check_image : 'icons/Image 76.png';
                        var basePrice = "<?=$basePrice?>";
                        var salePrice = "<?=$salePrice?>";
                        // console.log(salePrice);

                        $('.base-price').html(basePrice);
                        $('.sale-price').html(salePrice);

                        $('#course-title-' + val).html(name);
                        $('#course-description-' + val).html(desc);
                        $('#course-duration-' + val).html(duration);
                        $('#course-ratings-' + val).html(ratings);
                        $('.thumbnail-' + val).attr('src', image);
                        $('.course-video').addClass(course_video_url);
                        $('.image-iframe').attr('onclick', "iframe('"+course_video_url+"')");
                        $('#course-views-' + val).html(enrolled + ' Enroled Aspirants so far');
                        $('#course-lesson-' + val).html(lect);

                        $('.checkout').attr('href', "checkout?course_id=" + course_id + "");
                        $('.checkout-btn').on('click', ()=>{
                            window.location.href="checkout?course_id=" + course_id + "";
                        });

                        // why join
                        var join = '<div>';
                        var i = 1;
                        for (const why of why_joins) {
                            join += `<div class="why-join-now-text"><h3 class="poppins-semibold d-flex align-items-top" ><span>0${i}.</span><div>${why.question}</div></h3><p>${why.answer}</p></div>`;
                            i = i + 1;
                        }
                        join += '</div>';
                        $(`#why_joins-${val}`).html(join);

                        // demo video - topics
                        var demo = "";
                        // demo_video sub topics
                        var demo_video = $('.demo-container').html();
                        var moduleArray = [];
                        var sub_topicArr = [];
                        for (const topics of video) {
                            // console.log(i, topics);
                            var topicName = topics.topic_name;
                            var topic_id = topics.topic_id;
                            var total_videos = topics.total_videos; 
                            var sub_topicsArr = topics.sub_topics;
                            demo += `<div class="demo-video demo-video-${topic_id} d-flex align-items-center justify-content-between">
                                    <div class="demo-video-text">
                                        <h4 class="poppins-medium">${topicName}</h4>
                                        <div class="demo-video-stats d-flex justify-content-between">
                                            <div class="poppins-regular">
                                                <img loading="lazy" src="icons/orange-clock.svg" alt="image">
                                                <span>Duration:&nbsp; ${topics.duration}</span>
                                            </div>
                                            <div class="poppins-regular">
                                                <img loading="lazy" src="icons/play-line.png" alt="image">
                                                <span>${total_videos} Videos</span>
                                            </div>
                                            <!--<div class="poppins-regular">
                                                <img loading="lazy" src="icons/calendar-event.png" alt="image">
                                                <span>10 Notes</span>
                                            </div>
                                            <div class="poppins-regular">
                                                <img loading="lazy" src="icons/mock-test.svg" alt="image">
                                                <span>10 Mock Test</span>
                                            </div>-->
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="collapse show" id="collapse-${topic_id}">`;

                            sub_topicsArr.forEach(sub_topic => {
                                var module_id = sub_topic.module_id;
                                moduleArray.push(module_id);
                                demo += `<div class="accordion shadow-sm border-0" id="accordion-${module_id}">
                                <div class="border-0">
                                    <button id="sub-topic-name-${module_id}" class="btn d-flex justify-content-between text-left sub-topic-name poppins-medium" type="button" data-toggle="collapse" data-target="#sub-topic-${module_id}" aria-expanded="false"
                                    aria-controls="sub-topic-${module_id}">
                                        <p class="d-inline mb-0">${sub_topic.module_name}</p>
                                        <img style="margin-right: 8px;" class="down-arrow-${module_id} float-right" src="icons/arrow-down-s-line.png" alt="down button">
                                    </button>
                                    <div id="sub-topic-${module_id}" class="collapse" aria-labelledby="sub-topic-name-${module_id}" data-parent="#accordion-${module_id}" ><!-- onpage-loader -->
                                        <div class="onpage-loader onpage-loader-${module_id}"style="min-height: 44px;">
                                            <div class="loader" style="width: 30px;height: 30px; border-bottom-color: transparent;"></div>
                                        </div>
                                        </div></div></div>`;
                            });


                            demo += `</div>
                                <div id="popup-${topic_id}" class="d-none demo-popup">
                                    <div>
                                        <div class="shadow-lg">
                                            <div class="demo-title"><h5 class="poppins-medium">${topicName}</h5><img class="close-demo" src="icons/close-circle-line.png" alt="close button"></div><video id="video-${topic_id}" class="video-demo video-js vjs-default-skin vjs-big-play-centered" controls  data-setup='{}'><source src="${topics.demo_src}" type='application/x-mpegURL' label='360p' res='360' /></video>
                                        </div>
                                    </div>
                                </div>`;

                            sub_topicArr.push(topic_id);
                        }
                        // demo += '';
                        $(`#demo-video-${val}`).html(demo);

                        moduleArray.forEach((topic_id) => {
                            var opened = false;
                            $(`#sub-topic-name-${topic_id}`).on('click', () => {
                                var val = $(`#sub-topic-name-${topic_id}`).attr("aria-expanded");
                                if (val == 'false') {
                                    if (!opened) getChapter(topic_id);
                                    opened = true;
                                    $(`.down-arrow-${topic_id}`).removeClass('up-arrow').addClass('down-arrow');
                                } else {
                                    $(`.down-arrow-${topic_id}`).removeClass('down-arrow').addClass('up-arrow');
                                }
                            })
                        })

                        sub_topicArr.forEach((topic_id) => {

                            $(`#btn-${topic_id}`).on('click', () => {
                                // console.log("click");

                                // $(`#collapse-${topic_id}`).on('show.bs.collapse', function () {
                                //     $('.collapse').removeClass('show');
                                //     // console.log('removed');
                                // });

                                var val = $(`#btn-${topic_id}`).attr("aria-expanded");
                                // console.log(val);
                                if (val == 'false') {
                                    // console.log('add shadow')
                                    $(`.down-arrow-${topic_id}`).removeClass('up-arrow').addClass('down-arrow')
                                    $(`.demo-video-${topic_id}`).addClass('shadow-sm');
                                } else {
                                    $(`.down-arrow-${topic_id}`).removeClass('down-arrow').addClass('up-arrow');
                                    $(`.demo-video-${topic_id}`).removeClass('shadow-sm');
                                    // console.log('remove shadow')
                                }

                            })

                            // open demo
                            $(`#demo-${topic_id}`).on('click', () => {
                                // show popup
                                $(`#popup-${topic_id}`).removeClass('d-none');
                                // fire up the plugin
                                videojs(`#video-${topic_id}`, {
                                    controls: true,
                                    plugins: {
                                        videoJsResolutionSwitcher: {
                                            ui: true,
                                            default: 540, // Default resolution [{Number}, 'low', 'high'],
                                            dynamicLabel: true // Display dynamic labels or gear symbol
                                        }
                                    }
                                }, function () {
                                    var player = this;
                                    window.player = player
                                    player.on('resolutionchange', function () {
                                        console.info('Source changed to %s', player.src());
                                    })
                                });
                            });

                            // close demo
                            $('.close-demo').on('click', () => {
                                // pause video
                                $('video').get().forEach(video => {
                                    if (!video.paused) {
                                        video.pause();
                                    }
                                });
                                // hide popup
                                $(`#popup-${topic_id}`).addClass('d-none');
                            })
                        });

                        // faqs
                        var num = 0;
                        var question = '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
                        // for (const faq of faqs) {
                        //     question += `<div class="panel panel-default" data-aos="slide-up">
                        //             <div class="panel-heading" role="tab" id="heading${num}">
                        //                 <h4 class="panel-title poppins-medium">
                        //                     <a class="align-items-center d-flex justify-content-between" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse${num}"
                        //                         aria-expanded="false" aria-controls="collapse${num}">
                        //                         ${faq.question}
                        //                     </a>
                        //                 </h4>
                        //             </div>
                        //             <div id="collapse${num}" class="panel-collapse collapse in" role="tabpanel"
                        //                 aria-labelledby="heading${num}">
                        //                 <div class="panel-body poppins-regular">
                        //                     ${faq.answer}
                        //                 </div>
                        //             </div>
                        //         </div>`;
                        //     num = num + 1;
                        // }
                        question += '</div>';
                        $(`#faqs-${val}`).html(question);

                        // loader
                        loader();

            $(".team").load('template/team.html');
            // $("#teachers-d").load('template/teachers.html');
            $(".students-tweets").load('template/students-tweets.html');
            $(".offers-deals").load('template/offers-deals.html');
            $(".footer").load('template/footer.html');
            // mobile
            // $("#meet-your-teachers").load('template/teachers-mobile.html');
            $(".mobile-students-tweets").load('template/students-tweets-mob.html');
            $(".mobile-offers-deals").load('template/offers-deals.html');
            $(".mobile-footer").load('template/footer.html');
            $(".header-mobile").load('template/header-mobile.html');

            // referral data
            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            if ((typeof (ref_id) !== 'undefined') && (typeof (course_id) !== 'undefined')) {
                var cookie_referral = getCookie(course_id);
                var cookie_course_id = getCookie('course_id');
                var returning_customer = "false";

                if ((cookie_referral == "") || (cookie_course_id == "")) {
                    returning_customer = "false";
                    // alert("helo");.;
                    setCookie(course_id, ref_id, 31);
                    setCookie('course_id', course_id, 31);

                    $.ajax({
                        type: 'POST',
                        url: 'php/uniqueVisitor.php',
                        dataType: "json",
                        data: {
                            'ref_id': ref_id,
                            'course_id': course_id,
                            'returning_customer': returning_customer
                        },
                        success: function (data) {
                            if (data.status == 'success') {
                            } else if (data.status == 301) {
                            } else if (data.status == 302) {
                            } else if (data.status == 601) {
                                console.log(data.error);
                            } else {

                            }
                        }
                    });
                } else {
                    returning_customer = "true";
                    setCookie(course_id, ref_id, 31);
                    setCookie('course_id', course_id, 31);
                    $.ajax({
                        type: 'POST',
                        url: 'php/uniqueVisitor.php',
                        dataType: "json",
                        data: {
                            'ref_id': ref_id,
                            'course_id': course_id,
                            'returning_customer': returning_customer
                        },
                        success: function (data) {
                            if (data.status == 'success') {
                            } else if (data.status == 301) {
                            } else if (data.status == 302) {
                            } else if (data.status == 601) {
                                console.log(data.error);
                            } else {

                            }
                        }
                    });
                }
            }
            else {
                // alert("hello");
            }

        });

        // header animation
        $(window).scroll(function () {
            var sticky = $('.header'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) {
                sticky.addClass('fixed shadow');
            } else {
                sticky.removeClass('fixed shadow');
            }
        });

    </script>


</body>

</html>