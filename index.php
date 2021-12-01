<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
      <!-- 메인 슬라이드-->
      <div class="banner-wrap">
        <section class="main-banner">
          <ul class="banner-list bxslider">
            <li class="banner-item  slide1"><a href="#" class="banner-link">
                <p class="blind">출근길이 유일한 산책로인 당신에게 건네는 위로!
                  &lt;빈틈의 온기&gt; 윤고은의 첫번째 에세이! </p>
                
              </a></li>
            <li class="banner-item  slide2"><a href="#" class="banner-link"></a></li>
            <li class="banner-item  slide3"><a href="#" class="banner-link"></a></li>
          </ul>
        </section>
      </div>
      <!-- 최신도서-->

      <div class="latest-wrap">
        <div class="lt-title-wrap">
          <h2 class="lt-h2">
            <img src="images/logo2.png" alt="">
            <span>신규도서</span>
          </h2>
          <p class="lt-p">책방 주인장이 제맘대로 선택한
            따끈한 신간!
          </p>
        </div>
        <ul class="latest-list">
          <li class="latest-item">
            <a href="#" class="latest-link">
              <div class="thumb-wrap"><img src="images/book1.png" alt="명랑한 은둔자 책 표지" class="m-latest-img" ><img src="images/pc-book1.png" alt="명랑한 은둔자 책 표지" class="p-latest-img" width="250"
                  height="276"></div>
              <p class="book-info">
                명랑한 은둔자 <span class="writer">캐럴라인 냅</span>
              </p>
            </a>
          </li>
          <li class="latest-item">
            <a href="#" class="latest-link">
              <div class="thumb-wrap"><img src="images/book1.png" alt="명랑한 은둔자 책 표지" class="m-latest-img" ><img src="images/pc-book1.png" alt="명랑한 은둔자 책 표지" class="p-latest-img" width="250"
                  height="276"></div>
              <p class="book-info">
                명랑한 은둔자 <span class="writer">캐럴라인 냅</span>
              </p>
            </a>
          </li>
          <li class="latest-item">
            <a href="#" class="latest-link">
              <div class="thumb-wrap"><img src="images/book1.png" alt="명랑한 은둔자 책 표지" class="m-latest-img" ><img src="images/pc-book1.png" alt="명랑한 은둔자 책 표지" class="p-latest-img" width="250"
                  height="276"></div>
              <p class="book-info">
                명랑한 은둔자 <span class="writer">캐럴라인 냅</span>
              </p>
            </a>
          </li>
        </ul>
        <a href="#" class="lt-morelink">
          <span>More</span>
          <img src="images/arrow-white.png" alt="">
        </a>
      </div>
      <!-- 추천도서-->

      <div class="recomm-wrap">
        <div class="recomm-box">
          <div class="rc-title-wrap">
            <h2 class="rc-h2">
              <img src="images/logo3.png" alt="">
              <span>추천도서</span>
            </h2>
            <p class="rc-p">책방지기가 취향대로
              엄선했습니다.<br /><br /> 독자의 마음을 위로해줄 추천도서~</p>
          </div>
          <ul class="recomm-list">
            <li class="recomm-item">
              <a href="#" class="recomm-link">
                <div class="thumb-wrap"><img src="images/book2.png" alt="식물과 나 책 표지" class="m-recomm-img" >
                    <img src="images/pc-book2.png" alt="식물과 나 책 표지" class="p-recomm-img" width="250"
                    height="300">
                  </div>
                <p class="book-info">
                  식물과 나 <span class="writer">이소영</span>
                </p>
              </a>
            </li>
  
            <li class="recomm-item">
              <a href="#" class="recomm-link">
                <div class="thumb-wrap"><img src="images/book2.png" alt="식물과 나 책 표지" class="m-recomm-img" >
                  <img src="images/pc-book2.png" alt="식물과 나 책 표지" class="p-recomm-img" width="250"
                  height="300"></div>
                <p class="book-info">
                  식물과 나 <span class="writer">이소영</span>
                </p>
              </a>
            </li>
  
            <li class="recomm-item">
              <a href="#" class="recomm-link">
                <div class="thumb-wrap"><img src="images/book2.png" alt="식물과 나 책 표지" class="m-recomm-img" >
                  <img src="images/pc-book2.png" alt="식물과 나 책 표지" class="p-recomm-img" width="250"
                  height="300"></div>
                <p class="book-info">
                  식물과 나 <span class="writer">이소영</span>
                </p>
              </a>
            </li>
  
          </ul>
          <a href="#" class="rc-morelink">
            <span>More</span>
            <img src="images/arrow-white.png" alt="">
          </a>

        </div>

      </div>


      <!-- 카페 메뉴-->
      <div class="cafe-wrap">
        <section class="cafe-banner">
          <h2 class="cf-h2">카페
            <span>겨를</span>
          </h2>
          <ul class="menu-list">
            <li class="menu-item"><a href="#" class="menu-link">
              <img src="images/m-coffee1.png" alt="" class="menu-img" width="364">
            </a></li>
            <li class="menu-item"><a href="#" class="menu-link">
              <img src="images/m-coffee1.png" alt="" class="menu-img" width="364">
            </a></li>
            <li class="menu-item"><a href="#" class="menu-link">
              <img src="images/m-coffee1.png" alt="" class="menu-img" width="364">
            </a></li>
          </ul>
        </section>
      </div>
<?php
include_once(G5_PATH.'/tail.php');