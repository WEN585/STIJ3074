<?php
require_once('dbconnect.php');
$id=$_GET['id'];
$result = $conn->prepare("SELECT * FROM book where id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>
<center>
<div>
<form class="form-horizontal" method="post" action="update.php<?php echo '?id='.$id; ?>"  enctype="multipart/form-data" style="float: center;">
                                <legend><h4>Update</h4></legend>
                                <h4>Book Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Title:</label>
                                    <div class="controls">
                                        <input type="text" name="title" required value=<?php echo $row['title']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Author:</label>
                                    <div class="controls">
                                        <input type="text" name="author" required value=<?php echo $row['author']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Price:</label>
                                    <div class="controls">
                                        <input type="text" name="price" required value=<?php echo $row['price']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text" name="description" required value=<?php echo $row['description']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Publisher:</label>
                                    <div class="controls">
                                        <input type="text" name="publisher" required value=<?php echo $row['publisher']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">ISBN:</label>
                                    <div class="controls">
                                        <input type="text" name="isbn" required value=<?php echo $row['isbn']; ?>>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index.php" class="btn">Cancel</a>
                                    </div>
                                </div>
                            </form>
							</div>
							</center>
<?php } ?>