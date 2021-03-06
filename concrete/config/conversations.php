<?php

/**
 * -----------------------------------------------------------------------------
 * Generated 2014-12-18T19:51:35+00:00
 *
 * @item      files.allowed_types
 * @group     conversations
 * @namespace null
 * -----------------------------------------------------------------------------
 */
return array(
    'attachments_enabled' => true,
    'files' => array(
        'allowed_types' => '*.jpg;*.gif;*.jpeg;*.png;*.doc;*.docx;*.zip',
        'guest' => array(
            'max_size' => 1,
            'max' => 3
        ),
        'registered' => array(
            'max_size' => 10,
            'max' => 5
        )
    )
);
