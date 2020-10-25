<?php 
 
 class Matakuliah extends CI_Controller{
     public function index()
    {
        $this->load->view('Form_matakuliah');
        
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
        ];
        $this->load->view('view-Form_matakuliah', $data);

    //     $this->form_validation->set_rules('kode','Kode Matakuliah','required|min_length[3]',
    //     ['required' => 'Kode Matakuliah Harus diisi','min_lenght'=>'Kode terlalu pendek'
    //     ]);

    //     $this->form_validation->set_rules('nama', 'Nama Matakuliah','requires|min_length[3]',[
    //         'required' => 'Nama Matakuliah Harus diisi', 'min_lenght' =>
    //         'Nama Terlalu Pendek'
    //     ]);

    //     if($this->form_validation->run()!=true){
    //         $this->load->view('view-Form_matakuliah');

    //     }else{
    //         $data = [
    //             'kode' => $this->input->post('kode'), 'nama' =>
    //              $this->input->post('nama'),'sks' => $this->input->post('sks')
    //         ];
    //         $this->load->view('view-data-matakuliah',$data);
    //     }

     }

 }