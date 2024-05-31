<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="nav">
        <article>
            <em id="logo">BlogDog</em>
            <a href="#.html" class="link">Профиль</a>
            <a href="#.html" class="link">Новости</a>
        </article>
        <article>
            <a href="rege/vhod.php"><button id="rege" class="link">Регистрация</button></a>
        </article>
    </section>
    <form id="vhod" name="rege">  
                <h1>Зарегистрируйтесь</h1>  
            <section class="rege">  
            <article class="log">   
                <input id="nickname" name="nickname" class="form" type="text" placeholder="Логин">  
            </article>
            <article class="passw">  
                <input id="pasw" name="password" class="form" type="password"placeholder="Пароль">  
            </article>
                <button id="btnID" class="btn" type="submit">Зарегестрироваться</button> 
            </section>  
            </form>
        <footer>  
            <section class="footer">
                <article>
                    <em id="logofoot">BlogDog</em>
                </article>
            </section>                           
</footer>
<?php 
if ($_POST) {       
    $p = mysqli_connect("localhost", "o95172oj", "0903alina", "o95172oj_ych");
    if (!$p) { 
      die("Ошибка:".mysqli_connect_error());} 
    $userid = mysqli_real_escape_string($p, $_POST["userid"]);
    $nickname = mysqli_real_escape_string($p, $_POST["nickname"]);
    $password = mysqli_real_escape_string($p, $_POST["password"]);
    $avatar = mysqli_real_escape_string($p, $_POST["avatar"]);    
    $sql = "INSERT INTO USERS (userid, nickname, password, avatar) VALUES ('$userid','$nickname', '$password','$avatar')";
    $result = $p->query($sql);
    mysqli_close($p);
}?>

<style>
#vhod{
    display: flex ;
    flex-direction: column;
    gap: 10px;
    padding: 10px;
}
.rege{
    gap: 10px;
    padding: 10px;
}
button{
}
input{
    width: 120px;
	height: 30px;
    margin: 10px;
    border: 1px solid #3f3963;    
    border-radius: 8px; 
    font-size: 14px;  
    color: #D5C3B6;
    background-color:  #a4b5d8; 
}
.vhod{
    display: flex;
    flex-direction: column; 
    gap: 2em;
    padding: 20px;
    height: 600px;
    width: 1200px;
    border-radius: 15px;
    background-color:  #7691C4;
}
.nav{
    display: flex;
    justify-content: space-between;
    min-width: 1200px;
    padding: 1.25rem;
    margin: 0 auto;
    background-color:  #7691C4;
    color: #FFEEE1;
    font-size: 16px;
    word-spacing: 20px;
}
.link {
    text-decoration: none;
    color: #FFEEE1;
  }
.footer{
    display: flex;
    justify-content: space-between;
    min-width: 1200px;
    padding: 3rem;
    height: 200px;
    margin: 0 auto;
    background-color:  #7691C4;
    color: #FFEEE1;
    font-size: 16px;
    word-spacing: 20px;
}
#rege{
    width: 120px;
	height: 25px;
    border: 1px solid #D5C3B6; 
    border-radius: 5px;
    font-size: 12px;  
    color: #D5C3B6 ;
    background-color:#5F7FBA; 
}
body {   
    margin: 0% auto; 
    background-color:#507b9e;  
    color: #FFEEE1;
}
#Botton1{
    width: 250px;
	height: 40px;
    border: 1px solid #596339; 
    border-radius: 8px;   
    font-size: 18px;  
    color: #596339;
    background-color:#5F7FBA;  
}  
</style>
</body>
</html>