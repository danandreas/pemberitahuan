<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('dataemail');
        $this->load->library('MyPHPMailer'); // load library
    }

    function tigabulan(){
        $data = $this->dataemail->tigabulan()->result(); //daftar perizinan yang akan dikirim
        
        foreach ($data as $d):
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = 'dari@gmail.com';
            $mail->Password = 'adminaqua';

            $mail->setFrom('dari@gmail.com', 'Notification Dariku');
            $mail->addAddress('dan@gmail.com','Andreas Dan');
          //$mail->AddCC(nama@gmail.com, 'Nama');
            $recipients = $this->dataemail->petugas()->result();
                foreach($recipients as $e)
                {
                   $mail->AddCC($e->email, $e->email);
                }
            $mail->Subject = '3 Bulan lagi! - '.$d->nmdok;
            $mail->IsHTML(true);
            $mail->Body = '<b>Notifikasi!</b>, <br> Nama Dokumen : '.$d->nmdok.'<br> Nomor Dokumen : ' .$d->nodok.'<br> Disahkan Oleh : '.$d->pengesah.'<br> Tanggal Pengesahan : '.dataload::tgl_indonesia($d->tglsah).'<br> Lamanya : '.$d->lamanya.'<br> Sampai Tanggal : '.dataload::tgl_indonesia($d->sampaitgl).'<br> Status : '.$d->status.'<br> Keterangan : '.$d->keterangan.'<br><br><b>NB : Tinggal 3 Bulan lagi!</b><br><br>Notification Software PT. Dan Andreas<br>Copyright &copy; 2018 <a href="http://andreasardaniel.com/">andreasardaniel</a> | PT. Dan Andreas';
            if ($mail->send()) {
                //echo "Email ".$d->nmdok." terkirim! <br> ";
                echo "Email ".$d->idiz." terkirim! <br>";
            } else {
                echo "Email ".$d->idiz." gagal dikirim! <br>";
            }
        endforeach;
    }

    function satubulan(){
        $data = $this->dataemail->satubulan()->result(); //daftar perizinan yang akan dikirim
        
        foreach ($data as $d):
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = 'dari@gmail.com';
            $mail->Password = 'adminaqua';

            $mail->setFrom('dari@gmail.com', 'Notification Dariku');
            $mail->addAddress('dan@gmail.com','Andreas Dan');
          //$mail->AddCC(nama@gmail.com, 'Nama');
            $recipients = $this->dataemail->petugas()->result();
                foreach($recipients as $e)
                {
                   $mail->AddCC($e->email, $e->email);
                }
            $mail->Subject = '1 Bulan lagi! - '.$d->nmdok;
            $mail->IsHTML(true);
            $mail->Body = '<b>Notifikasi!</b>, <br> Nama Dokumen : '.$d->nmdok.'<br> Nomor Dokumen : ' .$d->nodok.'<br> Disahkan Oleh : '.$d->pengesah.'<br> Tanggal Pengesahan : '.dataload::tgl_indonesia($d->tglsah).'<br> Lamanya : '.$d->lamanya.'<br> Sampai Tanggal : '.dataload::tgl_indonesia($d->sampaitgl).'<br> Status : '.$d->status.'<br> Keterangan : '.$d->keterangan.'<br><br><b>NB : Tinggal 1 Bulan lagi!</b><br><br>Notification Software PT. Dan Andreas<br>Copyright &copy; 2018 <a href="http://andreasardaniel.com/">andreasardaniel</a> | PT. Dan Andreas';
            if ($mail->send()) {
                //echo "Email ".$d->nmdok." terkirim! <br> ";
                echo "Email ".$d->idiz." terkirim! <br>";
            } else {
                echo "Email ".$d->idiz." gagal dikirim! <br>";
            }
        endforeach;
    }
    function satuminggu(){
        $data = $this->dataemail->satuminggu()->result(); //daftar perizinan yang akan dikirim
        
        foreach ($data as $d):
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = 'dari@gmail.com';
            $mail->Password = 'adminaqua';

            $mail->setFrom('dari@gmail.com', 'Notification Dariku');
            $mail->addAddress('dan@gmail.com','Andreas Dan');
          //$mail->AddCC(nama@gmail.com, 'Nama');
            $recipients = $this->dataemail->petugas()->result();
                foreach($recipients as $e)
                {
                   $mail->AddCC($e->email, $e->email);
                }
            $mail->Subject = '1 Minggu lagi! - '.$d->nmdok;
            $mail->IsHTML(true);
            $mail->Body = '<b>Notifikasi!</b>, <br> Nama Dokumen : '.$d->nmdok.'<br> Nomor Dokumen : ' .$d->nodok.'<br> Disahkan Oleh : '.$d->pengesah.'<br> Tanggal Pengesahan : '.dataload::tgl_indonesia($d->tglsah).'<br> Lamanya : '.$d->lamanya.'<br> Sampai Tanggal : '.dataload::tgl_indonesia($d->sampaitgl).'<br> Status : '.$d->status.'<br> Keterangan : '.$d->keterangan.'<br><br><b>NB : Tinggal 1 Minggu lagi!</b><br><br>Notification Software PT. Dan Andreas<br>Copyright &copy; 2018 <a href="http://andreasardaniel.com/">andreasardaniel</a> | PT. Dan Andreas';
            if ($mail->send()) {
                //echo "Email ".$d->nmdok." terkirim! <br> ";
                echo "Email ".$d->idiz." terkirim! <br>";
            } else {
                echo "Email ".$d->idiz." gagal dikirim! <br>";
            }
        endforeach;
    }
}
?>
