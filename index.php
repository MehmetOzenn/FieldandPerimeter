<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, initial-scale=1"/>
    <title>Mehmet ÖZEN</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Black.woff");
        font-weight: 900;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Bold.woff");
        font-weight: 700;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-SemiBold.woff");
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Regular.woff");
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Medium.woff");
        font-weight: 200;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Light.woff");
        font-weight: 100;
        font-style: normal;
        font-display: swap;
      }

      body {
        font-family: "Jont" !important;
      }
    </style>
  </head>
  <?php
class calculate{

    public $a;
    public $b;
    public $c;
    public $d;
    public $e;
    public $k;
    public function ucgen($a,$b,$c){
        $this-> a = $a;
        $this-> b = $b;
        $this-> c = $c;
        $ucgenCevre = $a+$b+$c;
        $s = $ucgenCevre/2;
        $ucgenAlan= sqrt($s*(($s-$a)*($s-$b)*($s-$c)));
        return ['cevre'=>$ucgenCevre,'alan'=>$ucgenAlan];
    }
    public function dikdortgen($d,$e){
        $this-> d = $d;
        $this-> e = $e;
        $dikdortgenCevre = 2*($d+$e);
        $dikdortgenAlan= $d*$e;
        return ['cevre'=>$dikdortgenCevre,'alan'=>$dikdortgenAlan];
    }
    public function kare($k){
        $this-> k = $k;
        $kareCevre = 4 * $k;
        $kareAlan= pow($k,2);
        return ['cevre'=>$kareCevre,'alan'=>$kareAlan];
    }
}
$Calculate = new calculate();
if(isset($_POST['ucgen'])){

    $ucgen = $Calculate->ucgen($_POST['a'],$_POST['b'],$_POST['c']);
}
elseif(!isset($_POST['ucgen'])){
    $ucgen='';
}
if(isset($_POST['kare'])){
   $kare = $Calculate->kare($_POST['k']);
}
elseif(!isset($_POST['kare'])){
    $kare = '';
 }
if(isset($_POST['dikdortgen'])){
    $dikdortgen = $Calculate->dikdortgen($_POST['d'],$_POST['e']);
}
elseif(!isset($_POST['dikdortgen'])){
    $dikdortgen = '';
}
?>
  <body>
    <section class="homework-section">
            <div class="position-controller">
                <div class="homework-header">Field and Perimeter</div>
                <div class="homework-area">
                    <div class="homework-item">
                        <div class="item-img"><img src="./img/ucgen.png" alt=""></div>
                        <p class="area-header">Üçgen</p>
                        <div class="text-area">
                            <p class="item-text">Üçgenin Çevresi</p>
                            <p class="item-text"><?php echo $ucgen == '' ? '0' : $ucgen['cevre']; ?></p>
                        </div>
                        <div class="text-area">
                            <p class="item-text">Üçgenin Alanı  </p>
                            <p class="item-text"><?php echo $ucgen == '' ? '0' : $ucgen['alan']; ?></p>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <input type="text" name="a" placeholder="a kenarını giriniz">
                            <input type="text" name="b" placeholder="b kenarını giriniz">
                            <input type="text" name="c" placeholder="c kenarını giriniz">

                            <button type="submit" name="ucgen" class="ucgen">Hesapla</button>
                        </form>
                    </div>
                    <div class="homework-item">
                        <div class="item-img"><img src="./img/kare.png" alt=""></div>
                        <p class="area-header">Kare</p>
                        <div class="text-area">
                            <p class="item-text">Kare Çevresi</p>
                            <p class="item-text"><?php echo $kare == '' ? '0' :$kare['cevre']; ?></p>
                        </div>
                        <div class="text-area">
                            <p class="item-text">Kare Alanı  </p>
                            <p class="item-text"><?php echo $kare == '' ? '0' : $kare['alan']; ?></p>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <input type="text" name="k" placeholder="Karenin bir kenarını giriniz">
                            <button type="submit" name="kare" class="ucgen">Hesapla</button>
                        </form>
                    </div>
                    <div class="homework-item">
                        <div class="item-img"><img src="./img/dikdortgen.png" alt=""></div>
                        <p class="area-header">Dikdörgenin</p>
                        <div class="text-area">
                            <p class="item-text">Dikdörgeninin Çevresi</p>
                            <p class="item-text"><?php echo $dikdortgen == ''? '0' : $dikdortgen['cevre']; ?></p>
                        </div>
                        <div class="text-area">
                            <p class="item-text">Dikdörgeninin Alanı</p>
                            <p class="item-text"><?php echo $dikdortgen == ''? "  0" :"  ".$dikdortgen['alan']; ?></p>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <input type="text" name="d" placeholder="Kısa Kenarı Giriniz">
                            <input type="text" name="e" placeholder="Uzun Kenarı Giriniz">

                            <button type="submit" name="dikdortgen" class="ucgen">Hesapla</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
  </body>
</html>
