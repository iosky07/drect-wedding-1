<?php
    include_once 'connection.php';
    $sql = 'SELECT * FROM comments';
    // mysql_select_db('test_db');
    $retval = mysql_query( $sql, $conn );

    if(! $retval ) {
      die('Could not get data: ' . mysql_error());
    }

    while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
        echo ("
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="card card-white post">
                        <div class="post-heading">
                            <div class="float-left image">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                            </div>
                            <div class="float-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Ryan Haywood</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">1 minute ago</h6>
                            </div>
                        </div>
                        <div class="post-description">
                            <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        ");
    }
 ?>
