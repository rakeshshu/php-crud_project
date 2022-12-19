<?php include 'header.php'; ?>
<div class="container bg-white p-3">
    <h2>Edit Record</h2>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 p-3">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="mb-3 mt-3">
            <label class="mb-3 mt-3">Id</label>
            <input type="text" class="form-control" name="sid" placeholder="Enter id" />
        </div>
        <input class="btn btn-dark mt-3" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form action="updatedata.php" method="post">
        <div class="mb-3 mt-3">
            <label for="" class="mb-3 mt-3">Name</label>
            <input type="hidden" name="sid" class="form-control"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" class="form-control" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="mb-3 mt-3">
            <label class="mb-3 mt-3">Address</label>
            <input type="text" name="saddress" class="form-control" value="<?php echo $row['saddress']; ?>" />
        </div>
        <div class="mb-3 mt-3">
        <label class="mb-3 mt-3 form-label">Class</label>
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
            <label class="mb-3 mt-3">Phone</label>
            <input type="text" name="sphone" class="form-control" value="<?php echo $row['sphone']; ?>" />
        </div>
    <input class="btn btn-dark mt-3" type="submit" value="Update"  />
    </form>
    </div>
    <div class="col-sm-3"></div>
    </div>
    <?php
  }
}
}

    ?>
</div>
</div>
</div>
<?php include "footer.php";?>
</body>
</html>
