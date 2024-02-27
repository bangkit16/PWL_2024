<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
    <title>PWL 2024</title>
    <style>
          body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
.nik{
  font-family: "Kode Mono", monospace;
  font-optical-sizing: auto;
  /* font-size: 18ox; */
  font-weight: <weight>;
  font-style: normal;

}

.ktp {
  width: 800px;
  margin: 20px auto;
  border-radius: 5px;
  padding: 20px;
  background-image: url('https://lh5.googleusercontent.com/-W4FM3TIV9I0/TYQzLeULsNI/AAAAAAAAAIo/4HwHZD_bgzQ/s1600/KTP+2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

table {
  width: 100%;
  border-collapse: separate; 
  border-spacing: 1px;
}
tr{
  margin-bottom: -10px;
}

.header {
  text-align: center;
  font-size: 20px;
}

.mep{
  width: 100%;
}

.label {
  font-weight: bold;
}


    </style>
</head>
<body>
  <div class="ktp">
    <table >
      <tr>
        <td colspan="3" class="header">
          <span class="label">PROVINSI JAWA TIMUR</span ><br>
          <span class="label">KABUPATEN TRENGGALEK</span >
        </td>
      </tr>
      <tr>
        <td  style="font-size: 25px" class="label nik">NIK</td>
        <td  style="font-size: 25px;letter-spacing: 2px" class="nik label">: 3503082205020001</td>
        <td rowspan="16" style="text-align: center;">
          <img width="210" height="280" style="margin-top: 30px" src="https://media.licdn.com/dms/image/C4D03AQEwumxdIIQ-9g/profile-displayphoto-shrink_800_800/0/1631926222124?e=2147483647&v=beta&t=Zn8kuUAQw0fQ_BhKdjCx3cu9GlYVOcQqHk7SFp1c_mE" alt=""><br>
          {{-- <img width="210" height="280" style="margin-top: 30px" src="https://air.eng.ui.ac.id/images/7/70/Kania_3x4_RED.jpg" alt=""><br> --}}
          <span class="label">TRENGGALEK</span><br>
          <span class="label">28-05-2019</span><br>
          <br>
          <img width="100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Tanda_tangan_Arsul_Sani.svg/1280px-Tanda_tangan_Arsul_Sani.svg.png" alt="">
        </td>
      </tr>
      <tr>
        <td class="label">Nama</td>
        <td class="label">: BANGKIT MAULANA CANIAGO</td>
      </tr>
      <tr>
        <td class="label">Tempat/Tanggal Lahir</td>
        <td class="label">: TRENGGALEK, 22-05-2002</td>
      </tr>
      <tr>
        <td class="label">Jenis Kelamin</td>
        <td class="label">: LAKI-LAKI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gol Darah :-</td>
      </tr>
      <tr>
        <td class="label">Alamat</td>
        <td class="label">: DSN GENDINGAN</td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;RT/RW</td>
        <td class="label">: 003/001</td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;Kel/Desa</td>
        <td class="label">: PRIGI</td>
      </tr>
      <tr>
        <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</td>
        <td class="label">: WATULIMO</td>
      </tr>
      <tr>
        <td class="label">Agama</td>
        <td class="label">: ISLAM</td>
      </tr>
      <tr>
        <td class="label">Status Perkawinan</td>
        <td class="label">: BELUM KAWIN</td>
      </tr>
      <tr>
        <td class="label">Pekerjaan</td>
        <td class="label">: PELAJAR/MAHASISWA</td>
      </tr>
      <tr>
        <td class="label">Kewarganegaraan</td>
        <td class="label">: WNI</td>
      </tr>
      <tr>
        <td class="label">Berlaku Hingga</td>
        <td class="label">: SEUMUR HIDUP</td>
      </tr>
    </table>
    <br>
  </div>
</body>
</html>
