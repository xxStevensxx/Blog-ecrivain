<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Blog Ecrivain</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/v4n0syihqxt634prorn5c0ex993gzh0qja9cwwks7e88pav5/tinymce/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector: '#myTextarea' });</script>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand" href="#">Billet simple pour l'Alaska</a>
    <form>
      <div class="form-row">
        <div class="col">
          <input id="idForm" type="text" class="form-control" placeholder="Identifiant">
        </div>
        <div class="col">
          <input id="mdp" type="password" class="form-control" placeholder="mdp">
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
      </div>
    </form>
  </nav>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Bonjour tout le monde !</h1>
      <p class="lead">  Bienvenue ! Je suis Jean Forteroche, écrivain. Vous êtes actuellement sur mon Blog où je poste au fur et à mesure un nouveau chapitre de mon dernier roman intitulé "Billet simple pour l'Alaska". N'hésitez pas à y laisser des commentaires !</p>
    </div>
  </div>
  <form class="tinyMce" method="post">
    <textarea id="myTextarea"></textarea>
    <button type="button" class="btn btn-primary">Envoyer</button>
  </form>
</body>
</html>
