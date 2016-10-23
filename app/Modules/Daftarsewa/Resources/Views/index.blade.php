@extends('home::template.index_template')

@section('title', 'About US')

@section('isiKonten')
    <?php
    // array konten
    // format
    // Which is equivalent to

// $array = array();
//
// $array[0] = array();
// $array[0]['name'] = 'John Doe';
// $array[0]['email'] = 'john@example.com';
//
// $array[1] = array();
// $array[1]['name'] = 'Jane Doe';
// $array[1]['email'] = 'jane@example.com';
    $ArrayTable = array(
    0 => array(
        'gambarHref' => 'http://2.bp.blogspot.com/-6RyWuaW0Y-I/UG7FCoRs6_I/AAAAAAAABNU/T4Je6RflZmk/s640/mobil+katana+bekas.jpg',
        'namaMobil' => 'Toyota Katana',
        'Gearbox' => ' Manual',
        'Maxpenumpang' => ' 5 orang',
        'Bahanbakar' => ' Premiun',
        'Hargasewa' => ' Rp. 90.000/nett',
    ),
    1 => array(
        'gambarHref' => 'http://2.bp.blogspot.com/-3i_zrgWJsSw/TjkHYMIuYWI/AAAAAAAAALw/NkCakOTfY9g/s320/Suzuki%2BKarimun.jpg',
        'namaMobil' => 'SUZUKI KARIMUN ',
        'Gearbox' => 'Manual',
        'Maxpenumpang' => '5 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp. 125.000/nett	',
    ),
    2 => array(
        'gambarHref' => 'https://ic1.maxabout.us/autos/cars_india/maruti-8%5Cestilo-480-estilovxi-22222.jpg',
        'namaMobil' => 'TOYOTA ESTILO',
        'Gearbox' => ' Manual & Matic',
        'Maxpenumpang' => '5 orang',
        'Bahanbakar' => ' Premiun',
        'Hargasewa' => ' Rp.135.000/nett',
    ),

    3 => array(
        'gambarHref' => 'http://lh3.googleusercontent.com/-vCmZJq8I33E/VWaIJxaeHMI/AAAAAAAACAw/g7sNFv5NenQ/s640/c0f2cac64acdc5cb953270ab6b398188.png',
        'namaMobil' => 'TOYOTA AGYA ',
        'Gearbox' => ' Manual & Matic',
        'Maxpenumpang' => ' 5 orang',
        'Bahanbakar' => ' Premiun',
        'Hargasewa' => '150.000/nett',
    ),
    4 => array(
        'gambarHref' => 'http://static.carmudi.com.ph/wabGOSd1tiqDYjUy7X3mxUfotcU=//PH/cms/Toyota_Avanza_Grey_side.jpg',
        'namaMobil' => 'TOYOTA AVANZA',
        'Gearbox' => ' Manual & Matic',
        'Maxpenumpang' => '9 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp. 165.000/nett',
    ),
    5 => array(
        'gambarHref' => 'http://driver.pk/wp-content/uploads/2015/11/Suzuki-APV-GLX-in-white-shape.png',
        'namaMobil' => 'SUZUKI APV ',
        'Gearbox' => ' Manual',
        'Maxpenumpang' => '10 orang',
        'Bahanbakar' => ' Premiun',
        'Hargasewa' => ' Rp. 175.000/nett',
    ),
    6 => array(
        'gambarHref' => 'http://www.jogjasewamobil.com/wp-content/uploads/2015/06/innovatr.png',
        'namaMobil' => 'KIJANG INNOVA',
        'Gearbox' => ' Manual & Matic',
        'Maxpenumpang' => ' 9 orang',
        'Bahanbakar' => ' Premiun',
        'Hargasewa' => ' Rp. 275.000/nett',
    ),
    7 => array(
        'gambarHref' => 'http://www.boobrok.com/wp-content/uploads/2014/08/Mobil-Toyota-Fortuner-G-4x4-VNT-Diesel-2015.jpg',
        'namaMobil' => 'TOYOTA FORTUNER',
        'Gearbox' => 'Manual & Matic',
        'Maxpenumpang' => '9 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp. 450.000/nett',
    ),
    8 => array(
        'gambarHref' => 'https://www.hondacarindia.com/AllNewJazz/common/images/car7.png',
        'namaMobil' => 'HONDA JAZZ RS',
        'Gearbox' => ' Manual & Matic',
        'Maxpenumpang' => ' 5 orang',
        'Bahanbakar' => ' Premiun',
        'Hargasewa' => ' Rp.550.000/nett',
    ),
    9 => array(
        'gambarHref' => 'http://bright-cars.com/uploads/toyota/toyota-terios/toyota-terios-09.jpg',
        'namaMobil' => 'TOYOTA TERIOS',
        'Gearbox' => ' Manual & Matic',
        'Maxpenumpang' => '8 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp.400.000/nett',
    ),
    10 => array(
        'gambarHref' => 'http://infokebali.com/wp-content/uploads/2012/02/Mobil-Alphard.jpg',
        'namaMobil' => 'ALPHARD',
        'Gearbox' => ' Manual',
        'Maxpenumpang' => '6 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp.3.500.000/nett',
    ),
    11 => array(
        'gambarHref' => 'http://www.sewarentalmobilmalang.net/wp-content/uploads/2015/09/sewa-mobil-di-malang.jpg',
        'namaMobil' => 'ELF SHORT',
        'Gearbox' => ' Manual',
        'Maxpenumpang' => '10 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp.350.000/nett',
    ),
    12 => array(
        'gambarHref' => 'http://sewamobiljogja.co.id/wp-content/uploads/2015/03/Long-ELF-777.jpg',
        'namaMobil' => 'HELF LONG',
        'Gearbox' => ' Manual',
        'Maxpenumpang' => '15 orang',
        'Bahanbakar' => 'Premiun',
        'Hargasewa' => 'Rp.550.000/nett',
    ),
);
    ?>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="content" style="width: 100%;">
				<div id="post-12" class="post-12 page type-page status-publish hentry">
			<span class="entry-title" style="display: none;">Cars</span><span class="vcard" style="display: none;"><span class="fn"><a href="#" title="Posts by Native Rental" rel="author">Native Rental</a></span></span><span class="updated" style="display:none;">2015-05-14T12:20:34+00:00</span>																		<div class="post-content">
				<div class="fusion-fullwidth fullwidth-box fusion-fullwidth-1  fusion-parallax-fixed nonhundred-percent-fullwidth" style="border-color:#eae9e9;border-bottom-width: 0px;border-top-width: 0px;border-bottom-style: solid;border-top-style: solid;padding-bottom:20px;padding-top:10px;padding-left:0px;padding-right:0px;"><style type="text/css" scoped="scoped">.fusion-fullwidth-1 {
                            padding-left: 0px !important;
                            padding-right: 0px !important;
                        }</style><div class="fusion-row"><div class="item-rental-wrapper item-rental-item-list">
