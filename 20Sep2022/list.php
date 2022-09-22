<?php
// echo $_GET['mydata_id'];


if($_GET['mydata']=='Good'){
    $person = array("sultana","aklima","jannat");
    echo getdata($person);
}

else if($_GET['mydata']=='Bad'){
    $person = array("smima","anika","bipasha");
    echo getdata($person);
}


function 
($items){
    $output = "<ul>";
    for($i = 0;$i<count($items);$i++){
        $output .="<li>".$items[$i]."</li>";
    }
    $output.= "</ul>";
    return $output;
}
// echo getdata($person);

?>