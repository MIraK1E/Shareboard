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
            if(!isset($_SESSION['is_logged_in']))
            {
                header('Location:'.ROOT_URL.'shares');
            }
            $viewmodal = new ShareModel();
            $this->returnView($viewmodal->add(),true);
        }
    }

?>
