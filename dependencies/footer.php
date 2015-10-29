
<div id="copyright">
	Copyright &copy; Brown Design Group <?php echo date('Y') ?>
</div>

<!-- Javascript -->

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<?php if ($active == 'index' || $active == 'portfolio' || $active == 'contact'): ?>
<!-- Carousel Background -->
<script src="js/lib/jquery.easing.min.js"></script>
<script src="js/lib/supersized.3.2.7.min.js"></script>
<script src="js/lib/supersized.shutter.min.js"></script>
<script src="js/lib/jquery.touchwipe.min.js"></script>

<script type="text/javascript">
	if ($('#nav-prev')) {
		$("body").touchwipe({
			wipeLeft: function() { 
			 $("#nav-prev").trigger('click');
		 },
			wipeRight: function() { 
			 $("#nav-next").trigger('click');
		 },
			preventDefaultEvents: true
		});
	}
	
</script>

<?php endif; ?>