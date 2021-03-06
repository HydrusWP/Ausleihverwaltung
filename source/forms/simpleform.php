<?php
//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");
 
class simplehtml_form extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 
 
        $mform->addElement('text', 'abholort', 'Abholort'); // Add elements to your form
        $mform->setType('abholort', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('abholort', '');        //Default value

        // error_log("TEST FROM INSIDE FORM");
        
        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        
        // error_log("TEST FROM AFTER SUBMIT IN FORM");
        $mform->addElement('submit', 'btnSubmit', 'Speichern');

    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}
?>