<center>
<div class="modal-body">
	                
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<legend><h4>Add</h4></legend>
                                <h4>Book Information</h4>
                                <hr>
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Title</label></td>
							<td width="30"></td>
							<td><input type="text" name="title" placeholder="Title" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Author</label></td>
							<td width="30"></td>
							<td><input type="text" name="author" placeholder="Author" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Price</label></td>
							<td width="30"></td>
							<td><input type="text" name="price" placeholder="Price" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Description</label></td>
							<td width="30"></td>
							<td><input type="text" name="description" placeholder="Description" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Publisher</label></td>
							<td width="30"></td>
							<td><input type="text" name="publisher" placeholder="Publisher" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">ISBN</label></td>
							<td width="30"></td>
							<td><input type="text" name="isbn" placeholder="ISBN" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <a href="index.php" class="btn">Cancel</a>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>	
</center>	