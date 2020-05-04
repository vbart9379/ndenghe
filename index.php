<?php

if (!empty($_POST['phone'])) {
    send_the_order ($_POST);
}

function send_the_order ($post){
    $params=array(
        "flow" => 4487,
        "offer" => 364,
        'ip' => $_SERVER['REMOTE_ADDR'],
        "name" => $post["name"],
        "phone" => $post["phone"],
        "country" => "TH",
        "ua" => $_SERVER["HTTP_USER_AGENT"],
        "us" => isset( $post["utm_source"] ) ? $post["utm_source"] : "",
        "uc" => isset( $post["utm_campaign"] ) ? $post["utm_campaign"] : "",
        "un" => isset( $post["utm_content"] ) ? $post["utm_content"] : "",
        "ut" => isset( $post["utm_term"] ) ? $post["utm_term"] : "",
        "um" => isset( $post["utm_medium"] ) ? $post["utm_medium"] : "",
    );
    $url = "https://just-traffic.org/api/wm/push.json?id=9-e829791daa5566f50233e119b57828de";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $return= curl_exec($ch);
    curl_close($ch);
    header('Location: success.php');
}
?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ซื้อ Money Amulet ได้ในราคาไม่แพง. ราคา, ความเห็นของผู้ใช้, สั่งซื้อ Money Amulet เลยตอนนี้!</title>

        <!--  <link href="css/bootstrap.css" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700|Roboto+Slab:100,300,400,700&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

        <link href="css/agency.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="images/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Money Amulet </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> เมนู <i class="fa fa-bars"></i> </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block0">ลูกค้าพึงพอใจของเรา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block1">เครื่องราง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block2">คุณสมบัติ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block3">วิธีการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block4">คุณประโยชน์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block5">ติดต่อ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#block7">รีวิวลูกค้าวิดีโอ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead">ฝันว่าอยากมีความสุข มีชีวิตที่ร่ำรวยไหม?</div><br>
                    <a href="#block5">
                        <div class="intro-lead-up text-uppercase">คุณสามารถกำจัดความยากจน และดึงดูดเงินทองด้วยเครื่องรางนี้
                        </div>
                    </a><br>
                    <div class="intro-lead-in">เป็นเจ้าของ...<br> Money Amulet และ...<br> เงินทองจะไหลมา...</div>

                </div>
            </div>
        </header>

        <section id="block0">
            <div id="review">
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <h3 class="section-heading" style="text-align:center;">ลูกค้าพึงพอใจของเรา</h3>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid" src="images/1.jpg">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid" src="images/2.jpg">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid" src="images/3.jpg">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid" src="images/5.jpg">
                        </div>

                    </div>
                </div>
            </div>
            <div id="carouselReview">
                <div class="row">
                    <div class="col-md">
                        <h3 class="section-heading" style="text-align:center;">ลูกค้าพึงพอใจของเรา</h3>
                    </div>
                </div><br>
                <div class="row row-push">
                    <div class="col-md-12">
                        <div id="myCarouselReview" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active ">
                                    <img class="img-fluid" src="images/1.jpg">
                                </div>

                                <div class="item">
                                    <img class="img-fluid" src="images/2.jpg">
                                </div>

                                <div class="item">
                                    <img class="img-fluid" src="images/3.jpg">
                                </div>
                                <div class="item">
                                    <img class="img-fluid" src="images/5.jpg">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarouselReview" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarouselReview" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="block1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-heading" style="text-align:center;"></h3>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#block5" class="linkB5"><img src="images/money_amulet1.png" alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="class=service-heading">เครื่องรางทิเบตสำหรับความมั่งคั่งและเฟื่องฟู</h2><br>
                        <p> <a href="#block5" style="color:black;font-weight: bold;"> Money Amulet</a> ช่วยนำพลังจักรวาล ดึงดูดโชคลาบและช่วยนำความสำเร็จมาสู่คุณ ช่วยเพิ่มความรุ่งรุ่งให้ธุรกิจของคุณ ซึ่งจะนำไปสู่ความมั่งคั่งและเงินทอง ไม่ว่าอะไรที่คุณลงมือทำ
                            ก็จะรายได้มาสู่คุณ</p>
                        <p>เป็นเครื่องคุ้มกัน และสร้างพลังบวก ด้วยพลังพิเศษที่เครื่องรางนี้สร้างขึ้นรอบๆ ตัวคุณ</p>
                        <p>มีเพียงเครื่องราง <a href="#block5" style="color:black;font-weight: bold;">Money Amulet</a> นี้ ที่ได้ถูกขึ้นมาโดยเฉพาะกับแต่ละคน สำหรับผู้ได้ครอบครองแต่ละคนจะได้มีสายสัมพันธ์ที่แข็งแรงระหว่างบุคคลนั้นกับเครื่องราง รวมถึงพลังงานเฉพาะสำรับคนนั้น
                            ทันทีที่ Money Amulet ตกไปอยู่ในมือของผู้ที่เป็นเจ้าของ... คนๆ นั้นจะไม่ต้องทำงานหนักเพื่อเงินอีกต่อไป <br>เพราะเงินจะเข้ามาหาเอง!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="block2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4><span style="color:white; font-size: 30px;">1</span> ปัดเป่าความทุกข์</h4>
                        <p>คุณคิดว่าแค่เพียงความรู้และทักษะ จะเพียงพอจริงหรือ? คุณเคยสงสัยไหมว่า ทำไมคนอื่นประสบความสำเร็จ แต่คุณไม่เป็นอย่างนั้นบ้าง? ทำไมบางคนเกิดมารวย แต่คุณกลับต้องต่อสู้เพื่อความอยู่รอด? คุณต้องทำงานเพื่อเลี้ยงปากท้อง และไม่เคยเหลือใช้เพื่อความสุขส่วนตัวเลย?
                            ทั้งหมดนี้ขึ้นอยู่โชคล้วนๆ! เครื่องร่างนี้จะช่วยเปลี่ยนโชคชะตาของคุณไปอย่างสิ้นเชิง ด้วยความสำเร็จ คุณจะไม่ต้องกังวลเรื่องพรุ่งนี้อีกต่อไป</p>
                    </div>
                    <div class="col-md-4">
                        <h4><span style="color:white; font-size: 30px;">2</span> สะสมพลังงานความร่ำรวยรอบๆ ตัวคุณ</h4>
                        <p>ตั้งแต่ที่คุณได้รับ Money Amulet มา คุณจะไม่ต้องกังวลว่าเดือนหน้าคุณจะมีเงินใช้หรือไม่ เมื่อเครื่องรางเป็นของคุณอย่างสมบูรณ์แล้ว ระดับพลังความมั่งคั่งของคุณจะเพิ่มอย่างรวดเร็วถึงระดับสูงสุด และจะเป็นแบบนั้นในทุกๆ วัน ระดับพลังงานขั้นสูงจะสะสมรอบๆ
                            ตัวคุณ เชื่อมต่อระหว่างคุณและโชค และในทุกวันระดับพลังจะเพิ่มขึ้นอีก 80%!</p>
                    </div>
                    <div class="col-md-4">
                        <h4><span style="color:white; font-size: 30px;">3</span> ดึงดูดเงินทอง</h4>
                        <p>ในที่สุดคุณก็ได้ใช้ชีวิตอย่างที่คุณควรมี! เพราะคุณควรจะได้รับสิ่งที่ดีกว่า! ถ้าคุณมี Money Amulet คุณจะไม่ต้องคิดหาวิธีสร้างความร่ำรวยอีกต่อไป เงินจะไหลมาเหมือนสายน้ำ จนคุณลืมไปเลยว่าต้องออมเงินอย่างไร คุณจะมีเงินเพียงพอที่จะทำทุกสิ่งที่คุณไม่เคยแม้แต่จะฝัน</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="block3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="service-heading"><a href="#block5">Money Amulet</a> ช่วยให้ชีวิตคุณดีขึ้นได้อย่างไร?</h2>
                        <br>
                        <p>ไม่ว่าใครก็มีสิทธิ์ที่จะได้รับความสุขและชีวิตที่สะดวกสบาย Money Amulet ช่วยให้เจ้าของประสบความสำเร็จตามเป้าหมาย ด้วยการพัฒนาสถานการณ์การเงิน ด้วยการ:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <ul>
                            <li>กำจัดอุปสรรคที่ขัดขวางการเงิน </li><br>
                            <li>ดึงดูดความสุขและเงิน</li> <br>
                            <li>มอบโชคให้การเสี่ยงดวงกับลอตเตอรี่</li><br>
                            <li>คืนเงินและความร่ำรวย</li><br>
                            <li>ช่วยกำจัดหนี้สิน </li><br>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <a href="#block5"><img src="images/money_amulet1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="block4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span style="color:white;"> ดึงดูดโชคลาภ</span>
                    </div>
                    <div class="col-md-3">
                        <span style="color:white;"> มอบความร่ำรวย</span>
                    </div>
                    <div class="col-md-3">
                        <span style="color:white;"> ให้สุขภาพ ความรัก ความสุข</span>
                    </div>
                    <div class="col-md-3">
                        <span style="color:white;"> ปัดเป่าสิ่งชั่วร้าย</span>
                    </div>
                </div>
                <div class="row row-push">
                    <div class="col-md-12">
                        <p style="color:white;font-size: 20px;">นี่คือหนึ่งในเครื่องรางที่มีชื่อเสียงที่สุดในประวัติศาสตร์ ที่ช่วยนำพาโชคลาภที่ยิ่งใหญ่ เครื่องรางทรงพลังที่จะช่วยเรียกความแข็งแกร่ง พลังงาน ความร่ำรวย และความอุดมสมบูรณ์
                        </p><br>
                        <p style="color:white;font-size: 20px;"><a href="#block5" style="font-size: 20px;">Money Amulet</a> มอบโอกาสให้เจา้ของได้รู้ถึงความปรารถนาและความฝัน อาจจะเป็นการได้ท่องเที่ยวไปยังที่ที่คุณไม่เคยคิดว่าจะสามารถไปได้มาก่อนเพราะสถานการณ์ทางการเงิน อาจจะเป็นบ้านแสนสะดวกสบายที่ครอบครัวคุณอยากได้
                            หรือแค่รถหรูสักคัน อย่างที่คุณใฝ่ฝันมาตลอดชีวิต ทุกคนสมควรที่ได้มีฝันที่เป็นจริง <a href="#block5" style="font-size: 20px;">Money Amulet</a> เปิดโอกาสเช่นนี้ให้กับทุกคน
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="block7">
            <div class="row">
                <div class="col-md">
                    <h3 class="section-heading" style="text-align:center;"> รีวิวลูกค้าวิดีโอ</h3>
                </div>
            </div><br>
            <div class="row row-push">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active ">
                                <video controls src="video/01.mp4" alt="Los Angeles">
                </div>

                <div class="item">
                    <video   controls src="video/03.mp4" alt="Chicago">
                </div>

                <div class="item">
                    <video  controls src="video/02.mp4" alt="Chicago">
                </div>
                <div class="item">
                    <video  controls src="video/04.mp4" alt="Chicago">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
		</div>
	</div>
