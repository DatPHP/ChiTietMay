<?php



require_once ('chitiet.php');
require_once ('chitietdon.php');
require_once ('chitietphuc.php');
require_once ('may.php');
require_once ('kho.php');



 function menu ()
{

    echo "======== Quan ly chi tiet may ================\n";
    echo "Quan ly kho : \n";
    echo "1./ Them san pham vao kho         1\n";
    echo "2./ Them chi tiet cho may          2\n";
    echo "3./ Tim san pham trong kho          3\n";
    echo "Quan ly chi tiet : \n";
    echo "4./ Them chi tiet don.         4\n";
    echo "5./ Them chi tiet phuc.        5\n";
    echo "exit!       click   0\n ";

     $chon = readline("Ban Chon :");
     echo $chon;

     switch ($chon)
     {
         case 1:
             {
                 $kho = new kho();
                 $kho->nhapmay();
                 $kho->xuatmay();
                 $kho->diTimMay();
                 break;
             }
         case 2:
         {
             $may = new may();
             $may->nhap();
             $may->xuat();

             break;
         }
         case 3:
         {
             $kho = new kho();
             $kho->xuatmay();
             $kho->diTimMay();
             break;
         }
         case 4:
         {

              $chitietdon = new chitietdon();
              $chitietdon->nhap();
              $chitietdon->xuat();
             break;
         }
         case 5:
         {
             $chitietphuc = new chitietphuc();
             $chitietphuc->nhap();
             $chitietphuc->xuat();

             break;
         }

         Default:
         {
             $chon = readline("Moi ban nhap lai");


         }


     }




}
menu ();
