<?php

/**
 * Created by PhpStorm.
 * User: j
 * Date: 14/07/17
 * Time: 09:20
 */
class SPDO
{
    /**
     * Instance class PDO
     *
     * @var PDO
     * @access private
     */
    private $PDOInstance = null;

    /**
     * Instance class SPDO
     *
     * @var SPDO
     * @access private
     * @static
     */
    private static $instance = null;

    /**
     * DB User
     *
     * @var string
     */
    const DEFAULT_SQL_USER = 'root';

    /**
     * DB Host
     *
     * @var string
     */
    const DEFAULT_SQL_HOST = 'localhost';

    /**
     * DB Password
     *
     * @var string
     */
    const DEFAULT_SQL_PASS = 'root';

    /**
     * DB Name
     *
     * @var string
     */
    const DEFAULT_SQL_DTB = 'lab';

    /**
     * Constructor
     *
     * @param void
     * @return void
     * @see PDO::__construct()
     */
    public function __construct()
    {
        $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
    }

    /**
     * Create and return SPDO
     *
     * @access public
     * @static
     * @param void
     * @return SPDO $instance
     */
    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new SPDO();
        }
        return self::$instance;
    }

    /**
     * Execute a request SQL with PDO
     *
     * @param string $query The SQL request
     * @return PDOStatement Return object PDOStatement
     */
    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    /**
     * Execute a prepare SQL with PDO
     *
     * @param string $query The SQL request
     * @return PDOStatement Return object PDOStatement
     */
    public function prepare($query)
    {
        return $this->PDOInstance->prepare($query);
    }
}