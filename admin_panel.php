<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_panel.css" />
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
      }

      .sidebar {
        height: 100%;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #f5f5f5;
        padding: 20px;
      }

      .sidebar h2 {
        text-align: center;
      }

      .sidebar ul {
        list-style-type: none;
        padding: 0;
      }

      .sidebar a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: #000;
      }

      .sidebar a:hover {
        background-color: #e0e0e0;
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
    </style>
  </head>

  <body>
    <div class="sidebar">
      <h2>Menu</h2>
      <ul>
        <li class="submenu">
          <a href="#">Students</a>
          <ul>
            <li>
              <a href="http://localhost/phpglab/index3.php"
                >Add and view Students</a
              >
            </li>
          </ul>
        </li>

        <li class="submenu">
          <a href="#">Staff</a>
          <ul>
            <li>
              <a href="http://localhost/phpglab/index2.php"
                >Add and view staffs</a
              >
            </li>
          </ul>
        </li>

        <li class="submenu">
          <a href="#">Class Reports</a>
          <ul>
            <li>
              <a href="http://localhost/phpglab/index4.php"
                >Add and view reports</a
              >
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="content">
      <?php
    require '_dbconnect.php';
    echo "this";
    
    
    $sql="SELECT *FROM `students`";
    $result=mysqli_query($conn,$sql);
    
    $num=mysqli_num_rows($result);
    
    echo $num;
    ?>


  </div>

  
    <script src="adminscript.js"></script>
  </body>
</html>
