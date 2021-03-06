<?php

    abstract class Model
    {
        protected $databaseHandle;
        protected $statement;

        public function __construct()
        {
            $this->databaseHandle = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
        }

        public function query($query)
        {
            $this->statement = $this->databaseHandle->prepare($query);
        }

        public function bind($param, $value, $type = null)
        {
            if(is_null($type))
            {
                switch(true)
                {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;

                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;

                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;

                    default:
                        $type = PDO::PARAM_STR;

                }
            }
            $this->statement->bindValue($param, $value, $type);
        }

        public function execute()
        {
            return $this->statement->execute();
        }

        public function resultset()
        {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public function lastInsertId()
        {
            return $this->databaseHandle->lastInsertId();
        }

        public function single()
        {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_ASSOC);
        }

    }

?>
