<?php

$config = array(
  'webhook' => array(
    'type' => 'text',
    'label' => 'Webhook Url',
    'description' => "Url with the webhook to trigger", 
    'minlength' => 1,
    'required' => true,
    'notes' => 'Make sure to input your url in a proper format like "http://mywebhooksomewhere.com"'
  ),

  'timeInterval' => array(
    'type' => 'text',
    'label' => 'How often do you want to trigger the Webhook?',
    'description' => "LazyCron time interval", 
    'required' => true,
    'notes' => 'Example values "everyMinute", "every2Hours", etc. Falls back to "everyDay" if omitted. Reference of usable values: https://processwire.com/docs/more/lazy-cron/'
  ),

  'trigger' => array(
    'type' => 'checkbox',
    'label' => 'Trigger active',
    'notes' => 'If checked, the webhook will be triggerd on the next run. This value get checked automatically as soon as a pages is saved.'
  )
);