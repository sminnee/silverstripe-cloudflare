<?php

use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FormAction;

class CloudFlareSingleUrlForm extends Form {
    public function __construct($controller, $name)
    {
        $fields = FieldList::create(
            TextField::create("url_to_purge", "")->setAttribute("placeholder", '/path/to/file.js [, /path/to/file.css, /path/to/url]')
        );

        $actions = FieldList::create(
            FormAction::create('handlePurgeUrl', 
                _t(
                    'CloudFlare.SingleUrlPurgeButton',
                    'Purge'
                )
            )
        );

        parent::__construct($controller, $name, $fields, $actions);
    }
}