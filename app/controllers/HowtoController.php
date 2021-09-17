<?php
declare(strict_types=1);

class HowtoController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function createAction()
    {
        $howto = new Howto();
        $howto->title = $this->request->getPost("title");
        $howto->content = $this->request->getPost("content");

        if (!$howto->save()){
            echo "Data gagal disimpan";
        }else{
            echo "Data berhasil disimpan";
        }
    }

    public function viewAction()
    {
        $howto = Howto::find();
        $this->view->data = $howto;

    }

    public function editAction($id){
        $howto = Howto::findFirstByid($id);
        $this->view->id = $howto->id;
        $this->view->title = $howto->title;
        $this->view->content = $howto->content;

    }

    public function updateAction()
    {
        $id = $this->request->getPost("id");
        $howto = Howto::findFirstByid($id);
        $howto->title = $this->request->getPost("title");
        $howto->content = $this->request->getPost("content");
    
        if (!$howto->save()) {
            echo "Gagal Disimpan";
        }
        else
        {
            echo "Data Berhasil Diupdate";
        }
    }

    public function hapusAction($id)
    {
        $howto = Howto::findFirstByid($id);

        if(!$howto->delete()){
            echo "Data gagal dihapus";
        }else{
            echo "Data berhasil dihapus";
        }
    }

    public function viewDetailAction($id)
    {
        $howto = Howto::findFirstByid($id);
        $this->view->id = $howto->id;
        $this->view->title = $howto->title;
        $this->view->content = $howto->content;
    }

}

