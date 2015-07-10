<style type="text/css">
     button {
        color: #fff;
        background-color: #6496c8;
        text-shadow: -1px 1px #417cb8;
        border: none;
    }
     button:hover,
     button.hover {
        background-color: #346392;
        text-shadow: -1px 1px #27496d;
    }
    button:active,
    button.active {
        background-color: #27496d;
        text-shadow: -1px 1px #193047;
    }
    
    .asd {
        background-color: #6496c8;
    }
    .asd div[class='aaa']{
        background-color: red;
        display: none;
    }
    .asd.active {
        background-color: #27496d;
    }
    .asd.active div[class='aaa']{
        display: block;
    }
</style>
<div class="asd ">
    asd
    <div class="aaa">aaaa</div>
</div>
<div class="asd active">
    asd
    <div class="aaa">x</div>
</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

