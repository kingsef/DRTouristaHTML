<?php
if (!$_SESSION['username'] && !$_SESSION['password']) {
    header('Location: login.php');
}
else {
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
        <title>Home</title>
        <style>
            @font-face {
            font-family: Aloja;
            src: url(assets/fonts/Aloja-Light.woff);
            }
        </style>
        
    </head>
    <body>
        <div class="header">
            <div class="logo"><img class="drtlogo" src="assets/img/DRT_LOGO-02.webp" alt=""></div>
            <div class="drtourista">DRTourista
                <div class="drtmun">MUNICIPALITY OF<br>DO&#209;A REMEDIOS TRINIDAD</div>
            </div>
            <div class="topnav">
                <a href="logout.php">Logout</a>
                <a href="">About</a>
                <a class="active" href="index.html">Home</a>

            </div>
        </div>
        <div class="hometab_body">
            <div class="main">
                <div class="TourSites">
                    <button type="button" class="collapsible">Brgy. Bayabas</button>
                    <div class="content">
                        <table class="tsbrgy">
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Batong Palaka</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Puning-Cave-3-scaled.jpg?resize=845%2C684&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.658772321339!2d121.08760905117144!3d14.956092389525717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397097107252363%3A0x45cc8b9081bae22!2sBatong%20Palaka!5e0!3m2!1sen!2sph!4v1668254911719!5m2!1sen!2sph" width="400px" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Puning Cave</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Batong-Palaka-6.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.5466167025893!2d121.08987485117134!3d14.962331889521787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339708635c3af9cf%3A0xd05fd214c1d9b4a9!2sPuning%20Cave!5e0!3m2!1sen!2sph!4v1668254406118!5m2!1sen!2sph" width="400px" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="collapsible">Brgy. Camachile</button>
                    <div class="content">
                        <table class="tsbrgy">
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Secret Falls</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/secret-falls-_03.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3854.1233034706115!2d121.09569200000001!3d14.985859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33970955fa23fe4f%3A0x21e98ad0c4729472!2sSecret%20Falls%20DRT!5e0!3m2!1sen!2sph!4v1668258949480!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Malangaan Spring and Cave</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Malangaan_02-2.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240.86070978975044!2d121.06058719947873!3d15.005392232110486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397060da52f7595%3A0xe668db628f507396!2sMalangaan%20Spring%20and%20Cave!5e0!3m2!1sen!2sph!4v1668258549779!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Isla Puting Bato</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Puting-Bato-1.png?resize=495%2C379&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Simbahang Bato</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Simbahang-Bato-1-2.jpg?resize=495%2C400&ssl=1" alt=""   style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73334.60247634388!2d121.04417926644453!3d14.982972665501977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339707bf635971c5%3A0x71aabe3efef79736!2sSimbahang%20Bato!5e0!3m2!1sen!2sph!4v1668259281396!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Tung-Tong Falls</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Tungtung-Falls-2.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51866.32541664455!2d121.06706048869269!3d14.937778575402879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397091ed15e6bbd%3A0xfcac47d9a2527267!2sTung-tong%20Falls!5e0!3m2!1sen!2sph!4v1668259537476!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <button type="button" class="collapsible">Brgy. Camachin</button>
                    <div class="content">
                        <table class="tsbrgy">
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Candle Monument</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Candle-Monument.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.7250044858583!2d121.1023214662233!3d15.063319155848527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33970f2b381e5f35%3A0xf2bbbcdd8000dc4a!2sCandle%20Monument!5e0!3m2!1sen!2sph!4v1668259972007!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Hidden Falls</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Hidden-Falls-1-1.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Adarna</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Adarna-4.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="collapsible" style="font-size:38px;">Brgy. Kalawakan</button>
                    <div class="content">
                        <table class="tsbrgy">
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Talon Pare</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Talon-Pari-5-scaled.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.7250044858583!2d121.1023214662233!3d15.063319155848527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33970f2b381e5f35%3A0xf2bbbcdd8000dc4a!2sCandle%20Monument!5e0!3m2!1sen!2sph!4v1668259972007!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Tila Pilon Hills</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Tila-Pilon-2.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7703.311937027748!2d121.11402799999999!3d15.122278000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339711b7e4ab3de1%3A0x6c64d4bba88075da!2sTila%20Pilon%20Hills!5e0!3m2!1sen!2sph!4v1668260521581!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Balistada</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Tila-Pilon-5-scaled.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d962.8723512889865!2d121.096111!3d15.131444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339711940f592d55%3A0x856a42ef6c3e499d!2sBalistada%20Hills!5e0!3m2!1sen!2sph!4v1668260918018!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Suklib</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Suklib-1.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Mt. Susong Dalaga</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Susong-Dalaga-1-1.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Mapalasan Jaw Rock Mountain</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Mapalasan-Jaw-Rock-Mt-2-1.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.8559342747826!2d121.10128351483202!3d15.111266689478894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDA2JzQwLjYiTiAxMjHCsDA2JzEyLjUiRQ!5e0!3m2!1sen!2sph!4v1633702105590!5m2!1sen!2sph" width="400" height="250" allowfullscreen="allowfullscreen"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Mount Corona</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Mt-Corona-4-scaled.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3849.629934377322!2d121.16864461497008!3d15.233405165338805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDE0JzAwLjIiTiAxMjHCsDEwJzE1LjAiRQ!5e0!3m2!1sen!2sph!4v1633703417774!5m2!1sen!2sph" width="400" height="250" allowfullscreen="allowfullscreen"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Talon Lukab</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Talon-Lukab-2.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3849.392376939042!2d121.12586691483376!3d15.24638328939385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDE0JzQ3LjAiTiAxMjHCsDA3JzQxLjAiRQ!5e0!3m2!1sen!2sph!4v1633704444252!5m2!1sen!2sph" width="400" height="250" allowfullscreen="allowfullscreen"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Talon ni Zamora</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Talon-ni-Zamora-2-1.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Talon ni Eba</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Talon-ni-Eba-1.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe loading="lazy" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.4591487792004!2d121.1303919149699!3d15.188019066482264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDExJzE2LjkiTiAxMjHCsDA3JzU3LjMiRQ!5e0!3m2!1sen!2sph!4v1633704898615!5m2!1sen!2sph" width="400" height="250" allowfullscreen="allowfullscreen"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Mt. Manalmon<br>&<br> Mount Gola</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Mt.-Manalmon-5.jpg?resize=408%2C306&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1357.3054222366416!2d121.09193440294912!3d15.163472599318686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTXCsDA5JzQ4LjUiTiAxMjHCsDA1JzMzLjAiRQ!5e1!3m2!1sen!2sph!4v1668263479512!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Patingan</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Tangke-6-scaled.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Tangke</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Mt.-Manalmon-5.jpg?resize=408%2C306&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.2717867651213!2d121.10441589233696!3d15.16372629077225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDA5JzQ5LjAiTiAxMjHCsDA2JzI0LjAiRQ!5e0!3m2!1sen!2sph!4v1635173135177!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>

                        </table>
                    </div>
                    <button type="button" class="collapsible">Brgy. Talbak</button>
                    <div class="content">
                        <table class="tsbrgy">
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Verdibia Falls</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Verdibia-Falls-1.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.070324520851!2d121.11099191496906!3d15.099452368704334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDA1JzU4LjAiTiAxMjHCsDA2JzQ3LjUiRQ!5e0!3m2!1sen!2sph!4v1633708570998!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Mt. Mavio</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Mt.-Mavio-7.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5447.411663118959!2d121.09968505019984!3d15.108743970392469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33971113cf073357%3A0xefbf4d1838a847d4!2sMt.%20Mabio!5e0!3m2!1sen!2sph!4v1668267152753!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Palanguyan</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/02/Palanguyan-3.png?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                            </tr>
                        </table>
                    </div>
                    <button type="button" class="collapsible" style="font-size:34px;">Brgy. Pulong Sampalok</button>
                    <div class="content">
                        <table class="tsbrgy">
                            <tr>
                                <th style="width: 20%; font-size: 35px;">Caribbean Resort</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/10/IMG20200220141653-1-scaled.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td style="width: 40%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.493452285734!2d121.06869061496784!3d14.965288672046984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339707d3d590e203%3A0x2f8b2bc7ee88a96d!2sCaribbean%20Waves%20Resort!5e0!3m2!1sen!2sph!4v1633939292031!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                            <tr>
                                <th style="width: 20%; font-size: 35px;">View Deck</th>
                                <td style="width: 40%"><img src="https://i0.wp.com/drtbulacan.gov.ph/wp-content/uploads/2021/10/viewdeck-04.jpg?resize=495%2C400&ssl=1" alt="" style="height: 250px;"></td>
                                <td><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3854.604516415278!2d121.05833329999999!3d14.959111100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTTCsDU3JzMyLjgiTiAxMjHCsDAzJzMwLjAiRQ!5e0!3m2!1sen!2sph!4v1668267789129!5m2!1sen!2sph" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                            </tr>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                this.classList.toggle("active1");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }});
            }
         </script>
    </body>
</html>