<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"rel="stylesheet">
        <link href="<?php echo base_url('assets/font/css/all.css');?>"rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
<h1><center>Daftar Buku</center></h1>
<table class="table table-striped table-dark">
                <thead class="thead-light">
                    <tr>
                  
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th width="200">Pengarang</th>
                        
                    </tr>
                </thead>
                    <?php
                        $count = 0;
                        foreach ($buku->result() as $table) :
                        $count++;
                    ?>
                    
                    <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $table->nama_buku;?></td>
                        <td><?php echo $table->pengarang;?></td>
                        
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
</body>
</html>
