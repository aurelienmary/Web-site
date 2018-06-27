<?php

function isINTEGER($int)
{
    return is_numeric($int);
}


function isSTRING($chaine)
{
    if (empty($chaine)) {
        return false;
        
    } else {
        return is_string($chaine);
    }
}

function isPASSWORD($chaine)
{
    if (empty($chaine) || strlen($chaine) < 8) {
        return false;
    } else {
        return is_string($chaine);
    }
}

function cryptpassword($password) {
    //return sha1($password);
    return password_hash($password, PASSWORD_BCRYPT);
}