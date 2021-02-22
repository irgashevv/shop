<?php
	
	include_once __DIR__ .'/../Service/DBConnector.php';

class Order
{
    /**
     * @var mixed|null
     */
	private $id;
    /**
     * @var mixed|null
     */
    private $userId;
    /**
     * @var mixed|null
     */
    private $status;
    /**
     * @var false|string
     */
    private $created;
    /**
     * @var false|mixed|string
     */
    private $updated;
    /**
     * @var false|mysqli
     */
	private $conn;

    /**
     * Order constructor.
     * @param null $id
     * @param null $userId
     * @param null $status
     * @param null $updated
     */
	public function __construct($id = null, $userId = null, $status = null, $updated = null)
	{
		$this->conn = DBConnector::getInstance()->connect();
        $this->id = $id;
        $this->userId = $userId;
        $this->status = $status;
        if ($this->id == null) {
        $this->created = date('Y-m-d H:i:s', time());
        }

        $this->updated = $updated ?? date('Y-m-d H:i:s', time());
	}

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param $status
     * @return mixed|null
     */
    public function getStatus($status)
    {
        return $this->status;
    }

    /**
     * @return mixed|null
     */
    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed|null $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return false|string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param false|string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return false|mixed|string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param false|mixed|string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }




	public function save()
	{
		$query = "INSERT INTO orders (id, user_id, status, created, updated) 
        VALUES (null,'" . $this->userId . "' , '" . $this->status . "', '". $this->created
            . "', '" . $this->updated . "')";

		$result = mysqli_query($this->conn, $query);

		if (!$result) {
			throw new Exception(mysqli_error($this->conn));
		}
	}

	public function getFromDB()
	{
		$result = mysqli_query($this->conn, "select * from orders where user_id = " . $this->userId . " limit 1");
		$one = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return reset($one);
	}

}