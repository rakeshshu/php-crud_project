<?php
include 'header.php';
?>
<div class="container bg-white p-4">
    <h2>All Records</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <div class="table-responsive">
    <table class="table table-bordered table-hove">
        <thead class="bg-success text-white">
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a class="btn btn-warning my-1" href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a class="btn btn-danger" href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
    </div>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
<?php include "footer.php";?>
</body>
</html>
