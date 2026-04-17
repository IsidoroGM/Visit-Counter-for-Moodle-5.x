<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'   => '\core\event\course_viewed',
        'callback'    => 'local_visitcounter\\observer::course_viewed',
    ],
];