<?php
function likes( $names ) {
    $count = count($names);
    if($count==0){
        echo "no one likes this";
    }
    elseif($count==1){
        echo "$names[0] likes this";
    }
    elseif($count==2){
        echo "$names[0] and $names[1] like this";
    }
    elseif($count==3){
        echo "$names[0],$names[1] and $names[2] like this";
    }
    else{
        $count-=2;
        echo "$names[0],$names[1] and $count others like this";
    }
}
likes([ 'Alex', 'Jacob', 'Mark', 'Max' ]);