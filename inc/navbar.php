<style>

  #create{
    border: 1px solid #0066ff;
    color: #0066ff;
  }

  #create:hover{
    border: 1px solid #0066ff;
    color: #fff;
    background-color: #0066ff;
  }

  #sign_out{
    border: 1px solid #e60000;
    color: #e60000;
  }

  #sign_out:hover{
    border: 1px solid #e60000;
    color: #fff;
    background-color: #e60000;
  }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tags</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    
    <ul class="navbar-nav">

      <?php
      
        if(isset($_SESSION['User_Fname'])){
          
          echo "
          
                <li class='nav-item mr-2'>
                <a id='create' class='nav-link' href='create_post.php'>Create</a>
                </li>

                <li class='nav-item'>
                <a id='sign_out' class='nav-link' href='sign_out.php'>Sign Out</a>
                </li>

          ";

        }
        else{

          echo "
          
          <li class='nav-item'>
          <a class='nav-link' href='sign_in.php'>Sign In</a>
          </li>

          <li class='nav-item'>
          <a class='nav-link' href='sign_up.php'>Sign Up</a>
          </li>

    ";

        }
      
      ?>

    </ul>

  </div>
</nav>