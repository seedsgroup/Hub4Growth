<script type="text/javascript" src="<?php echo DTABLE_JS_URL; ?>jquery.dataTables.min.js"></script>
<script type="text/javascript">
/* Init the table and fire off a call to get the hidden nodes. */
$(document).ready(function() {
    $('#listUser').dataTable();
} );

$(document).ready(function() {
    $('#listPositions').dataTable();
} );

$(document).ready(function(){
	$('#listEnquiry').dataTable();
});
$(document).ready(function(){
	$('#getBanners').dataTable();
});
</script>
