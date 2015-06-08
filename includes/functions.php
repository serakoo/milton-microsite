<?php

function parseNodes($nodes,$p) {
    $html = "<ul class=\"nav navmenu-nav\">\n";
    $html.="<li><h3><a href=\"index.php\">Home</a></h3></li>\n"; 
    foreach ($nodes as $node) {
      $html .="<li><h3>".$node->item."</h3></li>\n";
      if (isset($node->nodes)) $html .= parseNode($node->nodes,$p);
    }
    $html .= "</ul><br/><br/><br/>\n";
    return $html;
}

function parseNode($node,$p) {
    foreach ($node as $item) {
      $item=get_object_vars($item);
      foreach ($item as $key => $val) {
      if($val!=""){
        if($p==$val) $li .= "<li><a href='?p=".$val."'><strong>&raquo; ".$key."</strong></a></li>\n";
        else $li .= "<li><a href='?p=".$val."'>".$key."</a></li>\n";
      }
      else $li .= "<li>".$key."</li>\n";
    }
  }
  return $li;
}


function lastUpdate(){
  $files = glob("pages/*.html");
  $files = array_combine($files, array_map("filemtime", $files));
  arsort($files);

  $latestFile = key($files);
  date_default_timezone_set('EST');
  echo date ("F d,Y - h:iA", filemtime($latestFile));
}



function generateMenu(){
    $f='js/menu.json';
    $jsonf = file_get_contents($f);
    $nodes = json_decode($jsonf);
    $html = parseNodes($nodes,$_GET['p']);
    echo $html;  
}


function loadPageContent(){
  $page=$_GET['p'];
  if(isset($page)){
    if(file_exists("pages/".$page.".html")) include("pages/".$page.".html");
    else include("pages/404.html");
  }
  else include("pages/home.html"); 
  echo '<div class="clear"></div>';
}


function offCanvasMenu(){  
  $html='<div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>';
  echo $html;
}
?>