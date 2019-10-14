<div class="container mt-3">

	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  				Add Data Mahasiswa
			</button>
			<br><br>
			<h3> Daftar Mahasiswa</h3>	
		<ul class="list-group">
			<?php foreach( $data['mhs'] as $mhs)
:?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  	<?= $mhs['name']; ?>
  		<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a>
  </li>
  		<?php endforeach; ?> 
		</ul>		
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="jadulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jadulModal">Add Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      	<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name"> 
		 </div>

		 <div class="form-group">
		    <label for="nrp">NRP</label>
		    <input type="number" class="form-control" id="nrp" name="nrp"> 
		 </div>

		 <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email"> 
		 </div>

		<div class="form-group">
		    <label for="jurusan">Jurusan</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		      <option value="Information Technology">Information Technology</option>
		      <option value="Accounting">Accounting</option>
		      <option value="Multimedia">Multimedia</option>
		      <option value="Logistic">Logistic</option>Logistic
		      <option value="Law">Law</option>
		      <option value="Bussiness">Bussiness</option>
		    </select>
		  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
      </div>
    </div>
  </div>
</div>