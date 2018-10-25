<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <!-- <a href="#">
                                Home
                            </a> -->
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, BPS Palembang
                </div>
            </div>
        </footer>

    </div>
</div>

</body>
    <script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
	<script src="assets/js/paper-dashboard.js"></script>
	<script src="assets/js/demo.js"></script>
    <script>
        $(document).ready(function(){
            var path = window.location.href;
            $('ul li a').each(function(){
                if (this.href === path) {
                    $(this).closest('li').addClass('active');
                }   
            });

            demo.initChartist();
            var nama = "<?php echo $nama; ?>"

            $.notify({
                icon: 'ti-user',
                message: "Welcome "+nama+", Selamat bekerja jangan lupa berdoa"

            },{
                type: 'success',
                timer: 2000
            });

            $("#nama_pegawai").change(function() {
                var nm_pgw = $(this).val();
                if (nm_pgw != ""){
                   $.ajax({
                    type:"post",
                    url:"getjabatan.php",
                    data:"nama="+ nm_pgw,
                    success: function(data){
                     $("#jabatan").html(data);
                    }
                   });
                }
            });

            gone = function(val){
              var form1 = $("#no_edit");
              var form2 = $("#edit");

              if (val.checked == true)
              {
                  form1.addClass('gone');
                  form2.removeClass('gone');
              }
              else
              {
                  $("#no_edit").removeClass('gone');
                  $("#edit").addClass('gone');
              }
            }
        });
    </script>
</html>