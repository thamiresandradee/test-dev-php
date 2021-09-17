

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('public/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
  
<?php if(isset($scripts)) : ?>
    <?php foreach($scripts as $script) : ?>
        <script src="<?php echo base_url('public/' . $script); ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>