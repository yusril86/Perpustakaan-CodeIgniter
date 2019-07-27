<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sewa Buku</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
        rel="stylesheet">
</head>

<body>
        <div class="conatiner">
            <h1><center>Proses Pinjam Buku</center></h1>
            <div class="col-md-6 offset-md-3">
                    <form action="<?php echo site_url('buku/save');?>"
                    method="post">
                    <div class="form-group">
                        <label>Nama Penyewa</label>
                        <input type="text" class="form-control" name="nama_penyewa"
                        placeholder="Nama Penyewa">
                    </div>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" class="form-control" name='judul_buku'
                        placeholder="Nama buku">
                    </div>
                    <div class="form-group">
                        <label>Durasi</label>
                        <input type="text" class="form-control" name='durasi'
                        placeholder="Durasi">
                    <div >   
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" class="form-control" name='no_hp'
                        placeholder="No Hp">
                    <div >  
                        <input type="hidden"  name='tanggal_sewa'> 
                    </div>  
                    
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
                    </form>
                </div>
        </div>
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>">
        </script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>">
        </script>
</body>

</html>