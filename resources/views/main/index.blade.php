@extends('layout')

@section('styles')
<link rel="stylesheet" href="/assets/css/home.css">
@stop

@section('content')
<div id="banner">
<div id="container">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">
    <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="picture/banner/banner2.jpg" alt="...">
        <div class="carousel-caption topWord" style="">
            雲端音樂交流平台
        </div>

        <div class="carousel-caption midWord" style="">
            我們期望透過網路與社群的力量 <br>
                    讓音樂學習與知識分享更加簡單
        </div>

        <div class="carousel-caption botWord" style="">
            <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
                    <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
        </div>
      </div>
    </div>

  </div> <!-- Carousel -->
</div> <!-- Container -->
</div>

<!--<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">-->
<!-- css 
<link rel="stylesheet" type="text/css" href="css/slogan.css">-->
<!-- btn 
<link rel="stylesheet" type="text/css" href="css/buttonStyle.css">-->
<div id="slogan">
<div class="slogan">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <span>MuzikTutor 希望營造豐富的學習資源與踴躍的交流氛圍</span>
                <p>平台將提供討論社群，並能透過視訊連接彼此清楚地分享知識或解決音樂問題
                ，我們也正在規劃優質的課程，並在近期內推出，無論您正在學習音樂，
                亦或者您已經是一個優秀的音樂人，我們都歡迎您們的加入。</p>
            </div>
            <div class="col-md-3">
                <!--<a class="btn btn-block btn-primary" href="#"><i class="fa fa-users"></i> Register Now</a>-->
                <a href="#" class="btn-u btn-u-red btn-u-lg"><i class="fa fa-cloud-download"></i> Register Now</a>
            </div>
        </div>
    </div>
</div>
</div>

<!--<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">-->
<!-- textColor 
<link rel="stylesheet" type="text/css" href="css/textColor.css">-->
<!-- promo 
<link rel="stylesheet" type="text/css" href="css/promoElement.css">-->
<div id="slogan2" class="bg-grey">
<div class="container content">
    <div class="title-box">
        <div class="title-box-text">我們提供您 <span class="color-red">最好</span> 的服務</div>
        <p>學習音樂不在侷限於面對面，線上學習將會是節省時間與荷包的另一種選擇！以下是MuzikTutor的三大特色。</p>
    </div>
    <div class="row margin-bottom-30" style="margin-top:30px;">
        <div class="col-md-4">
            <div class="service">
                <i class="fa fa-compress service-icon"></i>
                <div class="desc">
                    <h4>音樂專屬討論版</h4>
                    <p style="font-size:13px;text-align:justify;">無論是學習障礙，或者分享交流，我們共分成歌唱、吉他、樂理、創作、錄音等五大討論主題，建議搭配Youtube影片，以及SoundCloud聲音分享，將能協助內容更加精準。</p>
                </div>
            </div>  
        </div>
        <div class="col-md-4">
            <div class="service">
                <i class="fa fa-cogs service-icon"></i>
                <div class="desc">
                    <h4>視訊介接</h4>
                    <p style="font-size:13px;text-align:justify;">如果您覺得音樂無法透由文字或圖片與他人精準的分享，我們將提供一個穩定安全、方便，且清晰的視訊介接功能，來協助進行交流。</p>
                </div>
            </div>  
        </div>
        <div class="col-md-4">
            <div class="service">
                <i class="fa fa-rocket service-icon"></i>
                <div class="desc">
                    <h4>線上課程提供</h4>
                    <p style="font-size:13px;text-align:justify;">MuzikTutor的目標在於讓學習音樂更加簡單、更加容易，因此我們希望能透過提供具有品質的教學影片，來帶領各位學習者走在正確的音樂學習道路上。</p>
                </div>
            </div>  
        </div>              
    </div>
</div>
</div>

<div id="aboutUs">
<div class="container team-v1 content-sm">
  <div class="margin-bottom-40 text-center">
      <h2 class="title-v2 title-center">MEET OUR TEAM</h2>
      <p>We <strong>meet</strong> and get to know you. You tell us and we listen. <br> 
      We build your website to realise your vision and we <strong>deliver</strong> the ready product.</p>
  </div>

  <ul class="list-unstyled row">
      <li class="col-sm-3 col-xs-6 md-margin-bottom-30">
          <div class="team-img">
              <img class="img-responsive" src="picture/team/p1.jpg" alt="">
              <ul>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
              </ul>
          </div>
          <h3>張家瑄</h3>
          <h4>/ Boss</h4>
          <p>Director mi porta gravida at eget metus id elit mi egetine...</p>
      </li>
      <li class="col-sm-3 col-xs-6 md-margin-bottom-30">
          <div class="team-img">
              <img class="img-responsive" src="picture/team/p2.jpg" alt="">
              <ul>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
              </ul>
          </div>
          <h3>簡志樺</h3>
          <h4>/ Worker</h4>
          <p>Lead Designer mi porta gravida at eget metus id elit mi egetine...</p>
      </li>
      <li class="col-sm-3 col-xs-6">
          <div class="team-img">
              <img class="img-responsive" src="https://scontent-sin.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/10690273_1059150524100092_3927960340907010188_n.jpg?oh=a4099b2bd6046abc6108ef5a10dd24bb&oe=55D6D354" alt="">
              <ul>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
              </ul>
          </div>
          <h3>楊佳穎</h3>
          <h4>/ Housekeeper</h4>
          <p>Web Developer in Unify agency porta gravida at eget metus id elit...</p>
      </li>
      <li class="col-sm-3 col-xs-6">
          <div class="team-img">
              <img class="img-responsive" src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10171886_757446244345750_1409037820946503560_n.jpg?oh=ab15260739edc31748d75bbc53ccc90e&oe=55C7B663&__gda__=1440309513_2a88e200d5ced40cee4df28b7bfada97" alt="">
              <ul>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
              </ul>
          </div>
          <h3>Zilia Yu</h3>
          <h4>/ Coffee Maker</h4>
          <p>Designer in Twitter non mi porta gravida at elit mi egetine...</p>
      </li>
  </ul>                
</div>
</div>
@stop