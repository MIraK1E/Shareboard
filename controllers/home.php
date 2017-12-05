<?php

    class Home extends Controller
    {
        protected function Index()
        {
            $viewmodal = new HomeModel();
            $this->returnView($viewmodal->Index(),true);
        }
    }

?>
