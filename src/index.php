<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
</head>
<body>
    <?php
        echo "Hello, world!";
    ?>
    <?php
        $conexao = new PDO("mysql:host=127.0.0.1;port=3306;dbname=dbname;charset=utf8mb4", 'user', "password");
        $sql = "SELECT * FROM tablename";
        $resultado = $conexao->query($sql);
        $data = $resultado->fetchAll();
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
