<! DOCTYPE html>
<html>
    <head>
        <title>sample 1</title>
    </head>
    <style>
         body {
            font-family: Arial, 'Times New Roman', Times, serif;
            margin: 10;
            padding: 0;
            background-color: #ffffff;
         }
         .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
         header {
            background: #50b3a2;
            color: white;
            padding-top: 40px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;}
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 20px 20px 0 20px;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }
        header a:hover {
            color: #ffffff;
            font-weight: bold;
        }

    </style>
    <body>
        <header>
            <div class="container">

                <h1 > <span style="color: #e8491d;" >Sample</span> Website</h1>
                
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="current" ><a href="1st.html">about</a></li>
                    </ul>
                </nav>
        </header>
        <h2>welcome to <span style="color: #50b3a2;">Sample website</span></h2>
        <h3 style="color: #e8491d;">Enter details </details></h3>
        <form  method="post" action="">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" required><br><br>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="enter email" required><br><br>
            <input type="submit" value="Submit">

        </form>
        <?php 
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];

                echo "<p>Submitted Data:</p>";
                echo "<p>Name: $name</p>";
                echo "<p>Email: $email</p>";
        
             }
        ?>
    
    </body>
</html>