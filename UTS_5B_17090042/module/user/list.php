<?php
    $no=1;
      
    $queryAdmin = mysqli_query($koneksi, "SELECT * FROM user ORDER BY nama ASC");
      
    if(mysqli_num_rows($queryAdmin) == 0)
    {
        echo "<h3>Saat ini belum ada data user yang dimasukan</h3>";
    }
    else
    {
        echo "<h3><b>KELOLA MEMBER</b></h3>";
        echo "<table class='table table-bordered table-striped table-hover'>";
          
            echo "<tr class='baris-title'>
                    <th class='kolom-nomor'>No</th>
                    <th class='tengah'>Nama Lengkap</th>
                    <th class='tengah'>Email</th>
                    <th class='tengah'>Nomer HP</th>
                    <th class='tengah'>Level</th>
                    <th class='tengah'>Status</th>
                    <th class='tengah'h>Aksi</th>
                 </tr>";
  
            while($rowUser=mysqli_fetch_array($queryAdmin))
            {
                echo "<tr>
                        <td class='kolom-nomor'>$no</td>
                        <td>$rowUser[nama]</td>
                        <td>$rowUser[email]</td>
                        <td>$rowUser[notelp]</td>
                        <td>$rowUser[level]</td>
                        <td class='tengah'>$rowUser[status]</td>
                        <td class='tengah'><a href='".BASE_URL."index.php?page=my_profile&module=user&action=form&user_id=$rowUser[id_user]"."'><b><i class='fas fa-edit fa-lg'></i></b></a></td>
                     </tr>";
              
                $no++;
            }
          
        //AKHIR DARI TABLE
        echo "</table>";
    }
?>