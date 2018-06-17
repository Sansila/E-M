			<script type="text/javascript">
				// $(function(){
					$('body').on('loading.start', function(event, loadingObj) {
					  	// $('body').css('pointer-event','none');
					  	$("input[type='text']").prop('disabled',true);
					  	// do something whenever the loading state of #my-element is turned on
					});
					$('body').on('loading.stop', function(event, loadingObj) {
					  	// $('body').css('pointer-event','none');
					  	$("input[type='text']").prop('disabled',false);
					  	// do something whenever the loading state of #my-element is turned on
					});
				// 	setTimeout(function(){ $('body').loading('stop'); }, 3000);
				// })
				$('select.select2').select2();
			</script>
            <!-- End of content -->
            
        </div>
        <!-- /#page-wrapper -->
		
    </div>
    <!-- /#wrapper --> 	
    <!-- Date pictker -->
    
    <script src="<?php echo base_url('assets/js/gScript.js')?>"></script> 

</body>
</html>
