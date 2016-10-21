<footer id="footer">
        <div class="container">
		<div class="row">
			<div class="col-lg-8 col-xs-12">  
				
			<p class="text-left"> copyright &copy; <?php echo date('Y') .' <a href="'.$bps_url->getSetting().'">'. $bps_nama->getSetting().'</a>'; ?>. All Rights Reserved.</p>
			  <p class="text-left"><i class="fa fa-home fa-fw" aria-hidden="true"></i> <?php echo $bps_alamat->getSetting() .'</p>
			  <p class="text-left visible-md visible-lg"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> '. $bps_telepon->getSetting() .' <i class="fa fa-fax fa-fw" aria-hidden="true"></i> '. $bps_fax->getSetting() .'' ?> </p>
			  <p class="text-left visible-xs"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> <?php echo $bps_telepon->getSetting(); ?> </p>
			  <p class="text-left visible-xs"><i class="fa fa-fax fa-fw" aria-hidden="true"></i> <?php echo $bps_fax->getSetting(); ?> </p>
			 
			</div>
			<div class="col-lg-4 col-xs-12">
						<ul class="soc-footer">

</ul>

			</div>
		</div>
		</div>
</footer>

	<div id="back-top" style="display: none;">
        <a href="#header"><i class="fa fa-chevron-up"></i></a>
    </div>
<!-- JavaScript -->
    <script src="<?php echo $bps_url->getSetting(); ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo $bps_url->getSetting(); ?>/addons/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo $bps_url->getSetting(); ?>/addons/validator/js/bootstrapValidator.min.js"></script>
	<script src="<?php echo $bps_url->getSetting(); ?>/js/bpsntb.js"></script>
	<script src="<?php echo $bps_url->getSetting(); ?>/addons/datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $bps_url->getSetting(); ?>/addons/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		 $(document).ready(function() {
          $('#tanggal').datepicker({
       format: "yyyy-mm-dd", 
	   autoclose: true
  });
  
           $('#tanggal').datepicker()
    .on("changeDate", function(e){

      $('#pegawai_tgl_lahir').prop('readonly',false);
      $('#pegawai_tgl_lahir').val(e.format('yyyy-mm-dd'));
      $('#pegawai_tgl_lahir').prop('readonly',true);

  });
  
});
	$(document).ready(function() {
          $('#tgl_cpns').datepicker({
       format: "yyyy-mm-dd", 
	   autoclose: true
  });
  
           $('#tgl_cpns').datepicker()
    .on("changeDate", function(e){

      $('#pegawai_tmt_cpns').prop('readonly',false);
      $('#pegawai_tmt_cpns').val(e.format('yyyy-mm-dd'));
      $('#pegawai_tmt_cpns').prop('readonly',true);

  });
  
});
$(document).ready(function() {
          $('#tgl_pns').datepicker({
       format: "yyyy-mm-dd", 
	   autoclose: true
  });
  
           $('#tgl_pns').datepicker()
    .on("changeDate", function(e){

      $('#pegawai_tmt_pns').prop('readonly',false);
      $('#pegawai_tmt_pns').val(e.format('yyyy-mm-dd'));
      $('#pegawai_tmt_pns').prop('readonly',true);

  });
  
});
	</script>
	
	
</body>
<?php //tutup_db($con); ?>
</html>    