<html>
    <style type="text/css">
        <!--
        div.scroll {
            height: 700px;
            width: 700px;
            overflow: auto;
            border: 1px solid #666;
            background-color: #ccc;
            vertical-align: top;
        }
        -->
    </style>
    <body>
         <br/>
        <div class="scroll">
            <br/><br/><font size="4"><div align="left">
                <?php
                $design = $_GET['q'];
                include 'dbconfig.php';               
                $query = "SELECT * FROM exam_cell.teachers where design='$design'";
                $result = mysql_query($query);
                while ($row = mysql_fetch_array($result)) {
                    echo "<br/>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;" . $row[0];
                    echo "<br/>Department&nbsp;&nbsp;:&nbsp;" . $row[1];
                    echo "<br/>Designation&nbsp;&nbsp;:&nbsp;" . $row[2];
                    echo "<br/>Email Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;" . "<u><i><a href='contactForm.php?to=$row[3]'>".$row[3]."</a></i></u>";
                    echo "<br/><br/>";
                }
               
                ?>
            </div>
            </font>
        </div>
        <br/><br/>
                </body>
                </html>
