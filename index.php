<html><head>
        <!-- Generic Boot Strap Code that used by pigeon html tool -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="indexsources/jquery.min.js"></script>
        <script type="text/javascript" src="indexsources/bootstrap.min.js"></script>
        <link href="indexsources/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="cssfiles/munchy.css" rel="stylesheet" type="text/css">
        <!-- Under are the librarys that help the search drop down menu box -->
        <link rel="stylesheet" href="indexsources/searchsc/jquery-ui.css">
        <script src="indexsources/searchsc/jquery-1.10.2.js"></script>
        <script src="indexsources/searchsc/jquery-ui.js"></script>
        <!-- The Start of the code that dynamically searches -->
        <script>
            $(function() {
                                                                                                        $( "#skills" ).autocomplete({
                                                                                                          source: 'prengine/search.php'
                                                                                                        });
                                                                                                      });
        </script>
        <!-- The End of the code that dynamically searches -->
    </head><body>
        <!-- Under is the Navigation Bar-->
        <div class="cover">
            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><span>Okay Munchy</span></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of Navigation Bar -->
            <!-- Start of BG-->
            <div class="cover-image" style="background-image : url('https://cdn.pixabay.com/photo/2015/03/26/10/37/restaurant-691672_1280.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 id="title">
                            <strong>Okay Munchy</strong>
                        </h1>
                        <!--id search_gap has a top_margin of 50px-->
                        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                            <fieldset>
                                <hr class="colorgraph">
                                <div class="form-group">
                                    <div class="ui-widget">
                                        <form name="form1" method="post" action="index.php/#portfolio">
                                            <input id="skills" input="" name="skills" type="text" label="" for="skills" class="form-control input-lg">
                                        </form>
                                    </div>
                                    <hr class="colorgraph">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Search for Munchies" class="btn btn-lg btn-primary btn-block" name="Submit" formaction="#portfolio">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript that makes the page scroll down to the Body of the page
        -->
        <script src="indexsources/scroll/jquery.min.js"></script>
        <script src="indexsources/scroll/jquery.smooth-scroll.min.js"></script>
        <script>
            $('.smooth').on('click', function() {
                                                                                                        $.smoothScroll({
                                                                                                            scrollElement: $('body'),
                                                                                                            scrollTarget: '#' + this.id
                                                                                                        });
                                                                                                        
                                                                                                        return false;
                                                                                                    });
        </script>
        <!-- End the scroll down script -->
        <!-- Start of the page block -->
        <!--LOCATION BLOCK-->
        <div class="section bars">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--This is the code being displayed-->
                        <h1 class="text-center">NOW WITH # LOCATIONS</h1>
                        <!--This is the end of the code being displayed-->
                    </div>
                </div>
            </div>
        </div>
        <!--END OF LOCATION BLOCK-->
        <div id="page2">
            <a id="portfolio" class="smooth"></a>
            <!--?php //Started in 12/26/2016 - 9:40 am nook cafe //Alfred Albizures
            in collaboration with william albizures //Completed code on 12/30/2016
            - 3:42PM Starbucks wallisville rd // 832-414-0264 alfredalbizures@gmail.com
            //SQL DataBase log in information to connect to the database $servername="localhost"
            ; $username="uhdmunchy" ; $password="Coffee2017" ; $dbName="okaymunchy"
            ; //creates the database connection $conn=n ew mysqli($servername, $username,
            $password, $dbName); //check connection for errors if ($conn --->connect_error){ die ("connection failed: " . $conn -&gt; connect_error);
            } //The input of the search bar gets placed in this line html //then placed
            in the city interval or string //array 1 has the names of all the entry
            in the database $array1 = array(0 =&gt; 'Fix Coffeebar', 1 =&gt; 'Slowpokes',
            2 =&gt; 'A 2nd Cup', 3 =&gt; 'Cafeza'); //the post command is taking the
            input from html to the php $city = $_POST['skills']; //array 2 puts the
            value in an array for comparing $array2 = array($city); //array 3 is grabbing
            the maps and placing them into the iframe exeption $array3 = array('maps/black.html','maps/black2.html');
            //array 4 is the description $array4 = array('des/dex.html','maps/black2.html');
            //array 5 has the title placed in iframe mode $array5 = array('title/t.html','maps/black2.html');
            $key = array_search($city, $array1); //the key is found based on the locations
            compared on array1 to the users input if(array_intersect($array1, $array2))
            { echo "
            <iframe height="120" scrolling="no" title="Responsive Google Map" src="$array5[$key]" frameborder="no" allowtransparency="true" allowfullscreen="true" style="width: 100%;"></iframe>"; } if(array_intersect($array1, $array2)) { echo "
            <iframe height="320" scrolling="no" title="Responsive Google Map" src="$array3[$key]" frameborder="no" allowtransparency="true" allowfullscreen="true" style="width: 100%;"></iframe>"; } if(array_intersect($array1, $array2)) { echo "
            <iframe height="150" scrolling="no" title="Responsive Google Map" src="$array4[$key]" frameborder="no" allowtransparency="true" allowfullscreen="true" style="width: 100%;"></iframe>"; } if(array_intersect($array1, $array2)) { echo "
            <iframe height="300" scrolling="yes" title="Responsive Google Map" src="exp/comet.php" frameborder="no" allowtransparency="true" allowfullscreen="true" style="width: 100%;"></iframe>"; } //This is a SQL command looking thew the base table and
            comparing an exact comparison name and the $city users input $sql = "SELECT
            * FROM `base` WHERE `name` = '$city' "; //If there is a connection display
            the results //It displays in a table format on the buttom //The echo commands
            display to the website $result = $conn -&gt;query($sql); if ($result-&gt;
            num_rows &gt;0){ echo '
            <div class="table-responsive" id="tableDisplay">'; echo ' '; echo " "; echo""; while($row = $result -&gt; fetch_assoc()){
                echo" "; echo""; } echo'
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>address #</th>
                            <th>str name</th>
                            <th>state</th>
                            <th>zip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["address num"] . "</td>
                            <td>" . $row["street"] . "</td>
                            <td>" . $row["state"] . "</td>
                            <td>" . $row["zip"] . "</td>
                        </tr>
                    </tbody>
                </table>'; echo'</div>'; }else{ echo"0 results"; } $conn-&gt;close(); ?&gt;</div>
        <!--
        Under is the style that allows hyperlinks to remove that stupid line underneath
        -->
        <style type="text/css">
            a {text-decoration: none}
        </style>
        <!-- Under Hot munchys sections where rows and columns take you
        independent pages by category's -->
        <!-- Simple enough create a page for all 9 pages with a sql command and
        we are done -->
        <!--This is the table for "Hottest Munchies" nuke it as neccessary a better
        one can be built this is a place holder -->
        <div class="section midbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center topboxDetails" id="tableHeader">
                            <b>Hottest Munchies in Town!</b>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <blockquote class="leftboxDetails">
                            <h1 contenteditable="true">Old Favorites or Hot New Dishes</h1>
                            <br>
                            <p contenteditable="true">Whatever your tastes are, Okay Munchy has you covered!</p>
                        </blockquote>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <br>
                            <table class="table rightboxDetails">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Top</th>
                                        <th>Categories</th>
                                        <th>Price Range</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Black Hole</a>
                                        </td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Coffee</a>
                                        </td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Low $</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Catalina Cafe</a>
                                        </td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Sandwich</a>
                                        </td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Medium $$</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Honey Moon Cafe</a>
                                        </td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">Tacos</a>
                                        </td>
                                        <td>
                                            <a href="http://www.computerhope.com" style="text-decoration: none">High $$$</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--This is the "Explore More" row section-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <h1 class="text-center" id="explore">Explore More!</h1>
                                        <p class="text-center" id="stats">Stats and additional information</p>
                                        <hr>
                                    </div>
                                </div>
                                <!--The icon columns begin here-->
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="fa-stack fa-5x">
                                            <a href="https://www.google.com/"><i class="fa fa-cutlery fa-stack-1x fa-inverse" style="font-size:150px;"></i>
                      </a>
                                        </span>
                                        <h1>Restaurants</h1>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="fa-stack fa-5x">
                                            <a href="https://www.google.com/"><i class="fa fa-book fa-stack-1x fa-inverse fa-book" style="font-size:150px;"></i>
                      </a>
                                        </span>
                                        <h1>Menus</h1>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="fa-stack fa-5x">
                                            <a href="https://www.google.com/"><i class="fa fa-wifi fa-stack-1x fa-inverse" style="font-size:150px;"></i>
                      </a>
                                        </span>
                                        <h1>Wi-Fi</h1>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="fa-stack fa-5x">
                                            <a href="https://www.google.com/"> <i class="fa fa-group fa-stack-1x fa-inverse" style="font-size:150px;"></i>
                      </a>
                                        </span>
                                        <h1>Vendors</h1>
                                    </div>
                                    <!--The icon columns ends here-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--This section below is just for styling-->
        <div class="section midbox">
            <div class="container"></div>
        </div>
        <footer class="section footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Okay Munchy!</h1>
                        <p>Alfred Albizures, Carlos Moreno, Daniel Torres. All Rights Reserved 2017.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="adminprofile/admin.php"><img src="..\..\Downloads\DESIGN\oklogo.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- This code is for the dynamic jquery that guesses the entrys and drop
        down query -->
        <link rel="stylesheet" href="indexsources/searchsc/jquery-ui.css">
        <script src="indexsources/searchsc/jquery-1.10.2.js"></script>
        <script src="indexsources/searchsc/jquery-ui.js"></script>
    

</body></html>