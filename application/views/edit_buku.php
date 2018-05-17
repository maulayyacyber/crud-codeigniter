<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('buku/update') ?>
			  
			  <div class="form-group">
			    <label for="text">No ISBN</label>
			    <input type="text" name="no_isbn" value="<?php echo $data_buku->no_isbn ?>" class="form-control" placeholder="Masukkan No. ISBN">
			    <input type="hidden" value="<?php echo $data_buku->id_buku ?>" name="id_buku">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama Buku</label>
			    <input type="text" name="nama_buku" value="<?php echo $data_buku->nama_buku ?>" class="form-control" placeholder="Masukkan Nama Buku">
			  </div>

			  <div class="form-group">
			    <label for="text">Tanggal Terbit</label>
			    <input type="date" name="tanggal_terbit" value="<?php echo $data_buku->tanggal_terbit ?>" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Pengarang</label>
			    <input type="text" name="pengarang" value="<?php echo $data_buku->pengarang ?>" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>