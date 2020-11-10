<?php
    include_once "php_code/addbook_val.php" ;
    if(empty(session_id())){
        header("Location: Login.php");
    }
?>
<html>
    <head>
        <title>Add Book</title>
    </head>
    <body>
        <h1>Add Book</h1><br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td align="left">Book Name:</td>
                    <td align="left"><input type="text" value="<?php echo $bname;?>" name="bname"></td>
                    <td align="left"><span style="color:red;">*<?php echo $err_bname;?></span></td>
                </tr>
                <tr>
                    <td align="left">Category:</td>
                    <td align="left">
                        <select name="category">
                            <option disabled selected>Select a Category</option>
                            <option>Fantasy</option>
                            <option>SciFi</option>
                            <option>Thriller/Suspense</option>
                        </select>
                    </td>
                    <td align="left"><span style="color:red;">*<?php echo $err_category;?></span></td>
                </tr>
                <tr>
                    <td align="left">Description:</td>
                    <td align="left">
                        <textarea name="description"></textarea>
                    </td>
                    <td align="left"><span style="color:red;">*<?php echo $err_description;?></span></td>
                </tr>
                <tr>
                    <td align="left">Publisher:</td>
                    <td align="left"><input type="text" value="<?php echo $publisher;?>" name="publisher"></td>
                    <td align="left"><span style="color:red;">*<?php echo $err_publisher;?></span></td>
                </tr>
                <tr>
                    <td align="left">Edition:</td>
                    <td align="left"><input type="text" value="<?php echo $edition;?>" name="edition"></td>
                    <td align="left"><span style="color:red;">*<?php echo $err_edition;?></span></td>
                </tr>
                <tr>
                    <td align="left">ISBN:</td>
                    <td align="left"><input type="text" value="<?php echo $isbn;?>" name="isbn"></td>
                    <td align="left"><span style="color:red;">*<?php echo $err_isbn;?></span></td>
                </tr>
                <tr>
                    <td align="left">PAGES:</td>
                    <td align="left"><input type="number" value="<?php echo $pages;?>" name="pages"></td>
                    <td align="left"><span style="color:red;">*<?php echo $err_pages;?></span></td>
                </tr>
                <tr>
                    <td align="left">PRICE:</td>
                    <td align="left"><input type="number" value="<?php echo $price;?>" name="price"></td>
                    <td align="left"><span style="color:red;">*<?php echo $err_price;?></span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="add" value="ADD">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>