  <!-- JavaScript -->
  <script src="<?php echo base_url().'assets/simple/js/jquery-1.10.2.js'?>"></script>
    <script src="<?php echo base_url().'assets/simple/js/bootstrap.js'?>"></script>

    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>