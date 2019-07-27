<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Penyewaan Buku</title>
        <!-- load bootstrap css file -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"rel="stylesheet">
        <link href="<?php echo base_url('assets/font/css/all.css');?>"rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <h1><center>Peminjaman Buku</center></h1>

          
            <div class="row">
                <div class="col-md-5">
                    <form action="<?php echo site_url('buku/searching') ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama atau no.hp" name="keyword" autofocus>
                            <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mb-3">
					<div class="card-header">
						<!-- <a href="<?php echo site_url('buku/add_new/') ?>"><i class="fa fa-plus"></i><mark>Sewa Buku</mark></a> -->
                      
                        <div>
                            <a href="<?php echo site_url('buku/add_new/') ?>">
                            <button type="button" class="btn btn-success btn-md">
                                <span class="fa fa-plus"></span> Sewa Buku
                            </button></a>
                        </div>

					</div>
					<div class="card-body">
                <table class="table table-striped table-dark">
                <thead class="thead-light">
                    <tr>
                  
                        <th scope="col">No</th>
                        <th scope="col"><i class="fa fa-user"> Nama Penyewa</i></th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Tanggal Sewa</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th width="200">Action</th>
                        
                    </tr>
                </thead>
                    <?php
                        $count = 0;
                        foreach ($sewa->result() as $table) :
                        $count++;
                        $tanggal_selesai = date('Y-m-d', strtotime($table->tanggal_sewa."+$table->Durasi days"));
                    ?>
                    
                    <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $table->penyewa;?></td>
                        <td><?php echo $table->judul;?></td>
                        <td><?php echo $table->no_hp;?></td>
                        <td><?php echo $table->Durasi." hari";?>
                        </td>
                        
                        <td> <?php echo $table->tanggal_sewa;?></td>
                        <td> <?php echo $tanggal_selesai;?></td>

                        <td><a href="<?php echo site_url('buku/delete/'.$table->id) ;?>"
                         class="btn btn-sm btn-danger tombol-hapus" id="hapus">Selesai</a></td>

                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <!-- load jquery js file -->
        <script src="<?php echo
        base_url('assets/js/jquery.min.js');?>"></script>
        <script src="<?= base_url('assets/js/sweetalert2.all.min.js');?>"></script>
        <!-- load bootstrap js file -->
        <script src="<?php echo
        base_url('assets/js/bootstrap.min.js');?>"></script>

        <script src="<?php echo
        base_url('assets/js/hapus.js');?>"></script>
          
    
    </body>
  
</html>