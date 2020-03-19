<?php

    for($i=1;$i<=100;$i++)
    {
        echo "&nbsp;&nbsp;<button class='aaa'>{$i}</button>&nbsp;&nbsp;";
        if($i%10==0){
            echo "<br>";
        }
    }

?>
<style>
.color{
    color:red;
}
</style>
<script src="/jquery.js"></script>
<script>
    $(document).on("click",".aaa",function(){
        if(window.confirm('你确定要选中此座位吗')){ 
            $(this).addClass('color');
        }else{ 
            $(this).removeClass('color');
        }
    });
</script>