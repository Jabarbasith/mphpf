<?php

namespace controller;

use m\Application;
use m\Controller;

use model\LecturModel;

class LecturController extends Controller
{
    private $_mLectur;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->_mLectur = new LecturModel();
    }

    public function index()
    {
        $lecturs = $this->_mLectur->findAll();

        $data = array(
            'all_lectur' => $lecturs
        );

        $this->view->setData($data);

        $this->view->setContentTemplate('/lectur/index_template.php');
        $this->view->render();
    }

    public function addLectur()
    {
        if (isset($_POST['submit'])) {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->saveLecturData();

            // Redirect ke halaman awal
            $this->redirect('/lectur');
        }

        $this->view->setContentTemplate('/lectur/add_lectur_template.php');
        $this->view->render();
    }

    private function saveLecturData()
    {
        $nip        = $_POST['nip'];
        $nama     = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $prodi = $_POST['prodi'];
        $jurusan = $_POST['jurusan'];
        $no_telp = $_POST['no_telp'];

        $this->_mLectur->addNew($nip, $nama, $alamat, $prodi, $jurusan, $no_telp);
    }
}
