<?php

use function Laravel\Folio\{middleware};

middleware(['auth', 'verified']);
?>

<div>
    User ID {{$user->id}}
</div>
