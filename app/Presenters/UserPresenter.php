<?php

namespace viniciusbrito\Presenters;


use viniciusbrito\Presenters\BasePresenter;

class UserPresenter extends BasePresenter {

public function fullName()
{
return $this->first . ' ' . $this->last;
}

public function accountAge()
{
return $this->created_at->diffForHumans();
}

}