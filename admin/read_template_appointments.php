<?php

 
// display the products if there are any
if($total_rows>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
		    echo "<th>Phone</th>";
            echo "<th>Date</th>";
			echo "<th>Department</th>";
			echo "<th>Message</th>";
            echo "<th>Actions</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$appointmentid}</td>";
                echo "<td>{$name}</td>";
                echo "<td>{$email}</td>";
                echo "<td>{$phone}</td>";
                echo "<td>{$created}</td>"; 
                echo "<td>{$department}</td>";				
                echo "<td>{$message}</td>";
				
                echo "<td>";				
                    // read product button
                    echo "<a href='read_one_appointment.php?id={$appointmentid}' class='btn btn-primary left-margin'>";
                        echo "<span class='glyphicon glyphicon-list'></span> Read";
                    echo "</a>";
 
                    // edit product button
                    echo "<a href='update_appointmnet.php?id={$appointmentid}' class='btn btn-info left-margin'>";
                        echo "<span class='glyphicon glyphicon-edit'></span> Edit";
                    echo "</a>";
 
                    // delete product button
                    echo "<a delete-id='{$appointmentid}' class='btn btn-danger delete-object'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Delete";
                    echo "</a>";
 
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 
    // paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-danger'>No products found.</div>";
}
?>