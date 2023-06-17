<?php 
    session_start();
    if(isset($_SESSION['logedIn']) && $_SESSION['logedIn'] === true) $logedIn =true;
    else $logedIn = false;
?>
<main>

    <?php
        if($logedIn) echo <<<html
            <div style="padding: 8rem; display:flex; align-items:center; justify-content:center; background: rgb(63,251,205);
            background: radial-gradient(circle, rgba(63,251,205,1) 0%, rgba(255,152,62,1) 100%);">
                <div style ="font-size: 3rem;">
                    already loged in!
                </div>
                <form action="/logOut.php" method="post" >
                    <button type="submit" name= "this" style ="font-size: 3rem;  border:3px solid #ffc; border-radius:1rem; margin:1rem;">log out</button>
                </form>
            <div>
        html;
        // header('/logOut.php')
        // session_destroy();
        // echo 'done777';
    ?>

    <div class="log-in-wraper <?php if($logedIn) echo 'hidden';?>">
        <div>
            <h1 class="log_in_top_text">Log In</h1>
            <button class="switch_log_in generic_btn generic_btn--switch_log_in">sign up</button>
        </div>
        <form action="/logini.php" method="post" class="log-in-form log_in" >

            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="i123" > username:</label> -->
                <input required class ="input-wraper-input" type="text" id="log_in--mail" name="user" placeholder="email or username">
            </div>
            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="password">password:</label> -->
                <input required class ="input-wraper-input" type="password" id="log_in--password" name= "password" placeholder="password">
            </div>
            
            
            <div class="log-in-form-checkbox">
                <input type="checkbox" name="" id="">
                <div>
                    <p>
                        keep me logged in
                    </p>
                </div>
                
            </div>
            
            <button  class="generic_btn" type="submit">log in</button>


            <div class="all_rights_reserved">all rights reserved ibook's</div>
            
        </form>

    </div>
    <div class="log-in-wraper hidden">
        <div>
            <h2 class="log_in_top_text">Create an Account</h2>
            <button class="switch_log_in generic_btn generic_btn--switch_log_in">log in</button>
        </div>
        <form action="/signUp.php" method="post"  class = "log-in-form  sign_up" >

            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="i123" > username:</label> -->
                <input required class ="input-wraper-input"  id="sign_up--first_name" type="text" id="i123" name="first-name" placeholder="first name">
            </div>
            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="password">password:</label> -->
                <input required class ="input-wraper-input" id="sign_up--last_name" type="text"  name= "last-name" placeholder="last name">
            </div>
            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="password">password:</label> -->
                <input required class ="input-wraper-input" id="sign_up--email" type="email" name= "email" placeholder="email">
            </div>
            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="password">password:</label> -->
                <input required class ="input-wraper-input" id="sign_up--email_confirm" type="email"  name= "confirm email" placeholder="confirm email">
            </div>
            <div class="input-wraper">
                <!-- <label class="input-wraper-label" for="password">password:</label> -->
                <input required class ="input-wraper-input" id="sign_up--password" type="password" id="form-password-sign-up" name= "password" placeholder="password">
            </div>

            
            
            <div class="log-in-form-checkbox">
                <input required type="checkbox" name="" id="">
                <div>
                    <p>
                        i am egreeing books policy
                    </p>
                </div>
                
            </div>
            <button  class="generic_btn " type="submit">register</button>


            <div class="all_rights_reserved" >all rights reserved ibook's</div>
            
        </form>

    </div>

    <script defer src="/js/logIn.js"></script>
</main>
