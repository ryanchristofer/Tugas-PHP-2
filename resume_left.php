<?php

    echo" <div class='resume_left'>
            <div class='about_sec'>
                <div class='button'>Tentang Saya</div>
                <p>Saya seorang mahasiswa yang berkuliah di Perguruan Tinggi Negeri. 
                    Disiplin dan menghargai waktu adalah hal penting bagi saya. 
                    Memiliki ketertarikan dibidang IT menjadi alasan saya memilih jurusan informatika. </p> 
                <p>Saya ingin lebih terampil dan dapat mengoperasikan apa yang nantinya dapat menjadi keahlian saya. 
                    Selain itu, kemampuan saya dalam team work dan ketelitian terbilang dapat diandalkan nantinya.</p>    
            </div>
            <div class='mat_class'>";
            echo "Jadwal Mata kuliah :  </br>";
    $shop = array(
        array("hari" => "Senin", "1" => "Jaringan Komputer,", "2" => "Pemrograman Berorientasi Objek", "3" =>""),
        array("hari" => "Selasa", "1" => "Pemrograman Web,", "2" => "Kecerdasan Buatan" , "3" =>""), 
        array("hari" => "Rabu", "1" => "Desain Antarmuka,", "2" => "Kepemimpinan,", "3" => " Rekayasa Perangkat Lunak"), 
        array("hari" => "Kamis", "1" => "Analisis & Desain Sistem", "2" => "" , "3" =>""), 
    );
    echo "</br>";
    foreach ( $shop as $var ) {
        echo  "<li>", $var['hari'], "\t:\t", $var['1'], "\t\t", $var['2'], $var['3'], "\t\t", "</li> </br>";
    };
                // <div class='button'> Jadwal Mata Kuliah</div>
                // <ul>
                //     <li>
                //         <div class='item'>
                //             <div class='item_grp'>
                //                 <p class='title'>Senin</p>
                //                 <p class='sub_title'>Jaringan Komputer <br/> Pemrograman Berorientasi Objek</p>
                //             </div>
                //         </div>
                //     </li>
                //     <li>
                //         <div class='item'>
                //             <div class='item_grp'>
                //                 <p class='title'>Selasa</p>
                //                 <p class='sub_title'>Pemrograman Web <br/> Kecerdasan Buatan</p>
                //             </div>
                //         </div>
                //     </li>
                //     <li>
                //         <div class='item'>
                //             <div class='item_grp'>
                //                 <p class='title'>Rabu</p>
                //                 <p class='sub_title'>Desain Antar Muka <br/> Kepemimpinan <br/> Rekayasa Perangkat Lunak</p>
                //             </div>
                //         </div>
                //     </li>
                //     <li>
                //         <div class='item'>
                //             <div class='item_grp'>
                //                 <p class='title'>Kamis</p>
                //                 <p class='sub_title'>Analisis & Desain Sistem</p>
                //             </div>
                //         </div>
                //     </li>
                // </ul>
                echo "Pendidikan :  </br>";
                $shop = array(
                    array("institusi" => "Institusi: UPN Veteran Jawa Timur", "kota" => "Kota: Surabaya, Jawa Timur", "tahun" => "Tahun: 2020 -  sekarang",),
                    array("institusi" => "Institusi: SMA Sultan Iskandar Muda ", "kota" => "Kota: Medan, Sumatera Utara", "tahun" => "Tahun: 2017 - 2020"), 
                );
                foreach ( $shop as $var ) {
                    echo "<ul> <li>", $var['institusi'], "</li><li>", $var['kota'], "</li><li>", $var['tahun'], "</li> </ul>";
                };

        //     echo "</div>
        //     <div class='educ_sec'>
                
        //         <div class='button'>Pendidikan</div>
        //         <ul>
        //             <li>
        //                 <div class='item'>
        //                     <div class='item_grp'>
        //                         <p class='title'>UPN Veteran Jawa Timur</p>
        //                         <p class='sub_title'>Surabaya, Jawa Timur</p>
        //                         <span class='timeline'>2020 - Sekarang</span>
        //                     </div>
        //                 </div>
        //             </li>
        //             <li>
        //                 <div class='item'>
        //                     <div class='item_grp'>
        //                         <p class='title'>SMA Sultan Iskandar Muda</p>
        //                         <p class='sub_title'>Medan, Sumatera Utara</p>
        //                         <span class='timeline'>2017 - 2020</span>
        //                     </div>
        //                 </div>
        //             </li>
        //         </ul>
        //     </div>
        // </div>";
?>        