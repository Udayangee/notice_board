<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online_notice_board</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url('assests/css/admin/admin.css')?>">
    <?php echo '<link rel="stylesheet" href="'.base_url($cssfile_name).'">'; ?>
</head>
<body>
    
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
