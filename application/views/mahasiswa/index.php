<div class="container">


    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> 
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

  

    <table class="table table-striped mt-4">
        <thead class="bg-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>NRP</th>
                <th>Jurusan</th>
                <th>Foto</th>
                <th>Detail</th>
                <th>Ubah</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['email'] ?></td>
                <td><?php echo $mhs['nrp'] ?></td>
                <td><?php echo $mhs['jurusan'] ?></td>
                <td><img src="<?= base_url('assets/img/') . $mhs['gambar'] ?>" alt="..." width="75px" height="75px"></td>

                <td>
                    <a href="<?php echo base_url();?>mahasiswa/detail/<?php echo $mhs['id'];?>"><button             type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20"        height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg></button> </a> 
                </td>

                <td>
                    <a href="<?php echo base_url();?>mahasiswa/ubah/<?php echo $mhs['id'];?>"><button type="button" class="btn btn-success">Ubah</button></a> 
                </td>

                <td> 
                    <a href="<?php echo base_url();?>mahasiswa/hapus/<?php echo $mhs['id'];?>"onclick="return confirm('yakin dek?');"><button type="button" class="btn btn-danger">Hapus</button></a> 
                </td>

            </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</div>
