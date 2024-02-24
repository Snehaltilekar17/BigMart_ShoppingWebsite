<?php
include "config.php";



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];

    $sql = "SELECT * FROM order_details WHERE OID = '$order_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Initialize total
        $total = 0;

        while ($row = $result->fetch_assoc()) {
            $OrderId = $row['OID'];
            $product_name = $row['PNAME'];
            $quantity = $row['QTY'];
            $price = $row['PRICE'];

            // Calculate line total
            $line_total = $quantity * $price;
            $total += $line_total;

            // Print details or add them to the bill
            //echo "Product: $product_name, Quantity: $quantity, Price: $price, Line Total: $line_total<br>";
            ?>
            <div class="phppot-container" style="margin-top:8%;">
                <?php include "navbar.php"; ?>
                <center>
                    <h1 class="page-heading">Generate Bill</h1>
                    <table class="table" width="50%" border="2px">
                        <thead class="thead-dark">
                            <tr>
                                <th> BigMart Grocery Invoice Bill
                                    </br>
                                    <!--
                                    Bill to:<?php
                                   // $U_id=[$_POST('')]
                                   // $sql="Select * from delivery_details where uid="$U_id";";
                                ?>-->
                                </th>
                                <th> </th>
                                <th>bill Date:</th>
                            </tr>
                            <tr>
                                <th scope="col">Order Ref</th>
                                <th scope="col" class="text-right">Product Name</th>
                                <th scope="col" class="text-right">Price </th>
                                <th scope="col" class="text-right">Quantity </th>

                                <th scope="col" class="text-right">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> </td>
                                <td> </td>
                            </tr>

                            <tr>
                                <td>
                                    <?php echo $OrderId; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $product_name; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $price; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $quantity; ?>
                                </td>
                                <td class="text-right">
                                    <?php echo $line_total; ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </center>
            </div>



            <?PHP

        }

        //  echo "Total: $total";
    } else {
        echo "No results found for Order ID: $order_id";
    }
}

$conn->close();
?>