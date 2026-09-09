<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller
{
    use AuthorizesRequests;
}