<div class="item-type-label">Biaya sopir + BBM Rp. 200.000 / Day</div>

{{--  isi konten--}}
<?php
for($i=0;$i<13;$i++){
$dataEcho="<div class='nrs-list-item ' '>
<div class='item-image'>
                   <a class='fancybox image' href='".$ArrayTable[$i]['gambarHref']."'>
              <img src='".$ArrayTable[$i]['gambarHref']."' alt='Ford Fiesta'>
          </a>
          </div>
  <div class='item-description' style='width:70%;>
      <a href='".$ArrayTable[$i]['namaMobil']."<' title='Show car description'><span class='item-name'>".$ArrayTable[$i]['namaMobil']."</span></a>        <br><hr>
              <div class='description-item'>
          <i class='fa fa-tachometer'></i>
          <span class='description-title'> Fuel:</span> ".$ArrayTable[$i]['Bahanbakar']."</div>

              <div class='description-item'>
          <i class='fa fa-car'></i>
          <span class='description-title'>Class:</span> Compact        </div>

              <div class='description-item'>
          <i class='fa fa-cogs'></i>
          <span class='description-title'>Gearbox:</span> ".$ArrayTable[$i]['Gearbox']."</div>


              <div class='description-item'>
          <i class='fa fa-users'></i>
          <span class='description-title'>Max passengers:</span>".$ArrayTable[$i]['Maxpenumpang']."</div>

      <div class='description-item'>
          <i class='fa fa-credit-card'></i>
          <span class='description-title'>Price:</span>".$ArrayTable[$i]['Hargasewa']."</ day        </div>
  </div>
</div>";
echo $dataEcho;
}
?>
{{-- end isi konten --}}














