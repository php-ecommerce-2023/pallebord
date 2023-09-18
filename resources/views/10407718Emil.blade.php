<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pallebord Homepage</title>
    <style>
        @-webkit-keyframes AnimationName {
    0%{background-position:72% 0%}
    50%{background-position:29% 100%}
    100%{background-position:72% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:72% 0%}
    50%{background-position:29% 100%}
    100%{background-position:72% 0%}
}
@-o-keyframes AnimationName {
    0%{background-position:72% 0%}
    50%{background-position:29% 100%}
    100%{background-position:72% 0%}
}
@keyframes AnimationName {
    0%{background-position:72% 0%}
    50%{background-position:29% 100%}
    100%{background-position:72% 0%}
}

* {
    margin: 0;
    padding: 0;
}

body {
    display: grid;
    width:100vw;
    height: 100vh;
    place-items: center;
    text-align: center;
    font-family: sans-serif;
    color: rgb(88, 66, 66);
    background: linear-gradient(324deg, #D6D7D2, #C9D0B8, #BFBAA5, #727958, #262F06);

    background-size: 300% 400%;
    -webkit-animation: AnimationName 27s ease infinite;
    -moz-animation: AnimationName 27s ease infinite;
    -o-animation: AnimationName 27s ease infinite;
    animation: AnimationName 27s ease infinite;
}




    </style>
</head>
<body style="
    display: flex;
    justify-content:center;
    align-items:center;
    height: 100vh;
    font-family: sans-serif;
    color: white;
    background: linear-gradient(324deg, #D6D7D2, #C9D0B8, #BFBAA5, #727958, #262F06);
    background-size: 300% 400%;
    -webkit-animation: AnimationName 27s ease infinite;
    -moz-animation: AnimationName 27s ease infinite;
    -o-animation: AnimationName 27s ease infinite;
    animation: AnimationName 27s ease infinite;">
    <form method="POST" action="/buy" style="width:25vw; backgroun-color:black; border-radius: 8px; border: .1px solid white; padding:2.5vw; display:flex; flex-direction: column; text-align:center;" action="">
        <label style="font-size:1.4vw;" for="yourEmail">Your email</label><br>
        <input style=" width:80%; margin: 0 auto; padding:.8vw; border-radius: 8px; border:none; font-size: 1.2vw;" type="email" id="yourEmail" name="yourEmail" value="Your email"><br>

        <label style="font-size:1.4vw;" for="lname">Product name</label><br>
        <input style=" width:80%; margin: 0 auto; padding:.8vw; border-radius: 8px; border:none; font-size: 1.2vw;" type="text" id="productName" name="productName" value="Product name"><br>

        <input style="width:80%; margin: 0 auto; padding:.8vw; border-radius: 8px; border:none; font-size: 1.2vw; margin-top: 1.5vw;" type="submit" value="Submit">
    </form>
    <img style="margin-left:5vw; height: 44vh; border-radius: 12px; object-fit:contain;" src="https://l11.scene7.com/is/image/L11/800x800crop/UMAGE_Clava_Dine_Wood_Pendelleuchte--ba093662329e7348b41bec0b4ac6fb3c.jpg" alt="Hårdtræs bord i massiv egetræ, Ø150.">
</body>
</html>