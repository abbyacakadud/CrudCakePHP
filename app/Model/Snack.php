<?php

class Snack extends AppModel{
	
	var 	$useTable	 ='snack'; 
	public $primaryKey = 'id_snack';
	
	public $validate = array(
        'nama_snack' => array(  
            'rule' => 'notEmpty', //tidak boleh kosong
            'message' => 'Nama Snack'
        ),
        'harga_snack' => array(
            'rule' => 'notEmpty', //tidak boleh kosong
            'message' => 'Alamat tidak boleh kosong'
        ),
     
    );
    
    
}
