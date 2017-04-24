<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>GroupLens Movie Dataset</title>
	
	 <style type="text/css">
    @import url("main.css");
  </style>
	<script type="text/javascript" src="fetchhtml.js"></script>
</head>

<body>

  <header>
  	
    <h2 >GroupLens Movie Dataset </h2>
  
  </header>

  <main>
  
  <aside class="aform">
  <div>
    <ul>
        <li>
        <form action="" method="post">
          <button name="click1" class="click">Top 10 movies by Genre - Action</button>
          </form>
    <?php
    if(isset($_POST['click1']))
    {
        $filename = "BestMoviesbyGenre.txt";
        echo nl2br(file_get_contents($filename));
        echo "<br></br>";
    }
    ?>         
    </li>
        
          
        <li>
        <form action="" method="post">
          <button name="click2" class="click">Top 10 movies by Rating</button>
          </form>
        <?php
            if(isset($_POST['click2']))
        {
        $filename = "Best10Movies.txt";
        echo nl2br(file_get_contents($filename));
        echo "<br></br>";
        }
        ?>  
        </li>
        
        
        
        
        <li>
        <form action="" method="post">
          <button name="click3" class="click">Top 10 movies by Occupation- Student</button>
          </form>
        <?php
            if(isset($_POST['click3']))
        {
        $filename = "BestMoviesByOccupation.txt";
        echo nl2br(file_get_contents($filename));
        echo "<br></br>";
        }
        ?>  
        </li>
        
        
        <li>
        <form action="" method="post">
          <button name="click4" class="click">Top 10 movies by Age - 18</button>
          </form>
        <?php
            if(isset($_POST['click4']))
        {
        $filename = "BestMoviesByAge.txt";
        echo nl2br(file_get_contents($filename));
        echo "<br></br>";
        }
        ?> 
        </li>
        
        
        
        <li>
        <form action="" method="post">
          <button name="click5" class="click"> Top 10 movies watched by Male Gender</button>
          </form>
        <?php
            if(isset($_POST['click5']))
        {
        $filename = "BestMoviesByGenderM.txt";
        echo nl2br(file_get_contents($filename));
        echo "<br></br>";
        }
        ?> 
        </li>
        
        
        
        
        <li>
            <form action="" method="post">
          <button name="click6" class="click"> Top 10 movies watched by Female Gender</button>
          </form>
        <?php
            if(isset($_POST['click6']))
        {
        $filename = "BestMoviesByGenderF.txt";
        echo nl2br(file_get_contents($filename));
        echo "<br></br>";
        }
        ?> 
        </li>
        
        

    </ul>
  </div>
   

  </aside>
 
      
 <section id="result">
 
 </section>
  </main>

  <footer>
	<p>&copy; Cloud Group Project</p>
  </footer>
</body>
</html>