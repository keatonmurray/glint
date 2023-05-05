<?php

require_once ('Validation.php');

    class LoginForm extends Validation {

        private $msg;

        public function validate_msg_form ($msg) {

            $this->msg = $msg;

            if (empty(trim($this->msg))) {

                echo "Error";
            }
        }
    }

    //arguments are not yet finished 