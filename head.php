<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
/*include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
*/

$menu_datas = get_menu_db(0, true); //DB에서 메뉴 리스트 가져오기 


if(isset($bo_table) && !empty($bo_table)) { //게시판인경우
  $request_url = "/bbs/board.php?bo_table=".$bo_table;
} else if(isset($co_id) && !empty($co_id)) {
  $request_url = "/bbs/content.php?co_id=".$co_id;
} else {
  $request_url = $_SERVER['PHP_SELF'];
}

?>
  <!-- 공지사항 게시물에서 가져오도록 할것 -->
<?php
echo latest('notice02', 'notice', 1, 100);		// 최소설치시 자동생성되는 공지사항게시판
?>
  <header class="header">
    <div class="header-wrap">
      <a href="#" class="menu-icon"><img src="<?php echo G5_URL ?>/images/menu.png" alt="전체 메뉴"></a>
      <h1 class="logo">
        <a href="/" class="logo-link" ><img src="<?php echo G5_URL ?>/images/logo.png"  alt="" width="96" height="50"></a>
        <span class="logo-name">책방 '겨를'</span>
      </h1>

      <nav class="pmenu">
        <ul class="pmain-nav sub-last">
        <?php
        $i = 0;
        foreach( $menu_datas as $row ){
          if( empty($row) ) continue;
          if($row['me_name'] == "책방 &#039;겨를&#039;") {
            $row['me_name'] = "책방&nbsp;&nbsp;<span class=\"bk-store\">'겨를'</span>";
          }
          else if($row['me_name'] == "카페 &#039;겨를&#039;") {
            $row['me_name'] = "카페&nbsp;&nbsp;<span class=\"cf-store\">'겨를'</span>";
          }          
        ?>
          <li class="main-item">
          <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="main-link"><?php echo $row['me_name'] ?></a>
            <?php
            $k = 0;
            foreach( (array) $row['sub'] as $row2 ){

                if( empty($row2) ) continue; 

                if($k == 0)
                    echo '<ul class="sub-nav">'.PHP_EOL;
            ?><li class="sub-item"><a href="<?php echo $row2['me_link']; ?>"  target="_<?php echo $row2['me_target']; ?>" class="sub-link"><?php echo $row2['me_name'] ?></a></li>
            <?php
            $k++;
            }   //end foreach $row2

            if($k > 0)
                echo '</ul>'.PHP_EOL;
            ?>
          </li>

        <?php
        }
        ?>
        </ul>
      </nav>
      <nav class="menu">
        <ul class="main-nav sub-last">
        <?php
        $i = 0;
        foreach( $menu_datas as $row ){
          if( empty($row) ) continue;

          
        ?>
          <li class="main-item">
          <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="main-link"><?php echo $row['me_name'] ?></a>
            <?php
            $k = 0;
            foreach( (array) $row['sub'] as $row2 ){

                if( empty($row2) ) continue; 

                if($k == 0)
                    echo '<ul class="sub-nav2">'.PHP_EOL;
            ?><li class="sub-item"><a href="<?php echo $row2['me_link']; ?>"  target="_<?php echo $row2['me_target']; ?>" class="sub-link"><?php echo $row2['me_name'] ?></a></li>
            <?php
            $k++;
            }   //end foreach $row2

            if($k > 0)
                echo '</ul>'.PHP_EOL;
            ?>
          </li>

        <?php
        }
        ?>
        </ul>

        <a href="#" class="close"><img src="<?php echo G5_URL ?>/images/menu2.png" alt="" class="close-icon"><span class="blind">메뉴
            닫기</span></a>
      </nav>
      <a href="<?php echo G5_BBS_URL ?>/search.php" class="search-link"><img src="<?php echo G5_URL ?>/images/search.png" alt="검색하기" class="search-icon"></a>
      <div class="sub-bg"></div>
    </div>
  </header>

  <main class="container">
<div class="content-wrap">
<?php if (!defined("_INDEX_")) { 
  //서브페이지 인경우 소스코드 출력 시작 
  $sql = " select * from {$g5['menu_table']} where me_link = '".$request_url."' ";
  $npage = sql_fetch($sql);
  $pcode = substr($npage['me_code'],0,2);
  //부모메뉴
  $sql = " select * from {$g5['menu_table']} where me_code = '".$pcode."' and me_use = 1 and length(me_code) = 2 order by me_order asc ";
  $prow = sql_fetch($sql);
  
  $sql = " select * from {$g5['menu_table']} where me_code like '".$pcode."%' and me_use = 1 and length(me_code) = 4 order by me_order asc ";
  $mresult = sql_query($sql);

?>
    <div class="sub-visual visual01">
      <h2 class="sub-h2">ABOUT BOOK STORE <br>
      <span>동네 책방 ‘겨를’</span>
      </h2>
    </div>
    <div class="location">
      <div class="location-wrap">
      <span class="home"><i class="fa fa-home fa-2x" aria-hidden="true"></i><i class="fa fa-home fa-lg" aria-hidden="true"></i></span>

      <span class="depth1"><?php echo($prow['me_name']); ?></span>
      <ul class="tab">
      <?php
      for ($i=0; $crow=sql_fetch_array($mresult); $i++)
      {
      ?>  
          <li class="tab-item <?php if($crow['me_link'] == $request_url) { ?>active<?php } ?>"   >
            <a href="<?php echo($crow['me_link']); ?>" class="tab-btn"><?php echo($crow['me_name']); ?></a>
          </li>
      <?php
      }
      ?>
        </ul>
      </div>
    </div>
    <h2 class="m-h2"><?php echo($npage['me_name']); ?></h2>
    <div class="sub-wrap">
   

<?php } ?>
