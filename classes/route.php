<?php

    class Route
    {
        private $controller;
        private $action;
        private $request;

        public function __construct($request)
        {
            $this->request = $request;
            if($this->request['controller'] == "")
            {
                $this->controller = 'Home';
            }
            else
            {
                $this->request = $this->request['controller'];
            }
            if($this->request['action'] == "")
            {
                $this->request = 'index.php'
            }
            else
            {
                $this->request = $this->request['action'];
            }
        }
    }
?>
