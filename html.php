<?php

$alldata = array();



$row = 0;


if (($handle = fopen("foyle final.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        
        $open = fopen("1foyle/".$row.".html", "w");
        $html = "";
        for ($x=0; $x < 52; $x++) {
            //$alldata[$row][$x] = $data[$x];
           $data1[$x] = $data[$x];
           // echo $data[$x] . "<br />\n";
        }

         $html = "

         <html>
         <head></head>
         <body>

         Name: ".$data1[0]."<br>
         Address1: ".$data1[1]."<br>
         Address2: ".$data1[2]."<br>
         Address3: ".$data1[3]."<br>
         Phone: ".$data1[4]."<br>
         Owners: ".$data1[5]."<br>
         Email: ".$data1[6]."<br>
         Website: ".$data1[7]."<br>
         FB: ".$data1[8]."<br>
         Twitter: ".$data1[9]."<br>

         </body>

         


         </html>












         ";

        fwrite($open, $html);
        $row++;
    }
    fclose($handle);
}

print_r($alldata);

?>