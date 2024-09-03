

<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="../../public/css/style.css">
<link rel="stylesheet" href="../../public/css/splide.css">
<!-- <link href="{{asset('../../public/css/style.css')}}" rel="stylesheet">
<link href="{{asset('../../public/css/splide.css')}}" rel="stylesheet">   
<link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./assets/css/sp/style.css" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/splide.min.css"> -->
<head>
    <meta charset="UTF-8">
    <meta
name="”viewport”"
content="”width"
="device-width,initial-scale"
="1.0″"
/>
    <title>ph2-week2</title>
</head>

<body>
<x-app-layout>
<header class="header is-transparent" id="js-header">
    <a href="./" class="header-logo">
    <a href="{{ route('quizzes.index') }}">クイズ</a>

        <img src="./assets/img/logo.svg" alt="posse">
    </a>
    <button class="header-button" id="jsheaderButton">
        <span class="header-buttonwire"></span>
        <span class="header-buttonwire"></span>
        <span class="header-buttonwire"></span>
    </button>
    <nav class="header-nav">
    <ul class="header-navList">
        <li class="header-navItem">
            <a href="#about" class="header-navLink">Posseとは</a>
        </li>
        <li class="header-navItem">
            <a href="#event" class="header-navLink">イベント</a>
        </li>
        <li class="header-navItem">
            <a href="#daily" class="header-navLink">日常生活</a>
        </li>
    </ul>
    <ul class="header-info">
        <li><a href="https://line.me/R/ti/p/@651htnqp?from=page" class="cta-button header-ctaLink" target="_blank" rel="noopener noreferrer">
            LINE追加
            </a>
        </li>
        <li>
            <a href="#" class="header-corporateLink" target="_blank" rel="noopener noreferrer">
                POSSE 公式サイト
            </a>
        </li>
    </ul>

    <ul class="header-snsList">
        <li class="header-snsItem">
            <a href="#" class="header-snsLink" target="_blank" rel="noopener noreferrer">
                <img src="./assets/img/icon-twitter.png" alt="Twitter" width="40" height="40">
            </a>
        </li>
        <li class="header-snsItem">
            <a href="#" class="header-snsLink" target="_blank" rel="noopener noreferrer">
                <img src="./assets/img/icon-instagram.png" alt="instagram" width="40" height="40">
            </a>
        </li>
    </ul>
</nav>
</header>
<main>
<section class="mainvisual" id="js-mainVisual">
    <div class="mainvisual-inner">
        <div class="mainvisual-head" data-scroll>
            <h1 class="mainvisual-title">学生プログラミングコミュニティ</h1>
            <p class="mainvisual-lead">自分史上最高の仲間と。</p>
        </div>
    </div>
    <div class="mainvisual-scroll">SCROLL DOWN</div>
