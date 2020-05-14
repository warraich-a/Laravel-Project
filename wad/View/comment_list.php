<?php
include '../Model/functions.php';
session_start();
$id = $_SESSION['tid'];
$result =commentListValue($id);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_object($result))
	{
		?>
		
		<div class='question'>
		<br><p class='post_text' id = "comment_name"><b><?php echo $row->name;?></b></p>

		<p class='post_text'><i><?php echo $row->comment;?></i></p><br>
		</div>
		<br>
		<?php
	}
}
?>