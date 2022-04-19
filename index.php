<?php 
    $text = "PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor";
    $bad_word = $_GET["word"];
    $stars = "***";


    //echo $text . " ";
    /* echo strlen($text) . " Length Char" . " ";
    echo ("bad word");
    echo $bad_word;
    echo " " . str_replace($bad_word,$stars,$text);
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome PHP</title>
</head>
<body>
    <header>
        <div class="row">
            <div class="col-12 text-center py-4">
                <h1>Welcome php</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="row">
            <div class="col-12 p-5 bg-dark text-white">
                <h2>Php</h2>
                <p>
                    <?php echo $text ?>
                </p>
                <p>
                    <h5>
                        Chars:
                        <?php echo strlen($text); ?>
                    </h5>
                </p>
            </div>

            <div class="col-12 bg-danger p-5">
                <h2>Bad words Php</h2>
                <p>
                    <?php  echo " " . str_replace($bad_word,$stars,$text); ?>
                </p>
                <p>
                    <h5>
                        Chars: 
                        <?php echo strlen(str_replace($bad_word,$stars,$text)); ?>
                    </h5>
                </p>
            </div>
        </div>
    </main>
</body>
</html>

