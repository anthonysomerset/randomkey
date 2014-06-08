
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Ft. Knox Passwords <a href="<?php echo site_url('app/ftknox') ?>"><i class="fa fa-file-code-o"></i></a></h3>
    </div>
    <div class="panel-body">
        <p>Strong enough for anything, like root or administrator passwords.</p>
        <div class="form-group">
            <input type="text" id="txt_ft_knox_pw_0" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_ft_knox_pw_1" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_ft_knox_pw_2" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('txt_ft_knox_pw_0').value = decode64("<?php echo $ftknox1 ?>");
    document.getElementById('txt_ft_knox_pw_1').value = decode64("<?php echo $ftknox2 ?>");
    document.getElementById('txt_ft_knox_pw_2').value = decode64("<?php echo $ftknox3 ?>");
</script>