<style>
.color{
    background-color:red;
}
</style>
<?php

    $redis = new Redis();
    $redis->connect('127.0.0.1');

    $key = 'bbb';
    $abc=$redis->zRange($key,0,-1);
    for($i=1;$i<=100;$i++)
    {
        if(in_array($i,$abc)){
            echo "&nbsp;&nbsp;<button class='aaa color'>{$i}</button>&nbsp;&nbsp;";
        }else{
            echo "&nbsp;&nbsp;<button class='aaa'>{$i}</button>&nbsp;&nbsp;";
        }
        if($i%10==0){
            echo "<br>";
        }
    }
    
?>
<script src="/jquery.js"></script>
<script type="text/javascript">
    $(document).on("click",".aaa",function(){
        var _this=$(this);
        var aaa=_this.text();
        // console.log(aaa);
        if(window.confirm('你确定要选中此座位吗')){ 
            var xhr = new XMLHttpRequest()
            xhr.onreadystatechange = function (){
                if(xhr.readyState == 4 && xhr.status == 200){
                    if(xhr.responseText == 'ok'){
                        alert('选座成功!');
                        _this.addClass('color');
                    }else{
                        alert('该座位已被选定,请重新选座!');; 
                    }
                }
            }
            xhr.open('GET','2.php?aaa='+aaa);
            xhr.send();
        }
    });
</script>