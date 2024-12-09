<?php

function requerdInput($input_name)
{
    return empty($input_name);
}

function mainInput($input, $length)
{
    return strlen($input) < $length;
}

function maxInput($input, $length)
{
    return strlen($input) > $length;
}

function emailInput($user_email)
{
    return !filter_var($user_email, FILTER_VALIDATE_EMAIL);
}
