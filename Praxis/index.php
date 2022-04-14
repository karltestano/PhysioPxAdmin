<?php
/*
    index.php: Frame for Praxis Admin
    Copyright (C) 2009 Egon Troles

*/
require_once("include/function.php");
require_once("include/debuglib.php");
$db = openDb();
$startpage = getConfigEntry($db, "Startpage");
if ( $startpage == "")
{
        $startpage = "PraxisMain/PraxisMain_Main.php";
}
$sw_k_typ=getGlobVar("CardLoad","::number::");
if ($sw_k_typ >= 1) { 
        $src_head = "CardLoad/CardLoad_Head.php" ;
        $src_lft = "navigator_patient.php"; 
        $src_btm = "CardLoad/CardLoad_Bottom.php" ;
        $startpage = "CardLoad/CardLoad_direct.php?sw_k_typ=$sw_k_typ";
} 
else { 
        include('top-cache.php');
        $src_head = "PraxisMain/PraxisMain_Head.php" ;
        $src_lft = "navigator.php"; 
        $src_btm = "PraxisMain/PraxisMain_Bottom.php" ;
        $startpage = "PraxisMain/PraxisMain_Main.php";
}
?>
<!DOCTYPE HTML>
<html>
  <head>
        <meta http-equiv="Content-Type" 
                content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="Images/Allegro-Open-Logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;">

    <title>PXadmin - <?php echo PX_Version?><?php // echo "CardLoad: $sw_k_typ";?></title>
<LINK REL=StyleSheet HREF="style/<?php echo getConfigEntry($db, "Style"); ?>/style.css" TYPE="text/css" MEDIA=screen>
  </head>

  <frameset cols="<?php echo FrameLeftWidth ?>,*">
      <frame name="NAVIGATOR" src="<?php echo $src_lft;?>" scrolling="yes" marginwidth=0 marginheight=0 >
      <frameset rows="<?php echo FrameTopHeight ?>, *,<?php echo FrameBottomHeight ?>">
        <frame name="PatientenHead" src="<?php echo $src_head;?>" marginwidth=0 marginheight=0 scrolling="no" >
        <frame name="PatientMain" src="<?php echo $startpage?>" marginwidth=0 marginheight=0 FrameBorder=0 scrolling="auto">
        <frame name="PatientenBottom" src="<?php echo $src_btm;?>" marginwidth=0 marginheight=0 scrolling="yes">
      </frameset>
  </frameset>
</html>
<?php
include('bottom-cache.php');
?>
