 
  <h1>Ubah Data</h1> 
<?php
echo $this->Form->create('Snack');
echo $this->Form->input('id_snack', array('type' => 'hidden'));
echo $this->Form->input(
    'nama_snack',
    array('label' => 'Nama Snack')
	);
echo $this->Form->input(
    'harga_snack',
    array('label' => 'Harga Snack')
	);
echo $this->Form->end('Simpan');
?>
 

<hr>
<?php
	echo $this->Html->link('Kembali', 'index'); 
?>
