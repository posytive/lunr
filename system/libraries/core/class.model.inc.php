<?php

/**
 * Base Model class
 * @author M2Mobi, Heinz Wiesinger
 */
abstract class Model
{

    /**
     * Reference to the database connection
     * @var DBCon
     */
    protected $db;

    /**
     * The db configuration given on construction
     * @var array
     */
    private $db_config;

    /**
     * Constructor
     */
    public function __construct($db)
    {
        require_once("class.dbman.inc.php");
        $this->db = DBMan::get_db_connection($db);
        $this->db_config = $db;
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
        unset($this->db);
    }

    /**
     * Get write access for the database
     * @return Boolean $return TRUE if successful, FALSE if there's already a connection established
     */
    public function get_write_access()
    {
        $this->db = DBMan::get_db_connection($this->db_config, FALSE);
    }

}

?>