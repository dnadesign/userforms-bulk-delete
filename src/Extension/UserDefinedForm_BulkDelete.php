<?php

namespace DNADesign\UserformsBulkDelete\Extension;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use DNADesign\BulkDelete\GridFieldBulkDeleteForm;

/**
* Add GridFieldBulkDeleteForm component
* to UserDefinedForm submission gridfield
* to allow deleting records in bulk, with a time parameter
*/
class UserDefinedForm_BulkDelete extends Extension
{
    public function updateCMSFields(FieldList $fields)
    {
        $submissions = $fields->fieldByName('Root.Submissions.Submissions');
        if ($submissions && $submissions instanceof GridField) {
            $config = $submissions->getConfig();
            $config->addComponent(new GridFieldBulkDeleteForm('buttons-after-right'));
        }
    }
}
