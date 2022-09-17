<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RNWA Projekt</title>
    <style>
        body,
        html {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            margin: 0px !important;
        }
        
        .grid-container {
            height: 100%;
            display: grid;
            width: 100%;
            grid-template-columns: 15% 85%;
            grid-template-rows: 80px 100% 100px;
            gap: 0px 0px;
            grid-template-areas: "header header" "sidebar mainArea" "sidebar footer";
        }
        
        .header {
            grid-area: header;
            background: #4287f5;
            display: flex;
            align-items: center;
            padding-left: 1em;
            color: rgb(247, 247, 247);
            font-weight:bold;
            box-shadow: 0 4px 4px rgb(0 0 0 / 16%);
        }
        
        .sidebar {
            font-size: 18px;
            flex-direction: column;
            background: #82abed;
            grid-area: sidebar;
            height: 100%;
            box-shadow: 0 6px 4px rgb(0 0 0 / 16%);
        }
        
        .sidebar .navWrapper {
            margin-bottom: 1.5em !important;
            color: white;
            
        }
        
        .mainArea {
            height: 100%;
            grid-area: mainArea;
            padding: 3em;
            font-size: 16px;
            color: #4d4d4d
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        td,
        th {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        
        a {
            color: inherit;
            text-decoration: none;
        }
        
        .nav {
            margin-top: 1em;
            padding: 10%;
        }
        
        .mainAreaPng {
            width: 40%;
        }
        
        .imgWrapper {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        
        .footer {
            background: #4287f5;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            grid-area: footer;
            height: 180px;
        }
        
        .footer-text {
            color: white;
            font-size: 14px;
        }
        
        .tableWrapper {
            border: 1px solid #dddddd;
            max-width: 100%;
            overflow-x: auto;
        }
        
        .navWrapper {
            display: flex;
            align-items: center;
        }

        
        @media only screen and (max-width: 900px) {
            .sidebar {
                font-size: 14px !important;
            }
            .mainArea {
                font-size: 14px;
            }
            .mainAreaPng {
                width: 70%;
            }
            .grid-container {
                grid-template-columns: 25% 75%;
            }
        }
    </style>

    <script>
        function searchProduct(input) {
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("searchTable").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "products.php?input=" + input, true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
    <div class="grid-container">
        <div class="header">
            Inventory Management
        </div>
        <div class="sidebar">
            <div class="nav">
                <div class="navWrapper">
                    <div>Filip Hrkać</div>
                </div>
                <div class="navWrapper">
                    <div>Ivan Bošnjak</div>
                </div>
            </div>
        </div>
        <div class="mainArea">
            <h1>Welcome to Inventory Management!</h1>
            <div class="imgWrapper">
                <img class="mainAreaPng" src="../../Zadaca_1/purchase-guy.png" alt="Shop">
            </div>
            <p>Inventory management is a discipline primarily about specifying the shape and placement of stocked goods. It is required at different locations within a facility or within many locations of a supply network to precede the regular and planned course of production and stock of materials.
            The concept of inventory, stock or work in process (or work in progress) has been extended from manufacturing systems to service businesses  and projects, by generalizing the definition to be "all work within the process of production - all work that is or has occurred prior to the completion of production". In the context of a manufacturing production system, inventory refers to all work that has occurred – raw materials, partially finished products, finished products prior to sale and departure from the manufacturing system. In the context of services, inventory refers to all work done prior to sale, including partially process information.
            </p>
            
            <br><br>
            <div class="tableWrapper">
                <div class="search-container">
                    <form>
                    <input id="input" type="text" placeholder="🔍  Pretražite proizvod..." name="search" onkeyup="searchProduct(this.value)">
                    <div id="searchTable">
                        <?php 
                            require ("products.php")
                        ?>
                    </div>
                    </form>
                </div>
                <?php
                    
                ?>
            </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-text">&copy; Ivan Bošnjak, Filip Hrkać</div>
        </div>
    </div>
</body>

</html>