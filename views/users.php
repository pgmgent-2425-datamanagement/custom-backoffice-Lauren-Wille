<form action="/users/add">
    <input type="submit" value="Add user" class="btn btn-primary">
</form>

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

        <th style="
    width: 22rem;
">
            bio
        </th>

        <th></th>

    </tr>
    
    <?php foreach($users as $user){
            include 'users/user.php';
        }
    ?>
</table>