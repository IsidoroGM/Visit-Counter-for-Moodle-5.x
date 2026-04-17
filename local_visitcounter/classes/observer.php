<?php
namespace local_visitcounter;

defined('MOODLE_INTERNAL') || die();

class observer {

    public static function course_viewed(\core\event\course_viewed $event) {
        global $DB;

        $userid = $event->userid;
        $courseid = $event->courseid;
        $time = time();

        // Evitar usuarios no válidos
        if (!$userid || $userid == 0) {
            return;
        }

        // Buscar si ya existe registro
        $record = $DB->get_record('local_visitcounter', [
            'userid' => $userid,
            'courseid' => $courseid
        ]);

        if ($record) {
            // Incrementar visitas
            $record->visits += 1;
            $record->timemodified = $time;
            $DB->update_record('local_visitcounter', $record);
        } else {
            // Crear nuevo registro
            $record = new \stdClass();
            $record->userid = $userid;
            $record->courseid = $courseid;
            $record->visits = 1;
            $record->timemodified = $time;

            $DB->insert_record('local_visitcounter', $record);
        }
    }
}