<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 29.01.17
 * Time: 9:50
 */

interface IObservable
{
    function addObserver( $observer );
}
// this comment from master1
// my comment two from master 1
class UserList implements IObservable
{
    private $_observers = array();

    public function addCustomer( $name )
    {
        foreach( $this->_observers as $obs )
            $obs->onChanged( $this, $name );
    }

    public function addObserver( $observer )
    {
        $this->_observers []= $observer;
    }
}