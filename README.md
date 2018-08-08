# Userforms Bulk Delete

## Introduction

This a colllection of 2 extensions:
- The first one deletes the files uploaded via EditableFileField when deleting a submission
- The second one relies on `GridFieldBulkDeleteForm` to add a button on the submission gridfield allowing to delete some or all submissions

## Requirements
* [silverstripe/framework](https://github.com/silverstripe/framework)
* [dnadesign/gridfield-bulk-delete](https://github.com/dnadesign/gridfield-bulk-delete)

## Install
Add the following to your composer.json file

```

    "require"          : {
		"dnadesign/userforms-bulk-delete": "0.1"
	}

```