  </main>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
  window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.12.0.min.js"><\/script>')
</script>
<script src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#tablehome').DataTable();
    $('#tabpills a').on('click', function(event){
      $(this).toggleClass('active');

} );
} );

</script>
<script src="https://use.fontawesome.com/a0c828b765.js"></script>


</body>
</html>
