   # Migrate date Drupal 7 to date range Drupal 8.

##### Usage:
Add the mapping

In this example we map a field called field_start_date:
```
  field_start_date:
      plugin: date_range
      source: field_start_date

```
Move the DateRange.php file into folder:

``` src/Plugin/migrate/process ```

On line 3 replace with your own values: 

```"my_migrate_module"```


> Make sure you have initialised your module, so Drupal is aware of the new plugin and the 
>new configuration.
Disabling/enabling your migrate module will do.

Run your migration and check the migrated values.

>> Drupal 7

| field_start_date_value | field_start_date_value2 |
| ----------------------- |  --------------------- |
| 2020-09-07T00:00:00     |  2020-09-07T00:00:00   |
| 2020-10-26T00:00:00	  |  2020-10-27T00:00:00   |

>> Drupal 8
 
| field_start_date_value |	field_start_date_end_value |
| ----------------------- | -------------------------- |
| 2020-09-07T00:00:00 | 	2020-09-07T00:00:00 |
| 2020-10-26T00:00:00	|    2020-10-27T00:00:00 |


***
* Extend the plugin to fit your needs, convert between dates or 
do additional processing.
***
