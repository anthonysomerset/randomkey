
<div class="panel panel-default">
    <div class="panel-heading">
         <h3 class="panel-title">504-bit WPA Key <a href="/wpa504"><i class="fa fa-file-code-o"></i></a></h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <input type="text" id="txt_504_wpa_0" class="form-control" onclick="javascript:this.select();" value="" />
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById('txt_504_wpa_0').value = decode64("{{ $keys[0] }}");
</script>