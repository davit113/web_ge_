<?php  session_start(); ?>


<?php require_once 'html/head.html' ?>
<?php require_once 'html/header.html' ?>
<?php  require_once 'php/book.php' ?>


<!-- <?php echo $_SESSION['id13']."<br>"?> -->


<main class="home">
    
    <?php 
        if(isset($_SESSION['logedIn']) && $_SESSION['logedIn'] === true) {
            echo "<p style = 'font-size: 2rem; padding:0 2rem; backgroun:rgba(15, 252, 101,0.5); margin:auto;'>wellcome ".$_SESSION['username']."!</p>";
        }
    ?>
   
   <div class="carts-container-wraper">
                 
        <div class="carts-container-title-area">
            <div class="double-hr"></div>
            <div class="carts-container-title-area-content">
                <a href="/pages/inDevelopment.php">  
                    <p class="circle"></p>
                    <h4>📙featured📙</h4>
                    </a>
            </div>
        </div>
        <div class="carts-conteiner top-100">
            <?php 
                for($i =0; $i<4; $i++){
                    createCart($gBook, $coverUrls);
                }
            ?>
        </div>            
                
   </div>
   <div class="carts-container-wraper">
                 
        <div class="carts-container-title-area">
            <div class="double-hr"></div>
            <div class="carts-container-title-area-content">
                <a href="/pages/inDevelopment.php">  
                    <p class="circle"></p>
                    <h4>📙bestsellers📙</h4>
                    </a>
            </div>
        </div>
        <div class="carts-conteiner top-100">
            <?php 
                for($i =0; $i<4; $i++){
                    createCart($gBook,$coverUrls);
                }
            ?>
        </div>            
                
   </div>
   <div class="carts-container-wraper">
                 
        <div class="carts-container-title-area">
            <div class="double-hr"></div>
            <div class="carts-container-title-area-content">
                <a href="/pages/inDevelopment.php">  
                    <p class="circle"></p>
                    <h4>📙for sale📙</h4>
                    </a>
            </div>
        </div>
        <div class="carts-conteiner top-100">
            <?php 
                for($i =0; $i<4; $i++){
                    createCart($gBook, $coverUrls);
                }
            ?>
        </div>            
                
   </div>
</main>

<?php require_once 'html/footer.html' ?>



