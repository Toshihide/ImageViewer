<?php

// We're putting all our files in a directory called images.
//$uploaddir = 'images/';

// The posted data, for reference
//$file = $_POST[0];

// Get the mime
// $getMime = explode('.', $name);
// $mime = end($getMime);

// // Separate out the data
// $data = explode(',', $file);

// // Encode it correctly
// $encodedData = str_replace(' ','+',$data[1]);
// $decodedData = base64_decode($encodedData);

// // You can use the name given, or create a random name.
// // We will create a random name!

// $randomName = substr_replace(sha1(microtime(true)), '', 12).'.'.$mime;



//$database = 'site1';
//$host = 'localhost';
//$username = 'ii';
//$password = '';
//$link = mysql_connect($host,$username,$password);
//if (!$link) {
//	die(mysql_error());
//}
//$db_selected = mysql_select_db($database);
//if (!$db_selected) {
//	die(mysql_error());
//}
//$result = mysql_query("INSERT INTO m_items (FileName, UserName, Discription, Data, Size, Extension) VALUES('','', '', '$file', '50', '' )") or die(mysql_error());





// if(file_put_contents($uploaddir.$randomName, $decodedData)) {
// 	echo $randomName.":uploaded successfully";
// }
// else {
// 	// Show an error message should something go wrong.
// 	echo "Something went wrong. Check that the file isn't corrupted";
// }

echo "abcdefg";
?>