{{-- <div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1436773115_ford fiesta 2.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1436773115_ford fiesta 2.jpg" alt="Ford Fiesta">
            </a>
            </div>
    <div class="item-description">
        <a href="http://nativerental.com/cars/cars/ford-fiesta/" title="Show car description"><span class="item-name">Ford Fiesta</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Compact        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 5-6 l/100km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 8.26 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866289_1432632917_Suzuki alto.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866289_1432632917_Suzuki alto.jpg" alt="Suzuki Alto">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Suzuki Alto</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Petrol        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Compact        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 4-5L/100km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 8.26 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866270_1432632903_peugeot 207.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866270_1432632903_peugeot 207.jpg" alt="Peugeot 207">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Peugeot 207</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Compact        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 5-6 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 11.57 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="item-type-label">Intermediate</div><div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866303_1432633008_Mazda 6.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866303_1432633008_Mazda 6.jpg" alt="Mazda 6">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Mazda 6</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Petrol        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Intermediate        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 9-11 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 16.53 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="item-type-label">Minibus</div><div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866477_1432632928_Opel Vivaro.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866477_1432632928_Opel Vivaro.jpg" alt="Opel Vivaro">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Opel Vivaro</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Minibus        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 9 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 8        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 44.63 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866491_1432632939_Peugeot Boxer.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866491_1432632939_Peugeot Boxer.jpg" alt="Peugeot Boxer">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Peugeot Boxer</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Minibus        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 8-9 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 3        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 44.63 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>Air Bags</li><li>Air Conditioning</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="item-type-label">Station Wagon</div><div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866619_1432632987_Opel Astra Sport Tourer.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866619_1432632987_Opel Astra Sport Tourer.jpg" alt="Opel Astra Sport Tourer">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Opel Astra Sport Tourer</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Petrol        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Station Wagon        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 7-9 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 14.05 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1436773158_Kia Ceed SW.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1436773158_Kia Ceed SW.jpg" alt="Kia Ceed">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Kia Ceed</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Station Wagon        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 6-8 l/100km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 14.05 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866673_1432899607_Opel Insignia universal22.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866673_1432899607_Opel Insignia universal22.jpg" alt="Opel Insignia">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Opel Insignia</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Station Wagon        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 7-9 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 16.53 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866536_1432899430_c5s.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866536_1432899430_c5s.jpg" alt="Citroen C5">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Citroen C5</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Station Wagon        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 5-7 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 16.53 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866509_1432632949_Audi A6.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866509_1432632949_Audi A6.jpg" alt="Audi A6">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Audi A6</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> Station Wagon        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 7-9 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 24.79 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="item-type-label">SUV</div><div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1436773210_Nissan Qashqai+2.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1436773210_Nissan Qashqai+2.jpg" alt="Nissan Qashqai+2">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Nissan Qashqai+2</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> SUV        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Manual        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 7-9 l/100km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 7        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 16.53 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866727_1432633039_Nissan Qashqai.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866727_1432633039_Nissan Qashqai.jpg" alt="Nissan Qashqai">
            </a>
            </div>
    <div class="item-description">
        <a href="http://nativerental.com/cars/cars/nissan-qashqai/" title="Show car description"><span class="item-name">Nissan Qashqai</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Petrol        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> SUV        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 8-9 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 16.53 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1436773349_VW Touareg.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1436773349_VW Touareg.jpg" alt="VW Touareg">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">VW Touareg</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Diesel        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> SUV        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 9-11 l/100km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 20.66 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div>
<div class="nrs-list-item">
    <div class="item-image">
                     <a class="fancybox image" href="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/1433866707_1432633030_Mercedes ML350.jpg">
                <img src="http://nativerental.com/cars/wp-content/plugins/native-rental-system/extensions/car/front/demo-gallery/thumb_1433866707_1432633030_Mercedes ML350.jpg" alt="Mercedes ML350">
            </a>
            </div>
    <div class="item-description">
        <a href="https://www.facebook.com/eddot.fu" title="Show car description"><span class="item-name">Mercedes ML350</span></a>        <br><hr>
                <div class="description-item">
            <i class="fa fa-tachometer"></i>
            <span class="description-title"> Fuel:</span> Petrol        </div>

                <div class="description-item">
            <i class="fa fa-car"></i>
            <span class="description-title">Class:</span> SUV        </div>

                <div class="description-item">
            <i class="fa fa-cogs"></i>
            <span class="description-title">Gearbox:</span> Automatic        </div>

                <div class="description-item">
            <i class="fa fa-bar-chart"></i>
            <span class="description-title">Fuel usage:</span> 10-12 l/100 km        </div>

                <div class="description-item">
            <i class="fa fa-users"></i>
            <span class="description-title">Max passengers:</span> 5        </div>

        <div class="description-item">
            <i class="fa fa-credit-card"></i>
            <span class="description-title">Price from:</span> 28.93 USD / day        </div>
    </div>
    <div class="item-extras">
        <div class="item-extras-title">Features</div><hr><ul class="nrs-item-features-list"><li>ABS</li><li>Air Bags</li><li>Air Conditioning</li><li>Audio system</li><li>Central locking</li><li>Cruise Control</li><li>Electric windows</li><li>Power Steering</li></ul>        <div class="description-external-links">
            <div class="description-button"><a href="https://www.facebook.com/eddot.fu" title="Book">Book</a></div>        </div>
    </div>
</div> --}}
</div>
</div></div>
							</div>
																	</div>
					</div>
@endsection
