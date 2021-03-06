

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AWS</title>

        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
    </head>
    <body>
        <input type="hidden" name="base_url" id="base_url" value="<?= base_url(); ?>" />
        <div class="wrapper">
            <div class="header">
                <div class="col-md-8 pull-left top-header">
                    <h1 class="title">Amazon Web Services</h1>
                    <h4 class="title">Amazon Route 53</h4>
                </div>
                <div class="col-md-2">
                    <p>Logged in as <strong><?= "Dropigee" ?></strong></p>
                    <p class="text-center"><a href="<?= base_url();?>index.php/welcome/logout"><strong>Logout</strong></a></p>
                </div>
            </div>
            <div class="container ">
                <div class="left-block col-md-10">
                    <div class="row">
                        <div class=" col-md-12 form-group">
                            <h3>Already have a Domain Name?</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input class="form-control" id="old_domain" name="old_domain" placeholder="example.com"  type="text" required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="button" id="old_domain_btn" class="btn btn-primary pull-right" value="Get NS" />
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-12 form-group">
                            <h3>Register new Domain and get served</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-12 form-group">
                            <input class="form-control" id="old_domain" name="new_domain" placeholder="example.com"  type="text" required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="button" class="btn btn-primary pull-right" value="Register" />
                        </div>
                    </div>
                </div>
                <div class="right-block col-md-4">
                    <div class="row">
                        <div>
                            Result:
                        </div>
                    </div>
                    <div class="row">
                        <div id="result">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

