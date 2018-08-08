<?php
/**
* This extension deletes the actual files 
* uploaded via an EditableFileField
* when a submiitedform is deleted
*/
class SubmittedFileField_RemoveFileUponDeletion extends DataExtension {

	public function onBeforeDelete()
	{
		$file = $this->owner->UploadedFile();
		if ($file && $file->exists()) {
			$file->delete();
		}
	}
}