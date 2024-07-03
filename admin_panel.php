<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_panel.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

        .sidebar {
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff9800;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .submenu ul {
            display: none;
        }

        .submenu:hover ul {
            display: block;
        }

        .sidebar li ul {
            padding-left: 20px;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li class="submenu">
                <a href="#">Students</a>
                <ul>
                    <li><a href="http://localhost/phpglab/index3.php">Add and View Students</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">Staff</a>
                <ul>
                    <li><a href="http://localhost/phpglab/index2.php">Add and View Staff</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">Class Reports</a>
                <ul>
                    <li><a href="http://localhost/phpglab/index4.php">Add and View Reports</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="content">
        <?php
        require '_dbconnect.php';
        echo "this";
        
        $sql = "SELECT * FROM `students`";
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result);
        
        echo $num;
        ?>
    </div>

    <script src="adminscript.js"></script>
</body>
</html>
