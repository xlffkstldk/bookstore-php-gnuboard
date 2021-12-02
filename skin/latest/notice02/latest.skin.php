<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$list_count = (is_array($list) && $list) ? count($list) : 0;

?>
<?php if ($list_count > 0) { //게시물이 없을 때  ?>
   <div class="pop">
    <div class="pop-wrap">
      <span class="pop-title"><?php echo "<a href=\"".get_pretty_url($bo_table, $list[0]['wr_id'])."\">"; ?>
      <?php print $list[0]['subject']; ?></a></span>
      <a href="<?php echo(G5_BBS_URL);?>/board.php?bo_table=<?php echo($bo_table);?>" class="pop-more">더보기</a>
      <a href="#" class="pop-close"><img src="<?php echo G5_URL ?>/images/close-x.png" alt="팝업 닫기" width="20" height="20"></a>
    </div>
  </div>
<?php } ?>
