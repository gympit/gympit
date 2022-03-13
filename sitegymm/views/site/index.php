<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Магазин спортивного питания "GymPit"';
?>
        <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Снаряжение</title>


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>
    <header>
      <div class="container">
  
              <h2>GymPit ПРЕДСТАВЛЯЕТ</h2>
              <h2>ОГРОМНЫЙ ВЫБОР</h2>
              <h2>СПОРТИВНОГО ПИТАНИЯ</h2>
            
      </div>
    </header>


    <div class="container ban_block_wrap">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block ban1">
          <div>
            <img src="/images/ban1.jpg">
            <a href="/site/statiapro">
              <h2>Myprotein Pro</h2>
              <p>Создано, чтобы добиться наивысшей работоспособности.</p>
              <span>Подробнее</span>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block">
          <div>
            <img src="/images/ban2.jpg">
            <a href="/site/statiazoh">
              <h2>Здоровое Питание</h2>
              <p>Как похудеть после Нового года? <br> 5 способов</p>
              <span>Подробнее</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid tabs_block_main">
      <div class="container">
        <div class="row">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Хиты</a></li>
            <li><a href="#tab2" data-toggle="tab">Новинки</a></li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/cybermasswhey" class="product_img">
            				<span>ХИТ</span>
            				<img src="/uploads/protein3.png">
            			</a>
            			<a href="/site/cybermasswhey" class="product_title">Cybermass Whey</a>
            			<div class="product_price">
            				<span class="price">1550 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/cybermasswhey" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/cybermasssoyprotein" class="product_img">
            				<span>ХИТ</span>
            				<img src="/uploads/protein6.png">
            			</a>
            			<a href="/site/cybermasssoyprotein" class="product_title">Cybermass Soy Protein</a>
            			<div class="product_price">
            				<span class="price">1250 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/cybermasssoyprotein" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/epiclabs" class="product_img">
            				<span>ХИТ</span>
            				<img src="/uploads/jiro4.png">
            			</a>
            			<a href="/site/epiclabs" class="product_title">Epic Labs Black Snake</a>
            			<div class="product_price">
            				<span class="price">2100 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/epiclabs" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/biotech" class="product_img">
            				<span>ХИТ</span>
            				<img src="/uploads/gainer2.png">
            			</a>
            			<a href="/site/biotech" class="product_title">BioTechUSA Hyper Mass</a>
            			<div class="product_price">
            				<span class="price">109 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/biotech" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="tab-pane fade" id="tab2">
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/aminopower" class="product_img">
            				<span>НОВИНКА</span>
            				<img src="/uploads/pred2.png">
            			</a>
            			<a href="/site/aminopower" class="product_title">Amino Power</a>
            			<div class="product_price">
            				<span class="price">1090 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/aminopower" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/atlecsshock" class="product_img">
            				<span>НОВИНКА</span>
            				<img src="/uploads/pred3.png">
            			</a>
            			<a href="/site/atlecsshock" class="product_title">Atlecs Shock Workout</a>
            			<div class="product_price">
            				<span class="price">1515 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/atlecsshock" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/cybermasscasein" class="product_img">
            				<span>НОВИНКА</span>
            				<img src="/uploads/protein4.png">
            			</a>
            			<a href="/site/cybermasscasein" class="product_title">Cybermass Casein</a>
            			<div class="product_price">
            				<span class="price">1650 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/cybermasscasein" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            		<div class="product">
            			<a href="/site/innovativehellfire" class="product_img">
            				<span>НОВИНКА</span>
            				<img src="/uploads/jiro1.png">
            			</a>
            			<a href="/site/innovativehellfire" class="product_title">Innovative HellFire</a>
            			<div class="product_price">
            				<span class="price">2870 руб</span>
            			</div>
            			<div class="product_btn">
            				<a href="/site/innovativehellfire" class="mylist">Посмотреть</a>
            			</div>
            		</div>
            	</div>
            </div>
          
          </div>
        </div>
      </div>
    </div>

   
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

</div>
</div>
