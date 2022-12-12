

<!DOCTYPE html>


<html>
​
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fridge Raider!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/Styles/style.css">
    <script src="https://kit.fontawesome.com/353c561873.js" crossorigin="anonymous"></script>
​
</head>
​
<body>
<header style="margin-bottom:200px;">

<a href="../../index.php" class="logo">BEST BYES</a>

<nav class="navbar">
   
    <a href="../list.php">Shopping List</a>
    <a href="../index.php#aboutus">about</a>
    <button><a href=".aboutUs.html">Contact</a></button>
   

   
</nav>


<a href="logout.php"><button class="btn btn-danger"> Log out</button></a>
</header>

    
    <!-- making changes -->
   
        <!-- <div class="row"> -->
        <div class="column is-12" >
            <br>
​
            <div class="panel-heading"style="margin-top:100px;">
                <h3 class="panel-title">
                    <strong>
                        <i class="fa fa-list-alt"></i>
                        So what's in your fridge...raider?
                    </strong>
                </h3>
            </div>
        </div>
        <div class="columns">
            <div class="panel-body column">
                <form role="form">
​
                    <div class="column">
                        <div class="control">
                            <label class="label">How Many Recipes Do You Need?</label>
                            <div class="select is-rounded">
                                <select id="num-records-select">
                                    <option value = "1">1</option>
                                    <option value = "5">5</option>
                                    <option value = "10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="control">
                            <label class="label">Ingredients:</label>
                            <div class="field has-addons">
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="A ton of" id="firstInput">
                                </div>
                            </div>
                            <div class="field has-addons">
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="Some of" id="secondInput">
                                </div>
                            </div>
                            <div class="field has-addons">
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="A little of"
                                        id="thirdInput">
                                </div>
                            </div>
​
​
                        </div>
                        <div>
                            <br>
​
                            <button type="submit" class="button is-rounded "style= 'background-color:#27ae60;' id="run-search">
                                <i class="fa fa-search"></i>
                                Search
                            </button>
                            <button type="button" class="button is-rounded " style= 'background-color:#27ae60;' id="clear-all">
                                <i class="fa fa-trash"></i>
                                Clear Results
                            </button>
                        </div>
                    </div>
​
            </div>
            <div class="column">
                <div id="slideshow-example" data-component="slideshow">
                    <div role="list" class="is-center">
                        <div class="slide">
                            <img src="" class="imgSize" id="image1" alt="">
                        </div>
                        <div class="slide">
                            <img src="" class="imgSize" id="image2" alt="">
                        </div>
                        <div class="slide">
                            <img src="" class="imgSize" id="image3" alt="">
                        </div>
                    </div>
                </div>
​
            </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="column is-12">
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <strong>
                            <i class="fa fa-table"></i>
                            Chefs Top Choices
                        </strong>
                        <button type="button" class="button is-rounded" style= 'background-color:#27ae60;' id="clear-recipe">
                            <i class="fa fa-trash"></i>Clear Recipe</button>
                    </h3>
                </div>
                <div class="list is-hoverable is-block" id="well-section">
                    ​
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-12">
            <hr>
            <h5 class="text-center">
                <small>
                    Copyright ©
                </small>
            </h5>
        </div>
    </div>
    </d iv>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="./assets/JavaScript/script.js"></script>
​
</body>
​
</html>