</div>
    </section>

    <section id="block5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Money Amulet ที่คุณตามหาอยู่ที่เว็บไซต์ทางการของเรา! สั่งซื้อเครื่องรางตอนนี้เพื่อนำความร่ำรวยมาสู่คุณ! กรอกแบบฟอร์มและเราจะจัดสรร Money Amulet เฉพาะให้กับคุณภายใน 3 วันทำการ</p>
                    <p><br>
                    </p>
                    <p><span style="color:red; font-weight: bold;">หมายเหตุ:</span> เพียงกรอกชื่อของคุณสำหรับการสั่งซื้อ เพราะมันสำคัญมากสำหรับการจัดเตรียมเครื่องรางสำหรับคุณ
                    </p>
                    <img src="images/money_amulet1.png" alt="" class="amuletImg">
                </div>
                <div class="col-md-6" id="contactForm"><br>
                    <h2 class="section-heading" style="color:#fcfcfc;"> เป็นเจ้าของ Money Amulet เลยตอนนี้ </h2>
                    <h2 class="section-subheading" style="color:#fcfcfc;"> ราคาปกติ <span style="text-decoration:line-through;color:#fcfcfc;">1980 THB</span> <br>
                        <h1 class="section-heading text-uppercase" style="color:#fcfcfc;"> ราคาตอนนี้ <span style="color:#fcfcfc;"> 990 THB*</span></h1>
                        <p style="text-align:left; font-size: 16px; color: #f1e0e096;">*ราคานี้ยังไม่รวมภาษี</p>
                    </h2>
                    <form name="sentMessage" novalidate="novalidate" method="post" class="x_order_form" action="" id="form">
                      
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="ชื่อ-นามสกุล" name="name" required>
                            <p class="errorspace" id="errorname" style="color:#b30000;">
                            </p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="phone" type="tel" placeholder="เบอร์โทรศัพท์" name="phone" required>
                            <p class="errorspace" id="errorphone" style="color:#b30000;">
                            </p>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-primary btn-xl text-uppercase">
								สั่งซื้อตอนนี้
							</button>
                        </div>
                        </form>
                </div>
                <p>
                    <center><b>
							<p>
								<div id="result" style="color:black; font-size: 19px;"></div>
						</p></b>
                        <p><b></b></p>
                    </center>
                    <div id="pixel"></div>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <p><strong>*หมายเหตุ:</strong><br>เนื้อหาในหน้านี้สำหรับสำหรับการให้ข้อมูลเท่านั้น คลิกที่ <span style="color:#e2c97f;"> «สั่งซื้อตอนนี้» </span>ยืนยันว่าคุณได้อ่าน<a href="privacy.html" target="_BLANK">นโยบายความเป็นส่วนตัว</a> แล้ว และยินยอมให้ข้อมูล
                </p>
            </div>
        </div>

    </section>

    <footer id="block6" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <span class="copyright">© <script>
						var now = new Date();

						document.write(now.getFullYear())
					</script> สงวนลิขสิทธิทั้งหมด</span>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="">เกี่ยวกับเรา </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="">ติดต่อเรา</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="./privacy.html" target="_BLANK">นโยบายความเป็นส่วนตัว</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" target="_BLANK">เงื่อนไขการใช้งาน</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </footer>


   <!--  <script src="./js/script.js"></script> -->

   <script type="text/javascript" src="flowplay/flowplayer-3.2.2.min.js"></script>

</body>

<!-- <link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css"> -->

</html>