<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-horizontal" role="form" method="post" action="<?php echo $formAction;?>">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Feedback</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="email" name="email" class="form-control" placeholder="Your Email">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea name="message" class="form-control" placeholder="Enter Message"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="submit" class="btn btn-primary pull-right" name="feedback" value="Send">
					</div>
				</div>
			</div>
		</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->