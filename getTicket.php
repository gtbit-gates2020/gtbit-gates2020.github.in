<?php 
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="images/Logo-01-01.png">
    <title>GATES 20-20 ---Get Ticket</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: gtbit;
        }
        @font-face{
            font-family: gtbit;
            src: url(images/ProductSans-Thin.ttf);
        }
        .body{
            background: url(images/backgroundW.png ) center center fixed no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            width:100vw;
            height: 100vh;
        }
        .data{
            width: 300px;
            height: 35px;
            border: 1px dashed #4CC7E8;
            padding: 10px;
            transition: 1s all linear;
        }
        .data:focus{
            outline: none;
            padding: 15px;
            border: 1px solid #F171AB;
        }
        .getticket{
            background-color: #4CC7E8;
            border-radius: 5px;
            color: white;
            border: none;
            outline: none;
            padding: 5px;
            font-family: gtbit;
            transition: 0.5s all linear;
        }
        
        .getticket:hover{
            font-weight: bolder;
            box-shadow: 2px 2px 10px rgb(46, 148, 177);
        }
        .getticket:focus{
            outline: none;
        }
    </style>

    <script>
        var count=1;
        var pat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        function verify(){
            var name = document.getElementById('username').value;
            var mail = document.getElementById('mail').value;
            var college = document.getElementById('college').value;

            console.log("a="+name);
            console.log('b='+mail);
            console.log('c='+college);

            if(name == " "){
                document.getElementById('nameerr').innerHTML="Please Enter Your Name";
                count=0;
            }else{
                document.getElementById('nameerr').innerHTML=" ";
            }

            if(mail == " "){
                document.getElementById('mailerr').innerHTML="Please Enter Your Mail ID";
                count=0;
            }else if(!pat.test(mail)){
                document.getElementById('mailerr').innerHTML="Please Enter Valid Mail ID";
                count=0;
            }else{
                document.getElementById('mailerr').innerHTML=" ";
            }

            if(college == " "){
                document.getElementById('collegeerr').innerHTML="Please Enter Your College Name";
                count=0;
            }else{
                document.getElementById('collegeerr').innerHTML=" ";
            }

            if(count == 1){
                document.getElementById('form').setAttribute('action',"ticket.php");
                document.getElementById('getTicket').click();
            }
        }
    </script>
</head>
<body>
    <div class="body">
        <form method="POST" id="form">
                <div class="mt-2">
                    <label for="username">Name</label><br>
                    <input type="text" name="username" id="username" class="data" autocomplete="off" value=" ">
                    <p style="color: red;font-size:15px;" id="nameerr"></p>
                </div>
                <div class="mt-2">
                    <label for="mail">Email</label><br>
                    <input type="text" name="mail" id="mail" class="data" autocomplete="off" value=" ">
                    <p style="color: red;font-size:15px;" id="mailerr"></p>
                </div>
                <div class="mt-2">
                    <label for="college">College Name</label><br>
                    <input type="text" name="college" id="college" class="data" autocomplete="off" value=" ">
                    <p style="color: red;font-size:15px;" id="collegeerr"></p>
                </div>
            <div class="mt-2 d-flex justify-content-center" >
                <div style="width: 100%">
                    <input type="button" onclick="verify()" value="Get Your Ticket" class="getticket" style="width: 100%" >
                </div>
            </div>
            <input type="submit" value="" style="display: none" id="getTicket">
        </form>
    </div>
</body>
</html>