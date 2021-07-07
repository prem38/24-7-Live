<?php
include 'session.php';



$sql = "select * from user where userid='$loggedin_id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
$username = $row['username'];
$yourname=$row['yourname'];
$images=$row['img'];


                    
                    
                   
?>

<html>
    <head>
        <style>
        
*{
    box-sizing: border-box;
}

body{
    background-color: #abd9e9;
    font-family: Arial;
}

#container{
    width: 500px;
    height:700px;
    background: white;
    margin: 0 auto;
    font-size: 0;
    border-redius:5px;
    overflow: hidden;
}

main{
    width: 500px;
    height: 700px;
    display:inline-block;
    font-size: 15px;
    vertical-align: top;
        
}

main header{
    height: 100px;
    padding: 30px 20px 30px 40px;
    background-color: #622569;
}

main header > *{
    display: inline-block;
    vertical-align: top;
}
 
main header img:first-child{
    width: 24px;
    margin-top: 8px;
}

main header img:last-child{
    width: 24px;
    margin-top: 8px;
}

main header div{
    margin-left: 90px;
    margin-right: 90px;
}

main header h2{
    font-size: 25px;
    margin-top: 5px;
    text-align: center;
    color: #FFFFFF;
}

main .inner_div{
    padding-left: 0;
    margin: 0;
    list-style-type: none;
    position: relative;
    overflow: auto;
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border-bottom: 2px solid #fff;
    border-top: 2px solid #fff;
}

main .triangle{
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 8px 8px 8px;
    border-color: transparent transparent #58b666 transparent;
    margin-left: 20px;
    clear: both;
    
}

main .message{
    padding: 10px;
    color: #000;
    margin-left: 15px;
    background-color: #58b666;
    line-height: 20px;
    max-width: 90%;
    display: inline-block;
    text-align: left;
    border-radius: 5px;
    clear: both;
}

main .triangle1{
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 8px 8px 8px;
    border-color: transparent transparent #6fbced transparent;
    margin-right: 20px;
    float: right;
    clear: both;
    
    
}

main .message1{
    padding: 10px;
    color: #000;
    margin-left: 15px;
    background-color:#6fbced;
    line-height: 20px;
    max-width: 90%;
    display: inline-block;
    text-align: left;
    border-radius: 5px;
    float: right;
    clear: both;
    
}
  

main footer{
    height: 100px;
    padding: 20px 30px 10px 20px;
    background-color:#622569;
}
main footer .input1{
    resize: none;
    border: 100;
    display: block;
    width: 40%;
    height: 55px;
    border-radius: 3px;
    padding: 20px;
    font-size: 13px;
    margin-bottom: 13px;
}

main footer textarea{
    resize: none;
    border: 100;
    display: block;
    width: 90%;
    height: 55px;
    border-radius: 3px;
    padding: 20px;
    font-size: 13px;
    margin-bottom: 13px;
    margin-left: 20px;
}


main footer .input2{
    resize: none;
    border: 100;
    display: block;
    width: 40%;
    height: 55px;
    border-radius: 3px;
    padding: 20px;
    font-size: 13px;
    margin-bottom: 13px;
    margin-left: 100px;
    color: white;
    text-align:center;
    background-color: black;
    border: 2px solid white;
}

            
            main footer textarea::placeholder{
                color: #ddd;
                
            }
        </style>

    </head>
    <body onload="show_fun">
        <table border="0" bgcolor="#000080" align="top" width="100%" style="height:100x;border-redius:10x">
            <tr>
                <td bgcolor="#000080" align="left" width="150">
                    <img src="image/pk1.jpg" width="150" height="90" align="right"/>
                </td>
                <td bgcolor="#000080" align="center">
                    <font style="text-align:center;font-family:algerian" color="white" size="+4">24/7 Live</font> 
                </td>
                <td>
                 
 
                    <a style="text-decoration:none;color:white;" href="home.php"><img style="width: 30%;height: 50%"src="image/p8.png"/></br>Home</a>
                </td>
                
                
                
                <td>
                   
                    <a style="text-decoration:none;color:white;" href="Profile.php"><img style="width: 30%;height: 50%"src="image/p2.png"/></br>Profile</a>
                    
                </td>
            </tr>
        </table><br/>
        <div id="container">
            
            <main>
            <header>
                
                
                <img src="<?php echo $images; ?>" alt="Hello"></img>
                <h2><?php echo $yourname;?></h2>
            </header>
            <script>
                function show_fun() {
                    var element = document.getElementById("chathist");
                    element.scrollTop = element.scrollHeight;
                }
            </script>


            <form id="myform" action="post.php"method="post">
                <div class="inner_div" id="chathist">
                    <?php
                    $sql="select * from chat";
                     $query= mysqli_query($con, $sql);
                     $i=0;
                     while ($row= mysqli_fetch_array($query)):
                       if($i==0){
                           $i=5;
                                   $first=$row;
                                   
                    
                       
                          ?> 
                       
                      

                        <div id="triangle1" class="triangle1"></div>
                        <div id="message1" class="message1">
                            <span style="color: white;float: right;">
                                <?php echo $row['msg'];
                                ?>
                            </span><br/>
                            <div>
                                <span style="color: black;float: left;font_size:10px;clear: both;">
                                    <?php echo $row['userid']; ?>
                                    <?php echo $row['created_on']; ?>
                                </span>

                            </div>
                        </div>
                        <br/><br/>
                        <?php
                       }
                       else{
                        if ($row['userid'] != $first['userid']) {
                            ?>
                            <div id="triangle" class="triangle"></div>
                            <div id="message" class="message">
                                <span style="color: white;float:left;">
                                    <?php echo $row['msg'];
                                    ?>
                                </span><br/>
                                <div>
                                    <span style="color: black;float:right;font_size:10px;clear: both;">
                                        <?php echo $row['userid']; ?>
                                        <?php echo $row['created_on']; ?>
                                    </span>

                                </div>
                            </div>
                            <br/><br/>

                            <?php
                        } else {
                            ?>
                            <div id="triangle1" class="triangle1"></div>
                            <div id="message1" class="message1"> 
                                <span style="color:white;float:right;">
                                    <?php echo $row['msg']; ?>
                                </span> <br/>
                                <div>
                                    <span style="color:black;float:left;
                                          font-size:10px;clear:both;"> 
                                        <?php echo $row['userid']; ?>, 
                                        <?php echo $row['created_on']; ?>
                                    </span>
                                </div>
                            </div>
                            <br/><br/>
                            <?php
                        }
                       }
                   endwhile;
                    ?>
                </div>
                <footer>
                    <table>
                        <tr>
                            <th>
                                <textarea id="msg" name="mess"
                                          row="2" cols="50" placeholder="Type Your Message"></textarea>
                            </th>
                            <th>
                                <input type="submit" value="Send" id="input2" id="submit" name="submit"/>
                            </th>
                        </tr>
                    </table>


                    
                </footer>


            </form>
            </main>
        </div>
    </body>
</html>