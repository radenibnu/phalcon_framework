<?php
declare(strict_types=1);

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    
    public function createAction(){
        $user = new User();
        $user->nama_user = $this->request->getPost("txt_nama");
        $user->email_user = $this->request->getPost("txt_email");

        if(!$user->save()){
            echo "Gagal Disimpan";
        }else{
            echo "Data berhasil disimpan";
        }
    }

    public function viewDataAction(){
        $user = User::find();
        $this->view->data = $user;
    }

    public function editAction($id){
        $user = User::findFirstByidUser($id);
        $this->view->id = $user->id_user;
        $this->view->email = $user->email_user;
        $this->view->nama = $user->nama_user;

    }

    public function updateAction()
    {
        $id = $this->request->getPost("txt_id");
        $user = User::findFirstByidUser($id);
        $user->nama_user = $this->request->getPost("txt_nama");
        $user->email_user = $this->request->getPost("txt_email");
    
        if (!$user->save()) {
            echo "Gagal Disimpan";
        }
        else
        {
            echo "Data Berhasil Diupdate";
        }
    }

    public function hapusAction($id)
    {
        $user = User::findFirstByidUser($id);

        if(!$user->delete()){
            echo "Data gagal dihapus";
        }else{
            echo "Data berhasil dihapus";
        }
    }

}

