 
<?php
	echo $this->Html->link('Home', '/'); 
	echo" | "; 	
	echo $this->Html->link('Tambah Data', 'tambah'); 
	
?>
<table>
	<tr>
		<th>No.</th>
		<th>Nama Snack</th>
		<th>Harga Snack</th>
		<th>Opsi</th>
	</tr>

		
	 <?php 
	 $i=0;
	   foreach ($snack as $s){
	   $i++;
		echo "<tr>
		<td>".$i."</td>
		<td>".$s['Snack']['nama_snack']."</td>
		<td>".$s['Snack']['harga_snack']."</td>
		<td width='15%'>
		". $this->Html->link('Ubah',array('action' =>'ubah', $s['Snack']['id_snack']))."
		". $this->Html->link('Hapus',array('action' =>'hapus', $s['Snack']['id_snack']), NULL, 'Yakin?')."</td>
		</tr>"; 
	    
	?>
	
	 
	<?php
	}
	?>
</table>
