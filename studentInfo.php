<html>
    <style type="text/css">
        <!--
        div.scroll {
            height: 400px;
            width: 700px;
            overflow: auto;
            border: 1px solid #666;
            background-color: #ccc;
            vertical-align: top;
        }
        -->
    </style>
    <body>
        <?php
        $table = $_GET['q'];
        include 'dbconfig.php';
        $sql = "SELECT count(*) FROM exam_cell.$table";
        $result1 = mysql_query($sql);
        $row1 = mysql_fetch_array($result1);
        echo "<font size='4' color='blue'><b>Total No. of entries: " ."<u>". $row1[0]."</u>";
        ?>
        <br/>
        <div class="scroll">
            <br/><br/>
            <table width="600" border="1" cellpadding="1" cellspacing="1" align="center" >
                <tr><th>Enrollment No.</th><th>Branch</th></tr>
                <?php
                $table = $_GET['q'];
                include 'dbconfig.php';               
                $query = "SELECT * FROM exam_cell.$table order by enroll_no";
                $result = mysql_query($query);
                while ($row = mysql_fetch_array($result)) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
                }
                echo "</table>";
                echo "<br/><br/>";
                ?>
        </div>
        <br/><br/>
                </body>
                </html>
