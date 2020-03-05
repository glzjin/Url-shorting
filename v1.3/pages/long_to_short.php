<?php

    function is_pjax(){ 
      return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX']; 
    }
    
    if( is_pjax() ){
        
    }
    else{
        header("location:../");
        exit();
    }

?>



<br><br>
<!--<div class="mdui-chip">
    <span class="mdui-chip-title">Example Chip</span>
</div>-->
<div class="mdui-card">
    <div class="mdui-card-content">
        <div class="mdui-textfield mdui-textfield-floating-label" style="width : 95%">
          <label class="mdui-textfield-label">长链接</label>
            <input class="mdui-textfield-input" type="text" id="long_url"/>
        </div>
        <button class="mdui-fab mdui-ripple" onclick="go_short()"><i class="mdui-icon material-icons">arrow_forward</i></button>
    </div>
    
</div>



<script>
    function go_short(){
        var long_url = $("#long_url").val()
        console.log(short_url)
        $.pjax({
            url : "/pages/long_s_short.php",
            container : "#pjax-change",
            type : "post",
            data : { "longurl" : long_url }
        })
    }
</script>