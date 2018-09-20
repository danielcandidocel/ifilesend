<?php

class model {
    
    protected $db;
    protected $dbsia;
    public function __construct() {
        global $db;
        $this->db = $db;
        global $dbsia;
        $this->dbsia = $dbsia;
        date_default_timezone_set("America/Sao_Paulo");
    }
}

