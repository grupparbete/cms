<!DOCTYPE HTML>
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<div id="containet">
	<h1> <h1>


		<div id="main">

			<div id="hardwired">
				<?php 
				require 'mm.php';
				$db = new Db();

				$query = "SELECT * FROM hardwired ORDER BY id asc";
				$results = $db->mysql->query($query);

				if($results->num_rows) {
					while($row = $results->fetch_object()){
						$title = $row->title;
						$description = $row->description;
						$id = $row->id;

						echo '<div class="item">';

						$data = <<<EOD
						<h4>$title</h4>
						<p>$description</p>
						<input type="hidden" name"id" id="id" value="$id" />
						<div class="options">
						<button class="deleteEntryAnchor" href="delete.php?id=$id">Delete</button>
						<button class="editEntry" href="#">Edit</button>
						</div>
EOD;
						echo $data;
						echo '</div>';
					} 
				} 
				
				?>

			</div> 

			<div id="addNewEntry">
				
				<form action="add.php" method="post">
					<p>
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="input">
					</p>

					<p>
					<label for="description"></label>
					<textarea name="description" id="description" class="input" rows="10" cols="35"></textarea>
					</p>

					<p>
					<input type="submit" name="addEntry" id="AddEntry" value="Add post" />
					</p>
				</form>
			</div>

		</div> 
	</div>	

</body>
</html>