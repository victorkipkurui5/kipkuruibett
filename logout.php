<?php 
    SESSION_START();
    if(SESSION_DESTROY()){
        header('location: index.html');
    }
?>