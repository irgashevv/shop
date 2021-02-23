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
     * @var int
     */
    private $deliveryId;

    /**
     * @var int
     */
    private $paymentId;

    /**
     * @var int
     */
    private $total;

    /**
     * @var mixed|null
     */
    private $status;

    /**
     * @var false|string
     */
    private $created;

    /**
     * @var datetime
     */
    private $updated;

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var false|mysqli
     */
	private $conn;

    /**
     * Order constructor.
     * @param int|null $id
     * @param int|null $userId
     * @param int $deliveryId
     * @param int $paymentId
     * @param int $status
     * @param int $updated
     * @param string $comment
     */
	public function __construct(
	    $id = null,
        $userId = null,
        $paymentId = null,
        $deliveryId = null,
        $total = null,
        $comment = null,
        $status = null,
        $updated = null)
	{
		$this->conn = DBConnector::getInstance()->connect();
        $this->id = $id;
        $this->userId = $userId;
        $this->paymentId = $paymentId;
        $this->deliveryId = $deliveryId;
        $this->total = $total;
        $this->status = $status;
        $this->comment = $comment;
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
     * @return int
     */
    public function getDeliveryId(): int
    {
        return $this->deliveryId;
    }

    /**
     * @param int $deliveryId
     */
    public function setDeliveryId(int $deliveryId)
    {
        $this->deliveryId = $deliveryId;
    }

    /**
     * @return int
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }

    /**
     * @param int $paymentId
     */
    public function setPaymentId(int $paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total)
    {
        $this->total = $total;
    }

    /**
     * @return string|null
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
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
		$query = "INSERT INTO orders (
                    id, 
                    user_id, 
                    status, 
                    created, 
                    updated, 
                    delivery_id, 
                    payment_id, 
                    total, 
                    comment) 
        VALUES (null,'" . $this->userId . "' , '" . $this->status . "', '". $this->created
            . "', '" . $this->updated . "', '" . $this->deliveryId . "', '" . $this->paymentId .
            "', '" . $this->total . "', '" . $this->comment . "')";

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