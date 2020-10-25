<?php 
class Model1 extends CI_Model{
    // membuat variabel untuk menampung nilai
    public $nilai1,$nilai2,$nilai3 ;
    // method pwnjumlahan
    public function jumlah($nil1=null,$nill2=null){
        $this->nilai1=$nil1;
        $this->nilai2=$nill2;
        $this->hasil =$this->nilai1 + $this->nilai2;
        return $this->hasil;

    }
}
?>