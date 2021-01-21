<?php
    //1. Array Loop
    $aplikasi[1] = "gtAkademik";
    $aplikasi[2] = "gtFinansi";
    $aplikasi[3] = "gtPerizinan";
    $aplikasi[4] = "eCampuz";
    $aplikasi[5] = "eOviz";
    
    $i = 1;
    while ($i < 6) {
        echo $aplikasi[$i];
        echo "<br>";
        $i++;
    }
?>
2. MySQL Query
SELECT MAX(tb_mahasiswa_nilai),tb_mahasiswa.mhs_nama FROM tb_mahasiswa_nilai JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id WHERE tb_matakuliah = "MK303"

<?php
    //3. Operator Logic
    $num1 = 10;
    $num2 = 2;

    echo $num1." : ".$num2." = ".divide($num1,$num2);

    function divide($num1,$num2)
    {
        $times = 0;
        while ($num1>=$num2) {
            $num1 = $num1 - $num2;
            $times++;
        };
        return $times;
    }
?>

<?php
    //4. Looping Condition

    for ($i=1; $i <= 50; $i++) {
        if ($i%3==0 && $i%5==0) {
            echo "foobar";
            echo "<br>";
        }
        if ($i%3==0) {
            echo "foo";
            echo "<br>";
        }
        if ($i%5==0) {
            echo "bar";
            echo "<br>";
        }

    }
?>