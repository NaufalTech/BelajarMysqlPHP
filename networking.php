<!DOCTYPE html>
<html>
<?php include("database.php") ?>
    <head>
        <link rel="stylesheet" href="css/contentArticle.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/main-home.css">
        <link rel="stylesheet" href="css/contentArtickel.css">
        <link rel="stylesheet" href="css/comment.css">
        <script src="js/forMobile.js"></script>

        <script src = "forMobile.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </head>

    <body>

        <header>
            <div class="head">
                
                <nav class="nav-header">
                    <!-- ::before -->
                    <div id="element1" class="the-header">
                            <img class="real-Logo"
                                src="https://www.researchgate.net/profile/F++++++++++++++++++++++++++++erda-Ernawan/publication/256097003/figure/download/fig6/AS:668761514324000@1536456578895/Sample-of-24-bit-RGB-of-graphical-image-with-512512-pixels-N-2-i-j-i1-j-1-k.jpg">
                                
                            <h2 style="border-left: 2px solid red; padding-left: 10px; margin-left: 15px;">NaufalTech.com</h2>
                        </div>
                    <div class="wrapper-mobile-list-nav-header">
                        <button id="theListButton" class="button-list-nav-header" onclick="buttonList()">
                            <span class="span-decoration"></span>
                            <span class="span-decoration"></span>
                            <span class="span-decoration theLastSpan"></span>
                        </button>
                    </div>
                    
                    <div id="element2" class="list-nav-header">
                    
                        <a href="index.html" class="link-list-nav-header">HOME</a>
                        <a href="networking.html" class="link-list-nav-header">NETWORKING</a>
                        <a href="programming.html" class="link-list-nav-header">PROGRAMMING</a>
                        <a href="#" class="link-list-nav-header" id="visi-misi">IT UPDATE</a>
                        <a href="#" class="link-list-nav-header" id="far-right-tab-menu">ABOUT</a>
                    </div>

                    <!-- TODO Display list-nav-header for mobile -->
                        <button class="button-search-engines">
                            <img class="img-button-search-engines"src="search-icon.png">
                        </button>
                    <!-- <div id="search-engine-1" class="search-engines main-search-engine ">
                        <input type="text" id="search-field" class="search-fields" placeholder="search">
                    </div> -->

                    <!-- <div class="for-mobile"> -->

                        
                        
                            <div id="wrapper-mobile-nav-bar">
                                <div id="mobile-nav-bar">
                                    <div class="upper-mobile-nav-bar">
                                        <span id="theSideBarExit" class="" onclick="sideBarExit()">
                                            <div>
                                                X
                                            </div>
                                        </span>
                                        <div id="side-nav-search-field" class="search-engines mobile-search-engine" style="border: blue 2px; padding: 0px;">
                                            <input type="text" id="input-nav-side-search-field" class="search-fields " placeholder="search" style="margin-right: 0px; padding: 7px 0 7px 7px;">
                                        </div>

                                    </div>  
                                    <div id="mobile-list" class="mobile-list-nav-bar">
                                        <a href="home.html" class="link-list-mobile">HOME</a>
                                        <a href="networking.html" class="link-list-mobile">NETWORKING</a>
                                        <a href="Programming.html" class="link-list-mobile">PROGRAMMING</a>
                                        <a href="#" class="link-list-mobile" id="visi-misi">IT UPDATE</a>
                                        <a href="www.google.com" class="link-list-mobile" id="far-right-tab-menu">ABOUT</a>
                                    </div>
                                </div>
                            

                                </div>
                            </div>


                        

                </nav>
            

            </div>
        </header>

        <article id="content">
            <div class="wrapper-all-article ">
                <div class="wrapper-left-sidebar border border-sidebar">
                    <div class="left-sidebar-sticky">
                        <div class="left-sidebar" >
                            <div class="left-sidebar-name border-bottom">
                                Daftar isi artikel
                            </div>
                            <div style="margin-left: 30px;">
                                <li class="table-index-sidebar border-bottom padding-left-sidebar">
                                    <a href="http://google.com">hehe1</a>
                                </li>
                                <div class="wrapper-sub-table-index-sidebar" >
                                    
                                    <li class="sub-table-index-sidebar padding-left-sidebar">
                                        <a href="#respond">hehe1</a>
                                    </li>
                                </div>
                                <li class="table-index-sidebar border-bottom padding-left-sidebar">
                                    <a href="http://google.com">hehe1</a>
                                </li>
                                <!-- <div class="table-index-sidebar"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-content border">
                    <div class="wrapper-isiContent">
                        <div class="header-article">
                            <h1 class="judul">CONTOH HALAMAN CONTENT</h1>
                            <time datetime="20223-11-2 11:34">Kamis, 2 November 2023</time>
                            <div class="header-share">
                                <div class="share" style="
                                    margin-right: 20px;
                                ">Bagikan:</div>
                                <img class="logo-media-sosial-bottom logo-media-sosial-upper" src="media/x-logo-twitter-elon-musk.jpg" style="margin-top: unset;">
                                <img class="logo-media-sosial-bottom logo-media-sosial-upper" id="ig-logo-media-sosial-bottom" src="media/ig-logo.jpg" style="margin-top: unset;">
                            </div> 
                        </div>   
                        <div class="isiContent">
                            <div class="img-content">
                                <!-- <img class="mainImg" src="https://cdn.antarafoto.com/cache/1200x799/2023/10/13/kpk-tahan-mantan-menteri-pertanian-18kdc-dom.jpg" alt="ADFJASFJA"> -->
                                <img class="mainImg" src="media/size-CSS-background-images-correctly.webp" alt="ADFJASFJA">
                                <figcaption>c</figcaption>
                            </div>

                            <div>
                                <p>
                                    <tab></tab>ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet pellentesque erat, sit amet porttitor odio blandit a. Nulla tincidunt nunc non ligula venenatis commodo. Sed libero nulla, tincidunt quis euismod ac, semper sed ex. Cras pellentesque sollicitudin magna, nec vestibulum quam eleifend et. Cras et neque sapien. Nullam at dui lectus. Donec fringilla leo ut urna porttitor, ac ullamcorper tellus lacinia. Nunc porta ipsum sit amet sapien suscipit imperdiet. Sed vitae neque porta erat consectetur fringilla quis quis erat. Quisque gravida tempus eros in ultrices. Duis ornare dignissim est, sed pulvinar purus rutrum sit amet. Cras dictum pharetra elit a tristique. Sed eu sapien vitae tellus pellentesque maximus a id augue.
                                </p>

                                <p>
                                    <tab></tab>Nullam ut dictum lorem. In hac habitasse platea dictumst. Vivamus vitae semper ipsum. Etiam varius iaculis leo, id dictum lectus commodo non. Morbi lacinia quam orci, vel maximus dui tincidunt ut. Cras sed felis sapien. Donec a accumsan dui, vel laoreet orci. Vestibulum rutrum leo vel lacus vestibulum, ut consectetur nulla porttitor. Aliquam vitae purus gravida, lacinia massa et, tristique ipsum. Maecenas a finibus lacus. Ut dui lectus, porttitor quis maximus vitae, auctor ut elit. Nunc a sollicitudin mi, at placerat ante. Etiam sed tellus quis sapien facilisis faucibus. Mauris quis condimentum lectus, at sodales libero. Maecenas auctor velit sed diam accumsan tempor.
                                </p>
                                <p>
                                    <tab></tab>Praesent dolor neque, fermentum feugiat fringilla at, pulvinar pulvinar elit. Proin a imperdiet ex. Donec bibendum lectus vitae turpis porta, eu tristique lorem ullamcorper. Maecenas varius non nibh ut congue. Integer gravida interdum ligula, non sagittis nulla laoreet eu. Etiam vehicula rhoncus tellus id rutrum. Quisque lorem metus, faucibus vitae ullamcorper sed, suscipit in ante. Cras non justo gravida, congue purus et, sodales risus. Proin fringilla ex at quam gravida, ullamcorper placerat est consectetur. Donec ut lectus non quam interdum suscipit sed ut turpis. Maecenas finibus rutrum augue a facilisis. Mauris porta mollis tellus vitae sagittis. Pellentesque ac consequat est.

                                </p>
                                <p>
                                    <tab></tab>Ut malesuada vestibulum enim a fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla placerat dictum orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse nisl libero, dignissim vitae ipsum ac, iaculis consequat massa. Integer ullamcorper at ex ac lacinia. Donec mollis bibendum mauris sed laoreet. Donec vitae ante vel lectus pharetra suscipit. Vestibulum non urna hendrerit, congue magna at, auctor nibh. Praesent elementum, nibh ut aliquam tempor, quam est commodo urna, eget vulputate nisi velit ac justo. Aliquam metus velit, feugiat id tincidunt nec, congue in enim. Vestibulum euismod eget erat sed suscipit.
                                </p>
                                <p>
                                    <tab></tab>Mauris augue nulla, scelerisque et turpis et, fermentum condimentum est. Cras quis ante in urna dignissim efficitur eget in mauris. Cras pharetra, libero et tempus feugiat, quam erat accumsan est, a bibendum nibh metus non magna. Ut rutrum, urna interdum maximus dictum, nisi tellus elementum nibh, congue sagittis justo dui quis nulla. Fusce sit amet ipsum ac nulla dictum dapibus. Ut sagittis nec lectus ac dapibus. Aenean aliquet lacinia mi a fringilla. Vivamus massa lectus, euismod porta dolor gravida, commodo molestie sem. Etiam fermentum eros sit amet lorem porta, ac lobortis lorem porta. In malesuada purus a massa maximus vestibulum. Sed enim nulla, scelerisque quis erat id, vulputate feugiat ante. Phasellus eget nunc eget magna lobortis mollis. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-comment">
                        <section id="postComment" class="width-80">
                            <div id="respond">
        
                                <h3>Berikan Komentar</h3>
                            
                                <form action="post_comment.php" method="POST" id="commentForm">
                                
                                    <label for="nama_pembuat" class="name">Your name</label>
                                    <input type="text" name="nama_pembuat" id="comment_author" value="" tabindex="1" required="required">
                                
                                    <!-- <label for="email" class="required">Your email;</label>
                                    <input type="email" name="email" id="email" value="" tabindex="2" required="required"> -->
                                
                                    <label for="comment" class="yourMessage">Your message</label>
                                    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
                                    <br>
                                    <!-- <h6>comment_post_ID value hard-coded as 1</h6> -->
                                    <!-- <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" /> -->
                                    <input name="kirim" type="submit" value="KIRIM" />
                                    
                                
                                </form>
                        
                            </div>
                        </section>
                        <div class="login">
                            <div class="login2">
                                <h1>Belum punya akun ?</h1>
                                <a href=""></a>
                            </div>
                        </div>
                        <div class="wrapper-daftarComment width-80">
                            <h3>Komentar</h3>
                            <div class="daftarComment" >
                                
                                <?php
                
                                    function timeAgo($waktuLalu){
                                        $waktuSekarang = time();
                                        $waktuLalu = strtotime($waktuLalu);
                                        $operasiTanggal = $waktuSekarang - $waktuLalu;
                                        
                                        $detik = $operasiTanggal;
                                        $menit = round($operasiTanggal / 60);
                                        $jam = round($operasiTanggal / 3600);
                                        $hari = round($operasiTanggal / 86400);
                                        $minggu = round($operasiTanggal / 604800);
                                        $bulan = round($operasiTanggal / 2592000);
                                        $tahun = round($operasiTanggal / 31536000);
                
                                        if($detik == 1 | $detik == 0){
                                            return  'baru saja';
                                        }
                                        elseif ($detik < 60) {
                                            return "{$operasiTanggal} detik yang lalu";
                                        }
                                        elseif ($menit < 60) {
                                            return "{$menit} menit yang lalu";
                                        }
                                        elseif ($jam < 24) {
                                            return "{$jam} jam yang lalu";
                                        }
                                        elseif ($hari < 7) {
                                            return "{$hari} hari yang lalu";
                                        }
                                        elseif($minggu < 4){
                                            return "{$minggu} minggu yang lalu";
                                        }
                                        elseif($bulan < 12){
                                            return "{$bulan} bulan yang lalu";
                                        }
                                        elseif($tahun){
                                            return "{$tahun} tahun yang lalu";
                                        }
                                        
                                    }
                
                
                                    function timeAgo1($time_ago){
                                        $time_ago = time();
                                        // $time_ago = strtotime($time_ago);
                                        
                                        // $timeAgain = date_create($time_ago);
                                        // $tanggal1 = date_format($timeAgain, "Y/M/d H:i:s"); 
                                        // $time_elapsed   = $cur_time - $time_ago;
                
                                        return $time_ago;
                                    }
                
                                    $TIME = time();
                                    function timeAgo2($time_ago2){
                                        $time_ago2 = strtotime($time_ago2);
                
                                        return $time_ago2;
                                    }
                
                                    date_default_timezone_set('Etc/GMT-8');
                
                                    $pilih = "SELECT * FROM comment_table ORDER BY date desc";
                                    $query = mysqli_query($db, $pilih);
                                    while($daftar_comment = mysqli_fetch_array($query)){
                                        echo"<br>";
                                        echo"<div class='perComment'>";
                                        // echo"<td>".$daftar_comment['id']."</td>";
                                        echo"<div class='bagian_nama'>";
                                            echo"<div class ='nama'>".$daftar_comment['name']."</div>";
                                            echo"<div class='lingkaran'>";
                                            echo"</div>";
                                            // $tanggalLagi = date_create($daftar_comment['date'],);
                                            // $tanggalAgo = date_format($tanggalLagi, 'Y/m/d');
                
                                                
                                                
                                                echo "<div class='tanggal'>".timeAgo($daftar_comment['date'])."</div>";
                                                // echo "<div class='tanggal'>".date('l jS \of F Y h:i:s A')."</div>";
                                                // echo "<div class='tanggal'>".timeAgo2($daftar_comment['date'])."</div>";
                                            // echo "<div class='tanggal'>".date('l jS \of F Y h:i:s A', $TIME)."</div>";
                
                
                                            // echo"<div class='tanggal'>".$tanggalAgo."</div>";
                                        echo"</div>";
                                        echo"<div class='isiComment'>".$daftar_comment['isi_comment']."</div>";
                                        echo"</div>";
                                        
                                        echo"<br>";
                                        echo"<div class='hr'></div>";
                                    }
                
                                    // echo mysli_num_rows($query);
                                    $kosong = mysqli_num_rows($query);
                                    if(empty($kosong)){
                                        echo"<div class='tidak-ada-komentar'>Belum ada komentar :(</div>";
                                        // echo;
                                    }
                
                                ?>
                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <p class="border" style="width: 10%;">daftar komentar</p> -->
                <!-- <div class="right-sidebar">
                   
                    <img class="logo-media-sosial-bottom logo-media-sosial-upper" src="media/x-logo-twitter-elon-musk.jpg" style="margin-top: unset;">
                    <img class="logo-media-sosial-bottom logo-media-sosial-upper" id="ig-logo-media-sosial-bottom" src="media/ig-logo.jpg" style="margin-top: unset;">
                </div> -->

            </div>
            
        </article>

        <nav class="nav-bottom">
            <div class="list-of-media-sosial-bottom">
                <p1 class="p-social-media-link">Media Sosial</p1>
                <div id="MediaSosialLink">
                    <a class="link-social-media-bottom" href="https://youtube.com/@moh.naufal8829?si=gTJ0uLqgiZ4ZPWzL">
                        <img class="logo-media-sosial-bottom" src="media/youtube-logo-kedua.jpg">
                    </a>
                    <a class="link-social-media-bottom" href="https://twitter.com/MohNauf99098377">
                        <img class="logo-media-sosial-bottom" src="media/x-logo-twitter-elon-musk.jpg">
                    </a>
                    <a class="link-social-media-bottom" href="https://www.instagram.com/moh.naufal.12139/">
                        <img class="logo-media-sosial-bottom" id="ig-logo-media-sosial-bottom" src="media/ig-logo.jpg">
                </div>
            </div>
            <p></p>
        </nav>
    </body>
</html>