</section>
<div>
    <div class="wrapper">
    <section id="about" class="section-about">
        <div class="section_head">
            <h2 class="title">
                <span class="title-ja">POSSEとは</span>
                <span class="title-en">About POSSE</span>
            </h2>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="about-column">
                    <figure class="about-image">
                        <img src="./assets/img/img-about.jpg" alt=""/>
                    </figure>
                    <div class="about-text">
                        <p>学生プログラミングコミュニティ「POSSE(ポッセ)」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。プログラミングだけではありません。オフラインでのイベントや、旅行など様々な企画を行っています！それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section id="event" class="section-event">
    <div class="section_head">
        <h2 class="title" data-scroll="">
            <span class="title-ja">イベント</span>
            <span class="title-en">Event</span>
        </h2>
        <div class="section-lead" data-scroll>
            <p>POSSEでは年内に多くのイベントを行っています。こちらに掲示してあるのはイベントの一部です。<br />プログラミングだけでなく、これらのイベントを共に経験し、仲間との友情はより深まります。</p>
        </div>
    </div>
    <div class="section-body">
    <div id="js-eventSlide" class="splide event-slide">
        <div class="splide__track">
            <ul class="splide__list">
            <li class="splide__slide event-item" data-scroll>
                <figure class="event-itemImage">
                    <img src="../img/assets/img/img-daily01.jpg" alt="" >
                </figure>
                <div class="itemBody">
                    <p class="blue-title">
                        <time datetime="2021-03">2021.April</time></p>
                        <p class="event-name">入学式</p>
                </div>
            </li>
            <li class="splide__slide event-item">
                <figure class="event-itemImage">
                    <img src="../img/assets/img/img-daily02.jpg" alt="" >
                </figure>
                <div class="itemBody">
                    <p class="blue-title">
                    <time datetime="2021-03">2021.Mar</time>
                </p>
                <p class="event-name">軽井沢旅行</p>
                </div>
            </li>
            <li class="splide__slide event-item">
                <figure class="event-itemImage">
                    <img src="../img/assets/img/img-daily03.jpg" alt=""  >
                </figure>
                <div class="itemBody">
                    <p class="blue-title">
                        <time datetime="2021-04">2021.April</time>
                    <p class="event-name">オープン講演会</p>
                </div>
            </li>
            <li class="splide__slide event-item">
                <figure class="event-itemImage">
                    <img src="../img/assets/img/img-daily04.jpg" alt="" >
                </figure>
                <div class="itemBody">
                    <p class="blue-title">
                        <time datetime="2021-04">2021.April</time>-
                        <time datetime="2021-06">June</time>
                    </p>
                    <p class="event-name">チーム開発</p>
                </div>
            </li>
            </ul>
        </div>
    </div>
