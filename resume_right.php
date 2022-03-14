<?php

    echo" <div class='resume_right'>
            <div class='profile_sec'>
                <div class='img_holder'>
                    <img src='Me.jpg' alt='profile image'>
                </div>
                <div class='profile_info'>
                    <p class='firstname'>Ryan</p>
                    <p class='lastname'>Christofer</p>
                    <p class='role'>Teknik Informatika</I></p>
                </div>
            </div>";
            echo "Kontak :  </br>";
                $shop = array(
                    array("A" => "Telepon: +62 81260391031"),
                    array("A" => "Email: ryansinurat0@gmaill.com"),
                    array("A" => "Alamat: Jalan Medokan Asri Barat III Surabaya, Jawa Timur"), 
                );
                foreach ( $shop as $var ) {
                    echo "<ul> <li>", $var['A'] ,"</li> </ul>";
                };
            // "<div class='contact_sec'>
            //     <div class='button'>Kontak</div>
            //     <ul>
            //         <li class='item'>
            //             <div class='content'>
            //                 <p class='title'>Telepon</p>
            //                 <p class='sub_title'>+62-81260391031</p>
            //             </div>
            //         </li>
            //         <li class='item'>
            //             <div class='content'>
            //                 <p class='title'>Email</p>
            //                 <p class='sub_title'>ryansinurat0@gmail.com</p>
            //             </div>
            //         </li>
            //         <li class='item'>
            //             <div class='content'>
            //                 <p class='title'>Alamat</p>
            //                 <p class='sub_title'>Jalan Medokan Asri Barat III, SBY,<br/> Jawa Timur 60295</p>
            //             </div>
            //         </li>
            //     </ul>
            // </div>"

            echo "Skills :  </br>";
                $shop = array(
                    array("C" => "Microsoft Word"),
                    array("C" => "Microsoft Excel"),
                    array("C" => "Microsoft Powerpoint"),
                    array("C" => "Menghitung"),
                    
                );
                foreach ( $shop as $var ) {
                    echo "<ul> <li>", $var['C'] , "</li> </ul>";
                };
            // <div class='skills_sec'>
            //     <div class='button'>Skills</div>
            //     <ul>
            //         <li class='item'>
            //             <div class='content'>Ms. Word</div>
            //         </li>
            //         <li class='item'>
            //             <div class='content'>Ms. Excel</div>
            //         </li>
            //         <li class='item'>
            //             <div class='content'>Ms. Powerpoint</div>
            //         </li>
            //         <li class='item'>
            //             <div class='content'>Menghitung</div>
            //         </li>
            //     </ul>
            echo "</div>
        </div>
    </div>
</div>";
?>