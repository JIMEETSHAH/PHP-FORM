<style>
    .update
    {
        background-color: green;
        color: white;
        border:0;
        outline:none;
        border-radius: 5px;
        height: 23px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
    }

    .delete
    {
        background-color: red;
        color: white;
        border:0;
        outline:none;
        border-radius: 5px;
        height: 23px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
    }
</style>



<?php
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
//echo $total;


if($total != 0)
{
    ?>

    <h2 align="center"><mark>Displaying All Records</mark></h2>
    <center><table border=4 cellspacing="7" width="100%">
        <tr>
        <th width="5%">ID</th>
        <th width="8%">First Name</th>
        <th width="8%">Last Name</th>
        <th width="10%">Gender</th>
        <th width="20%">Email</th>
        <th width="10%">Phone</th>
        <th width="24%">address</th>
        <th width="14%">Operation</th>
        </tr>
    <?php
    
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['id']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>

        <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
        <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
        </tr>";
    }
}
else
{
    echo"No records found";
}
?>
</table>
<center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record ?');
    }
</script>
