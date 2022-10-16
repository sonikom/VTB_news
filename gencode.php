<?php
$title = '';
$link = '';
$image = '';
$indexcategory = 'Только важные новости';
$stacktitle = array();
$stacklink = array();
$stackimage = array();




if (isset($_REQUEST['sub1'])) {
    $stacktitle = array();
    $stacklink = array();
    $stackimage = array();
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'finance'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    
    array_push($stacktitle, "$title");
    array_push($stacklink, "$link");
    array_push($stackimage, "$image");
    
}

$indexcategory = 'Финансы';


}

if (isset($_REQUEST['sub2'])) {
    $stacktitle = array();
    $stacklink = array();
    $stackimage = array();
    
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'politics'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    array_push($stacktitle, "$title");
    array_push($stacklink, "$link");
    array_push($stackimage, "$image");
    
}

$indexcategory = 'Политика';


}

if (isset($_REQUEST['sub3'])) {
    $stacktitle = array();
    $stacklink = array();
    $stackimage = array();
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'economy'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    array_push($stacktitle, "$title");
    array_push($stacklink, "$link");
    array_push($stackimage, "$image");
    
}

$indexcategory = 'Экономика';


}

if (isset($_REQUEST['sub4'])) {
    $stacktitle = array();
    $stacklink = array();
    $stackimage = array();
    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'business'
        ORDER BY t.factor ASC
        LIMIT 3";
$query= mysqli_query($con, $sql);
while ($r= mysqli_fetch_assoc($query)){
    
    $title = $r['title'];
    $link = $r['link'];
    $image = $r['image'];
    array_push($stacktitle, "$title");
    array_push($stacklink, "$link");
    array_push($stackimage, "$image");
    
}

$indexcategory = 'Бизнес';


}


?>