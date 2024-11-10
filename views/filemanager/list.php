<h1>filemanager</h1>

<?php if ($isSubfolder): ?>
    <a href="/filemanager/<?= htmlspecialchars(dirname($folder)); ?>" class="go-back-button">Go Back</a>
<?php endif; ?>

<?php if (empty($list)): ?>
    <p>No files or folders found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($list as $item): 
            if ($item === '.' || $item === '..') continue;

            $itemPath = $folder ? $folder . '/' . $item : $item;

            if (is_dir(BASE_DIR . '/public/images/' . $itemPath)): ?>
                <li><a href="/filemanager/<?= htmlspecialchars($itemPath); ?>"><?= htmlspecialchars($item); ?></a></li>
            <?php else: ?>
                <li>
                <?= htmlspecialchars($item); ?> 
                <form action="/filemanager/delete" method="post" style="display:inline;">
                    <input type="hidden" name="filePath" value="<?= htmlspecialchars($itemPath); ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
            <?php endif;
        endforeach; ?>
    </ul>
<?php endif; ?>