<?php
$title = '';
$link = '';
$image = '';
$indexcategory = 'Только важные новости';
$stacktitle1 = array();
$stacklink1 = array();
$stackimage1 = array();




if (isset($_REQUEST['sub1'])) {
    $stacktitle1 = array();
    $stacklink1 = array();
    $stackimage1 = array();
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'acc' AND t.category = 'finance'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    array_push($stacktitle1, "$title");
    array_push($stacklink1, "$link");
    array_push($stackimage1, "$image");
    
}

$indexcategory = 'Финансы';


}

if (isset($_REQUEST['sub2'])) {
    $stacktitle1 = array();
    $stacklink1 = array();
    $stackimage1 = array();
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'acc' AND t.category = 'taxes'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    array_push($stacktitle1, "$title");
    array_push($stacklink1, "$link");
    array_push($stackimage1, "$image");
    
}

$indexcategory = 'Налоги';


}

if (isset($_REQUEST['sub3'])) {
    $stacktitle1 = array();
    $stacklink1 = array();
    $stackimage1 = array();
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'acc' AND t.category = 'law'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    array_push($stacktitle1, "$title");
    array_push($stacklink1, "$link");
    array_push($stackimage1, "$image");
    
}

$indexcategory = 'Законодательство';


}



?>