<?php 

require_once('config/config.php');
require_once('Models/Models.php');

class ControllerData {
    public function Home()
    {
        $users = Models::showdata();
        include('Views/content/index.php');
    }

    public function showById($id)
    {
        $user = Models::getDataById($id);
        include('Views/content/show.php');
    }
    
    public function createData()
    {
        include('Views/content/create.php');
    }
    
    public function storeData()
    {
        global $Home;

        $nama = $_POST['nama'];

        Models::createData($nama,);
        header('Location: ' . $Home);
    }
    public function editById($id) 
    {
        $user = Models::getDataById($id);
        include('Views/content/edit.php');
    }

    public function updateById($id)
    {
        global $Home;

        $nama = $_POST['nama'];

        Models::updateData($id, $nama);
        header('Location: ' . $Home);
    }
    
    public function deleteById($id)
    {
        global $Home;

        Models::deleteData($id);
        header('Location: ' . $Home);
    }
}