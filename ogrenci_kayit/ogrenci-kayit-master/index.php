<?php
	$baglanti = mysql_connect("localhost","root",""); // 3.parametre olarak şifrenizi girin
	$veritabani = mysql_select_db("ogrenci_kayit",$baglanti);

	if ($_POST[isim] and $_POST[soyisim] and $_POST[no] and $_POST[sinif])  {
		mysql_query("INSERT INTO ogrenciler (isim,soyisim,no,sinif) VALUES (
			'$_POST[isim]','$_POST[soyisim]','$_POST[no]','$_POST[sinif]'
	)");
	}
	if (is_numeric($_GET[ogrId])) {
		mysql_query("DELETE FROM ogrenciler WHERE id = '$_GET[ogrId]'");
		header("Location: http://localhost/ogrenci_kayit/");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İlk PHP Uygulamam</title> 
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 class="text-center text-primary">Öğrenci Kayıt Uygulaması</h1>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="background-color: lightblue; border:1px solid blue; padding:15px;">
				<form method="post">
					<div class="form-group">
						<label>İsim:</label>
						<input type="text" name="isim" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Soyisim:</label>
						<input type="text" name="soyisim" class="form-control" required>
					</div>
					<div class="form-group">
						<label>No:</label>
						<input type="text" name="no" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Sınıf:</label>
						<select class="form-control" name="sinif">
							<option value="" disabled selected>Lütfen bir sınıf seçiniz</option>
							<option value="9">9. Sınıf</option>
							<option value="10">10. Sınıf</option>
							<option value="11">11. Sınıf</option>
							<option value="12">12. Sınıf</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" value="Kaydet" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
		<hr>
		<h4 class="text-center text-danger"><b>Güncel Sınıf Listesi</b></h4>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-bordered table-striped">
				<thead>
					<th>id</th>
					<th>İsim</th>
					<th>Soyisim</th>
					<th width="75">No</th>
					<th width="100">Sınıf</th>
					<th width="100"></th>
				</thead>
				<tbody>
					<?php 
						$sqlCommand = mysql_query("SELECT * FROM ogrenciler ORDER BY id ASC");
						while ($ogrList = mysql_fetch_array($sqlCommand)) {
					?>
					<tr>
						<td><?=$ogrList[id];?></td>
						<td><?=$ogrList[isim];?></td>
						<td><?=$ogrList[soyisim];?></td>
						<td><?=$ogrList[no];?></td>
						<td><?=$ogrList[sinif];?></td>
						<td class="text-center"><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?=$ogrList[id];?>">Sil</button></td>
						<!-- Modal -->
						<div id="myModal<?=$ogrList[id];?>" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Kayıt Silme İşlemi</h4>
						      </div>
						      <div class="modal-body">
						        <p><b><?=$ogrList[isim];?>&nbsp;<?=$ogrList[soyisim];?></b> öğrencinin kaydını silmek istiyor musun?</p>
						      </div>
						      <div class="modal-footer">
						      	<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="location.href='?ogrId=<?=$ogrList[id];?>';">Onayla</button>
						        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
						      </div>
						    </div>

						  </div>
						</div>
						<!-- Modal -->
					</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>
