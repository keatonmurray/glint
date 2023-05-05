<?php

    require_once ('../Classes/LoginForm.php');

    if (isset($_POST['send'])) {

        $validate = new LoginForm;
        $error = $validate->validate_msg_form($_POST['msg']);

    }