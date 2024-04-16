

<div class="container">
            <h2>Dashboard</h2>
            <div class="dashboard">
                <div class="customers">
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    ?>
                    <h4>Customers</h4>
                    <h1 class="counter" data-count="<?=$num?>">0</h1>
                </div>
                <div class="transactions">
                    <?php
                    $sql = "SELECT * FROM transactions";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    ?> 
                    <h4>Transactions</h4>
                    <h1 class="counter" data-count="<?=$num?>">0</h1>
                </div>
                <div class="orders">
                    <?php
                    $sql = "SELECT * FROM transactions";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    ?> 
                    <h4>Orders</h4>
                    <h1 class="counter" data-count="<?=$num?>">0</h1>
                </div>
                <div class="employees">
                    <?php
                    $sql = "SELECT * FROM employees";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    ?> 
                    <h4>Employees</h4>
                    <h1 class="counter" data-count="<?=$num?>">0</h1>
                </div>
                <div class="products">
                    <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($result);
                    ?> 
                    <h4>Products</h4>
                    <h1 class="counter" data-count="<?=$num?>">0</h1>
                </div>
            </div>
        </div>

 <script>
    
 </script>