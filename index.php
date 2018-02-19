<!DOCTYPE html>
<html>
  <head>
    <title>
      Mon super site !
    </title>
    
    <meta charset="utf-8" />
  </head>
  
  <body>
      <header>
        <h1><a href="/">Mon super site</a></h1>
        <p>Comment ça, il n'y a presque rien ?</p>
      </header>
      
      <nav>
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="/admin/">Admin</a></li>
        </ul>
      </nav>
      
      
      <section>
          <p>Article à venir ! </p>
      </section>

      <footer>
        <form method="post" action="confirmation_form.php">
          <label for="pseudo">Pseudo :</label>
          <input type="text" name="pseudo">
          <label for="message">Message :</label>
          <input type="text" name="message">
          <input type="submit" value="Envoyer !">
        </form>
      </footer>
  </body>
</html>