</div>
</section>
<section id="daily">
    <div class="section_head">
        <h2 class="title">
            <span class="title-ja">日常生活</span>
            <span class="title-en">Daily Record</span>
        </h2>
    </div>
    <div class="section-lead">
        <p>様々な日々の活動について紹介します。<br>POSSEでは、プログラミングを学んでいくにあたってメンバー同士が共に学習するような時間を数多く設けています。<br>入会時期が半年毎にあるため、縦の繋がりから学べることは非常に多く、この繋がりを意識した班を構成したり、<br>それとは別に同期飲みの班を構成して共に学習するようなシステムを採用しています。</p>
    </div>
    <div class="section-body">
        <div class="container">
            <div id="js-dailySlide" class="splide daily-slide">
                <ul class="daily-list">
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily01.jpg" class="daily-pic"> </figure>
                        <div class="daily-body">
                            <h2 class="daily-box-title"><span class="number">01</span><span class="daily-title">ミートアップ</span></h2>
                            <ul class="daily-box-list">
                                <li class="list">毎週月曜日19:30~22:30</li>
                                <li class="list">全員参加</li>
                            </ul>
                        <div class="daily-box-explain">全体ミーティングです。<br>各局のお知らせや、講演会など目白押しです。</div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily02.jpg" class="daily-pic"> </figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title-even"><span class="number">02</span><span class="daily-title">縦もく</span></h1>
                            <ul class="daily-box-list-even">
                                <li class="list-even">週一2時間</li>
                                <li class="list-even">全員参加</li>
                            </ul>
                        <div class="daily-box-explain-even">期生関係なくzoomを繋ぎ、わからないところを先輩に質問出来ます。わかるまで丁寧に教ええてくれます。</div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily03.jpg" class="daily-pic"> </figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title"><span class="number">03</span><span class="daily-title">横もく</span></h1>
                            <ul class="daily-box-list">
                                <li class="list">週一３時間</li>
                            </ul>
                        <div class="daily-box-explain">同期と３～４人一組で学習しながら、わからないところを共有、質問出来ます。オフラインで集合したり、共にハッカソンに挑んだりします。</div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily04.jpg" class="daily-pic"></figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title-even"><span class="number">04</span><span class="daily-title">スぺもく</span></h1>
                            <ul class="daily-box-list-even">
                                <li class="list-even">週一回一時間</li>
                                <li class="list-even">自由参加</li>
                            </ul>
                        <div class="daily-box-explain-even">メンターさんからのアドバイスを受けることが出来ます。<br>毎回得る知識が多くとてもありがたい機会です。 </div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily05.jpg" class="daily-pic"></figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title"><span class="number">05</span><span class="daily-title">飯もく</span></h1>
                            <ul class="daily-box-list">
                                <li class="list">不定期３時間</li>
                                <li class="list">全員参加</li>
                            </ul>
                        <div class="daily-box-explain">ごはんを食べながら作業します。表参道のおいしいお店をたくさん発見出来ることが楽しいです！ </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<!--

    <div class="section-body">
        <div class="container">
            <div class="daily-slide">
                <ul class="daily-list">
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily01.jpg" class="daily-pic"> </figure>
                        <div class="daily-body">
                            <h2 class="daily-box-title"><span class="number">01</span><span class="daily-title">ミートアップ</span></h2>
                            <ul class="daily-box-list">
                                <li class="list">毎週月曜日19:30~22:30</li>
                                <li class="list">全員参加</li>
                            </ul>
                        <div class="daily-box-explain">全体ミーティングです。<br>各局のお知らせや、講演会など目白押しです。</div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily02.jpg" class="daily-pic"> </figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title-even"><span class="number">02</span><span class="daily-title">縦もく</span></h1>
                            <ul class="daily-box-list-even">
                                <li class="list-even">週一2時間</li>
                                <li class="list-even">全員参加</li>
                            </ul>
                        <div class="daily-box-explain-even">期生関係なくzoomを繋ぎ、わからないところを先輩に質問出来ます。わかるまで丁寧に教ええてくれます。</div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily03.jpg" class="daily-pic"> </figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title"><span class="number">03</span><span class="daily-title">横もく</span></h1>
                            <ul class="daily-box-list">
                                <li class="list">週一３時間</li>
                            </ul>
                        <div class="daily-box-explain">同期と３～４人一組で学習しながら、わからないところを共有、質問出来ます。オフラインで集合したり、共にハッカソンに挑んだりします。</div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily04.jpg" class="daily-pic"></figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title-even"><span class="number">04</span><span class="daily-title">スぺもく</span></h1>
                            <ul class="daily-box-list-even">
                                <li class="list-even">週一回一時間</li>
                                <li class="list-even">自由参加</li>
                            </ul>
                        <div class="daily-box-explain-even">メンターさんからのアドバイスを受けることが出来ます。<br>毎回得る知識が多くとてもありがたい機会です。 </div>
                        </div>
                    </li>
                    <li class="daily-box">
                        <figure class="daily-img"><img src="./assets/img/img-daily05.jpg" class="daily-pic"></figure>
                        <div class="daily-body">
                            <h1 class="daily-box-title"><span class="number">05</span><span class="daily-title">飯もく</span></h1>
                            <ul class="daily-box-list">
                                <li class="list">不定期３時間</li>
                                <li class="list">全員参加</li>
                            </ul>
                        <div class="daily-box-explain">ごはんを食べながら作業します。表参道のおいしいお店をたくさん発見出来ることが楽しいです！ </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


  -->









</section>

<section class="cta">
    <h2 class="cta-title">
    <img src="./assets/img/icon-line.svg" class="line-img" alt="" width="40" height="40" />
POSSE 公式LINE
    </h2>
    <div class="cta-content">
        <p>
        公式LINEにてご質問を随時受け付けております。<br />詳細やPOSSE最新情報につきましては、公式LINEにてお知らせ致しますので<br />下記ボタンより友達追加をお願いします！
        </p>
    </div>
    <div class="cta-footer">
        <a class="cta-button"
        href="https://line.me/R/ti/p/@651htnqp?from=page" target="_blank" rel="noopener noreferrer">
        LINE追加
        </a>
    </div>
</section>



