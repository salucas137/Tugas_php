<html>
    <head>
        <title>Kassalman Muhammad</title>
    </head>
    <body>
        <h1 style="text-align: center">Kalkulator Nilai BMI</h1>
        <form method="post" action="">
            <div> 
                <table>
                    <tr><th>Nama : </th><th><input type="text" name="name"></th> </tr>
                    <tr><th>Tinggi Badan : </th><th><input type="text" name="tinggiBadan"></th></tr>
                    <tr><th>Berat Badan : </th><th><input type="number" name="beratBadan"></th></tr>
                </table> 
                <input type="submit" name="submit" value="submit"> 
                <p>Note : Masukkan tinggi badan anda dengan satuan panjang(meter) <br> jika anda memiliki tinggi badan 150cm maka tinggi anda adalah (1.50) </p>
            </div>
        </form>
 
        <div>
            <?php
                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $tinggiBadan = $_POST['tinggiBadan'];
                    $beratBadan = $_POST['beratBadan'];

                    $nilaiBMI = $beratBadan / ($tinggiBadan * $tinggiBadan);

                    if($nilaiBMI >= 30 ){
                        echo "Halo, $name Nilai BMI anda adalah $nilaiBMI , anda termasuk Obesitas";
                    } else if($nilaiBMI >= 25 && $nilaiBMI <= 29.9){
                        echo " Halo, $name Nilai BMI anda adalah $nilaiBMI , anda termasuk Gemuk";
                    } else if($nilaiBMI >= 18.5 && $nilaiBMI <= 24.9){
                        echo "Halo, $name Nilai BMI anda adalah $nilaiBMI , anda termasuk Sedang";
                    } else {
                        echo "Halo, $name Nilai BMI anda adalah $nilaiBMI , anda termasuk Kurus";
                    }
                }
                /*
                $nama = "Kassalman Muhammad";
                $tinggiBadan = 1.75;
                $beratBadan = 66;
                $nilaiBMI = $beratBadan / ($tinggiBadan * $tinggiBadan);
                if($nilaiBMI >= 30 ){
                    echo "Halo, $nama Nilai BMI anda adalah $nilaiBMI , anda termasuk Obesitas";
                } else if($nilaiBMI >= 25 && $nilaiBMI <= 29.9){
                    echo " Halo, $nama Nilai BMI anda adalah $nilaiBMI , anda termasuk Gemuk";
                } else if($nilaiBMI >= 18.5 && $nilaiBMI <= 24.9){
                    echo "Halo, $nama Nilai BMI anda adalah $nilaiBMI , anda termasuk Sedang";
                } else {
                    echo "Halo, $nama Nilai BMI anda adalah $nilaiBMI , anda termasuk Kurus";
                }

                */
            ?>
        </div>
    </body>
</html>

