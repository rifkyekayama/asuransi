			<?php include('../includes/footer.php');?>
			  
			<!-- Add the sidebar's background. This div must be placed
			immediately after the control sidebar -->
			<div class='control-sidebar-bg'></div>

			<div class="modal fade modal-danger modal-confirm">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Peringatan!</h4>
						</div>
						<div class="modal-body">
							Apakah yakin akan menghapus data ini?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
							<button type="button" class="btn btn-outline modal-konfirmasi">Ya</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<div class="modal fade modal-info modalDataNasabah">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Detail Data Nasabah!</h4>
						</div>
						<div class="modal-body modalDataNasabahContainer">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Tutup</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<div class="loading" style="display:none;">Loading&#8230;</div>
		</div><!-- ./wrapper -->

		<!-- jQuery 2.1.4 -->
		<script src="../../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- pace -->
		<script src="../../assets/plugins/pace-loader/pace.min.js" type="text/javascript"></script>
		<!-- Bootstrap 3.3.2 JS -->
		<script src="../../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- DATE PICKER -->
   		<script src="../../assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
   		<script type="text/javascript">
	   		$(function(){
	   			$('.tglLahir').datepicker({format: 'dd-mm-yyyy'});
	   		});
   			$(document).ready(function(){
   				$('.btnShowDataNasabah').on('click', function(e){
   					e.preventDefault();
   					$.ajax({
   						type: "GET",
   						url: "aksi/_showDataNasabah.php?id="+this.id,
   						success: function(data){
   							$('.modalDataNasabahContainer').html(data);
   							$('.modalDataNasabah').modal('show');
   						}
   					});
   				});

   				$('.deleteDataNasabah').on('click', function(e){
   					e.preventDefault();
   					var idNasabah = this.id;
   					$('.modal-confirm').modal('show');
   					$('.modal-konfirmasi').on('click', function(e){
   						e.preventDefault();
   						$('.modal-confirm').modal('hide');
   						window.location.assign('lihatDataNasabah.php?idDelete='+idNasabah);
   					});
   				});

   				$('.deleteDataAgen').on('click', function(e){
   					e.preventDefault();
   					var idNasabah = this.id;
   					$('.modal-confirm').modal('show');
   					$('.modal-konfirmasi').on('click', function(e){
   						e.preventDefault();
   						$('.modal-confirm').modal('hide');
   						window.location.assign('lihatDataAgen.php?idDelete='+idNasabah);
   					});
   				});

   				$('.deleteDataPenjualan').on('click', function(e){
   					e.preventDefault();
   					var idNasabah = this.id;
   					$('.modal-confirm').modal('show');
   					$('.modal-konfirmasi').on('click', function(e){
   						e.preventDefault();
   						$('.modal-confirm').modal('hide');
   						window.location.assign('lihatDataPenjualan.php?idDelete='+idNasabah);
   					});
   				});
   			});
   		</script>
		<!-- DATA TABES SCRIPT -->
    	<script src="../../assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    	<script src="../../assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    	<script type="text/javascript">
			$(function () {
				$("#example1").DataTable();
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			});
    	</script>
		<!-- SlimScroll -->
		<script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<!-- ChartJS 1.0.1 -->
		<script src="../../assets/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
		<!-- FastClick -->
		<script src='../../assets/plugins/fastclick/fastclick.min.js'></script>
		<!-- AdminLTE App -->
		<script src="../../assets/dist/js/app.min.js" type="text/javascript"></script>

		<!-- Demo -->
		<script src="../../assets/dist/js/demo.js" type="text/javascript"></script>
	</body>
</html>