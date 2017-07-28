<!DOCTYPE html>
<html>
    <head>
        <title>Search Engine in PHP</title>
        <style type="text/css">
            body {
                background-color: gray;
            }
            
            table {
                background-color: orange;
            }
        </style>
    </head>
    
    <body>
        <form action="insert_site.php" method="post" enctype="multipart/form-data">
            <table width="500" border="2" cellspacing="2" align="center">
                <tr>
                    <td colspan="2" align="center"><h2>Inserting new website:</h2></td>
                </tr>
                
                <tr>
                    <td align="right"><b>Site Title:</b></td>
                    <td><input type="text" name="site_title" /></td>
                </tr>
                
                <tr>
                    <td align="right"><b>Site Link</b></td>
                    <td><input type="text" name="site_link" /></td>
                </tr>
                
                <tr>
                    <td align="right"><b>Site Keywords:</b></td>
                    <td><input type="text" name="site_keywords" /></td>
                </tr>
                
                <tr>
                    <td align="right"><b>Site Description:</b></td>
                    <td><textarea name="site_desc" cols="16" rows="8"></textarea></td>
                </tr>
                
                <tr>
                    <td align="right"><b>Site Image</b></td>
                    <td><input type="file" name="site_image" /></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Add site now" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>