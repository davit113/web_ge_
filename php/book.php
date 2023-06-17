
<?php 

    $coverUrls = array(
        "//covers.openlibrary.org/b/id/13138848-M.jpg",
        "//covers.openlibrary.org/b/id/14286212-M.jpg",
        "//covers.openlibrary.org/b/id/10117916-M.jpg",
        "//covers.openlibrary.org/b/id/11400-M.jpg",
        "//covers.openlibrary.org/b/id/10312943-M.jpg",
        "https://covers.openlibrary.org/b/id/10565604-M.jpg",
        "https://covers.openlibrary.org/b/id/14105538-M.jpg",
        "http://covers.openlibrary.org/b/id/10441642-M.jpg"

    );

    

    $gBook = array(
        'title' =>"Missionary's little book of answers",
        'author' =>'Gilbert W. Scharffs',
        'createDate' =>'2009-12-10T08:16:54.306806',
        'revision' =>'3',
        'subjects' =>'"Church of Jesus Christ of Latter-Day Saints", "Miscellanea", "Mormon Church", "Mormon missionaries", "Questions and answers", "Training of"',
        'coverUrl' =>'https://covers.openlibrary.org/b/id/10565604-M.jpg',
        'price' =>'9.99$',
        'discount' => '4.99$',
    );

    function createCart($book, $coverUrls){
        // $disscount;
        $imgUrl =$coverUrls[rand(0,count($coverUrls)-1)];
        $author =$book['author'];
        $bookName =$book['title'];
        $price =$book['discount']; //on purpose
        $discount = $book['price'];


        if($book['discount'] === $book['price']){ 
            $hidden= ' hidden';
        }
        else {
            $hidden ='';
        }  
        $thisCart = <<<this
            <div class="cart" >
                <div class = "cart-new-tag hidden">new!</div>
                <div class="cart-top">
                    <a class="cart-link" href="#">
                        <img src="$imgUrl" alt="book">
                    </a>
                </div>  

                <div class="cart-buttom">
                    <a href="#"><div class="cart-author">$author</div></a>
                    <a href="#"><div class="cart-book-name">$bookName</div></a>
                    <div class="cart-price"> <p>$price</p> <s class ="$hidden">$discount</s></div>
                    <button class="generic_btn">add to cart</button>
                </div>
            </div>
        this;
        echo $thisCart;
    }
?>