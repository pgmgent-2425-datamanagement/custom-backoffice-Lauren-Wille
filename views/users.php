<table>
    <tr>

        <th>
            
        </th>

        <th>
            username
        </th>

        <th>
            email
        </th>

        <th>
            bio
        </th>

        <th></th>

    </tr>
    
    <?php foreach($users as $user){
            include 'users/user.php';
        }
    ?>
</table>