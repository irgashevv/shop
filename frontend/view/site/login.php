<?php include_once __DIR__ . "/../main_header.php"; ?>

    <div id="login-container" class="width1024">
        <div><br><br><br><br></div>
        <h1>Login</h1>
            <form action="index.php?model=auth&action=check" method="post">
                <div>
                    <label for="">Login: </label><input type="text" name="login">
                </div>
                <div>
                   <label for="">Password: </label><input type="password" name="password">
                </div>
                <div>
                    <input type="submit" value="login">
                </div>
            </form>
        <div><br><br><br><br></div>
    </div>

<?php include_once  __DIR__ . "/../footer.php"; ?>