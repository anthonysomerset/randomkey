<div class="panel panel-default">

    <div class="panel-heading"><h3 class="panel-title">Your Information</h3></div>

    <div class="panel-body">

        <h4>Your IP: 
            <small><?php echo $this->input->ip_address(); ?></small>
            <a href="<?php echo site_url('app/ip_address') ?>"><i class="fa fa-file-code-o"></i></a>
        </h4>

        <h4>Your User Agent: <small><?php echo $this->input->user_agent(); ?></small></h4>

    </div>

</div>