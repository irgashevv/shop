<?php
    include_once __DIR__ . "/../main_header.php";
?>

<div class="width1024">
    <h1>Create Order</h1>
    <form action="http://localhost/shop/frontend/index.php?model=order&action=create" method="post">
        <div>
            <label>Name:</label> <input type="text" name="name" required>
        </div>
        <div>
            <label>Phone:</label> <input type="text" name="phone" required>
        </div>
        <div>
            <label>Email:</label> <input type="email" name="email" required>
        </div>
        <div>
            <label>Delivery:</label>
            <select name="delivery">
                <option value="1" <?=($one['delivery_id'] == '1') ? 'selected' : ''?>>Delivery 1</option>
                <option value="2" <?=($one['delivery_id'] == '2') ? 'selected' : ''?>>Delivery 2 </option>
                <option value="3" <?=($one['delivery_id'] == '3') ? 'selected' : ''?>>Delivery 3 </option>
            </select>
        </div>
        <div>
            <label>Payment:</label>
            <select name="payment">
                <option value="1" <?=($one['payment_id'] == '1') ? 'selected' : ''?>>Payment 1</option>
                <option value="2" <?=($one['payment_id'] == '2') ? 'selected' : ''?>>Payment 2</option>
                <option value="3" <?=($one['payment_id'] == '3') ? 'selected' : ''?>>Payment 3</option>
            </select>
        </div>
        <div>
            <label>Comment</label> <br>
            <textarea name="comment"></textarea>
        </div>
        <div>
            <button>Create</button>
        </div>
    </form>
</div>

<?php
    include_once __DIR__ . "/../footer.php";
?>