<?php

//create_cat.php
include 'QAconnect.php';
include 'Q&Aheader.php';

echo '<h2>Create a topic</h2>';

    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] = 'POST')
    {
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";

        $result = mysqli_query($connection,$sql);

        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {



                echo '<form method="post" action="">
                    Subject: <input type="text" name="topic_subject" />
                    Category:';

                echo '<select name="topic_cat">';
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                }
                echo '</select>';

                echo 'Message: <textarea name="post_content" /></textarea>
                    <input type="submit" value="Create topic" />
                 </form>';
            }
        }
    }
    else
    {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysqli_query($connection,$query);

        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {

            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $topic_subject=('topic_subject');
            $topic_date=('topic_date');
            $topic_cat=('topic_cat');
            $topic_by=('topic_by');
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('$topic_subject','$topic_date','$topic_cat','$topic_by'
                               " . $_SESSION['user_id'] . "
                               )";

            $result = mysqli_query($connection,$sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysql_error();
                $sql = "ROLLBACK;";
                $result = mysqli_query($connection,$sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topic_id = mysqli_insert_id();
                $post_content=('post_content');
                $post_date=('post_date');
                $post_topic=('post_topic');
                $post_by=('post_by');

                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysqli_real_escape_string($_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysqli_query($connection,$sql);

                if(!$result)
                {

                    $sql = "COMMIT;";
                    $result = mysqli_query($connection,$sql);

                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
                }
            }
        }
        include
        ('QAfooter.php');

}



include 'QAfooter.php';