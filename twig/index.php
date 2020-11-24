// index.php
// ... code that sets up Twig, and says to look for templates in template/

echo $twig->render('homepage.twig', array(
    'pageTitle' => 'Welcome to Penguins R Us!',
    'products' => array(
        'Tuxedo',
        'Bow tie',
        'Black Boxers',
    ),
));