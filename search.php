<!DOCTYPE html>
<html>
    <head>
        <title>Search Engine in PHP</title>
        <style type="text/css">
            body {
                background: CornflowerBlue;
                margin-top: -80px;
            }
            
            form {
                margin: 25%;
            }
        </style>
    </head>
    
    <body>
        <form action="result.php" method="post">
            <input type="text" name="user_query" size="80" placeholder="write something to search" />
            <input type="submit" name="search" value="Search Now" />
        </form>
    </body>
</html>