<footer class="footer">
    <div class="footer-inner">
        <a href="./" class="footer-logo">
            <img src="./assets/img/logo.svg" alt="POSSE" width="202" height="39">
        </a>
        <a href="#" class="footer-corporateLink" target="_blank" rel="noopener noreferrer">POSSE 公式サイト</a>
        <ul class="footer-snsList">
            <li class="footer-snsItem">
            <a href="#" class="footer-snsLink" target="_blank" rel="noopener noreferrer">
                <img src="./assets/img/icon-twitter.png" alt="Twitter" width="40" height="40">
            </a>
            </li>
            <li class="footer-snsItem">
                <a href="#" class="footer-snsLink" target="_blank" rel="noopener noreferrer">
                    <img src="./assets/img/icon-instagram.png" alt="instagram" width="40" height="40">
                </a>
            </li>
        </ul>
    </div>
    <div class="footer-copyright">
        <small lang="en">&copy; 2023 POSSE</small>
    </div>
</footer>


<script src="./assets/js/splide.min.js"></script>
<script src="assets/js/script.js"></script>
</x-app-layout>
</body>

</html>

<style>
/**
* File Name : style.css
* Description : POSSE課題
*
* ---- Table of Contents ----
*
* 1.0 - Common
*    1.1 - カスタムプロパティ
*/
img{
    width: 100%;
}

:root {
    --dark-color:#333333;
    --white-color:#FFFFFF;
    --primary-color:#0071BC;
    --primary-light-color:#F7F9FB;
    --gray-color:#ADADAD;
    --gray-light-color:#EEEEEE;
    --gray-dark-color:#666666;
    --twitter-color:#1D9BF0;
}
/**
*    1.2 - ベーススタイル
*    1.3 - 汎用スタイル
*
* 2.0 - Sections
*    2.1 - ヘッダー
*/
.header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    background-color:var(--white-color);
    border-bottom:solid 1px var(--gray-light-color);
    padding:0 24px;
    z-index:10000;
    transition: background-color .3s linear;
    display :flex;
    justify-content:space-between;
    align-items:center;
    height: 80px;
}
.header-logo{
    width:148px
}

.header-nav{
    display:flex;
    gap: 48px;
}
.header-navList{
    display:flex;
    gap: 32px;
}
.header-navLink{
    color: var(--primary-color);
    font-weight: bold;
    line-height: 1.8;
    letter-spacing: .1em;
    transition:color .3s linear;
    font-size: 14px;
    display: inline-block;
}

.header-info{
    display: none;
}
.header-snsList{
    display:flex ;
    gap:24px
}


.header.is-transparent{
    background-color: transparent;
    border: none;
}
.header.is-transparent:not(.is-open) .header-logo{
    filter: brightness(10);
}
.header.is-transparent:not(.is-open)  .header-navLink {
    color:#FFFFFF;
}

.header.is-transparent:not(.is-open)  .header-snsLink {
    filter:brightness(10)
}

/**
*    2.2 - フッター
*/
.footer{
padding-top:40px;
text-align: center;
}
.footer-inner{
    display: flex;
    flex-direction:column;
    align-items: center;
    gap: 24px;

}
.footer-logo{
    width: 200px;
    line-height:1;
}

.footer-corporateLink{
    color: var(--gray-dark-color);
    font-size: 14px;
    line-height: 1.8;
    letter-spacing: .05em;
    display:inline-flex;
    align-items:center;
    gap: 40px;
}
.footer-snsLink{
    display: flex;
    gap:24px;

}

