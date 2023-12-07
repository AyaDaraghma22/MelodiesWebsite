<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Melodiess</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--    change favicon: -->
    <link rel="shortcut icon" type="image/png" href="../imgs/popcornicon.png" sizes="128x128">
    <style>
        body {
            margin: 0;
        }

        .topmod {
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: #660000;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .navo{
            margin-top: -30px;
            margin-top: -50px;
        }
        .navo ul{
            list-style-type: none;
        }

        .navo li a {
            display: block;
            color: white;
            padding: -4px 16px;
            text-decoration: none;
            font-size: 20px;
        }


        .navo li a:hover:not(.active) {
            color: #ff6363;
        }

        .topli{
            margin-top: 20px;
        }
        .topli a {
            font-size: 20px;
            font-weight: lighter;
            color: white;
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
        }

        .topli a:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }


        .topli a:after {
            border-radius: 1em;
            border-top: 2px solid #d1d0d5;
            content: "";
            position: absolute;
            right: 100%;
            bottom: .14em;
            left: 0;
            transition: right .4s cubic-bezier(0,.5,0,1),
            border-color .4s ease-out;
        }


        @keyframes anchor-underline {
            0%, 10% {
                left: 0;
                right: 100%;
            }
            40%, 60% {
                left: 0;
                right: 0;
            }
            90%, 100% {
                left: 100%;
                right: 0;
            }
        }

        .CINEMA{
            float: left;
            color: white;
            text-transform: uppercase;
            transition: all 2s linear;
            position: center;
            text-align: center;
            margin-left: 30px;
            margin-top: 20px;
        }
        .CINEMA{
            text-align: left;
            list-style-type: none;
            font-size: 3rem;
            display: inline;
        }
        .dashboard{
            text-transform: uppercase;
            transition: all 2s linear;
            position: center;
            text-align: center;
            margin-left: 30px;
            list-style-type: none;
            font-size: 1.5rem;
            display: inline;
            color: white;
        }
        #profileImage{
            display: block;
            height: 50px;
            width: 50px;
            margin-left: 30px;
            border-radius: 50%;

        }
        .admininfo{
        /margin-left: -15px;/
        padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
            border-top: 4px solid #ff6363;
            border-bottom: 0.1px solid #d1d0d5;
            float: left;
        }
        .tableuserinformation{
            margin-top: 40px;
        }
        .userinformation table{
            border-collapse: collapse;
            width: 100%;
            color:  #660000;
            font-family: Bell MT;
            font-size: 24px;
            text-align: left;

        }
        .userinformation table th{
            background-color: gray;
            color: white;
            font-family: Bell MT;
            font-size: 24px;
        }
        .userinformation table tr:nth-child(even){
            background-color: darkgray;
        }
        .logoutinfo{
            padding-top: 20px;
            padding-bottom: 10px;
            width: 100%;
            border-top: 0.1px solid white;
            float: left;
        }

        .logout {
            font-size: 22px;
            font-weight: lighter;
            color: white;
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
            margin-left: 40px;
            font-family: Verdana;
        }

        .logout:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }
        /*    Change the scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 13px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background:  #660000;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ff6363;
        }
        .dashboard {
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
        }

        .dashboard:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }
        .dashboard a:hover:not(.active) {
            color: #ff6363;
        }

        .dashboard{
            margin-top: 20px;
        }
        .dashboard a {
            color: white;
            position: relative;
            text-decoration: none;
            transition: color .4s ease-out;
        }

        .dashboard a:hover {
            color:#ff6363;
            right: 0;
            text-decoration: none;
            font-weight: bold;
        }


        .dashboard a:after {
            border-radius: 1em;
            border-top: 2px solid #d1d0d5;
            content: "";
            position: absolute;
            right: 100%;
            bottom: .14em;
            left: 0;
            transition: right .4s cubic-bezier(0,.5,0,1),
            border-color .4s ease-out;
        }
    </style>
</head>
<body>
<div class="topmod" style="height: 100%; ">
    <div class="CINEMA">
        <p >Melodies</p>
    </div>
    <br> <br><br> <br><br> <br>
    <div class="admininfo">
        <!--        <table>-->
        <!--            <tr><img id="profileImage" class="form-control"-->
        <!--                     src="../imgs/adminpic.png" alt="adminPicture"></tr>-->
        <!--        </table>-->
        <p class="dashboard"> <a href="dashboard.php"><i class="fa fa-dashboard" style="color: white; font-size:24px"></i> dashboard </a></p>
    </div>
    <br><br>
    <br><br><br>

    <div class="navo">
        <ul >
            <li class="topli"><a href="RegisterAdmin.php"><i class="fa fa-user" style="color: white; font-size:24px"></i> Admin</a></li>
            <li class="topli"><a href="UserInfoAdmin.php"><i class="fa fa-user-circle" style="color: white; font-size:24px"></i> User</a></li>
            <li class="topli"><a href="orchTable.php"><i class="fa fa-ticket" style="color: white; font-size:24px"></i> Orchestras</a></li>
            <li class="topli"><a href="InstruTable.php"><i class="fa fa-music" style="color: white; font-size:24px"></i> Instruments </a></li>
        </ul>
    </div>
    <br>
    <div class="logoutinfo">
        <form method="post" action="logout.php">
            <a class="logout" href="../index.html"> LOG OUT <i class="fa fa-sign-out"  style="color: white; font-size:24px"></i></a>
        </form>


    </div>
</div>


<div class="userinformation" style="margin-left:19%;padding:1px 16px;height:100%;">

    <div class="container-fluid" style="margin-top: 40px">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold " style="color: #a10202;">Edit Admin Profile</h6>
            </div>
            <div class="card-body" >
                <?php
                $connection=mysqli_connect("localhost","root","","melody");

                if(isset($_POST['edit_btn'])){
                    $id=$_POST['edit_id'];
                    $query="SELECT * FROM person WHERE personal_ID = $id ";
                    $query_run=mysqli_query($connection,$query);
                    foreach($query_run as $row){
                        ?>

                        <form action="addAdminPHP.php" method="post">
                            <input name= "heddin_id" type="hidden" value="<?php   echo $_POST['edit_id']   ?>">
                            <div class="form-group">
                                <label>Admin First Name</label>
                                <input autocomplete="off" type="text" name="edit_Fname"
                                       value="<?php
                                       $connection=mysqli_connect("localhost","root","","melody");
                                       $idc=$row['personal_ID'];
                                       $query="SELECT personal_ID,Fname,Lname FROM person WHERE personal_ID='$idc' ";
                                       $query_num1=mysqli_query($connection,$query);
                                       $row11=mysqli_fetch_assoc($query_num1);
                                       echo $row11['Fname'];
                                       ?>" class="form-control" placeholder="Update User First Name">
                            </div>
                            <div class="form-group">
                                <label>Admin Last Name</label>
                                <input type="text" name="edit_Lname" autocomplete="off" value="<?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $idc=$row['personal_ID'];
                                $query="SELECT personal_ID,Fname,Lname FROM person WHERE personal_ID='$idc' ";
                                $query_num1=mysqli_query($connection,$query);
                                $row11=mysqli_fetch_assoc($query_num1);
                                echo $row11['Lname'];
                                ?>" class="form-control" placeholder="Update User Last Name">
                            </div>

                            <div class="form-group">
                                <label>Admin phone</label>
                                <input type="text" name="edit_phone" autocomplete="off"  value="<?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $idc=$row['personal_ID'];
                                $query="SELECT phone FROM person WHERE personal_ID='$idc' ";
                                $query_num1=mysqli_query($connection,$query);
                                $row12=mysqli_fetch_assoc($query_num1);
                                echo $row12['phone'];
                                ?>"  class="form-control" placeholder="Update User phone">
                            </div>

                            <div class="form-group">
                                <label>Admin Email</label>
                                <input type="email" name="edit_email" autocomplete="off"  value="<?php
                                $connection=mysqli_connect("localhost","root","","melody");
                                $idc=$row['personal_ID'];
                                $query="SELECT personal_ID,Email_adress FROM person WHERE personal_ID='$idc' ";
                                $query_num1=mysqli_query($connection,$query);
                                $row12=mysqli_fetch_assoc($query_num1);
                                echo $row12['Email_adress'];
                                ?>"  class="form-control" placeholder="Update User Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" autocomplete="off" value="<?php echo $row['password']; ?>"  class="form-control" placeholder="Update User Password">
                            </div>
                            <!--                    <a href="RegisterAdmin.php" class="btn" >CANCEL</a>-->
                            <!--                    <button class="btn" style="background-color: #a10202; color: white">Update</button>-->

                            <div class="modal-footer">
                                <!--                                <button type="submit" class="btn btn-secondary" data-dismiss="modal" onclick="window.history.go();">Close</button>-->

                                <form action="RegisterAdmin.php" method="post">
                                    <button type="submit" name="updatebtn" class="btn " style="background-color:#a10202;color: white ">Save changes</button>
                                </form>
                            </div>

                        </form>
                        <div class="modal-footer" style="margin-top: -71px; margin-right: 130px">
                            <!--                                <button type="submit" class="btn btn-secondary" data-dismiss="modal" onclick="window.history.go();">Close</button>-->
                            <form action="RegisterAdmin.php" method="post">
                                <button type="submit" class="btn btn-secondary" >Close</button>
                            </form>
                        </div>
                        <?php
                    }

                }
                ?>

            </div>
        </div>
    </div>

</div>

</body>
</html>