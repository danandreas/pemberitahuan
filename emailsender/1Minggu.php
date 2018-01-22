<?php
include "koneksi.php";
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");

$query  = "SELECT * FROM perizinan WHERE DATE_SUB(sampaitgl, INTERVAL 1 WEEK)";
$query2  = "SELECT email FROM petugas";

$result = mysqli_query($koneksi,$query);
//$result2 = mysql_query($koneksi, $query2);

//$row = mysql_fetch_array($result2);

//$cek = mysqli_num_rows($result);
while($data = mysqli_fetch_array($result))
    {
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMPTSecure = "ssl";
    $mail->Host = "smpt.gmail.com";
    $mail->SMPTDebug = 2;
    $mail->SMTPAuth = true;
    $mail->Host="smpt.gmail.com";
    $mail->Port='465';
    $mail->username = "aquanotif@gmail.com";
    $mail->Password = "adminaqua";
    $mail->setFrom('aquanotif@gmail.com'); //email pengirim
    $mail->addReplyTo('aquanotif@gmail.com'); //email replay
        //$to = $data['email'];
    $isi = "<b>Notifikasi!</b>, <br> Nama Dokumen : ".$data['nmdok']."<br> Nomor Dokumen : " .$data['nodok']."<br> Disahkan Oleh : ".$data['pengesah']."<br> Tanggal Pengesahan : ".$data['tglsah']."<br> Lamanya : ".$data['lamanya']."<br> Sampai Tanggal : ".$data['sampaitgl']."<br> Status : ".$data['status']."<br> Keterangan : ".$data['keterangan'];
    $mail->addAddress('andreasardaniel@gmail.com'); //email tujuan
    $recipients = array(
       'andreasardaniel1@gmail.com' => 'Person One',
       'paraprogramer@gmail.com' => 'Person Two',
       'thomasarga02@gmail.com' => 'Person Three'
        );
        foreach($recipients as $email => $name)
        {
           $mail->AddCC($email, $name);
        }
    $mail->Subject = $data['nmdok']; //subjek email
    $mail->MsgHTML($isi,""); //isi pesan dalam format laporan
    $mail->isHTML(true);
    if(!$mail->Send())
    {
        echo "Email gagal dikirim : " . $mail->ErrorInfo;
    }
    else
       {
        echo "Berhasil dikirim";
       }
}

//mysqli_close($result);
?>
