<?php

  // include "session.php";
  // include "login_chk.php";
  include "dbcon.php";
  $total = mysqli_num_rows(mysqli_query($dbcon,$sql));

  // paging : 한 페이지 당 보여질 아이템 갯수
  $list_num = 5;

  // paging : 한 블럭 당 페이지 수 :: 블럭 = 페이지가 모여있는 곳을 정의하겠음!
  $page_num = 3;

  // paging : 현재 페이지 번호
  
  $npage = isset($_GET["page"])? $npage = $_GET["page"] : 1;

  // paging : 전체 페이지 수
  $tpage = ceil($total / $list_num);
  
  // paging : 현재 블럭 번호
  $nblock = ceil($npage / $page_num);

  // paging : 전체 블럭 수
  $tblock = ceil($tpage / $page_num);

  // paging : 블럭당 시작 페이지 번호
  $start_page = ($nblock -1) * $page_num + 1;
  if($start_page <= 0) $start_page = 1; //블럭이 하나도 없을때(글이 하나도 없을때) 생길 수 있는 오류 대비
  // 마지막 페이지 번호
  $end_page = $nblock * $page_num;
  if($end_page > $tpage) $end_page = $tpage; //블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록

  //paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
  $start_list = ($npage - 1) * $list_num;
  $end_list = $total - (($npage - 1) * $list_num);
  // $start_list = ($npage * $list_num)-$list_num + 1;
  // paging : 시작 번호 부터 페이지 당 보여질 글의 갯수 만큼만 select 해오는 쿼리 작성
  $paging_sql .= " limit $start_list, $list_num;";
  $paging_sql_result = mysqli_query($dbcon, $paging_sql);
?>








