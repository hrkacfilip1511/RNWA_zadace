<h3 style="text-align: center;">Pretraživanje pomoću fetch</h3>
<table>
    <thead>
        <tr>
            <th>
                Naziv proizvoda
            </th>
            <th>
                Količina
            </th>
            <th>
                Ocjena
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        require('../config.php');

        $input = $_GET['product'];

        if($input == '""') {
            $sql = 'SELECT
                p.product_name,
                p.quantity,
                p.rate
            FROM product p';
        }
        else {
            $sql = "SELECT
            p.product_name,
            p.quantity,
            p.rate
        FROM product p
        WHERE p.product_name LIKE '%".$input."%'";
        }
        
        $result = $conn->query($sql);
        
        if ($result != false && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td data-label=".'Naziv proizvoda'.">".$row["product_name"]."</td><td data-label=".'Količina'.">".$row["quantity"]."</td><td data-label=".'Ocjena'.">".$row["rate"]."</td></tr>";
            }
        } else {
            echo "Nema rezultata";
        }
        
        $conn->close();
        ?> 
    </tbody>
</table>