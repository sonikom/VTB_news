<?php
$dymamic_process = '';
$full_dymamic_process = '';
$stack_dynamic_title = array();
$stack_dynamic_link = array();
$stack_dynamic_image = array();
$title_key = 0;
$link_key = 0;

if (isset($_REQUEST['sub1'])) {
    $stack_dynamic_title = array();
    $stack_dynamic_link = array();
    $stack_dynamic_image = array();

    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'finance' AND t.factor > 3
        ORDER BY t.factor ASC
        LIMIT 8";
    $query= mysqli_query($con, $sql);
    while ($r= mysqli_fetch_assoc($query)){
        $title_dynamic = $r['title'];
        array_push($stack_dynamic_title, "$title_dynamic");
        $link_dynamic = $r['link'];
        array_push($stack_dynamic_link, "$link_dynamic");
        $image = $r['image'];
        array_push($stack_dynamic_image, "$image");
    }

}

if (isset($_REQUEST['sub2'])) {
    $stack_dynamic_title = array();
    $stack_dynamic_link = array();
    $stack_dynamic_image = array();

    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'politics' AND t.factor > 3
        ORDER BY t.factor ASC
        LIMIT 8";
    $query= mysqli_query($con, $sql);
    while ($r= mysqli_fetch_assoc($query)){
        $title_dynamic = $r['title'];
        array_push($stack_dynamic_title, "$title_dynamic");
        $link_dynamic = $r['link'];
        array_push($stack_dynamic_link, "$link_dynamic");
        $image = $r['image'];
        array_push($stack_dynamic_image, "$image");
    }

}
if (isset($_REQUEST['sub3'])) {
    $stack_dynamic_title = array();
    $stack_dynamic_link = array();
    $stack_dynamic_image = array();

    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'economy' AND t.factor > 3
        ORDER BY t.factor ASC
        LIMIT 8";
    $query= mysqli_query($con, $sql);
    while ($r= mysqli_fetch_assoc($query)){
        $title_dynamic = $r['title'];
        array_push($stack_dynamic_title, "$title_dynamic");
        $link_dynamic = $r['link'];
        array_push($stack_dynamic_link, "$link_dynamic");
        $image = $r['image'];
        array_push($stack_dynamic_image, "$image");
    }

}
if (isset($_REQUEST['sub4'])) {
    $stack_dynamic_title = array();
    $stack_dynamic_link = array();
    $stack_dynamic_image = array();

    $sql="
        SELECT t.title, t.link, t.image
        FROM test2 t
        WHERE t.user = 'gen' AND t.category = 'business' AND t.factor > 3
        ORDER BY t.factor ASC
        LIMIT 8";
    $query= mysqli_query($con, $sql);
    while ($r= mysqli_fetch_assoc($query)){
        $title_dynamic = $r['title'];
        array_push($stack_dynamic_title, "$title_dynamic");
        $link_dynamic = $r['link'];
        array_push($stack_dynamic_link, "$link_dynamic");
        $image = $r['image'];
        array_push($stack_dynamic_image, "$image");
    }

}


?>