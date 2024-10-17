<h1>Base MVC</h1>
<p>Welcome to this base mvc project.</p>

<?php 
foreach($users as $user){
    include 'users/item.php';
} 

foreach($games as $game){
    include 'games/card.php';
}

foreach($publishers as $publisher){
    include 'publishers/item.php';
}