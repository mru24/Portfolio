<?php
require('dbconnect.php');


// CREATE TABLE

// $sql = "CREATE TABLE navbar02 (
//   id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   item_id INT(10) NOT NULL,
//   name VARCHAR(20) NOT NULL,
//   link VARCHAR(20) NOT NULL,
//   image VARCHAR(20) NOT NULL,
//   info TEXT(200) NOT NULL,
//   price DECIMAL(4,2) NOT NULL,
//   parent_id INT NOT NULL
// )";
//
// if($dbc->query($sql) === TRUE) {
//   echo "Table created";
// } else {
//   echo "Error: " . $dbc->error;
// }
// $dbc->close();

// INSERT NEW RECORD

// $q = 'INSERT INTO navbar01 (name,link,parent_id) VALUES ("Home","#home",0)';
// $r = mysqli_query($dbc, $q);

// INSERT MULTIPLE RECORDS

$q = 'INSERT INTO projects (titleEn,titlePl,link,infoEn,infoPl,image,projectFilesTitleEn,projectFilesTitlePl,indexFile,styleFile,JSFile,misc1,misc2) VALUES ("Profile Widget","Profile Widget","Projects/ProfileWidget/index.html","","","","Project Files:","Pliki projektu:","<a href=\"Projects/ProfileWidget/index.txt\" target=_blank>Index</a>","<a href=\"Projects/ProfileWidget/css/style.txt\" target=_blank>Style</a>","<a href=\"Projects/ProfileWidget/js/main.txt\" target=_blank>JS</a>","","");';

$q = 'INSERT INTO projects (titleEn,titlePl,link,infoEn,infoPl,image,projectFilesTitleEn,projectFilesTitlePl,indexFile,styleFile,JSFile,misc1,misc2) VALUES ("Simple Bootstrap Portfolio","Simple Bootstrap Portfolio","Projects/SimplePortfolio/index.html","","","","Project Files:","Pliki projektu:","<a href=\"Projects/SimplePortfolio/index.txt\" target=_blank>Index</a>","<a href=\"Projects/SimplePortfolio/css/style.txt\" target=_blank>Style</a>","<a href=\"Projects/SimplePortfolio/js/main.txt\" target=_blank>JS</a>","","");';

$q = 'INSERT INTO projects (titleEn,titlePl,link,infoEn,infoPl,image,projectFilesTitleEn,projectFilesTitlePl,indexFile,styleFile,JSFile,misc1,misc2) VALUES ("Future Designs - PHP Dynamic Design","Future Designs - PHP Dynamic Design","Projects/FutureDesigns/index.php","","","","","","","","","","");';

$q = 'INSERT INTO projects (titleEn,titlePl,link,infoEn,infoPl,image,projectFilesTitleEn,projectFilesTitlePl,indexFile,styleFile,JSFile,misc1,misc2) VALUES ("Responsive Design - Restaurant","Responsive Design - Restauracja","Projects/Restaurant/index.html","","","","Project Files:","Pliki projektu:","<a href=\"Projects/Restaurant/index.txt\" target=_blank>Index</a>","<a href=\"Projects/Restaurant/css/style.txt\" target=_blank>Style</a>","<a href=\"Projects/Restaurant/js/main.txt\" target=_blank>JS</a>","","");';

$q = 'INSERT INTO projects (titleEn,titlePl,link,infoEn,infoPl,image,projectFilesTitleEn,projectFilesTitlePl,indexFile,styleFile,JSFile,misc1,misc2) VALUES ("Responsive Design - Properties Haven","Responsive Design - Properties Haven","Projects/PropertiesHaven/index.html","","","","Project Files:","Pliki projektu:","<a href=\"Projects/PropertiesHaven/index.txt\" target=_blank>Index</a>","<a href=\"Projects/PropertiesHaven/css/style.txt\" target=_blank>Style</a>","<a href=\"Projects/PropertiesHaven/js/main.txt\" target=_blank>JS</a>","","");';

$q = 'INSERT INTO projects (titleEn,titlePl,link,infoEn,infoPl,image,projectFilesTitleEn,projectFilesTitlePl,indexFile,styleFile,JSFile,misc1,misc2) VALUES ("Responsive Design - Sofa So Good","Responsive Design - Sofa So Good","Projects/SofaSoGood/index.php","","","","Project Files:","Pliki projektu:","<a href=\"Projects/SofaSoGood/index.txt\" target=_blank>Index</a>","<a href=\"Projects/SofaSoGood/css/style.txt\" target=_blank>Style</a>","<a href=\"Projects/SofaSoGood/js/main.txt\" target=_blank>JS</a>","","");';


if ($dbc->multi_query($q) === TRUE) {
  echo "New Records Created";
} else {
  echo "Error: " . $q . "<br>" . $dbc->error;
}
$dbc->close();

// UPDATE RECORD

// 'UPDATE kurs2 SET link="#clienci.php" WHERE id=3';

// MULTIPLE UPDATE RECORDS

// $q = "UPDATE navbar02 SET price='16.5' WHERE id=1;";
// $q .= "UPDATE navbar02 SET price='14.5' WHERE id=2;";
// $q .= "UPDATE navbar02 SET price='15.5' WHERE id=3;";
// $q .= "UPDATE navbar02 SET price='15.5' WHERE id=4;";
// $q .= "UPDATE navbar02 SET price='12.5' WHERE id=5;";
// $q .= "UPDATE navbar02 SET price='17.5' WHERE id=6";
//
//
// if ($dbc->multi_query($q) === TRUE) {
//   echo "Records Updated";
// } else {
//   echo "Error: " . $q . "<br>" . $dbc->error;
// }
// $dbc->close();

// DELETE RECORD

// $q = 'DELETE FROM navbar01 WHERE id=2';
// $r = mysqli_query($dbc, $q);


// SHOW RECORDS

// function show_records($dbc) {
//   $q = 'SELECT * FROM navbar01';
//   $r = mysqli_query($dbc,$q);
//   // $num = mysqli_num_rows($r);
//
//   if($r) {
//     while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
//       echo $row['id']."|".$row['name']."|".$row['link'];
//     }
//   }
// }
// show_records($dbc);
