<?
include_once("../admin/func.php");
include_once("../admin/pdo_connect.php");

$act=$_GET['act'];

 if($act == 'searchcase'){
	 
	 
	 $innerx=$_GET['innerx']*10;	 
	 $innery=$_GET['innery']*10;
	 $innerz=$_GET['innerz']*10;
	 
	 $innerxx=$innerx*1.5;
	 $inneryy=$innery*1.5;
	 $innerzz=$innerz*1.5;
	 
	 
	 $fquery = $link->query("SELECT id,art,price,innerx,innery,innerz,outerx,outery,outerz,weight,lid,material FROM casemodels WHERE ( innerx >= $innerx AND innery >= $innery AND innerz >= $innerz ) AND (  innerx <= $innerxx AND innery <= $inneryy AND innerz <= $innerzz ) ORDER BY price ");

     $fsr = $fquery->rowCount();

	 
	 
	 $squery = $link->query("SELECT id,art,price,innerx,innery,innerz,outerx,outery,outerz,weight,lid,material FROM casemodels WHERE ( innerx > $innerx AND innery > $innery AND innerz > $innerz ) AND (  innerx > $innerxx OR innery > $inneryy OR innerz > $innerzz ) ORDER BY price ");

     $ssr = $squery->rowCount();

	 

	 
	
	$jsonanswer='({"first_num":"'.$fsr.'","second_num":"'.$ssr.'","item1":[';
	
	for($m=0;$m<$fsr;$m++){  $farray=$fquery->fetch(PDO::FETCH_ASSOC);	
		 

$resarray=array(

"id"=>$farray[id],
"art"=>$farray[art],
"price"=>$farray[price],
"outerx"=>$farray[outerx],
"outery"=>$farray[outery],
"outerz"=>$farray[outerz],
"innerx"=>$farray[innerx],
"innery"=>$farray[innery],
"innerz"=>$farray[innerz],
"lid"=>$farray[lid],
"weight"=>$farray[weight],
"material"=>$farray[material]
);

$jsonanswer.=json_encode($resarray).",";
		 

}	
	
if($fsr>0){$jsonanswer=substr($jsonanswer,0,-1);}

$jsonanswer.='],"item2":[';

	
for($n=0;$n<$ssr;$n++){  $sarray = $squery->fetch(PDO::FETCH_ASSOC);	
		 

$resarray=array(

"id"=>$sarray[id],
"art"=>$sarray[art],
"price"=>$sarray[price],
"outerx"=>$sarray[outerx],
"outery"=>$sarray[outery],
"outerz"=>$sarray[outerz],
"innerx"=>$sarray[innerx],
"innery"=>$sarray[innery],
"innerz"=>$sarray[innerz],
"lid"=>$sarray[lid],
"weight"=>$sarray[weight],
"material"=>$sarray[material]
);

$jsonanswer.=json_encode($resarray).",";
		 

}	
	
if($ssr>0){$jsonanswer=substr($jsonanswer,0,-1);}
	
	
	$jsonanswer.=']})';
	
	 echo $_GET['callback'].$jsonanswer; 

 }

  
  ?>