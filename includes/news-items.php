<?php
include 'functions.php';



        if(isset($dbConnection->error))
        {   
                //connection error                                          
                echo   '<div class="col-md-12" style="display:block">
                            <div class="alert alert-danger" >
                                Error connecting to the database
                            </div>
                        </div>';
        }else{
            $news = $dbConnection->getNews();

            //loop through each item
            foreach($news as $newsItem){
                if($newsItem['last_name'] == "Inc")
                    $newsItem['last_name'] = '';

                    // escape outputs
                    $title = strip_tags($newsItem['title']);
                    $content = strip_tags($newsItem['content']);
                    $slug = strip_tags($newsItem['slug']);
                    $publishedOn = strip_tags($newsItem['published_on']);
                    $featuredImage = strip_tags($newsItem['featured_image']);
                    $postType = strip_tags($newsItem['post_type']);
                    $color = strip_tags($newsItem['color']);
                    $firstName = strip_tags($newsItem['first_name']);
                    $lastName = strip_tags($newsItem['last_name']);
                    $profilePicture = strip_tags($newsItem['profile_picture']);
                   
                echo   '<div class="col-md-6 col-xl-4">                        
                            <a href="'.$slug.'" class="card card-'.$color.' news-item">                   
                                <img src="images/'.$featuredImage.'" alt="'.trimText($title,40).'">    
                                <span data-url="#" class="btn btn-flag">'.$postType.'</span>                            
                                <div class="news-wrap">
                                    <h4>'.trimText($title,40).'</h4>
                                    <p>'.trimText($content,100).'</p>
                                    <span class="btn btn-regular">Read more</span>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="images/'.$profilePicture.'" class="img-responsive" alt="'.$firstName.' ">
                                        </div>
                                        <div class="info">
                                            <strong>Posted by '.$firstName.' '.$lastName.'</strong><br>
                                            '.date('jS F Y', strtotime($publishedOn)).'
                                        </div>
                                    </div>
                                </div>    
                            </a>
                        </div>';
            }  
        }
?>