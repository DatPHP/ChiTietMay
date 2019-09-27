<?php
//include('may.php');

 class kho extends may
 {  public $tenkho;
    public $soluongmay;
    public $danhsachmay= [];
    public $timmay;
    public $may = array();

    public function nhapmay () {

        echo "================= NHap hang vao kho ================= \n";
        $this->tenkho = readline("NHap vao ten kho la: ");
        $this->soluongmay = readline("So luong may la: ");
        for ($i=0;$i < $this->soluongmay;$i++)
        {
            $may[$i] = new may();
            $may[$i]->nhap();



           $this->danhsachmay[] = $may[$i];
           $List [] = $may[$i];

        }
    }

    public function xuatmay ()
    {
        echo $this->tenkho."\n";
        //var_dump($this->danhsachmay);

        foreach ($this->danhsachmay as $key => $ds)
        {
            echo "may thu ".($key + 1) ."|| ";
           echo $ds->xuat()."\n";

         //   echo $ds->TinhGia();
          //  echo $ds->TinhKhoiLuong();

        }


    }
    public function diTimMay()
    {
        $tim= readline('Nhap ma so may can tim : ');

      //var_dump($this->danhsachmay);

        foreach ($this->danhsachmay as  $ds)
        {
           if($ds-> masomay == $tim)
           {
               echo "tim thay may trong kho ";
               echo "\n  Co ma so la : ".$ds->masomay."    Co ten la : ".$ds->tenmay."!";

           }
           else{
               echo "khong tim thay";
               break;
           }
        }

    }


    public function tongGiaMay ()
    {

    }
    public function tongKhoiLuongMay ()
    {

    }

}

// $kho = new kho();
// $kho->nhapmay();
// $kho->xuatmay();
// $kho->diTimMay();





