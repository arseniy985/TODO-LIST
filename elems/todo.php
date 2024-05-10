<div class="cont">
    <section class="todo-block">
        <h1>TODO list</h1>
        <form class="task-inputs" method="post" action="todo_actions/add_task.php">
            <div></div>
            <input name="task" class="task-input" type="text" placeholder="Enter here TODO task">
            <input class="task-submit" type="submit" >
            <div></div>
        </form>
        <?php
        global $mysql;
        require 'elems/connectsql.php';

        $login = $_COOKIE['login'];
        $pass = $_COOKIE['pass'];
        $user_id = $_COOKIE['user_id'];

        echo  '<ul>';
        $result = $mysql->query("SELECT task FROM tasks WHERE `user_id` = '$user_id'");
        while ($row = $result -> fetch_assoc()) {
            echo '<li><b>'.$row['task'].'</b></li>';
        }
        $mysql->close();
        ?>
    </section>
</div>
