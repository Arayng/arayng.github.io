<?php
//로그인 사용자만 접근
    if(!$s_idx){
        echo"
            <script type=\"text/javascript\">
                alert(\"로그인 후 이용 가능 합니다.\");
                history.back();
            </script>
        ";
        exit; //script에서 return false와 동일하게 동작한다.
    };
?>