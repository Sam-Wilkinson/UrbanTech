<?php

use app\Text;


// resources/lang/en/messages.php

function __construct(){
    $texts = Text::orderby('id','asc')->get();
}

return [
    'name' => 'Welcome to our application'
];