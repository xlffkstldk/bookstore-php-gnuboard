<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
  </div>
</div>
  </main>
  <footer class="footer">
    <div class="footer-wrap">
      <div class="contact">
        <h2 class="f-h2">고객문의</h2>
        <ul class="ct-info">
          <li>062-000-000</li>
          <li>평일 : 오전10 ~ 저녁 10시</li>
          <li>공휴일 : 매주 월요일</li>
        </ul>
      </div>
      
      <div class="sns-wrap">
        <ul class="sns">
          <li class="flogo"><a href="#"><img class="flogo-img" src="<?php echo G5_URL ?>/images/flogo.png" alt="로고"></a></li>
          <li><a href="#"><img src="<?php echo G5_URL ?>/images/facebook.png" alt="페이스북 연결"></a></li>
          <li><a href="#"><img src="<?php echo G5_URL ?>/images/insta.png" alt="인스타그램 연결"></a></li>
          <li><a href="#"><img src="<?php echo G5_URL ?>/images/you.png" alt="유튜브 연결"></a></li>
        </ul>
      </div>

      <div class="flink">

        <ul class="flink-list">
          <li class="flink-item"><a href="#" >책방 '겨를' 소개</a></li>
          <li class="flink-item"><a href="#" >카페 '겨를' 소개</a></li>
          <li class="flink-item"><a href="#" ><strong>개인정보처리방침</strong></a></li>
        </ul>

      </div>


      <div class="company-wrap">
        <address class="address">상호명 ‘겨를’  대표 홍길동  연락처 : 062-000-0000<br>
          주소 : 광주광역시 서구 농성동 경열로 3</address>
          <p class="copy">&copy; <span class="company">책방 '겨를'</span> All Right Reserved.</p>
    
      </div>
      
    </div>

    </footer>
  <div class="mobile-dimmed"></div>
<?php
include_once(G5_PATH."/tail.sub.php");