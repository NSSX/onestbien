<?php include "redirection.php"; admin_test(); ?>
<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
PAGE ADMIN
<form id="form" action="ajoutelem.php" method="POST">
        NOM DU PRODUIT: <input type="text" name="name" value=""/>
        <br />
        PRIX DU PRODUIT: <input type="text" name="price" value=""/>
        <br />
        LIEN DE L'IMAGE DU PRODUIT: <input type="text" name="link" value=""/>
        <br />
        DESCRIPTION DU PRODUIT: <input type="text" name="description" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>