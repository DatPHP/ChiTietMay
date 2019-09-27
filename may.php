<?php


//include ('chitietphuc.php');


class may extends chitietphuc
{
    public $masomay;
    public $tenmay;
    public $danhsachchitiet = array();
    public $khoiluong;
    public $tien;
    public $danhsach;

    public function nhap ()
    {
        $this->masomay = readline("ma so : ");
        $this->tenmay = readline("Ten may : ");
        $this->khoiluong = readline("KHoi luong : ");
        $this->tien = readline("Gia: ");

        $this->danhsach  = new chitietphuc();
        $this->danhsach->nhap();

        //$this->danhsachchitiet = $danhsach->nhap();



      //$this->danhsachchitiet = $danhsach->xuat();

    }
    public function xuat ()
    {

        echo " Thong so cua may vua nhap \n";
        echo "ma so: ". $this->masomay. "       ||ten may:     ".$this->tenmay. "     ||khoi luong:     ".$this->khoiluong. "     ||gia:     ".$this->tien."\n";

        echo "========== Danh sach chi tiet cua may =========\n";

        echo $this->danhsach->xuat();


    }

    public function getMaSo()
    {
        return $this->masomay;
    }



    public function TinhKhoiLuong()
    {
        return $this->khoiluong;



    }

    public function TinhGia()
    {
        return $this->tien;

    }
}

//
//$may = new may();
//$may->nhap();
//$may->xuat();


