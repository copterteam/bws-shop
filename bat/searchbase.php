<?
include_once("../admin/func.php");
include_once("../admin/pdo_connect.php");

$act=$_POST['act'];

 if($act == 'searchcase'){
	 
	 
	 $innerx=$_POST['innerx'];	 
	 $innery=$_POST['innery'];
	 $innerz=$_POST['innerz'];
	 
	 $innerxx=$innerx*1.5;
	 $inneryy=$innery*1.5;
	 $innerzz=$innerz*1.5;
	 
	 
	 $fquery = $link->query("SELECT id,art,price,innerx,innery,innerz,outerx,outery,outerz,weight,lid,material FROM casemodels WHERE ( innerx >= $innerx AND innery >= $innery AND innerz >= $innerz ) AND (  innerx <= $innerxx AND innery <= $inneryy AND innerz <= $innerzz ) ORDER BY price ");

     $fsr = $fquery->rowCount();

     $farray = $fquery->fetchAll(PDO::FETCH_ASSOC);
	 
	 
	 $squery = $link->query("SELECT id,art,price,innerx,innery,innerz,outerx,outery,outerz,weight,lid,material FROM casemodels WHERE ( innerx > $innerx AND innery > $innery AND innerz > $innerz ) AND (  innerx > $innerxx OR innery > $inneryy OR innerz > $innerzz ) ORDER BY price ");

     $ssr = $squery->rowCount();

     $sarray = $squery->fetchAll(PDO::FETCH_ASSOC);
	 
	 
	 
	 
	 
foreach($farray as $first){ }
	 
	 

foreach($sarray as $second){  }
	 


die('MF000');
 }

  
  ?>