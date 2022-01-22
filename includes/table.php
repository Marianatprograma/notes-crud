
<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>id user</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id_user = $_SESSION['user_id'];
                    $query = "SELECT * FROM task WHERE id_user = $id_user";
                    $result_tasks = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_tasks)) { ?>

                        <tr>
                            <td><?= $row['title']?></td>
                            <td><?= $row['description']?></td>
                            <td><?= $row['created_at']?></td>
                            <td><?= $row['id_user']?></td>
                            <td>
                                <a href="edit.php?id=<?php $row['id']?>">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>