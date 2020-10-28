<?php
class latihan2 extends CI_Controller{

    //mengkimbinasikan view kontroller model

    public function index() {
        echo " welcome to programming web class ...";
    }

    public function penjumlahan($n1, $n2){
        $this->load->model('model1');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model1->jumlah($n1,$n2);

        $this->load->view('viewlatihan1', $data);
    }

}