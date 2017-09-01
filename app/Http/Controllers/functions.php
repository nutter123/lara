<?php

function objectToArray($object)
{
    return json_decode(json_encode($object), true);
}
