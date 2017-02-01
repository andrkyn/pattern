<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 29.01.17
 * Time: 9:45
 */
interface IObserver
{
    function onChanged( $sender, $args );
}
// comment from win_user
class UserListLogger implements IObserver
{
    public function onChanged( $sender, $args )
    {
        echo( "'$args' добавлен в список юзеров\n" );
    }
}