.footer-snsList{
    display:flex;
    gap: 24px;
}
.footer-copyright{
    text-align: center;
    margin-top: 24px;
    border-top: solid 1px var(--gray-light-color);
    color: var(--gray-color);
    font-family: (Plus Jakarta Sans);
    letter-spacing: .1em;
    line-height: 1.5;
    font-size: 10px;
    padding: 24px;
}
/**
*    2.3 - メインビジュアル
*/
.mainvisual{
    background: url(../img/bg-mainvisual.jpg) center center/cover no-repeat;
    height: 100vh;
    padding: 40px 24px;
    display: flex;
    align-items: flex-end;
}
.mainvisual-head{
    display: flex;
    flex-direction: column;
    gap:12px;
    align-items: flex-start;
}
.mainvisual-inner{
    max-width: 980px;
    width: 100%;
    margin: 0 auto;
}
.mainvisual-head{
    display: flex;
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
}
.mainvisual-title{
    background-color: #FFFFFF;
    color: #0071BC;
    font-weight: bold;
    line-height: 1.8;
    letter-spacing: 0.05em;
    font-size: 24px;
    padding-left: 20px;
    padding-right: 4px;
}
.mainvisual-lead{
    background-color: #FFFFFF;
    font-weight: bold;
    line-height: 1.8;
    letter-spacing: 0.05em;
    font-size: 60px;
    padding-left: 20px;
}
/* .mainvisual-scroll{
    position: absolute;
    right: 24px;
    bottom: 24px;
    color: #FFFFFF;
    font-size: 14px;
    letter-spacing: 0.1em;
    font-weight: bold;
    display: flex;
    gap:4px;
    align-items: center;
    text-shadow: 0 0 10px rgba; (51,51,0.25)
    font-family: "Plus Jakarta Sans";
} */

/***    2.4 - POSSEとは
*/
html{
    scroll-behavior: smooth;
}
body{
    color: #333333;
        font-family: "Noto Sans JP", sans-serif;
    }

.wrapper{
    padding:80px 0 160px;
    display: flex;
    flex-direction: column;
    gap:120px;
}
.container{
    max-width: 980px;
    margin:0 auto;
    padding:0 24px;
    box-sizing:content-box;
}
.section{
    padding-top:80px;
    margin-top:-80px;
}
.section-body{
    margin-top: 40px}
.title{
    text-align:center;
}
.title-ja{
    font-size: 36px;
    line-height: 1.5;
    letter-spacing: .05em;
    display: block;
    font-weight: bold;
}
.title-en{
    font-weight: bold;
    display: block;
    font-size: 14px;
    line-height: 1.5;
    letter-spacing: .1em;
    margin-top: 8px;
    color: var(--primary-color);
    font-family:"Plus Jakarta Sans";

}
.about-column{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap:40px;
    align-items: center;
}
.about-image{
    width: 100%;
    border-radius: 10px;
    overflow:hidden;
}
.about-text{
    font-size: 14px;
    line-height: 1.8;
    letter-spacing: 0.05em;
}
/**
*    2.5 - イベント

*/
.section-lead p{
    letter-spacing: 0.05em;
    line-height: 1.8;
    display: flex;
    align-items: center;
    justify-content: center;
}
.event-slide{
    margin:0 auto;
}
.splide__track{
    overflow: visible;
}
.event-slideTrack{
    overflow: visible;
}
.event-list{
    display: flex;
    justify-content: center;
    gap: 40px;
}
.event-item{
    border-radius: 10px;
    overflow:hidden;
    width:320px;
    flex-shrink: 0;
    background-color: #F7F9FB;
    text-align: center;
}
.event-itemImage img{
    width: 100%;
    height: 200px;
}
.itemBody{
    padding: 20px;
}
.blue-title{
    font-size: 14px;
    line-height: 1.8;
    letter-spacing: 0.1em;
    background-color: #0071bc;
    color:#ffffff;
    padding: 0 12px;
    border-radius:5em;
}

.event-name{
    margin-top: 4px;
    font-size: 18px;
    line-height: 1.8;
    letter-spacing: 0.1em;
    font-weight:bold;
}
.event-slideTrack{
    overflow: visible;
}
/**
*    2.6 - 日常生活
*/
.daily-list{
    padding: 40px;
    display: flex;
    gap: initial;
    flex-direction: column;
}

/* gap 40pxからinitialに変更　f-d corumnからrowni */
.daily-box{
    display: flex;
    background-color: #F7F9FB;
    border-radius: 10px;
    min-height: 324px;
}

