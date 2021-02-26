<?php
    include_once __DIR__ . "/Interface/ControllerInterface.php";
    include_once __DIR__ . "/../../../common/src/Model/Category.php";

class CategoryController implements ControllerInterface
    {
        private $conn;

        public function __construct()
        {
            $this->conn = mysqli_connect("localhost", "shop_user", "shop_password", "db_shop");
        }

        public function save()
        {
            if (!empty($_POST))
            {
                $category = new Category(
                    (int)$_POST['id'],
                    htmlspecialchars($_POST['title']),
                    htmlspecialchars($_POST['groupId']), 
                    htmlspecialchars($_POST['parentId'])
                    );
                $category->save();
            }
            return $this->read();
        }

        public function create()
        {
            include_once __DIR__ . "/../../views/category/form.php";
        }

        public function read()
        {
            $all = (new Category())->all();
            include_once __DIR__ . "/../../views/Category/list.php";
        }
        public function update()
        {
            $id = (int)$_GET['id'];
            if (empty($id)) die('Undefined id');

            $one = (new Category())->getById($id);
            if (empty($one)) die('Product not found');

            include_once __DIR__ . "/../../views/Category/form.php";
        }
        
        public function delete()
        {
            $id = (int) $_GET['id'];

            (new Category())->deleteById($id);

            return $this->read();
        }
    }