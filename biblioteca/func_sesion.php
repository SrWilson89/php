<?php

function isLogin()
{
    return $_SESSION && $_SESSION["autenticado"];
}

function isAdmin()
{
    return isLogin() && $_SESSION["rol"] === "administrador";
}

function isPartner()
{
    return isLogin() && $_SESSION["rol"] === "socio";
}
