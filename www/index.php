<?php

/**
 * This is a Summary.
 *
 * @see Markdown
 *
 * @param int        $parameter1 A parameter description.
 * @param \Exception $parameter2 Another parameter description.
 *
 * @\Doctrine\Orm\Mapper\Entity()
 *
 * @return string
 */
function test($parameter1, $parameter2)
{
}

/**
 * @param boolean $quiet when true 'Hello world' is echo-ed.
 *
 * @return void
 */
function outputHello($quiet)
{
    if ($quiet) {
        return;
    }
    echo 'Hello world';
}