<?php


 

 
// display the products if there are any
if($total_rows>0){
     echo "<section id='news' data-stellar-background-ratio='2.5'>";
          echo " <div class='container'>";

              echo "  <div class='row'>";

                     echo "<div class='col-md-12 col-sm-12'>";
                          		         
 
                          echo "<div class='section-title wow fadeInUp' data-wow-delay='0.1s'>";
                              echo " <h2>Latest News</h2>";
                         echo " </div>";
                     echo "</div>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
                    echo " <div class='col-md-4 col-sm-6'>";
                         
                         echo " <div class='news-thumb wow fadeInUp' data-wow-delay='0.4s'>";
                               echo " <a href='read_one_news.php?news_id={$news_id}'>";
                                   echo " <img src='images/1.jpg' class='img-responsive' alt=''>";
                              echo " </a>";
                              echo " <div class='news-info'>";
                                    echo " <span>{$created}</span>";
                                    echo "<h3><a href='read_one_news.php?news_id={$news_id}'>{$heading}</a></h3>";
                                    echo "<p>{$smallcontent}</p>";
                                    echo "<div class='author'>";
                                         echo "<img src='images/author-image.jpg' class='img-responsive' alt=''>";
                                         echo "<div class='author-info'>";
                                              echo "<h5>{$author}</h5>";
                                             echo " <p>{$position}</p>";
                                         echo "</div>";
                                    echo "</div>";
                              echo " </div>";
                         echo " </div>";
                    echo " </div>";
					  };
				 echo "</div>";	
				
			 echo "</div>";
	     echo "</section>";
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-danger'>Nothing found.</div>";
}

?>