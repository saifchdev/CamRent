<?php include("header.php");

?>
<section>
    <h2>Users<h2>
<article class="col-1">
	<div class="card">
		<?php
        
            echo "<table>";
            echo "<tr>";
            echo "<th>Roll-no</th>";
            echo "<th></th>";
            echo "<th>Name</th>";
            echo "<th></th>";
            echo "<th>E-mail</th>";
            echo "<th></th>";
            echo "<th>Action</th>";
            echo "</tr>";

      
                    echo "<tr>";
                    echo "<td>saif<td>";
                    echo "<td>saifchogle<td>";
                    echo "<td>saifchogle@gmail.com<td>";
                    echo "<td><a href='profile.php?'>Edit</a><td>";
                    echo "<td><a href='delete.php?'>Delete</a><td>";
                    echo "</tr>";
                
                    echo "<tr>";
                    echo "<td>maaz<td>";
                    echo "<td>maazlambe<td>";
                    echo "<td>maazlambe@gmail.com<td>";
                    echo "<td><a href='profile.php?'>Edit</a><td>";
                    echo "<td><a href='delete.php?'>Delete</a><td>";
                    echo "</tr>";
       

          echo "<tr>";
                    echo "<td>aamer<td>";
                    echo "<td>aamersyed<td>";
                    echo "<td>aamersyed@gmail.com<td>";
                    echo "<td><a href='profile.php?'>Edit</a><td>";
                    echo "<td><a href='delete.php?'>Delete</a><td>";
                    echo "</tr>";
       
    
		?>
	</div>
</article>
</body>
</html>