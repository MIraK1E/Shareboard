<?php

    class Shares extends Controller
    {
        protected function Index()
        {
            $viewmodal = new ShareModel();
            $this->returnView($viewmodal->Index(),true);
        }

        protected function add()
        {
            $viewmodal = new ShareModel();
            $this->returnView($viewmodal->add(),true);
        }
    }

?>
