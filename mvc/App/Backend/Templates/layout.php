<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            <?= isset($title) ? $title : 'Vinyl Collection' ?>
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="utf-8" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css" type="text/css" />
    </head>

    <body>
        <div class="container">
            <?php include __DIR__.'/../../Frontend/Templates/menu.php'; ?>
            <div class="row mt-5">
                <div class="col col-md-12 text-center">
                    <h3>Espace admin</h3>
                </div>
            </div>

            <!-- FLASH MESSAGE -->
            <div class="row">
                <div class="col col-md-12" id="alert_message">
                    <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
                </div>
            </div>

            <!-- MAIN CONTENT -->

            <?= $content ?>
                    
                

            <footer></footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            // ici pour tester, à deplacer dans web
            var declared;
            try
            {
                alert = $getElementById("alert_message");
                declared = true;
            }
            catch(e)
            {
                declared = false;
            }

            
            
             
            if (declared) 
            {
                setTimeout(function()
                {
                    $getElementById("alert_message").remove();
                }, 5000 ); // 5 secs
            };
            
            
        </script>
    </body>
</html>