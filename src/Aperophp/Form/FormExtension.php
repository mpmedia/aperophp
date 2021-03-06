<?php

namespace Aperophp\Form;

use Symfony\Component\Form\AbstractExtension;
use Silex\Application;
use Aperophp\Form\Type;

class FormExtension extends AbstractExtension
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * {@inheritDoc}
     */
    protected function loadTypes()
    {
        return array(
            new Type\DrinkCommentType($this->app['session']),
            new Type\DrinkParticipationType($this->app['session'], $this->app['drink_participants']),
            new Type\DrinkType($this->app['cities'], $this->app['drinks']),
            new Type\EditMemberType(),
            new Type\SigninType(),
            new Type\SignupType(),
            new Type\ForgetMemberType(),
            new Type\ForgetParticipationType(),
        );
    }
}
