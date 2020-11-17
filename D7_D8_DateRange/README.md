   # Migrate date fields with a Date start and End from Drupal 7 to Date Range Drupal 8.

****How to use:
Add a mapping to your Drupal 8 daterange field. 

Example: 
  field_start_date:
      plugin: date_range
      source: field_start_date

Copy the file DateRange.php into your:
src/Plugin/migrate/process

On line 3 replace with your values: "my_migrate_module".

Make sure you have initialised your module, so Drupal is aware of the new Plugin and the new configuration, 
disabling and enabling your migrate module will do.

Run your migration.