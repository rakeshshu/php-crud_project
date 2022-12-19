<?php include 'header.php'; ?>
<div class="container bg-white p-4">
    <h2>Add New Record</h2>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 p-3">
    <form action="savedata.php" method="post">
        <div class="mb-3 mt-3">
            <label class="mt-3">Name</label>
            <input type="text" class="form-control" name="sname" placeholder="Enter name" />
        </div>
        <div class="mb-3 mt-3">
            <label class="mt-3">Address</label>
            <input type="text" class="form-control" name="saddress" placeholder="Enter address" />
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label mt-3">Class</label>
            <select class="form-select" id="sel1" name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>

              <?php } ?>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label class="mt-3">Phone</label>
            <input type="text" class="form-control" name="sphone" placeholder="Enter phone" />
        </div>
        <input class="btn btn-dark mt-3" type="submit" value="Save"  />
    </form>
    </div>
    <div class="col-sm-3"></div>
    </div>
    

</div>
</div>
<?php include "footer.php";?>
</body>
</html>
