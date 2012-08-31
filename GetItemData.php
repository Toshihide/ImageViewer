<?php
$con=mysql_connect("localhost", "ii", "");
if(!$con){
    print("");
    exit;
}
    if(!mysql_select_db("site1")){
    print("");
    exit;
}

$sql="SELECT ID, FileName, UserName, Discription, Size, Extension FROM m_items";
$result=mysql_query($sql);
if(!$result)
{
    exit;
}
$currentRow = 0;
while($row=mysql_fetch_row($result))
{
    $rows[$currentRow]["ID"]=$row[0];
    $rows[$currentRow]["FileName"]=$row[1];
    $rows[$currentRow]["UserName"]=$row[2];
    $rows[$currentRow]["Discription"]=$row[3];
    $rows[$currentRow]["Size"]=$row[4];
    $rows[$currentRow]["Extension"]=$row[5];
    $currentRow++;
}
mysql_close($con);
echo json_encode($rows);
//
//  $con = mysql_connect("localhost", "ii", "");
//  if (!$con)
//  {
//   print("");
//   exit;
//  }
//  if (!mysql_select_db("site1"))
//  {
//   print("");
//   exit;
//  }
//  $sql = "SELECT ID, Header, Title, Discription, Price, Size, Extension FROM m_product";
//  $result = mysql_query($sql);
//
//  if (!$result)
//  {
//    print("<BR>");
//    print(mysql_errno().": ".mysql_error()."<BR>");
//    exit;
//  }

?>
