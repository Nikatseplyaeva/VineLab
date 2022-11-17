<?php

/** @var yii\web\View $this */

$this->title = 'Hold my wine';
?>
<link rel="stylesheet" href="font/Coiny.ttf">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
<div class="site-index">
<div class="container">
    <div class="banner">
        <div class="banner_img">
            <img src="img/p3.jpg"  alt="">
        </div>
            <div class="banner_text">
                <p class="glav_text">Hold my <br> wine</p>
                <form action="form.html" class="left_text">
                    <p class="niz_text">Единый сервис по подбору вина <br> по вашим вкусовым предпочтениям</p>
                    <button class="button button_text">Подобрать</button>
                </form>
              
            </div>   
    </div>
    <div class="main_text">Блог</div>
    
    <div class="blog">
    <?php
                foreach($articles as $article) {
                    echo '
            <div class="cards_block">
                <div class="card"><img alt="sdf" class="img" src="uploads/'.$article->image.'"></div>
                    <hr class="hr_block">
                    <div class="text">
                        <div class="text_block">    
                            <p class="glav_text_card">'.$article->title.'</p>
                            <p class="niz_text_card">'.$article->description.'</p>
                        </div>
                    </div>
                 </div>
            
                 ';
                }
            ?></div>
    </div>
    
    
</div>

<style>
    @font-face {
	font-family:'Coiny';
    src: url('font/Coiny.ttf');
}
@font-face {
	font-family:'Gabriela';
    src: url('font/Gabriela.ttf');
}
       
.banner_img img{
    width: 100%;
    border-radius: 10px;
}

.banner{
    margin-top: 42px;
}

.banner_text{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 80px;
}

.left_text{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: flex-end;
}

.glav_text{
    font-family: 'Coiny';
    font-weight: 400;
    font-size: 96px;
    line-height: 106px;
    text-transform: uppercase;
    color: #FE0000;
}

.niz_text{
    font-family: 'Gabriela';
    font-style: normal;
    font-weight: 400;
    font-size: 32px;
    line-height: 41px;
    text-align: right;
    color: #FE0000; 
}

.button{
    width: 223px;
    height: 70px;
    background: #FE0000;
    border-radius: 4px;
    border: none;
}

.button_text{
    font-family: 'Gabriela';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 31px;
    text-align: center;
    color: #FCE6EA;
}

.main_text{
    font-family: 'Gabriela';
    font-style: normal;
    font-weight: 400;
    font-size: 64px;
    padding-top:  200px;
    color: #FE0000;
}
.cards_block{

    display: flex;
    flex-direction: column;
    margin-top: 80px;
}
    .blog {
    width: 100%;
    margin-top: 40px;
    display: flex;
    gap: 20px;
    justify-content: space-between;
    flex-direction: row;
}

body{
    background-color: #FCE6EA;
}

.container{
    max-width: 1600px;

}

.img {
    width: 710px;
    height: auto;
  
    border-radius: 10px;
}
    .glav_text_card {
    font-family: 'Gabriela';
    font-style: normal;
    font-size: 24px;
    margin-top: 16px;
    text-transform: uppercase;
    color: #FE0000;
}

.niz_text_card{
    font-family: 'Gabriela';
    font-style: normal;
    font-size: 24px;
    margin-top: 16px;
    color: #FE0000;
    width: 620px;
}
    .text_block{
    display: flex;
    flex-direction: column;
    margin-top: 42px;
}
    
.text{
    display: flex;
    flex-direction: column;
}
.hr_block{
    width: 710px;
    background: #FE0000;
    border: none;
    height: 1px;
    margin-top: 24px;
}
    .card {
        width: 710px;
        height: 410px;
    border-radius: 10px;

    display: flex;
    flex-direction: column;
}
    .main_img {

    width: 1440px;
    height: 810px;
    left: 80px;
    top: 200px; 
}

 .body-content {
        display: flex;
        flex-direction: row wrap;
        justify-content: space-between;
    }

    .title {

        width: 657px;
        height: 212px;
        left: 80px;
        top: 1090px;

        font-family: 'Coiny';
        font-style: normal;
        font-weight: 400;
        font-size: 96px;
        line-height: 106px;
        text-transform: uppercase;

        color: #FE0000;

    }

    .lead {

        width: 584px;
        height: 82px;
        left: 936px;
        top: 1090px;

        font-family: 'Gabriela';
        font-style: normal;
        font-weight: 400;
        font-size: 32px;
        line-height: 41px;
        text-align: right;

        color: #FE0000;
 
    }

    .btn-lg {

        width: 223px;
        height: 70px;
        left: 1297px;
        top: 1214px;

        background: #FE0000;
        border-radius: 4px;
        
    }
</style>

</div>
