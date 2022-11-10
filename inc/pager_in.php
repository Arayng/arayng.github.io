<?php

  //paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
  $start_list = ($npage - 1) * $list_num;
  $end_list = $total - (($npage - 1) * $list_num);
  // $start_list = ($npage * $list_num)-$list_num + 1;
  // paging : 시작 번호 부터 페이지 당 보여질 글의 갯수 만큼만 select 해오는 쿼리 작성
  // $page_sql .= "limit $start_list, $list_num;";
  $page_sql .= " limit $start_list, $list_num;";
  $paging_result = mysqli_query($dbcon, $page_sql);
?>