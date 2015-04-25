<?php

namespace MAM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MAMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
