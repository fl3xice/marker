<?php

use flexice\Marker\Marker;

require_once "../vendor/autoload.php";

$Marker = new Marker("demo");

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script>
    Swal.fire('<?php print $Marker->name; ?>')
</script>

</body>
</html>
