
<div class="panel panel-default">
    <div class="panel-heading">
         <h3 class="panel-title">64-bit WEP Keys <a href="<?php echo site_url('app/wep64') ?>"><i class="fa fa-file-code-o"></i></a></h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <input type="text" id="txt_64_wep_0" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_64_wep_1" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_64_wep_2" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('txt_64_wep_0').value = decode64("<?php echo $wep_641 ?>");
    document.getElementById('txt_64_wep_1').value = decode64("<?php echo $wep_642 ?>");
    document.getElementById('txt_64_wep_2').value = decode64("<?php echo $wep_643 ?>");
</script>