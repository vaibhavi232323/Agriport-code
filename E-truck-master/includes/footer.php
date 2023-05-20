<!-- Footer -->
<footer class="py-3 bg-dark">
      <div class="container">
        <p class="text-center text-white">
          <a style="color:white" href="https://github.com/vaibhavi232323"><i class="fab fa-github fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.linkedin.com/in/vaibhavi-tandon-5b45081b8/"><i class="fab fa-linkedin fa-2x mr-3"></i></a>
          <br><br>&copy; <?php echo date("Y");?> |
          Design By <a href="https://github.com/vaibhavi232323" style="color:yellow">Vaibhavi Tandon</a>
        </p>
      </div>
      <!-- /.container -->
</footer>    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js/script.js"></script>

    <!-- footer manage -->
    <script>
      $(document).ready(function(){
          if($('body').height() < $(window).height()*0.8){
            $('footer').css({
              "position": "fixed", "width": "100%", "bottom": "0"
            })
          }
      })
    </script>
    
  </body>
</html>