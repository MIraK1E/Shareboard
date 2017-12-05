<?php

    class Users extends Controller
    {
        protected function login()
        {
            $viewmodal = new ShareModel();
            $this->returnView($viewmodal->Index(),true);
        }
    }

?>
