<div class="comments-section">
	<h3>See what others tell about us</h3>
	<div class="detailBox">
		<div class="titleBox">
			<label>Comment Box</label>
			<button type="button" class="close" aria-hidden="true">&times;</button>
		</div>
		<div class="commentBox">

			<p class="taskDescription">Leave us your feedback - it will improve the quality of our product!</p>
		</div>
		<div class="actionBox">
			<?php for($i = 0; $i < count($commentList); $i++) : ?>
				<ul class="commentList">
					<li>
						<h5 class="commentName"><?= $commentList[$i]["name"]; ?></h5>
						<div class="commentText">
							<p class=""><?= $commentList[$i]["comment"]; ?></p>
						</div>
					</li>
				</ul>
			<?php endfor ?>
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" role="form">
				<div class="form-group nameInput">
					<input name="name" class="form-control" type="text" placeholder="Your name" />
				</div>
				<div class="form-group commentInput">
					<textarea name="comment" class="form-control" type="text" placeholder="Your comments"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Add comment" class="btn btn-primary" />
				</div>
			</form>
		</div>
	</div>
</div>