<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

    if (isset($_POST['nilai'])) {
        $jumlah_matkul = count($_POST['nilai']); 
        
        $total_nilai = 0;
        $total_makul = 0;

        for ($i = 0; $i < $jumlah_matkul; $i++) {
            $x = array();
            $x[$i] = $_POST['nilai'][$i];
            if ($x[$i] > 80 && $x[$i] <= 100) {
              $x[$i] = 4;
            }elseif($x[$i] > 60 && $x[$i] <= 80){
              $x[$i] = 3.5;
            }elseif ($x[$i] > 40 && $x[$i] <= 60) {
              $x[$i] = 3;
            }elseif ($x[$i] > 20 && $x[$i] <= 40) {
              $x[$i] = 2;
            }elseif ($x[$i] > 0 && $x[$i] <= 20) {
              $x[$i] = 1;
            }else{
              $x[$i] = 0;
            }
            $total_nilai += $x[$i];
            $total_makul++;
        }

        $IPK = $total_nilai / $total_makul;
        
        $total_nilai = number_format($total_nilai, 2);
        $total_makul = number_format($total_makul, 2);
        $ipk = number_format($IPK, 2);

        if ($IPK>=1.8){
            $status = "LULUS";
          }
          else{
          $status = "TIDAK LULUS";
        }
    }
  ?>
  <h3>Hasil Perhitungan IPK:</h3>
  <h6>Total Nilai: <?php echo $total_nilai ?></h6>
  <h6>Jumlah Mata Kuliah yang Diambil: <?php echo $total_makul ?></h6>
  <h6>IPK: <?php echo $ipk ?></h6>
  <h1><?php echo $status ?></h1>
  <br><br>
  <a href="http://localhost:8080/praktikum-web/post-test-8/ah.html">Kembali</a>
</body>

</html>