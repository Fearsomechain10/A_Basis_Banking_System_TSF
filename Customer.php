<?php
    // Making conncetion with the database.
    $server = "localhost";
    $username = "root";
    $password = "";
    $data_base_name = "bank_details";

    $connection = mysqli_connect($server, $username, $password, $data_base_name); // Here we are passing the name of the DB.

    if (!$connection) {
        die("Connection failed due to : ". mysqli_connect_error());
    }

    // Now we have to write the query.
    $query = "select * from customers";
    $result = mysqli_query($connection, $query); // This variable will help us to run the query and get the data from the DB.

    // Now we have to go to the html file and we have to write PHP there i.e inside the table creation code.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>MFP - CUSTOMER</title>
    
</head>
<body>   
    
    <nav>
        <div class="container">
            <div class="logo-container">
                <img src="./money.png" alt="SBI">
                <h1>Moxa Finance Partners</h1>
            </div>

            <div class="menu">
                <a href="http://localhost/html/index.php" target="_blank"><button>Home</button></a>
                <a href="http://localhost/html/customer.php" target="_blank"><button>Customer</button></a>
                <a href="http://localhost/html/transaction.php" target="_blank"><button>Transaction</button></a>
            </div>

            <button class="triline">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </nav>

    <div class="toggleMenu">
        <div class="toggle-menu-links">
        <a href="http://localhost/html/index.php" target="_blank"><button>Home</button></a>
        <a href="http://localhost/html/customer.php" target="_blank"><button>Customer</button></a>
        <a href="http://localhost/html/transaction.php" target="_blank"><button>Transaction</button></a>
        </div>
    </div>

    <div class="table">
        <div class="heading">
        <h1>List of Our Customers</h1>
        </div>
        <table>
                <tr class="r_data">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                </tr>
                <tr>
                <?php 
                    
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                ?>

                            <!-- Inside this section, we will be writing the <tr></tr> -->
                            <td><?php echo $row['Registration_Number']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Balance']; ?></td>

                </tr>
                <?php
                    }

                ?>
        </table>
    </div>

    <div class="main2">
        <!-- Links -->
        <a href="http://localhost/html/form.php" target="_blank"><button id="sendMoney">Send Money?</button></a>
    </div>


    <!-- Footer -->
    <footer>
        <div class="developer">
            <p>Made by Arunava Sarkar</p>
        </div>
        <div class="developer-contact">
        <a href="https://github.com/Fearsomechain10" target="blank">
                <svg x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256" style="fill:#000000;">
                    <g fill="#eeeeee" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(10.66667,10.66667)">
                            <path
                                d="M10.9,2.1c-4.6,0.5 -8.3,4.2 -8.8,8.7c-0.5,4.7 2.2,8.9 6.3,10.5c0.3,0.1 0.6,-0.1 0.6,-0.5v-1.6c0,0 -0.4,0.1 -0.9,0.1c-1.4,0 -2,-1.2 -2.1,-1.9c-0.1,-0.4 -0.3,-0.7 -0.6,-1c-0.3,-0.1 -0.4,-0.1 -0.4,-0.2c0,-0.2 0.3,-0.2 0.4,-0.2c0.6,0 1.1,0.7 1.3,1c0.5,0.8 1.1,1 1.4,1c0.4,0 0.7,-0.1 0.9,-0.2c0.1,-0.7 0.4,-1.4 1,-1.8c-2.3,-0.5 -4,-1.8 -4,-4c0,-1.1 0.5,-2.2 1.2,-3c-0.1,-0.2 -0.2,-0.7 -0.2,-1.4c0,-0.4 0,-1 0.3,-1.6c0,0 1.4,0 2.8,1.3c0.5,-0.2 1.2,-0.3 1.9,-0.3c0.7,0 1.4,0.1 2,0.3c1.3,-1.3 2.8,-1.3 2.8,-1.3c0.2,0.6 0.2,1.2 0.2,1.6c0,0.8 -0.1,1.2 -0.2,1.4c0.7,0.8 1.2,1.8 1.2,3c0,2.2 -1.7,3.5 -4,4c0.6,0.5 1,1.4 1,2.3v2.6c0,0.3 0.3,0.6 0.7,0.5c3.7,-1.5 6.3,-5.1 6.3,-9.3c0,-6 -5.1,-10.7 -11.1,-10z">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/arunava2510/" target="blank">
                <svg x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256" style="fill:#000000;">
                    <g fill="#eeeeee" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(5.12,5.12)">
                            <path
                                d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM17,20v19h-6v-19zM11,14.47c0,-1.4 1.2,-2.47 3,-2.47c1.8,0 2.93,1.07 3,2.47c0,1.4 -1.12,2.53 -3,2.53c-1.8,0 -3,-1.13 -3,-2.53zM39,39h-6c0,0 0,-9.26 0,-10c0,-2 -1,-4 -3.5,-4.04h-0.08c-2.42,0 -3.42,2.06 -3.42,4.04c0,0.91 0,10 0,10h-6v-19h6v2.56c0,0 1.93,-2.56 5.81,-2.56c3.97,0 7.19,2.73 7.19,8.26z">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </footer>

    <!-- JavaScript Code -->
    <script>
       function activeAndToggle(){
          const triline = document.querySelector('.triline');
          const toggleMenu = document.querySelector('.toggleMenu');

          toggleMenu.classList.toggle('is-toggled');
          triline.classList.toggle('is-active');
        };

        document.querySelector('.triline').addEventListener('click', activeAndToggle);

    </script>
</body>
</html>