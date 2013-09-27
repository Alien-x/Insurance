<?php

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    /** @var Insurance\Tariff */
    private $tariff;

    protected function startup() {
        parent::startup();
        $this->tariff = $this->context->tariff;
    }

    /** render default */
    public function renderDefault()
    {
        $this->template->tariffs = $this->tariff->printAll();
    }

}
