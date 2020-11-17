<?php

namespace Drupal\my_migrate_module\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Perform custom value transformations.
 *
 * @MigrateProcessPlugin(
 *   id = "date_range"
 * )
 *
 * Assign values:
 *
 * @code
 * field_text:
 *   plugin: date_range
 *   source: text
 * @endcode
 *
 */
class DateRange extends ProcessPluginBase {
  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    if (!empty($value)) {
      return [
        'value' => $value['value'],
        'end_value' => $value['value2'],
      ];
    }
  }
}
