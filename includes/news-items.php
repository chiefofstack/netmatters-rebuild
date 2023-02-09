<?php
include 'functions.php';

$dbConnection = new databaseObject("localhost","developer","developer","netmatters");

if(!$dbConnection->error)
{   
    $news = $dbConnection->getNews();
    foreach($news as $newsItem){
                if($newsItem['last_name'] == "Inc")
                   $newsItem['last_name'] = '';
                   
                echo   '<div class="col-md-6 col-xl-4">                        
                            <a href="'.$newsItem['slug'].'" class="card card-'.$newsItem['color'].' news-item">                   
                                <img src="images/'.$newsItem['featured_image'].'" alt="'.trimText($newsItem['title'],40).'">    
                                <span data-url="#" class="btn btn-flag">'.$newsItem['post_type'].'</span>                            
                                <div class="news-wrap">
                                    <h4>'.trimText($newsItem['title'],40).'</h4>
                                    <p>'.trimText($newsItem['content'],100).'</p>
                                    <span class="btn btn-regular">Read more</span>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/'.$newsItem['profile_picture'].'" class="img-responsive" alt="'.$newsItem['first_name'].' ">
                                        </div>
                                        <div class="info">
                                            <strong>Posted by '.$newsItem['first_name'].' '.$newsItem['last_name'].'</strong><br>
                                            28th October 2022
                                        </div>
                                    </div>
                                </div>    
                            </a>
                        </div>';
    }
  
}else{
    echo 'connection error';
}
?>