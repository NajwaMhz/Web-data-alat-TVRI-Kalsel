<?php 
include_once "src/koneksi.php";


$idpemancar = $_GET['idpemancar'];
$sql = mysqli_query($koneksi, "SELECT * FROM pemancar WHERE idpemancar='$idpemancar'");
$data = mysqli_fetch_array($sql);
$nomor = 0;
$nomor++;
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" target="_self">
	<table align="center" class="table-list" width="600" border="0" cellpadding="5">
	<tr>
		<td colspan="11"> <img width="150px" src="foto/logo.jpg" alt="Logo"></td>
		<!-- <td colspan="3"><h4>Laporan Alat</h4></td>0 -->
	</tr>
        <tr class="border-data">
			<td width="1%" align="center" bgcolor="#CCCCCC"><b>No</b></td>
			<td width="5%" align="center" bgcolor="#CCCCCC"><b>ID Alat</b></td>
			<td width="5%" align="center" bgcolor="#CCCCCC"><b>Satras</b></td>
			<td width="10%" align="center" bgcolor="#CCCCCC"><b>Kategori</b></td>
			<td width="10%" align="center" bgcolor="#CCCCCC"><b>Nama Alat</b></td>
			<td width="10%" align="center" bgcolor="#CCCCCC"><b>Merk/Type/Model</b></td>
			<td width="10%" align="center" bgcolor="#CCCCCC"><b>No seri</b></td>
			<td width="8%" align="center" bgcolor="#CCCCCC"><b>Tahun Beli</b></td>
			<td width="5%" align="center" bgcolor="#CCCCCC"><b>Jumlah</b></td>
			<td width="20%" align="center" bgcolor="#CCCCCC"><b>Keterangan</b></td>
			<td width="20%" align="center" bgcolor="#CCCCCC"><b>Ket.Tambahan</b></td>
			<!-- <td width="20%" align="center" bgcolor="#CCCCCC"><b>Link Peta</b></td> -->           
        </tr>
        <tr class="border-data">
			<td align="center"><?php echo $nomor; ?></td>
			<td align="center" class="upper"><?php echo $data['idpemancar']; ?></td>
			<td class="upper"><?php echo $data['satras']; ?></td>
			<td class="upper"><?php echo $data['kategori']; ?></td>
			<td class="upper"><?php echo $data['nama']; ?></td>
			<td class="upper"><?php echo $data['tipe']; ?></td>
			<td class="upper"><?php echo $data['seri_pemancar']; ?></td>
			<td class="upper"><?php echo $data['tahun']; ?></td>
			<td class="upper"><?php echo $data['jumlah']; ?></td>
			<td class="upper"><?php echo $data['keterangan']; ?></td>
			<td class="upper"><?php echo $data['ket_tambahan']; ?></td>
		</tr>
		<tr>
		<td colspan="11">&nbsp;</td>
		</tr>
		<tr>
				<td class="contain-foto" colspan="11" width="440">
					<?php if(isset($data['foto'])): ?>
						<?php 
							$fotos = explode(',', $data['foto']);
							foreach ($fotos as $foto) {
								echo "<img src='file/$foto' alt='Foto Alat' class='foto-alat' width='400'>";
							}
							?>
							<input type="hidden" name="foto_lama" value="<?php echo $data['foto']; ?>">
							<?php else: ?>
								Tidak ada foto
								<?php endif; ?>
							</td>
		</tr>
	</table>
	<table align="center">
		<tr>
					<td>
						<td>
							<!-- <a class="batal" href="?open=pemancar" value="batal">Kembali</a> -->
							<!-- <a class="hapus" href="cetak&idpemancar=<?php echo $data['idpemancar']; ?>" target="_self"> Cetak</a>   -->

						</td>

		</td>
		</tr>
	</table>
</form>

<style>

	.border-data td {
		border: 1px solid black;
	}

	img.foto-alat {
		margin-right: 5px;
		width: 300px;
		/* display: grid; */
		/* place-items: center; */
		/* margin: 5px auto; */
	}
    
   
  
    #submit {    
        font-weight: 600;
        color: white;
        background-color: #3950a2;
        width: 80px;
        height: 35px;
        border-radius: 20px;
        border: 2px solid black;
    } 
    
    .batal {
        border: 2px solid black;
        font-weight: 600;
        font-size: 13px;
        color: white;
        background-color: #696969;
        padding: 9px;
        padding-right: 9px;
        padding-left: 9px;
        border-radius: 20px;
    }

    .hapus {
        color: red;
        font-weight: bold;
    }
</style>
<script>
        window.print();
    </script>