<nav class="jumbotron">
  <nav class="container">
    <center>
      <h3>List Data Barang</h3><br><br>
    </center>
    <font color="red" style="size: 20px;">
    <?php echo $this->session->flashdata('hasil'); ?>
    </font>
    <table class="table table-hover">
        <tr class="table-active">
          <th>NO</th>
          <th>NAMA</th>
          <th>NOMOR</th>
          <th>MERK</th>
          <th>HARGA</th>
          <th></th>
        </tr>
        <?php $i=0;
        foreach ($datapart as $part){ ?>
        <tr class="table-light">
          <td><?php echo $i+1;?></td>
          <?php 
            echo "<td>$part->nama</td>
                  <td>$part->nomor_seri</td>
                  <td>$part->merk</td>
                  <td>$part->harga</td>
                  <td>".anchor('part/edit/'.$part->id,'Edit', 'class = "btn btn-info"')."
                      ".anchor('part/delete/'.$part->id,'Delete', 'class = "btn btn-danger"')."</td>
                  </tr>";
                  $i++;
        }
        ?>
    </table>
    <a href="http://localhost:8012/client4/index.php/part/create"><button type="button" class="btn btn-outline-success">Tambah data</button><a>
  </nav>
</nav>

