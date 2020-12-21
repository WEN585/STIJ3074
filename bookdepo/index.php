<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Bookdepo</title>
	</head>
	
	<body>
	
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
		<thead>
        <tr>
      		<th style="text-align:center;">Title</th>
            <th style="text-align:center;">Author</th>
            <th style="text-align:center;">Price</th>
            <th style="text-align:center;">Description</th>
            <th style="text-align:center;">Publisher</th>
			<th style="text-align:center;">ISBN</th>
			<th style="text-align:center;">Action</th>
             </tr>
            </thead>
                <tbody>
			       <?php
					require_once('dbconnect.php');
					$result = $conn->prepare("SELECT * FROM book ORDER BY id ASC");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					$id=$row['id'];
					?>
					<tr>
					 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['title']; ?></td>
					<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['author']; ?></td>
					<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['price']; ?></td>
					<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['description']; ?></td>
					<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['publisher']; ?></td>
					<td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['isbn']; ?></td>
					<td style="text-align:center; width:350px;">
					<a href="updatebook.php<?php echo '?id='.$id; ?>" class="btn btn-info">Update</a>
					<a href="delete.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i>Delete</a>
					</td>
									
										
					<?php } ?>
                 </tbody>
                </table>
			<p align='center'><a href='addbook.php' >Add Book <a></p>
	
	
	</body>
</html>
	