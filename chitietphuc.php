<?php
 // include ('chitietdon.php');



  class chitietphuc extends chitietdon
  {
      public $danhsachchitiet = array();
      public $sochititiet;

      public $tongtien;
      public $tongkhoiluong;

      public function nhap()
      {

         // parent::nhap();
          $this->sochititiet = readline("NHap vao so chi tiet la: ");
          for ($i=0;$i< $this->sochititiet;$i++)
          {
              $loaichitiet = readline("Day la chi tiet don hay chi tiet phuc? \n
                chon  1: Chi Tiet Don \n
                chon  2: Chi tiet Phuc \n
              
              ");

              $chitiet = null;

              if ($loaichitiet == 1) {

                  $chitiet = new chitietdon();

              }
              else
              {
                  $chitiet = new chitietphuc();
              }
              $chitiet->nhap();
            $this->danhsachchitiet[] = $chitiet;
          }
      }

      public function xuat()
      {
          //
          //
          //parent::xuat();

          foreach ($this->danhsachchitiet as $chitiet)
          {
              $chitiet->xuat();
              echo "-------------------------\n";
          }
      }



      public function tinhTien()
      {
          $tien = 0;
          foreach ($this->danhsachchitiet as $chitiet) {
              $tien += $chitiet->tinhGiaTien();
          }

          echo $tien;

      }

      public function tinhKhoiLuong()
      {
          $kluong = 0;
          foreach ($this->danhsachchitiet as $chitiet) {
              $kluong += $chitiet->tinhKhoiLuong();
          }

          echo $kluong;

      }
  }


  /*

$chitietphuc = new chitietdon();
$chitietphuc->nhap();
$chitietphuc->xuat();

  */

