<?php
// moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");

class saveDefect_form extends moodleform {
    public function definition() {
        global $CFG;

        $mform = $this->_form;   

        /************ ResourceID ***********/
        $mform->addElement('static', 'text', 'ID', $this->_customdata['resourceid']);
        $mform->setType('resourceid', PARAM_INT);

        /************** Name ***************/
        $mform->addElement('static', 'text', 'Name', $this->_customdata['name']);
        $mform->setType('name', PARAM_NOTAGS);
       
        /************* Schaden **************/
        $mform->addElement('textarea', 'defect', 'Schaden');
        $mform->setType('defect', PARAM_NOTAGS);
        $mform->setDefault('defect', $this->_customdata['defect']);

        /********** versteckt: ID ***********/
        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        /****** versteckt: ResourceID *******/
        $mform->addElement('hidden', 'resourceid');
        $mform->setType('resourceid', PARAM_INT);

        /******** Button: Speichern ********/
        $mform->addElement('submit', 'btnSubmit', 'Speichern');
    }

    function validation($data, $files) {
        return array();
    }
}
