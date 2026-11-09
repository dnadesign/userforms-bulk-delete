# UserForms Bulk Delete

Adds a bulk deletion button to the submissions grid for Silverstripe UserForms. The button uses `GridFieldBulkDeleteForm` to delete some or all submissions, with an optional date filter.

## Requirements

- [silverstripe/framework](https://github.com/silverstripe/silverstripe-framework): `^6`
- [silverstripe/userforms](https://github.com/silverstripe/silverstripe-userforms): `^7`
- [dnadesign/gridfield-bulk-delete](https://github.com/dnadesign/gridfield-bulk-delete): `^2`

## Installation

Install with Composer:

```sh
composer require dnadesign/userforms-bulk-delete
```

Rebuild the database and flush the configuration cache:

```sh
vendor/bin/sake db:build --flush
```

The extension is applied automatically to `UserDefinedForm` through the module configuration. Open a UserForm in the CMS and select the Submissions tab to use the bulk deletion controls.

## Uploaded files

UserForms 7 automatically deletes uploaded files when their submission fields are deleted. This module relies on that built-in behavior; a separate file deletion extension is no longer needed.
