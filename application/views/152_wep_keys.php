
<div class="panel panel-default">
    <div class="panel-heading">
         <h3 class="panel-title">152-bit WEP Keys <a href="<?php echo site_url('app/wep152') ?>"><i class="fa fa-file-code-o"></i></a></h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <input type="text" id="txt_152_wep_0" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_152_wep_1" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_152_wep_2" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('txt_152_wep_0').value = decode64("<?php echo $wep_1521 ?>");
    document.getElementById('txt_152_wep_1').value = decode64("<?php echo $wep_1522 ?>");
    document.getElementById('txt_152_wep_2').value = decode64("<?php echo $wep_1523 ?>");
</script>