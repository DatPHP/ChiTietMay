<?php
  //require ('chitiet.php');

  class chitietdon extends chitiet
  {
      public $gia;
      public $khoiluong;

      public function nhap()
      {
          parent::nhap();
          $this->gia = readline("Gia cua chi tiet la: ");
          $this->khoiluong = readline('Khoi luong cua chi tiet la: ');
      }

      public function xuat()
      {
          parent::xuat();

          echo "Gia: ".$this->gia."\n";
          echo "Khoi Luong: ".$this->khoiluong."\n";
      }

      public function tinhKhoiLuong()
      {
          parent::tinhKhoiLuong();
      }
      public function tinhGiaTien()
      {
          parent::tinhGiaTien();
      }


  }

//  $chitietdon = new chitietdon();
//  $chitietdon->nhap();
//  $chitietdon->xuat();
