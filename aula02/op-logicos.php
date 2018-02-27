<?php

echo "<pre>";
echo "E";
echo "<br>";
var_dump(true and true);
var_dump(true and false);
var_dump(true && true);
var_dump(true && false);
echo "<hr>";
echo "OU";
echo "<br>";
var_dump(true or true);
var_dump(true or false);
var_dump(true || true);
var_dump(true || false);
var_dump(false || false);
echo "<hr>";
echo "XOR";
echo "<br>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);
echo "<hr>";
echo "Contrario";
echo "<br>";
var_dump(!true);
var_dump(!false);
