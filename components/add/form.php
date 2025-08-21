<?php
session_start();
function generateCSRFToken() {
    // Generate a random token
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
}
generateCSRFToken();
?>

<div class="background">
    <form id="myForm" action="submit.php" method="post">
        <input type="hidden" id="csrf_token" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

        <h1>Add Server</h1>
        <label for="username">Server IP:</label><br>
        <input type="text" id="server_ip" name="server_ip" style="margin-bottom: 10px;" required><br>

        <label for="password">Description:</label><br>  
        <input type="text" id="server_desc" name="server_desc" maxlength="32" required><br>

        <button type="submit">Submit</button>
    </form>
</div>