.daily-box:nth-of-type(odd){
flex-direction: row-reverse;
margin-left: 40px;

}

.daily-box:nth-of-type(even){
    margin-right: 40px;
}

.daily-img{
    border-radius: 20px;
    flex-shrink: 0;
    width: 480px;
    height: 320px;
    margin: -40px;
}
.daily-pic{
    object-fit: cover;
    border-radius:20px ;
}

.daily-pic:nth-of-type(odd){
    margin-right: -40px;
}

.daily-pic:nth-of-type(even){
    margin-left: -40px;
}

.daily-body{
    padding: 48px 56px;
    width: 100%;
}
.daily-title{
    font-weight: bold;
    font-size:24px;
    line-height: 1.5;
    letter-spacing: 0.05em;
    margin-left: 20px;
}
.number{
    font-weight: bold;
    font-size: 58px;
    color: #0071BC;
    line-height: 1;
    letter-spacing: 0.05em;
}
.list::before{
    content:'';
    background: url(../img/icon-check.svg);
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    position: absolute;
    left: -30px;

}
.list-even::before{
    content:'';
    background: url(../img/icon-check.svg);
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    position: absolute;
    left: -30px;
}
.list{
    margin-top: 10px;
    font-weight: bold;
    font-size: 14px;
    line-height: 1.5;
    letter-spacing: 0.1em;
    position: relative;

}
.list-even{
    margin-top: 10px;
    font-weight: bold;
    font-size: 14px;
    line-height: 1.5;
    letter-spacing: 0.1em;
    position: relative;
}
.daily-box-title-even{
margin-right:15px ;
}

.daily-box-list-even{
margin-right: 15px;
}

.daily-box-explain-even{
margin-right: 15px;

}



/**


*    2.7 - 公式LINE
*/




.cta {
    background: url(../img/bg-cta.jpg) center center / cover no-repeat;
    color: #ffffff;
    text-align: center;
    font-size: 16px;
    padding: 40px 24px 52px;
}
.class {
    width: 400px;
    border: 1px solid red;
    margin: 0 auto;
    text-align: center;
}

.cta-title {
    font-size: 36px;
    font-weight: bold;
    line-height: 1.8;
    letter-spacing: 0.1em;
    display: flex;
    justify-content: center;
    gap: 12px;
    align-items: center;
}

.cta-content {
    font-size: 14px;
    line-height: 1.8;
    letter-spacing: 0.05em;
    margin-top: 16px;
}

.cta-footer {
    margin-top: 32px;
}

.cta-button {
    display: block;
    width: 315px;
    margin: 0 auto;
    padding: 16px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #0071bc;
    line-height: 1.5;
    letter-spacing: 0.1em;
    background-color: #ffffff;
    border: solid 1px #0071bc;
    border-radius: 50px;
}

.cta-button:hover {
    background-color: #0071bc;
    color: #ffffff;
    border-color: #ffffff;
}
.line-img{
    width: 40px;
}

/**
.




/** 3.0 - Animation, JavaScript Object
*    3.1 - フェードイン
*    3.2 - スライダー
*
*/

/* 1.0 - Common */
/* ============================================ */

/**
 * 1.1 - カスタムプロパティ
 *
 * https://developer.mozilla.org/ja/docs/Web/CSS/Using_CSS_custom_properties
 */

/**
 * 1.2 - ベーススタイル
 */

/**
 * 1.3 - 汎用スタイル
 */

/* 2.0 - Sections */
/* ============================================ */

/**
 * 2.1 - ヘッダー
 */

/**
 * 2.2 - フッター
 */

/**
 * 2.3 - メインビジュアル
 */

/**
 * 2.4 - POSSEとは
 */

/**
 * 2.5 - イベント
 */

/**
 * 2.6 - 日常生活
 */

/**
 * 2.7 - 公式LINE
 */

/* 3.0 - Animation, JavaScript Object */
/* ============================================ */

/**
 * 3.1 - フェードイン
 */

/**
 * 3.2 - スライダー
 */



</style>