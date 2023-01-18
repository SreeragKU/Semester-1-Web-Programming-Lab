<html>
    <body>
    <center><h2>Books Found With The Required Title</h2></center>
    <br>
 
    <?php
    include 'bkdb.php';
    $search = $_REQUEST["search"];
    $query = "SELECT `Reg_Id`, `Reg_Name`, `Reg_Edition`, `Reg_Author`, `Reg_Publisher` FROM `bookdata` WHERE Reg_Name like '%$search%'";
    $result = mysqli_query($Str,$query);
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
    {
    ?>
 
    <table border="1" align="center" cellpadding="5">
        <tr>
            <th> Registration ID </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["Reg_Id"];?> </td>
            <td><?php echo $row["Reg_Name"];?> </td>
            <td><?php echo $row["Reg_Edition"];?> </td>
            <td><?php echo $row["Reg_Author"];?> </td>
            <td><?php echo $row["Reg_Publisher"];?> </td>
        </tr>
        <?php
        }
        }
        else
        echo "<center>No books found in the library by the name $search </center>" ;
        ?>   
    </table>
    </body>
</html>
