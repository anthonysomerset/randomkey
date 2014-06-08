<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Chris Kacerguis">
        <title>Random Password and Key Generator</title>

        <!-- Bootstrap core CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fontawesome core CSS -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo site_url('_assets/css/sticky-footer.css') ?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <script src="<?php echo site_url('_assets/js/decode64.js') ?>"></script>


    </head>

    <body>

    <!-- Begin page content -->
    <div class="container">
    <div class="page-header">
        <h1>Random Key Generator</h1>
    </div>

    <p class="lead">
        Welcome to Random Key Generator, here you will find a variety of random keys that can be used for 
        passwords, encryption keys, etc. - all randomly generated, just for you! Simply refresh this page for a 
        completly new set of keys.
    </p>

    <p>
        <div class="alert alert-info">
            <strong>Heads Up!</strong>&nbsp;
            You can click on the <i class="fa fa-file-code-o"></i> to get a page with just the desired key, for us in an application.
        </div>
    </p>


    <!--
    <p>
    This site is based on http://randomkeygen.com, however it has been enhanced with more options, and an API to be 
    more helpful for web developers.
    </p>-->
    <form>

    <div class="row">
    <div class="col-md-4">
    <?php $this->load->view('decent_pw'); ?>
    </div>

    <div class="col-md-4">
    <?php $this->load->view('strong_pw'); ?>
    </div>

    <div class="col-md-4">
    <?php $this->load->view('ftknox_pw'); ?>
    </div>
    </div>


    <div class="row">
    <div class="col-md-4">
    <?php $this->load->view('ci_keys'); ?>
    </div>

    <div class="col-md-4">
    <?php $this->load->view('160_wpa_keys'); ?>
    </div>

    <div class="col-md-4">
    <?php $this->load->view('504_wpa_keys'); ?>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <?php $this->load->view('64_wep_keys') ?>
    </div>

    <div class="col-md-4">
    <?php $this->load->view('128_wep_keys') ?>

    </div>

    <div class="col-md-4">
    <?php $this->load->view('152_wep_keys') ?>
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <?php $this->load->view('256_wep_keys') ?>
    </div>
    </div>



    </form>
    </div> <!-- ./container -->

    <div id="footer">
    <div class="container">
    <p class="text-muted"><small>Written by Chris Kacerguis.
        This site is based off of randomkeygen.com, it add several features, and a new 
        look that the old site didn't offer.</small></p>
    </div>
    </div>





    </body>
</html>
