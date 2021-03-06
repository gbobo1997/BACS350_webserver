<?php

    /*
        begin_page -- Create the HTML for the beginning of a page.  Add a page title and headline.
    */
    function begin_page($site_title, $page_title) {

        // Maybe this is causing login error, header is being directed multiple times
        // and the php platform doesnt like that
        //header("Pragma: no-cache");
        //header("Expires: 0");
        //header("Cache-Control: no-store, no-cache, must-revalidate");
         echo '
                <!DOCTYPE html>
                <html lang="en">
                    <head>
            
                        <meta charset="UTF-8">
                        <title>' . $page_title . '</title>

                        <link rel="stylesheet" href="style.css">

                    </head>
                    <body>

                        <header>
                            <img src="logo.png" alt="page Logo" width="200" height="200"/>
                            <h1>' . $site_title . '</h1>
                            <h2>' . $page_title . '</h2>
                        </header>
                        <main>
            ';
    }



    function end_page() {

        echo '
                    </main>
                </body>
            </html>
        ';
        
    }


    /*
        render_simple_page -- Create the HTML page.
    */

    function render_simple_page($title, $text) {
        
        echo "<h1>$title</h1><p>$text</p>";
    }

    // I don't like this, this just send plaintext username/password
    function login_form()
    {

        echo '<form action="index.php" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Login">
    <button type="newUser" name="action" formaction="signup.php">Sign Up</button><br>
</form>';

    }

    function logoutUI()
    {
        echo '<h1> Login Success <h2><br>';
        echo '<form action="logout.php" method="post">
        <input type="submit" value="Logout">
        </form>';
    }

    function listApps()
    {
        echo '
        <div class="apps">
        <div class="row">
            <div class="column"><a href=notes/index.php> <img src="notes/logo.png" alt="notes app icon" class="icon"/></a><br>Notes</div>
            <div class="column"><a href=review/index.php> <img src="review/logo.png" alt="review app icon" class="icon"/></a><br>Review</div>
        </div>
        <div class="row">
            <div class="column"></div>
            <div class="column"></div>
        </div>
        </div>';
    }


    
?>
