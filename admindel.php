<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
PAGE ADMIN
<form id="form" action="del_database.php" method="POST">
        NOM DU PRODUIT <BR />A SUPPRIMER: <input type="text" name="name" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>