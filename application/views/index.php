<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <title><?=APP_NAME;?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?=base_url();?>css/plugins/jquery-ui/jquery-ui.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?=base_url();?>css/style.css">
    <!-- Color CSS -->
    <link rel="stylesheet" href="<?=base_url();?>css/themes.css">
    <!-- icheck -->
    <link rel="stylesheet" href="<?=base_url();?>css/plugins/icheck/all.css">
    <!-- dataTables -->
    <link rel="stylesheet" href="<?=base_url();?>css/plugins/datatable/TableTools.css">
    <!-- chosen -->
    <link rel="stylesheet" href="<?=base_url();?>css/plugins/chosen/chosen.css">
    <!-- <link rel="stylesheet" href="<?=base_url();?>css/pnotify.custom.min.css"> -->
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="<?=base_url();?>css/fullcalendar.css">

    <link rel="stylesheet" href="<?=base_url();?>css/plugins/gritter/jquery.gritter.css">

    <!-- jQuery -->
    <script src="<?=base_url();?>js/jquery.min.js"></script>
    <script src="<?=base_url();?>js/jquery.js"></script>
    <!-- Nice Scroll -->
    <script src="<?=base_url();?>js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- imagesLoaded -->
    <script src="<?=base_url();?>js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?=base_url();?>js/plugins/jquery-ui/jquery-ui.js"></script>
    <!-- slimScroll -->
    <script src="<?=base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url();?>js/bootstrap.min.js"></script>
    <!-- Bootbox -->
    <script src="<?=base_url();?>js/plugins/bootbox/jquery.bootbox.js"></script>
    <!-- Bootbox -->
    <script src="<?=base_url();?>js/plugins/form/jquery.form.min.js"></script>
    <!-- Validation -->
    <script src="<?=base_url();?>js/plugins/validation/jquery.validate.min.js"></script>
    <script src="<?=base_url();?>js/plugins/validation/additional-methods.min.js"></script>
    <!-- Chosen -->
    <script src="<?=base_url();?>js/plugins/chosen/chosen.jquery.min.js"></script>

    <!-- icheck -->
    <script src="<?=base_url();?>js/plugins/icheck/jquery.icheck.min.js"></script>

    <!-- Flot -->
    <script src="<?=base_url();?>js/plugins/flot/jquery.flot.min.js"></script>
    <script src="<?=base_url();?>js/plugins/flot/jquery.flot.resize.min.js"></script>

    <!-- Theme framework -->
    <script src="<?=base_url();?>js/eakroko.min.js"></script>
    <!-- Theme scripts -->
    <script src="<?=base_url();?>js/application.min.js"></script>
    <!-- Just for demonstration -->
    <script src="<?=base_url();?>js/demonstration.min.js"></script>
    <!-- New DataTables -->
    <script src="<?=base_url();?>js/plugins/momentjs/jquery.moment.min.js"></script>
    <script src="<?=base_url();?>js/plugins/momentjs/moment-range.min.js"></script>
    <script src="<?=base_url();?>js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>js/pnotify.custom.min.js" type="text/javascript"></script>
    <!-- FullCalendar -->
    <script src='<?=base_url();?>js/moment.min.js'></script>
    <script src='<?=base_url();?>js/fullcalendar.min.js'></script>

    <!-- Wizard -->
    <script src="<?=base_url();?>js/plugins/wizard/jquery.form.wizard.min.js"></script>
    <script src="<?=base_url();?>js/plugins/mockjax/jquery.mockjax.js"></script>

    <script src="<?=base_url();?>js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- <script src="<?=base_url();?>js/header.js"></script> -->
    <!-- <script src="<?=base_url();?>js/notif.js"></script> -->


    <!--[if lte IE 9]>
        <script src="<?=base_url();?>js/plugins/placeholder/jquery.placeholder.min.js"></script>
        <script>
            $(document).ready(function() {
                $('input, textarea').placeholder();
            });
        </script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>img/original-logo.png" />
    <!-- Apple devices Homescreen icon -->
    <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>img/apple-touch-icon-precomposed.png" />

</head>
    <?php $this->load->view($page); ?>
</body>

</html>