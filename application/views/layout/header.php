<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php echo $titulo; ?></title>

<?php if(isset($styles)) : ?>
    <?php foreach($styles as $style) : ?>
        <link rel="stylesheet" href="<?php echo base_url('public/' . $style); ?>">  
    <?php endforeach; ?>
<?php endif; ?> 

  </head>
  <body>