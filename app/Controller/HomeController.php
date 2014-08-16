
<?php
class HomeController extends AppController{
	
	public $helpers = array('Html', 'Form','Session');
	public $components = array('Session');
	public $uses ='Snack';  

  function index(){ 
		$snack = $this->Snack->find('all');
		$this->set('snack', $snack);
  }
  
  function tambah(){ 
	if (!empty($this->request->data)){ 
		if ($this->Snack->save($this->request->data)){ 
			$this->Session->setFlash('Data telah disimpan.');  
			$this->redirect(array('action' => 'index'));
		}
	}
  }
   
  function hapus($id=NULL) {
		$id_snack = array('id_snack' => $id ); 
		$this->Snack->deleteAll($id_snack,false);
		$this->Session->setFlash('Data telah dihapus.');
		$this->redirect(array('action' => 'index')); 
	}
   	 
  function ubah($id=NULL){   
    if ($this->request->is('post') || $this->request->is('put')) {          
		if ($this->Snack->save($this->request->data)) {
            $this->Session->setFlash('Data telah diubah.'); 
            $this->redirect(array('action' => 'index'));
        }  
    }else {
        $this->request->data = $this->Snack->read(null, $id);
      } 
	}

}
