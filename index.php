<?php  include('insert.php');
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $record = mysqli_query($conn, "SELECT * FROM info WHERE id=$id");
    if($record->num_rows>0) {
        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $address = $n['address'];
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Insert Crud Records</h1>
	<form method="post" action="insert.php" >
		<div class="input-group">
			<label>Name</label>
            <input type="text" name="name" pattern="[A-Za-z0-9]+" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
            <input type="text" name="address" pattern="[A-Za-z0-9]+" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
        <?php if ($update == true): ?>
	    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
	    <button class="btn" type="submit" name="save" >Save</button>
        <button id="second" class="btn btn-secondary"><a href="show.php">Show Records</a></button>
        <?php endif ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
		</div>
	</form>
    <?php
          if(isset($_SESSION["message"])):
          ?>
          <div class="msg" onClick = "this.style.visibility= 'hidden';">
              <?php
               echo $_SESSION['message'];
                  unset($_SESSION['message']); ?>
          </div>
          <?php endif ?>
</body>
</html>