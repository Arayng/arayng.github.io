<!-- 현재 페이지의 이름 가져오기 -->
<?php $page_name = basename($_SERVER['PHP_SELF']);?>
<div class="pager">
<!-- 이전 페이지 -->
<?php if($npage <= 1){ ?>
  <a href="">이전</a>
<?php }else {?>
  <a href="<?php echo $page_name;?>?page=<?php echo ($npage-1);?>">이전</a>
<?php }; ?>
<!-- 페이지 번호 -->
<?php for($print_page = $start_page; $print_page <= $end_page; $print_page++){ ?>
  <a href="<?php echo $page_name;?>?page=<?php echo $print_page;?>"><?php echo $print_page;?></a>
  <?php } ?>
<!-- 다음 페이지 -->
<?php if($npage >= $tpage){ ?>
  <a href="">다음</a>
<?php }else {?>
  <a href="<?php echo $page_name;?>?page=<?php echo ($npage+1);?>">다음</a>
<?php }; ?>
</div>