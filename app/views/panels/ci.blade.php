
<div class="panel panel-default">
    <div class="panel-heading">
         <h3 class="panel-title">CodeIgniter Encryption Keys <a href="/ci"><i class="fa fa-file-code-o"></i></a></h3>
    </div>
    <div class="panel-body">
        <p>Can be used for any other 256-bit key requirement.</p>
        <div class="form-group">
            <input type="text" id="txt_ci_key_0" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_ci_key_1" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_ci_key_2" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('txt_ci_key_0').value = decode64("{{ $keys[0] }}");
    document.getElementById('txt_ci_key_1').value = decode64("{{ $keys[1] }}");
    document.getElementById('txt_ci_key_2').value = decode64("{{ $keys[2] }}");
</script>