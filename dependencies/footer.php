
<div id="copyright">
	<?php date_default_timezone_set('America/Los_Angeles'); ?>
	Copyright &copy; Brown Design Group <?php echo date('Y') ?>
</div>

<!-- Javascript -->

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<?php if ($active == 'index' || $active == 'portfolio' || $active == 'contact'): ?>
<!-- Carousel Background -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<?php endif; ?>