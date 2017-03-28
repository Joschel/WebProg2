<?php
$_GET['Zahl'];
$intN = $_GET['Zahl'];

Fakultaet (5);
if (isset($_GET['Limit']))

  function getFaculty ( $intN )
  {
    if ( $intN <= 1 )
    {
      return 1;
    }

    for ( $intFaculty = 1; $intN > 1; --$intN )
    {
      $intFaculty *= $intN;
    }
    return $intFaculty;
  }

$zahl = Fakultaet (intN);
echo $zahl;

?>
