<?php
defined('MOODLE_INTERNAL') || die();

class block_visitcounter extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_visitcounter');
    }

    public function get_content() {
        global $DB, $USER, $COURSE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();

        if (!isloggedin() || isguestuser()) {
            $this->content->text = "No disponible";
            return $this->content;
        }

        $record = $DB->get_record('local_visitcounter', [
            'userid' => $USER->id,
            'courseid' => $COURSE->id
        ]);

        if ($record) {
            $visits = $record->visits;
        } else {
            $visits = 0;
        }

        $this->content->text = "Has visitado este curso: <b>{$visits}</b> veces";

        return $this->content;
    }
}