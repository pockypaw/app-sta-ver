<?php require("header.php");?>
<?php

include_once("config.php");
$id = $_GET['id'];

$hasil = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id=$id");

while($pengguna_data = mysqli_fetch_array($hasil))
{
	$id = $pengguna_data['id'];
    $username = $pengguna_data['username'];
    $email = $pengguna_data['email'];
    $komentar = $pengguna_data['komentar'];
    $info = $pengguna_data['info'];
}
?>

        <div class='cards'>
<div class='card-header'>
				<center><h3>Update Tweet App</h3></center>
				<hr>
			</div>
			<div class="card-body">
				<form method="post" action="edit.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" value=<?php echo $username;?>>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-social"></i></span>
						</div>
						<input type="text" name="email" class="form-control" value=<?php echo $email;?>>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-social"></i></span>
						</div>
						<input type="text" name="komentar" class="form-control" value=<?php echo $komentar;?>>
					</div>
					<div class="form-group">
						<input type="hidden" name="id" value=<?php echo $id?>><input type="submit" name ="kirim" value="Update!" class="btn float-right login_btn">
					</div>
					
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

    </form>
    <?php require("footer.php");?>