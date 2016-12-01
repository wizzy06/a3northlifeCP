<?php

$user = array(
  "matt" => array('restriction' => 0, 'password' => 'aze'),
  "charly" => array('restriction' => 1, 'password' => 'wxc'));

$restriction = array('inventaire' => 0, 'license' => 1, 'remboursement' => 2);

//==================================


$dataPlayer = array(
  array(
    'pid' => '706543219981',
    'name' => 'Harvey Specter',
    'money' => '81,462,315',
    'status' => 'Banni',
    'license' => array('DIR','COK','DIV'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),

  array(
    'pid' => '706543219982',
    'name' => 'John Snow',
    'money' => '17,462,424',
    'status' => 'Administrateur',
    'license' => array('DIR','ONF','COP','CIV','COK','DIV'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),

  array(
    'pid' => '706543219983',
    'name' => 'Ned Stark',
    'money' => '23,462,533',
    'status' => '',
    'license' => array('DIR','COP','DIV'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),

  array(
    'pid' => '706543219984',
    'name' => 'Daeneris Targarien',
    'money' => '92,462,644',
    'status' => '',
    'license' => array('DIR'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),

  array(
    'pid' => '706543219985',
    'name' => 'Tirion Laneester',
    'money' => '17,462,752',
    'status' => 'Modérateur',
    'license' => array('DIR','ONF','REB','COP','CIV','COK','DIV'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),

  array(
    'pid' => '706543219986',
    'name' => 'Mike Ross',
    'money' => '17,462,864',
    'status' => 'Donnateur',
    'license' => array('DIR','ONF','COK','DIV'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),

  array(
    'pid' => '706543219987',
    'name' => 'Danna Scott',
    'money' => '17,462,971',
    'status' => 'Donnateur',
    'license' => array('DIR','COP','CIV','COK','DIV'),
    'gun' => array('Five-Seven','HK 417','HE Grenade'),
    'veh' => array('Aston','Ferrari','Maseratti')
  ),
);

//================================

$dataLicense = array('DIR','ONF','REB','COP','CIV','COK','DIV');

$connected = false

?>
