<?php

/**
 * Presenter providing Accounts extract
 */
class AccountPresenter extends BasePresenter
{
    /** @var Insurance\Account */
    private $account;

    /** startup */
    protected function startup() {

        parent::startup();
        $this->account = $this->context->account;
    }

    /** render default */
    public function renderDefault()
    {
        $this->template->accounts = $this->account->printAll();
    }



}
