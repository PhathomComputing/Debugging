<?php
?>
<div style="padding:15px;position:fixed;top:25%;left:0px;z-index:110; width:600px; height:700px; background-color:rgba(200,150,150,.9);" id="debugWindow">
  <div style="position:relative;width:100%; height:30px;">
    <h1>Debug Console</h1>
    <div id="debug-toggle" style="position:relative;float:right;"></div>
  </div>
  <div style="position:relative;overflow-y:scroll; width:100%; height:90%;">
    <p>
      <?php
        if(isset($debug))
        {

          foreach ($debug as $key => $value) {
            if(is_array($value)){
              echo "array?";
              print_r($value);
            } else {
              echo $value;
            }
            echo "</br>=======================================</br>";
          }
          if(!empty($debug)){

          }
          else {
            echo "Debug is empty! Items:".$count;
          }
        } else {
          echo "Debug is not being called!";
        }
      ?>
    </p>
  </div>
</div>
<div id="debugControl" style="position:fixed;left:0px;bottom:0px;">
<span id="debug-hide" class="glyphicon glyphicon-arrow-left"></span>
<span id="debug-show" class="glyphicon glyphicon glyphicon-arrow-right">
</div>
<script type="text/javascript">

$(document).ready(function(){
  $("#debug-hide").click(function(){
    $("#debugWindow").animate({left:'-590px'},function(){
      //$("#debug-toggle").html('<span id="debug-show" class="glyphicon glyphicon glyphicon-arrow-right"></span>');
    });
  });
  $("#debug-show").click(function(){
    $("#debugWindow").animate({left:'0px'},function(){
      //$("#debug-toggle").html('<span id="debug-hide" class="glyphicon glyphicon glyphicon-arrow-left"></span>');
    });
  });
});

</script>
