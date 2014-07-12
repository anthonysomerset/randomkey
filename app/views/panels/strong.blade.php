<div class="panel panel-default">
    <div class="panel-heading">
         <h3 class="panel-title">Strong Passwords <a href="/strong"><i class="fa fa-file-code-o"></i></a></h3>
    </div>
    <div class="panel-body">
        <p>Strong enough for a bank account, or an account that is open to the public.</p>
        <div class="form-group">
            <input type="text" id="txt_strong_pw_0" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_strong_pw_1" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
        <div class="form-group">
            <input type="text" id="txt_strong_pw_2" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('txt_strong_pw_0').value = decode64("{{ $keys[0] }}");
    document.getElementById('txt_strong_pw_1').value = decode64("{{ $keys[1] }}");
    document.getElementById('txt_strong_pw_2').value = decode64("{{ $keys[2] }}");
</script>