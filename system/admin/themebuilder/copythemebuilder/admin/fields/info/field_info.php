<?php

class OLIVEE_Options_info
{
    /**
     * Field Constructor.
     */
    public function __construct($field = array(), $value = '', $parent = null)
    {
        if (is_object($parent)) {
            parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
        }
        $this->field = $field;
        $this->value = $value;
    }

    /**
     * Field Render Function.
     */
    public function render($meta = false)
    {
        if (key_exists('desc', $this->field)) {
            echo '<p class="description" style="margin-left:-220px;">' . $this->field['desc'] . '</p>';
        }
    }
}
