<header>
        <nav>
        <?php if(!isset($_SESSION["user"])): ?>
            <a href="/register">Register</a>
            <?php endif; ?>

            <?php if(!isset($_SESSION["user"])): ?>
            <a href="/login">Log In</a>
            <?php endif; ?>
            <a href="/books">Books</a>

            <a href="/create-books">Uztaisi gramatu</a>

            <a href="/borrowed-books">Borrowed Books</a>    

                <?php if(isset($_SESSION["username"])): ?>
            <a href="/logout">Log Out</a>
                <?php endif; ?>

                
            
    </nav>
</header>