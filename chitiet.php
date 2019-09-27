<?php
    class chitiet
    {
        public $maso;
        public $ten;

        public function nhap()
        {
            $this->maso = readline('Nhap maso chi tiet la: ');
            $this->ten = readline('nhap vao ten cua chi tiet la: ');


        }
        public function xuat ()
        {
            echo "Ma so  chi tiet: ".$this->maso."\n";
            echo "Ten chi tiet:  ".$this->ten."\n";

        }

        public function tinhKhoiLuong()
        {

        }

        Public function tinhGiaTien()
        {

        }


    }