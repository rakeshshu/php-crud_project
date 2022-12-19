<?php include 'header.php'; ?>

<div class="container bg-white p-4">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 p-3">
    <form action="updatedata.php" method="post">
      <div class="mb-3 mt-3">
          <label class="mt-3">Name</label>
          <input type="hidden" class="form-control" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" class="form-control" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="mb-3 mt-3">
          <label class="mt-3">Address</label>
          <input type="text" class="form-control" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
      <div class="mb-3 mt-3">
          <label class="mt-3">Class</label>
          <?php
            $sql1 = "SELECT * FROM studentclass";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0)  {
              echo '<select name="sclass" class="form-select" id="sel1">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['sclass'] == $row1['cid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
              }
          echo "</select>";
        }
            ?>
      </div>
      <div class="mb-3 mt-3">
          <label class="mt-3">Phone</label>
          <input type="text" class="form-control" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
      <input class="btn btn-dark mt-3" type="submit" value="Update"/>
    </form>
    </div>
    <div class="col-sm-3"></div>
    </div>

    <?php
      }
    }
    ?>
</div>
</div>
<?php include "footer.php";?>
</body>
</html>
