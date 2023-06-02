<?php 
class Module5Repository{

    private $connect;

    //Registration controller's constructor
    public function __construct($database) {
      $this->connect = $database;
    }


  //This function will insert name data in mySQL database
  public function FormDetail($names) {

    //syntax to insert into database
    $query = $this->connect->prepare("INSERT INTO trying(fullname) VALUES (?)");
    $query->execute([$names]);

  }

  //This function will insert name data in mySQL database
  public function SuamiFormDetail($jenispekerjaansuami,$namamajikansuami,$namapekerjaansuami,
  $alamatmajikansuami,$pendapatansuami,$poscodesuami,$banksuami,$negerisuami,$akaunsuami,$bandarsuami) {

    //syntax to insert into database
    $query = $this->connect->prepare("INSERT INTO suamijobform(jenispekerjaan,namapekerjaan,pendapatan,namabank
    ,nomborakaun,namamajikan,alamatmajikan,poscode,negeri,bandar) VALUES (?,?,?,?,?,?,?,?,?,?)");


    $query->execute([$jenispekerjaansuami,$namapekerjaansuami,$pendapatansuami,$banksuami,$akaunsuami,$namamajikansuami,
    $alamatmajikansuami,$poscodesuami,$negerisuami,$bandarsuami]);

  }

  public function IsteriFormDetail($jenispekerjaanisteri,$namamajikanisteri,$namapekerjaanisteri,
  $alamatmajikanisteri,$pendapatanisteri,$poscodeisteri,$bankisteri,$negeristeri,$akaunisteri,$bandaristeri) {

    //syntax to insert into database
    $query = $this->connect->prepare("INSERT INTO isterijobform(jenispekerjaan,namapekerjaan,pendapatan,namabank
    ,nomborakaun,namamajikan,alamatmajikan,poscode,negeri,bandar) VALUES (?,?,?,?,?,?,?,?,?,?)");


    $query->execute([$jenispekerjaanisteri,$namapekerjaanisteri,$pendapatanisteri,$bankisteri,$akaunisteri,$namamajikanisteri,
    $alamatmajikanisteri,$poscodeisteri,$negeristeri,$bandaristeri]);

  }

  public function testing($names) {

    //syntax to insert into database
    $query = $this->connect->prepare("INSERT INTO testing(fullname) VALUES (?)");
    $query->execute([$names]);

  }

}
?>