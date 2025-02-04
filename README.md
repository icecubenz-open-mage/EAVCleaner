# EAV Cleaner Magerun Addon

Purpose of this project is to check for different flaws that can occur due to EAV and provide cleanup functions.

Use `--dry-run` to check result without modifying data.

Compatible with Magento 1 and OpenMage.

I have updated this to ensure it works with PHP 7/8, is installable via Composer and some other small changes. I changed the composer namespace to prevent confusion.

All credits to original authors https://github.com/magento-hackathon/EAVCleaner

### Installation

` composer require icecubenz/magerun-eav-cleaner:dev-master`

# Commands

* `eav:check:models` Check if the assigned sourcemodel, backendmodel and frontendmodel still exist and if they are allowed to be used.
* `eav:clean:product-attribute-set-values` Check for abandoned attribute values in eav tables. The attribute was removed from an attribute set the values still exist.
* `eav:clean:scope-values` Check for wrong scopes. Values in Scopes which shouldn't be present. For example values on Storeview level but attribute scope is global.
* `eav:clean:removed-store-view-values` Remove attribute values for storeviews that don't exist anymore.
* `eav:clean:entity-type-values` Remove attribute values with wrong entity_type_id. For example the table catalog_product_entity_int should only contain entries with entity_type_id == 10.
* `eav:clean:attributes-and-values-without-parent` Remove catalog_eav_attribute and attribute values which are missing parent entry in eav_attribute. This can happen after importing data with foreign key check switched off.
* `eav:config:restore-use-default-value` Check if config admin value and storeview value are the same, so "use default" doesn't work anymore. Delete the storeview values.
* `eav:attributes:restore-use-default-value` Check if product attribute admin value and storeview value are the same, so "use default" doesn't work anymore. Delete the storeview values.
* `eav:attributes:remove-unused` Remove attributes with no values set in products and attributes that are not present in any attribute sets.
* `eav:media:remove-unused` Remove unused product images.


### Contributors

- Benno Lippert
- Damian Luszczymak
- Joke Puts
- Peter Jaap Blaakmeer
- Ralf Siepker
